<?php
// +------------------------------------------------------------------------+
// | PHP Melody ( www.phpsugar.com )
// +------------------------------------------------------------------------+
// | PHP Melody IS NOT FREE SOFTWARE
// | If you have downloaded this software from a website other
// | than www.phpsugar.com or if you have otherwise received
// | this software from someone who is not a representative of
// | this site you are involved in an illegal activity.
// | ---
// | In such case, please contact us at: support@phpsugar.com.
// +------------------------------------------------------------------------+
// | Developed by: PHPSUGAR (www.phpsugar.com) / support@phpsugar.com
// | Copyright: (c) 2004-2013 PHPSUGAR. All rights reserved.
// +------------------------------------------------------------------------+

namespace phpmelody\sources\src_tudou;

function get_target_url($url)
{
	$case = 0;
	$item_id = false;
	
	if (strpos($url, 'playlist/p'))
	{
		if (preg_match('/l([0-9]+)i([0-9]+).html/', $url, $matches) != 0)
		{
			$item_id = $matches[2];
			$case = 2;
		}
		else
		{
			$case = 3;
		}
	}
	else 
	{
		$case = 1;
	}
	
	switch ($case)
	{
		default:
		case 0:
		case 1:
			return $url;
		break;
		
		case 2:
		case 3:
			
			if(function_exists('curl_init'))
			{
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0');
				$data = curl_exec($ch);
				$errormsg = curl_error($ch);
				curl_close($ch);
				
				if($errormsg != '')
				{
					echo '<div class="alert alert-error">'.$errormsg.'</div>';
					return false;
				}
			}
			else if(ini_get('allow_url_fopen') == 1)
			{
				$data = @file($url);
				if($data === false)
					$error = 1;
			}
			
			if( ! is_array($data))
			{
				$data = explode("\n", $data);
			}
			
			$len = count($data);
			for ($i = 0; $i < $len; $i++)
			{
				if ($case == 2)
				{
					if (strpos($data[$i], 'iid:'. $item_id) !== false)
					{
						for ($j = $i + 1; $j < $len; $j++)
						{
							if (preg_match('/icode:"(.*?)"/', $data[$j], $matches) != 0)
							{
								$video_id = $matches[1];
								break;
							}
						}
						break;
					}
				}
				else
				{
					if (preg_match('/icode:"(.*?)"/', $data[$i], $matches) != 0)
					{
						$video_id = $matches[1];
						break;
					}
				}
			}
	
			if ($video_id)
			{
				return 'http://www.tudou.com/programs/view/'. $video_id .'/';
			}
			
		break;
	}
	
	return $url;
}

function get_info($url)
{
	$video_data = array();
	$error = 0;
	
	$target_url = $url;

	if(function_exists('curl_init'))
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $target_url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0');
		$video_data = curl_exec($ch);
		$errormsg = curl_error($ch);
		curl_close($ch);
		
		if($errormsg != '')
		{
			echo '<div class="alert alert-error">'.$errormsg.'</div>';
			return false;
		}
	}
	else if(ini_get('allow_url_fopen') == 1)
	{
		$video_data = @file($target_url);
		if($video_data === false)
			$error = 1;
	}
	
	if( ! is_array($video_data))
	{
		$video_data = explode("\n", $video_data);
	}
	
	return $video_data;
}

function get_flv($video_data)
{
	return;
}

function get_thumb_link($video_data)
{
	return;
}

function video_details($video_data, $url, &$info)
{
	$id = $title = $thumb = $description = false;
	
	$len = count($video_data);
	for ($i = 0; $i < $len; $i++)
	{
		if ( ! $title)
		{
			if (preg_match('/title = "(.*?)"/', $video_data[$i], $matches) != 0)
			{
				$info['video_title'] = $matches[1];
				$title = true;
			}
		}
		
		if ( ! $thumb)
		{
			if (preg_match('/thumbnail = pic = \'(.*?)\'/', $video_data[$i], $matches) != 0)
			{
				$info['yt_thumb'] = $matches[1];
				$thumb = true;
			}
		}
		
		if ( ! $description)
		{
			if (preg_match('/,desc = "(.*?)"/', $video_data[$i], $matches) != 0)
			{
				$info['description'] = $matches[1];
				$description = true;
			}
		}
		
		if ($title && $thumb && $description)
		{
			break;
		}
	}
	
	$info['direct'] = $url;
	
	$pieces = explode('/', $url);
	$info['yt_id'] = $pieces[count($pieces) - 2];

	if ($info['url_flv'] == '')
	{
		$info['url_flv'] = $info['direct'];
	}
}

function download_thumb($thumbnail_link, $upload_path, $video_uniq_id, $overwrite_existing_file = false) {
	
	if (strpos($thumbnail_link, '//') === 0)
	{
		$thumbnail_link = 'http:'. $thumbnail_link;
	}
	
	if (strpos($thumbnail_link, 'http') !== 0)
	{
		$thumbnail_link = 'http://'. $thumbnail_link;
	}
	
	$last_ch = substr($upload_path, strlen($upload_path)-1, strlen($upload_path));
	if($last_ch != "/")
		$upload_path .= "/"; 

	$ext = ".jpg";
	
	$thumb_name = $video_uniq_id . "-1" . $ext;
	
	if(is_file( $upload_path . $thumb_name ) && ! $overwrite_existing_file) {
		return FALSE;
	}
	
	$error = 0;

	if ( function_exists('curl_init') ) 
	{

		$ch = curl_init();
		$timeout = 0;
		curl_setopt ($ch, CURLOPT_URL, $thumbnail_link);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		
		// Getting binary data
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		
		$image = curl_exec($ch);
		curl_close($ch);
		
		//	create & save image;
		$img_res = @imagecreatefromstring($image);
		if($img_res === false)
			return FALSE;
		
		$img_width = imagesx($img_res);
		$img_height = imagesy($img_res);
		
		$resource = @imagecreatetruecolor($img_width, $img_height);
		
		if( function_exists('imageantialias'))
		{
			@imageantialias($resource, true); 
		}
		
		@imagecopyresampled($resource, $img_res, 0, 0, 0, 0, $img_width, $img_height, $img_width, $img_height);
		@imagedestroy($img_res);
	
		switch($ext)
		{
			case ".gif":
				//GIF
				@imagegif($resource, $upload_path . $thumb_name);
			break;
			case ".jpg":
				//JPG
				@imagejpeg($resource, $upload_path . $thumb_name);
			break;  
			case ".png":
				//PNG
				@imagepng($resource, $upload_path . $thumb_name);
			break;
		}
	}
	else if( ini_get('allow_url_fopen') == 1 )
	{
		// try copying it... if it fails, go to backup method.
		if(!copy($thumbnail_link, $upload_path . $thumb_name ))
		{
			//	create a new image
			list($img_width, $img_height, $img_type, $img_attr) = @getimagesize($thumbnail_link);

			$image = '';

			switch($img_type)
			{
				case 1:
					//GIF
					$image = imagecreatefromgif($thumbnail_link);
					$ext = ".gif";
				break;
				case 2:
					//JPG
					$image = imagecreatefromjpeg($thumbnail_link);
					$ext = ".jpg";
				break;  
				case 3:
					//PNG
					$image = imagecreatefrompng($thumbnail_link);
					$ext = ".png";
				break;
			}
			
			$resource = @imagecreatetruecolor($img_width, $img_height);
			if( function_exists('imageantialias'))
			{
				@imageantialias($resource, true); 
			}
			
			@imagecopyresampled($resource, $image, 0, 0, 0, 0, $img_width, $img_height, $img_width, $img_height);
			@imagedestroy($image);
		}
		
		$thumb_name = $video_uniq_id . "-1" . $ext;
		
		$img_type = 2;
		switch($img_type)
		{
			default:
			case 1:
				//GIF
				@imagegif($resource, $upload_path . $thumb_name);
			break;
			case 2:
				//JPG
				@imagejpeg($resource, $upload_path . $thumb_name);
			break;  
			case 3:
				//PNG
				@imagepng($resource, $upload_path . $thumb_name);
			break;
		}
		
		if($resource === '')
			$error = 1;
	} 

	return $upload_path . $thumb_name;
}


function do_main(&$video_details, $url, $show_warnings = true)
{
	$url = get_target_url($url);
	$video_data = @get_info($url);
	if($video_data != false)
	{
		video_details($video_data, $url, $video_details);
	}
	else
	{
		$video_details = array();
	}
}
?>