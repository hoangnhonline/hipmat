<?php
// +------------------------------------------------------------------------+
// | PHP Melody
// +------------------------------------------------------------------------+
// | PHP Melody IS NOT FREE SOFTWARE
// | If you have downloaded this software from a website other
// | than www.phpsugar.com or if you have otherwise received
// | this software from someone who is not a representative of
// | this site you are involved in an illegal activity.
// | ---
// | In such case, please contact us at: support@phpsugar.com.
// +------------------------------------------------------------------------+
// | Developed by: phpSugar (www.phpsugar.com) / support@phpsugar.com
// | Copyright: (c) 2004-2016 PhpSugar.com. All rights reserved.
// +------------------------------------------------------------------------+

@set_time_limit(300);

$sql_limit = 100;	//	sql limit per iteration

$manual_jobs = array(); // things that the user has to do by hand

// Handle AJAX requests - START 
if ($_GET['do'] == 'update')
{
	session_start();
	require_once('../config.php');
	include_once(ABSPATH .'include/functions.php');
	include_once(ABSPATH .'include/user_functions.php');
	include_once(ABSPATH . _ADMIN_FOLDER .'/functions.php');
	include_once(ABSPATH .'include/islogged.php');
	
	$ajax_state = 'init';
	
	if ( ! $logged_in || ! is_admin())
	{
		$ajax_msg = ($logged_in) ? '<strong>Access denied!</strong> You need Adminstrator privileges to perform this operation.' : 'Please log in.';
		exit(json_encode(array('state' => 'error',
							   'message' => pm_alert_error($ajax_msg, false, true)
							  )));
	}
	
	$error_count = 0;
	$error_count = 0;
	$sql_start = (int) $_GET['start'];
	$items_processed = (int) $_GET['c'];
	$total_items = 1;
	
//	if ((int) $_GET['totalitems'] == 0)
//	{
//		$total_items = count_entries('pm_users', '', '');
//	}
//	else
//	{
//		$total_items = (int) $_GET['totalitems'];
//	}

//	$sql_start = (int) $_GET['start'];
//	$sql_start = ($sql_start < 0) ? 0 : $sql_start;

//	if ($config['maintenance_mode'] == 0)
//	{
//		update_config('maintenance_mode', 1, true);
//	}
	
//	if ($items_processed == 0)
//	{
//		$sql = array();
//		$errors = array();
//		
//		$sql[] = '';
//			
//		$sql_count = count($sql);
//	
//		for ($i = 0; $i < $sql_count; $i++)
//		{
//			$result =  mysql_query($sql[ $i ]);
//			if ( ! $result)
//			{
//				if ( ! preg_match("/Duplicate column name/i", mysql_error()) )
//				{
//					log_error('Query #'. $i .': '. mysql_error(), 'DB Updater');
//				}
//			}
//		}
//		unset($sql);
//	}
	
	$items_processed = $total_items;
	$ajax_state = 'finished';
	
//	$ajax_state = 'processing';
//	
//	if ($items_processed >= $total_items)
//	{
//		$ajax_state = 'finished';
//	}
//	
//	if ($items_processed < $total_items)
//	{
//	}
	
	switch ($ajax_state)
	{
		default:
		case 'init':
		case 'processing':
			
			$ajax_response = array('state' => $ajax_state,
								   'start' => $sql_start + $sql_limit,
								   'progress' => round(($items_processed * 100) / $total_items, 2),
								   'c' => $items_processed,
								   'totalitems' => $total_items,
								   'message' => ''
								  );

		break;
		
		case 'finished':
			
			__pm_internal_log('Updated successfully from version '. $config['version'] .' to 2.6.1');
	
			update_config('version', '2.6.1', true);
			
			// create directory for covers if one doesn't already exist
			if ( ! file_exists(ABSPATH . _UPFOLDER .'/covers'))
			{
				if (mkdir(ABSPATH . _UPFOLDER .'/covers', 0777))
				{
					@copy(_VIDEOS_DIR_PATH . 'index.html', ABSPATH . _UPFOLDER .'/covers/index.html');
				}
				else
				{
					// failed to mkdir so tell the user to manually create this directory
					$manual_jobs['covers_directory'] = true;
				}
			}
			
			// put site out of maintenance mode
			if ($config['maintenance_mode'] == '1')
			{
				update_config('maintenance_mode', 0, true);
			}
			
			// Clear SMARTY cache
			$dir = @opendir($smarty->compile_dir);
			if ($dir)
			{
				while (false !== ($file = readdir($dir)))
				{
					if(strlen($file) > 2)
					{
						$tmp_parts = explode('.', $file);
						$ext = array_pop($tmp_parts);
						$ext = strtolower($ext);
						if ($ext == 'php' && strpos($file, '%') !== false)
						{
							@unlink($smarty->compile_dir .'/'. $file);
						}
					}
				}
				@closedir($dir);
			}
			
			//	empty cache directory
			$dir = @opendir($smarty->cache_dir);
			if ($dir)
			{
				while (false !== ($file = readdir($dir)))
				{
					if(strlen($file) > 2)
					{
						$tmp_parts = explode('.', $file);
						$ext = array_pop($tmp_parts);
						$ext = strtolower($ext);
						if ($ext == 'php' && strpos($file, '%') !== false)
						{
							@unlink($smarty->cache_dir .'/'. $file);
						}
					}
				}
				@closedir($dir);
			}
			
			$ajax_msg = pm_alert_success('Your database was successfully updated to version 2.6.1.');
			$ajax_msg .= pm_alert_warning('<strong>Important:</strong> Delete <code>/'. _ADMIN_FOLDER .'/db_update.php</code> right now. Click here to continue to your <a href="index.php">Dashboard</a>.');
			
			if (count($manual_jobs) > 0)
			{
				if ($manual_jobs['covers_directory'] === true)
				{
					$ajax_msg .= pm_alert_warning('PHP Melody is unable to create the folder required for the "Channels" feature. Please create a new folder named "<strong>covers</strong>" in your existing <code>/uploads/</code> folder.'); 
				}
			}
			
			$ajax_response = array('state' => $ajax_state,
								   'start' => $total_items,
								   'limit' => $items_per_file,
								   'progress' => 100,
								   'c' => $items_processed,
								   'totalitems' => $total_items,
								   'message' => $ajax_msg
								  );
								  
		break;
		
		case 'error':
			
			$ajax_response = array('state' => $ajax_state,
							 	   'start' => $sql_start,
								   'limit' => $items_per_file,
								   'progress' => round(($items_processed * 100) / $total_items, 2),
								   'c' => $items_processed,
								   'totalitems' => $total_items,
								   'message' => pm_alert_error($ajax_msg, false, true)
								  );
		break;
	} // end switch();

	echo json_encode($ajax_response);
	
	exit();
}
// Handle AJAX requests - END


$showm = '1';
$hide_update_notification = 1;
$load_jquery_ui = 1;
include('header.php');

$estimated_time = $resume_update = false;
$total_users = 0;

?>

<script type="text/javascript">
	
	function run_update(start, params, html_output_sel)
	{
		$('.importLoader').css({'display' : 'inline'})
		
		$.ajax({
			url: '<?php echo _URL ."/". _ADMIN_FOLDER ."/"; ?>db_update.php',
			data: 'do=update&start='+ start +  
				  '&progress=' + params.progress +
				  '&c=' + params.c + 
				  '&resume=' + params.resume +
				  '&totalitems='+ params.totalitems,
			success: function(data){
						
						$('.bar').css({'width': data['progress'] + "%"});
						$('.bar').html(data['progress'] + "%");
						
						switch (data['state'])
						{
							case 'processing':
								$("#progressbar").show();
								//$("#progressbar").progressbar({value: data['progress']});
								params.progress = data['progress'];
								params.c = data['c'];
								params.totalitems = data['totalitems'];
								params.resume = 0;

								run_update(data['start'], params, html_output_sel);
								
							break;
							
							case 'finished':
							case 'error':
								if (data['state'] == 'finished') {
									$("#progressbar").hide();
									$('#ajax-response').html(data['message']);
									$('#more_v_details').hide();
									$('#update-btn').hide();
								} else {
									//$( "#progressbar" ).progressbar({value: data['progress'] });
									$('#ajax-response').html(data['message']);
									$('#update-btn').attr('disabled', false);
								}
								
								$('.importLoader').hide();
							break;
						}
					},
			dataType: 'json'
		});
	}

	$(document).ready(function(){
		$('#update-btn').click(function(){
			var params = new Array();
			
			$(this).attr('disabled', true);
			
			params['progress'] = 0;
			params['c'] = 0;
			params['totalitems'] = '<?php echo $total_users; ?>';
			
			<?php if ($resume_update) : ?>
			params['resume'] = 1;
			$('#progressbar').addClass('active');
			<?php else : ?>
			params['resume'] = 0;
			<?php endif; ?>
			
			run_update(0, params, '#ajax-response');
			return false;
		});
	});
</script>

<div id="adminPrimary">
	<div class="content">
		 <h2>Update from version 2.6 to 2.6.1</h2>
		 <div class="row-fluid">
			<form name="update-database" method="POST" action="db_update.php">


				<?php if ($config['version'] != '2.6' && $config['version'] != '2.6.1' && $_GET['force-update'] != 'yes') : ?>

					<div class="alert alert-help">
						<h4>Warning! Wrong update.</h4>
						<p>This update package can only be applied to installations running <strong>PHP Melody v2.6</strong>. Your site currently uses <strong>PHP Melody v<?php echo $config['version']; ?></strong></p>
						<p>To apply the correct update, log into <a href="http://www.phpsugar.com/customer/" target="_blank">your customer account</a> and download the update package released after v<?php echo $config['version']; ?>.
					</div>

				<?php elseif ($config['version'] == '2.6.1' && $_GET['force-update'] != 'yes') : ?>
				
					<div class="alert alert-success">
						Your MySQL database appears to be up to date. 
						<br /> <br /> 
						Delete <code>/<?php echo _ADMIN_FOLDER; ?>/db_update.php</code> from your server now.
					</div>
				
				<?php else: ?>

					<div class="well">
						<p>
							<?php if ($resume_update) : ?>
								Press the '<strong>Resume</strong>' button below to continue updating to version 2.6.1.
							<?php else : ?>
								Press '<strong>Update</strong>' to finish the update process. 
							<?php endif; ?>
							<br />
							<?php if ($estimated_time !== false) : ?>
							Estimated time to complete: <strong><?php echo time_since(time() - $estimated_time, true); ?></strong>.
							<?php else : ?>
							This automated process should only take a few minutes to complete.
							<?php endif; ?>
						</p>
					</div>
					
					<div style="" id="progressbar"  class="progress progress-striped progress-db-update <?php echo ($resume_update) ? '' : 'active';?>">
						<?php if ($resume_update) : ?>
						<div class="bar" style="width: <?php echo $progress_made; ?>%;"><?php echo $progress_made; ?>%</div>
						<?php else : ?>
						<div class="bar" style="width: 0%;"></div>
						<?php endif; ?>
					</div>
					
					<div id="ajax-response"></div>
					
					<button type="submit" name="Update" value="Update" id="update-btn" class="btn btn-blue btn-strong"><?php echo ($resume_update) ? 'Resume' : 'Update'; ?></button> <em class="importLoader"><small>Please wait...</small></em>
				
				<?php endif;?>
			</form>
		 </div><!-- .row-fluid -->
    </div><!-- .content -->
</div><!-- .primary -->
<?php
include('footer.php');
