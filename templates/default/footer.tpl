<a id="back-top" class="hidden-phone hidden-tablet" title="{$lang.top}">
    <i class="icon-chevron-up"></i>
    <span></span>
</a>
<div class="floating_ad_left sticky_ads">
{$ad_6}
</div>

<div class="floating_ad_right sticky_ads">
{$ad_7}
</div>
</div><!-- end wrapper -->



{if $ad_2 != ''}
<div class="pm-ad-zone" align="center">{$ad_2}</div>
{/if}

<!-- Start New Footer -->
<div class="con-fluid" id="footerTaskBar" style="background-color: #101010;">
        <div class="dvFootMenu">
            <div class="firtfoot">
                <div class="col-sm-12 colfoot12">
                    <ul class="nav nav-pills center-block">
                        <li><a href="/contact_us.html">Báo cáo vi phạm</a></li>
                        <li><a href="pages/gioi-thieu.html">điều khoản sử dụng</a></li>
                        <li><a href="#">tuyển dụng</a></li>
                        <li><a href="/contact_us.html">liên hệ quảng cáo</a></li>
                    </ul>
                </div>
<script type="text/javascript">
{literal}
    function bookmark_it(a) {
	pageTitle=document.title;
	pageURL=document.location;
	try {
		// Internet Explorer solution
		eval("window.external.AddFa-vorite(pageURL, pageTitle)".replace(/-/g,''));
	}
	catch (e) {
		try {
			// Mozilla Firefox solution
			window.sidebar.addPanel(pageTitle, pageURL, "");
		}
		catch (e) {
			// Opera solution
			if (typeof(opera)=="object") {
				a.rel="sidebar";
				a.title=pageTitle;
				a.url=pageURL;
				return true;
			} else {
				// The rest browsers (i.e Chrome, Safari)
				alert('Gõ ' + (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Cmd' : 'Ctrl') + '+D để đặt làm trang chủ.');
			}
		}
	}
	return false;
}
    {/literal}
</script>          
    <div class="socialinfo">
   {if $tpl_name == "video-category"}
    <a href="{$smarty.const._URL}/rss.php?c={$cat_id}" title="{$meta_title} RSS" class="pm-rss-link"><i class="fa fa-rss fa-2x"></i> RSS</a>
    {elseif $tpl_name == "video-new"}
    <a href="{$smarty.const._URL}/rss.php" title="{$meta_title} RSS" class="pm-rss-link"><i class="fa fa-rss fa-2x"></i> RSS</a>
    {elseif $tpl_name == "video-top"}
    <a href="{$smarty.const._URL}/rss.php?feed=topvideos" title="{$meta_title} RSS" class="pm-rss-link"><i class="fa fa-rss fa-2x"></i> RSS</a>
    {elseif $tpl_name == "article-category" || $tpl_name == "article-read"}
    <a href="{$smarty.const._URL}/rss.php?c={$cat_id}&feed=articles" title="{$meta_title} RSS" class="pm-rss-link"><i class="fa fa-rss fa-2x"></i> RSS</a>
    {else}
    <a href="{$smarty.const._URL}/rss.php" title="{$meta_title} RSS" class="pm-rss-link"><i class="fa fa-rss fa-2x"></i> RSS</a>
    {/if}
     <a href="https://www.facebook.com/hipmatchannel/"><i class="fa fa-facebook fa-2x"></i> Facebook</a>
     <a href="https://www.youtube.com/user/vuina/videos"><i class="fa fa-youtube fa-2x"></i> Youtube</a>
     <a  href="javascript:void(0)" onClick="return bookmark_it(this);"><i class="fa fa-home fa-2x"></i> Đặt làm trang chủ</a>
    </div>

            </div>
        </div>
    </div>
    <div class="con-fluid nicefoot" id="footerMenu" style="padding-top: 20px;">
        <div class="dvSitemap"> 
            <div class="bigrow" id="dvSubMap">
                
                <div class="col-xs-6 col-sm-6 leftfoot">
                <div class="footlogo"><img src="http://www.hipmat.com/uploads/custom-logo.png">
                <div class="footlogotext">Tổng hợp những video vui nhộn, clip hài hước thư giãn, xả stress cập nhật liên tục và mới 

nhất.</div>
                </div>
                    <div class="footrow">
                        <div class="col-xs-12 col-sm-12 infocol">
                            <ul class="dvMenuFooter">
                                <li class="title"><a href="#">Kết nối</a></li>
                                <li><a href="https://www.facebook.com/hipmatchannel/">Facebook</a></li>
                                <li><a href="https://www.youtube.com/channel/UCF4QPJYSF5_frOLiL4EtM4w">Youtube</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Google +</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 infocol">
                            <ul class="dvMenuFooter">
                                <li class="title"><a href="http://www.hipmat.com/pages/gioi-thieu.html">Giới thiệu</a></li>
                                <li><a href="http://www.hipmat.com/pages/hip.html">Mobile version</a></li>
                                <li><a href="http://www.hipmat.com/pages/gioi-thieu.html">Điều khoản</a></li>
                                <li><a href="#">Kiếm tiền $$</a></li>
                                <li><a href="#">Tuyển dụng</a></li>
                               
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 infocol">
                            <ul class="dvMenuFooter">
                                <li class="title"><a href="/topvideos.html">Hài chất</a></li>
                                <li><a href="http://www.hipmat.com/browse-nhac-che-nhac-vui-nhon-videos-1-date.html">Nhạc chế 

vui</a></li>
                                <li><a href="http://www.hipmat.com/browse-hai-kich-viet-nam-videos-1-date.html">Hài kịch hay</a></li>
                                <li><a href="http://www.hipmat.com/search.php?keywords=larva">Hoạt hình Larva</a></li>

                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 infocol">
                            <ul class="dvMenuFooter">
                                <li class="title"><a href="/register.html">Đăng ký</a></li>
                                <li><a href="/login.html">Đăng nhập</a></li>
                                <li><a href="/topvideos.html">Bảng xếp hạng</a></li>
                                <li><a href="/newvideos.html">Video mới nhất</a></li>
                               <li><a href="/topvideos.html?do=recent">Bảng xếp hạng tuần</a></li>
                            </ul>
                        </div>
                        <div style="clear:both"></div>
                    </div>

                    <div class="morefoot">COPYRIGHT © 2014 HipMat.ĐANG HOẠT ĐỘNG THỬ NGHIỆM VÀ ĐỢI GIẤY PHÉP MẠNG XH 

CỦA BỘ TT&TT
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END new footer -->    

<div id="lights-overlay"></div>

{literal}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.cookee.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.validate.min.js" type="text/javascript"></script>
{/literal}
{if $p == "index"}
{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.carouFredSel.min.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.touchwipe.min.js" type="text/javascript"></script>
{/literal}
{/if}
{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.uniform.min.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/jquery.ba-dotimeout.min.js" type="text/javascript"></script>
{/literal}{if $tpl_name == "upload"}{literal}
<script src="{/literal}{$smarty.const._URL}{literal}/js/swfupload.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}{literal}/js/swfupload.queue.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}{literal}/js/jquery.swfupload.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}{literal}/js/upload.js" type="text/javascript"></script>
{/literal}{/if}
{if $smarty.const._SEARCHSUGGEST == 1}{literal}
<script src="{/literal}{$smarty.const._URL}{literal}/js/jquery.typewatch.js" type="text/javascript"></script>
{/literal}{/if}{literal}
<script src="{/literal}{$smarty.const._URL}{literal}/js/melody.dev.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/melody.dev.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/lightbox.min.js" type="text/javascript"></script>
{/literal}

{if $smarty.const._SEARCHSUGGEST == 1}
{literal}
<script type="text/javascript">
$(document).ready(function () {
		// live search 
		$('#appendedInputButton').typeWatch({
			callback: function() {
					var a = $('#appendedInputButton').val();
					
					$.ajax({
						type: "POST",
			            url: MELODYURL2 + "/ajax_search.php",
			            data: {
							"queryString": a
			            },
			            dataType: "html",
			            success: function(b){
							if (b.length > 0) {
			                    $("#suggestions").show();
			                } else {
								$("#suggestions").hide();
							}
							$("#autoSuggestionsList").html(b);		
						}
					});
				},
		    	wait: 400,
		    	highlight: true,
		    	captureLength: 3
		});
});
</script>
{/literal}
{/if}

{if $tpl_name == 'video-watch' || $tpl_name == 'article-read'}
{literal}
<script type="text/javascript">
$(document).ready(function(){
	$('#nav-link-comments-native').click(function(){
		$.cookie('pm_comment_view', 'native', { expires: 180, path: '/' });
	});
	$('#nav-link-comments-facebook').click(function(){
		$.cookie('pm_comment_view', 'facebook', { expires: 180, path: '/' });
	});
	$('#nav-link-comments-disqus').click(function(){
		$.cookie('pm_comment_view', 'disqus', { expires: 180, path: '/' });
	});
});
</script>
{/literal}
{/if} 

{if $p == "detail" && $playlist}
{literal}
<script type="text/javascript">
$(document).ready(function () {
	$('.pm-video-playlist').animate({
	    scrollTop: $('.pm-video-playlist-playing').offset().top - $('.pm-video-playlist').offset().top + $('.pm-video-playlist').scrollTop()
	});
});
</script>
{/literal}
{/if}
{if $p == "detail"}
{literal}
<script type="text/javascript">
$(document).ready(function () {
		var pm_elastic_player = $.cookie('pm_elastic_player');
		if (pm_elastic_player == null) {
			$.cookie('pm_elastic_player', 'normal');
		}
		else if (pm_elastic_player == 'wide') {
			$('#player_extend').find('i').addClass('icon-resize-small');
			$('#secondary').addClass('secondary-wide');
			$('#video-wrapper').addClass('video-wrapper-wide');
			$('.pm-video-head').addClass('pm-video-head-wide');
			$('.entry-title').addClass('ellipsis');
		} else {
			$('#secondary').removeClass('secondary-wide');
			$('#video-wrapper').removeClass('video-wrapper-wide');
			$('.pm-video-head-wide').removeClass('pm-video-head-wide');
			$('.entry-title').removeClass('ellipsis');
		}

	$("#player_extend").click(function() {	
		if ($(this).find('i').hasClass("icon-resize-full")) {
			$(this).find('i').removeClass("icon-resize-full").addClass("icon-resize-small");
		} else {
			$(this).find('i').removeClass("icon-resize-small").addClass("icon-resize-full");
		}
		$('#secondary').animate({
			}, 10, function() {
				$('#secondary').toggleClass("secondary-wide");
		});
		$('#video-wrapper').animate({
			}, 150, function() {
				$('#video-wrapper').toggleClass("video-wrapper-wide");
				$('.pm-video-head').toggleClass('pm-video-head-wide');
		});
		if ($.cookie('pm_elastic_player') == 'normal') {
			$.cookie('pm_elastic_player','wide');
			$('#player_extend').find('i').removeClass('icon-resize-full').addClass('icon-resize-small');
		} else {
			$.cookie('pm_elastic_player', 'normal');
			$('#player_extend').find('i').removeClass('icon-resize-small').addClass('icon-resize-full');
		}
	return false;
  });
});
</script>
{/literal}
{/if}
{if $p == "index"}
{literal}
<script type="text/javascript">
$(document).ready(function() {
	$("#pm-ul-wn-videos").carouFredSel({
		items				: 4,
		circular			: false,
		direction			: "left",
		height				: null,
		width       		: null,
		infinite			: false,
		responsive			: true,
		prev	: {	
			button	: "#pm-slide-prev",
			key		: "left"
		},
		next	: { 
			button	: "#pm-slide-next",
			key		: "right"
		},
	scroll		: {
		items			: null,		//	items.visible
		fx				: "scroll",
		easing			: "swing",
		duration		: 500,
		wipe			: true,
		event			: "click",
	},
	auto: false
				
	});	
});

$(document).ready(function() {
	$("#pm-ul-top-videos").carouFredSel({
	items: 5,
	direction: "up",
	width: "variable",
	height:  "variable",
	circular: false,
	infinite: false,
	scroll: {
		fx: "fade",
		event: "click",
		wipe: true,
		duration: 150
	},
	auto: false,
		prev	: {	
			button	: "#pm-slide-top-prev",
			key		: "left"
		},
		next	: { 
			button	: "#pm-slide-top-next",
			key		: "right"
		}
	});	
});
</script>
{/literal}
{/if}
{if ! $logged_in}
    {literal}
    <script type="text/javascript">
    
        $('#header-login-form').on('shown', function () {
            $('.hocusfocus').focus();
        });
    
    </script>
    {/literal}
{/if}
{if $smarty.const._MOD_SOCIAL == '1'}
{literal}
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/waypoints.min.js" type="text/javascript"></script>
<script src="{/literal}{$smarty.const._URL}/templates/{$template_dir}{literal}/js/melody.social.min.js" type="text/javascript"></script> 
{/literal}
{/if}

{if $display_preroll_ad == true}
{literal}
<script src="{/literal}{$smarty.const._URL}{literal}/js/jquery.timer.min.js" type="text/javascript"></script>
<script type="text/javascript">

function timer_pad(number, length) {
	var str = '' + number;
	while (str.length < length) {str = '0' + str;}
	return str;
}

var preroll_timer;
var preroll_player_called = false;
var skippable = {/literal}{if $preroll_ad_data.skip != 1}0{else}1{/if}{literal}; 
var skippable_timer_current = {/literal}{if $preroll_ad_data.skip_delay_seconds}{$preroll_ad_data.skip_delay_seconds}{else}0{/if}{literal} * 1000;
var preroll_disable_stats = {/literal}{if $preroll_ad_data.disable_stats == 1}1{else}0{/if}{literal};
	
$(document).ready(function(){
	if (skippable == 1) {
		$('#preroll_skip_btn').hide();
	}
	
	var preroll_timer_current = {/literal}{$preroll_ad_data.duration}{literal} * 1000;
	
	preroll_timer = $.timer(function(){
	
		var seconds = parseInt(preroll_timer_current / 1000);
		var hours = parseInt(seconds / 3600);
		var minutes = parseInt((seconds / 60) % 60);
		var seconds = parseInt(seconds % 60);
		
		var output = "00";
		if (hours > 0) {
			output = timer_pad(hours, 2) +":"+ timer_pad(minutes, 2) +":"+ timer_pad(seconds, 2);
		} else if (minutes > 0) { 
			output = timer_pad(minutes, 2) +":"+ timer_pad(seconds, 2);
		} else {
			output = timer_pad(seconds, 1);
		}
		
		$('.preroll_timeleft').html(output);
		
		if (preroll_timer_current == 0 && preroll_player_called == false) {

			$.ajax({
		        type: "GET",
		        url: MELODYURL2 + "/ajax.php",
			dataType: "html",
		        data: {
					"p": "video",
					"do": "getplayer",
					"vid": "{/literal}{$preroll_ad_player_uniq_id}{literal}",
					"aid": "{/literal}{$preroll_ad_data.id}{literal}",
					"player": "{/literal}{$preroll_ad_player_page}{literal}",
					"playlist": "{/literal}{$playlist.list_uniq_id}{literal}"
		        },
		        success: function(data){
					$('#preroll_placeholder').replaceWith(data);
		        }
			});
			
			preroll_player_called = true;
			preroll_timer.stop();
		} else {
			preroll_timer_current -= 1000;
			if(preroll_timer_current < 0) {
				preroll_timer_current = 0;
			}
		}
	}, 1000, true);
	
	if (skippable == 1) {
		
		skippable_timer = $.timer(function(){
	
			var seconds = parseInt(skippable_timer_current / 1000);
			var hours = parseInt(seconds / 3600);
			var minutes = parseInt((seconds / 60) % 60);
			var seconds = parseInt(seconds % 60);
			
			var output = "00";
			if (hours > 0) {
				output = timer_pad(hours, 2) +":"+ timer_pad(minutes, 2) +":"+ timer_pad(seconds, 2);
			} else if (minutes > 0) { 
				output = timer_pad(minutes, 2) +":"+ timer_pad(seconds, 2);
			} else {
				output = timer_pad(seconds, 1);
			}
			
			$('.preroll_skip_timeleft').html(output);
			
			if (skippable_timer_current == 0 && preroll_player_called == false) {
				$('#preroll_skip_btn').show();
				$('.preroll_skip_countdown').hide();
				skippable_timer.stop();
			} else {
				skippable_timer_current -= 1000;
				if(skippable_timer_current < 0) {
					skippable_timer_current = 0;
				}
			}
		}, 1000, true);
		
		$('#preroll_skip_btn').click(function(){
			preroll_timer_current = 0;
			skippable_timer_current = 0;

			if (preroll_disable_stats == 0) {
				$.ajax({
			        type: "GET",
			        url: MELODYURL2 + "/ajax.php",
					dataType: "html",
			        data: {
						"p": "stats",
						"do": "skip",
						"aid": "{/literal}{$preroll_ad_data.id}{literal}",
						"at": "{/literal}{$smarty.const._AD_TYPE_PREROLL}{literal}",
			        },
			        dataType: "html",
			        success: function(data){}
				});
			}
			return false;
		});
	}
});
</script>
{/literal}
{/if}
{$smarty.const._HTMLCOUNTER}
</body>
</html>