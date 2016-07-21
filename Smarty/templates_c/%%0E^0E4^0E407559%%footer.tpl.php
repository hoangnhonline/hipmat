<?php /* Smarty version 2.6.20, created on 2016-07-18 11:06:09
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'footer.tpl', 26, false),array('modifier', 'date_format', 'footer.tpl', 89, false),)), $this); ?>
</div> <!--.mastcontent-wrap-->

<?php if ($this->_tpl_vars['ad_6'] != ''): ?>
	<div class="pm-ads-floating-left"><?php echo $this->_tpl_vars['ad_6']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['ad_7'] != ''): ?>
	<div class="pm-ads-floating-right"><?php echo $this->_tpl_vars['ad_7']; ?>
</div>
<?php endif; ?>


</div><!--#content-->
</div><!--.container-fluid no-padding-->


<div class="container-fluid container-footer">
	<?php if ($this->_tpl_vars['ad_2'] != ''): ?>
	<div class="pm-ads-banner" align="center"><?php echo $this->_tpl_vars['ad_2']; ?>
</div>
	<?php endif; ?>
	<footer>
		<div class="row row-footer-vertical">
			<div class="col-xs-4 col-sm-2 col-md-2">
				<h3><?php echo @_SITENAME; ?>
</h3>
				<ul class="list-unstyled">
					<li><a href="<?php echo @_URL; ?>
/index.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['homepage']; ?>
</a></li>
					<li><a href="<?php echo @_URL; ?>
/contact_us.<?php echo @_FEXT; ?>
"><?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['_contact'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Contact') : smarty_modifier_default($_tmp, 'Contact')); ?>
</a></li>
					<li><a href="<?php echo @_URL; ?>
/page.php?name=terms-toa"><?php echo $this->_tpl_vars['lang']['toa']; ?>
</a></li>
				</ul>
			</div>
			<div class="col-xs-4 col-sm-2 col-md-2">
			<?php if (@_MOD_ARTICLE == 1): ?>
				<h3><?php echo $this->_tpl_vars['lang']['articles']; ?>
</h3>
				<ul class="list-unstyled">
					<li><a href="<?php echo @_URL; ?>
/article.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['articles_latest']; ?>
</a></li>
					<li><a href="<?php echo @_URL; ?>
/article.<?php echo @_FEXT; ?>
?show=popular"><?php echo $this->_tpl_vars['lang']['articles_mostread']; ?>
</a></li>
					<li><a href="<?php echo @_URL; ?>
/rss.php?feed=articles" title="<?php echo $this->_tpl_vars['meta_title']; ?>
 RSS">RSS</a></li>
				</ul>
			<?php endif; ?>
			</div>
			<div class="col-xs-4 col-sm-2 col-md-2">
				<h3><?php echo $this->_tpl_vars['lang']['videos']; ?>
</h3>
				<ul class="list-unstyled">
					<li><a href="<?php echo @_URL; ?>
/newvideos.<?php echo @_FEXT; ?>
" class="wide-nav-link"><?php echo $this->_tpl_vars['lang']['new_videos']; ?>
</a></li>
					<li><a href="<?php echo @_URL; ?>
/topvideos.<?php echo @_FEXT; ?>
" class="wide-nav-link"><?php echo $this->_tpl_vars['lang']['top_videos']; ?>
</a></li>
					<?php if ($this->_tpl_vars['tpl_name'] == "video-category"): ?>
					<li><a href="<?php echo @_URL; ?>
/rss.php?c=<?php echo $this->_tpl_vars['cat_id']; ?>
" title="<?php echo $this->_tpl_vars['meta_title']; ?>
 RSS" rel="nofollow">RSS</a></li>
					<?php elseif ($this->_tpl_vars['tpl_name'] == "video-new"): ?>
					<li><a href="<?php echo @_URL; ?>
/rss.php" title="<?php echo $this->_tpl_vars['meta_title']; ?>
 RSS" rel="nofollow">RSS</a></li>
					<?php elseif ($this->_tpl_vars['tpl_name'] == "video-top"): ?>
					<li><a href="<?php echo @_URL; ?>
/rss.php?feed=topvideos" title="<?php echo $this->_tpl_vars['meta_title']; ?>
 RSS" rel="nofollow">RSS</a></li>
					<?php else: ?>
					<li><a href="<?php echo @_URL; ?>
/rss.php" title="<?php echo $this->_tpl_vars['meta_title']; ?>
 RSS" rel="nofollow">RSS</a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="hidden-xs col-sm-6 col-md-6">
				<div class="pull-right">
				<h3>Follow Us</h3>
				<ul class="list-unstyled list-social-sites">
					<li><i class="fa fa-facebook"></i> <a href="#">Facebook</a></li>
					<li><i class="fa fa-twitter"></i> <a href="#">Twitter</a></li>
					<li><i class="fa fa-youtube"></i> <a href="#">YouTube</a></li>
				</ul>
				</div>
			</div>
		</div>

		<div class="row row-footer-horizontal">
			<div class="col-xs-12 col-sm-12 col-md-10">
			<ul class="list-inline">
				<?php if (@MOBILE_MELODY && @USER_DEVICE == 'mobile'): ?>
				<li><a href="<?php echo $this->_tpl_vars['_footer_switch_ui_link']; ?>
" rel="nofollow"><?php echo $this->_tpl_vars['lang']['switch_to_mobile_ui']; ?>
</a></li>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['logged_in'] != '1' && $this->_tpl_vars['allow_registration'] == '1'): ?>
					<?php if ($this->_tpl_vars['allow_facebook_login'] || $this->_tpl_vars['allow_twitter_login']): ?>
					<li><a class="primary ajax-modal" data-toggle="modal" data-backdrop="true" data-keyboard="true" href="#modal-register-form"><?php echo $this->_tpl_vars['lang']['register']; ?>
</a></li>

					<?php else: ?>
					<li><a href="<?php echo @_URL; ?>
/register.<?php echo @_FEXT; ?>
"><?php echo $this->_tpl_vars['lang']['register']; ?>
</a></li>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['logged_in'] == '1' && $this->_tpl_vars['s_power'] == '1'): ?><li><a href="<?php echo @_URL; ?>
/<?php echo @_ADMIN_FOLDER; ?>
/"><?php echo $this->_tpl_vars['lang']['admin_area']; ?>
</a></li><?php endif; ?>
				<?php if (is_array ( $this->_tpl_vars['footer_page_links'] )): ?>
				<?php $_from = $this->_tpl_vars['footer_page_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['page_data']):
?>
				<li><a href="<?php echo $this->_tpl_vars['page_data']['page_url']; ?>
"><?php echo $this->_tpl_vars['page_data']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</ul>
			<p>	&copy; <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
 <?php echo @_SITENAME; ?>
. <?php echo $this->_tpl_vars['lang']['rights_reserved']; ?>
 <?php if (@_POWEREDBY == 1): ?><?php echo $this->_tpl_vars['lang']['powered_by']; ?>
<?php endif; ?></p>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-2">
			<?php if (count ( $this->_tpl_vars['langs_array'] ) > 0): ?>
			<div class="pm-language">
				<div class="btn-group dropup pull-right">
					<a class="btn btn-link dropdown-toggle" data-toggle="dropdown" href="#"><img src="<?php echo $this->_tpl_vars['langs_array'][$this->_tpl_vars['current_lang_id']]['ico']; ?>
" width="16" height="10" alt="<?php echo $this->_tpl_vars['langs_array'][$this->_tpl_vars['current_lang_id']]['title']; ?>
" title="<?php echo $this->_tpl_vars['langs_array'][$this->_tpl_vars['current_lang_id']]['title']; ?>
" align="texttop"> <?php echo $this->_tpl_vars['langs_array'][$this->_tpl_vars['current_lang_id']]['title']; ?>
 <span class="caret"></span></a>
					<ul class="dropdown-menu pm-language-list">
					<?php $_from = $this->_tpl_vars['langs_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['language']):
?>
					<?php if ($this->_tpl_vars['k'] != $this->_tpl_vars['current_lang_id']): ?>
					<li><a href="#" title="<?php echo $this->_tpl_vars['language']['title']; ?>
" name="<?php echo $this->_tpl_vars['k']; ?>
" id="lang_select_<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['language']['title']; ?>
</a></li>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
			</div>
		</div>
	</footer>
</div>



<?php echo '
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="'; ?>
<?php echo @_URL; ?>
<?php echo '/js/swfobject.js"></script>
'; ?>


<?php if ($this->_tpl_vars['p'] == 'index'): ?>
<?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/slick.min.js" ></script>
'; ?>

<?php endif; ?>

<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/theme.js"></script>
<script type="text/javascript">
// @Since v2.6.1
$(document).ready(function() {
	echo.init({
		offset: 500,
		offsetRight: 1000,
		throttle: 200,
		unload: false,
	});


	if($(\'ul.pagination\').length) {
		// $(\'ul.pagination.pagination-arrows li a\').first().html("<i class=\'fa fa-arrow-left\'></i>");
		// $(\'ul.pagination.pagination-arrows li a\').last().html("<i class=\'fa fa-arrow-right\'></i>");
		$(\'ul.pagination.pagination-arrows li a\').first().html("<i class=\''; ?>
<?php if (@_IS_RTL == '1'): ?>fa fa-arrow-right<?php else: ?>fa fa-arrow-left<?php endif; ?><?php echo '\'></i>");
		$(\'ul.pagination.pagination-arrows li a\').last().html("<i class=\''; ?>
<?php if (@_IS_RTL == '1'): ?>fa fa-arrow-left<?php else: ?>fa fa-arrow-right<?php endif; ?><?php echo '\'></i>");
	}

});

// In-button Feedback (Icon)
$(document).ready(function() {
	$(\'.btn-with-loader\').on(\'click\', function() {
		var $this = $(this);
		$this.button(\'Loading\').prepend(\'<i class="btn-loader"></i>\');
		setTimeout(function() {
			$this.button(\'reset\');
		}, 2000);
	});
});
// Page Loading Feedback (Red Stripe)
$(document).ready(function() {
  $(".pm-section-highlighted, .pm-ul-browse-videos").animsition({
	linkElement: \'.animsition\',
	loading: false,
	timeout: true,
	timeoutCountdown: 5000,
	browser: [ \'animation-duration\', \'-webkit-animation-duration\'],
	overlay : false,
	overlayClass : \'\',
	overlayParentElement : \'body\',
	transition: function(url){ 
		$(\'header\').append(\'<div class="pm-horizontal-loader"></div>\');
		window.location.href = url; }
  });
});

// Global settings for notifications
$(document).ready(function() {
	$.notifyDefaults({
	// settings
	element: \'body\',
	position: null,
	type: "info",
	allow_dismiss: true,
	newest_on_top: true,
	showProgressbar: false,
	placement: {
		from: "top", // top, bottom
		align: "right" // left, right, center
	},
	offset: {
		x: 20,
		y: 100
		},
	spacing: 10,
	z_index: 1031,
	delay: 10000,
	timer: 1000,
	url_target: \'_blank\',
	mouse_over: null,
	animate: {
		enter: \'animated fadeInDown\',//\'animated fadeIn\',
		exit: \'animated fadeOutUpBig\',//\'animated fadeOut\'
	},
	onShow: null,
	onShown: null,
	onClose: null,
	onClosed: null,
	template: \'<div data-notify="container" class="growl alert alert-{0}" role="alert">\' +
				\'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>\' +
				\'<span data-notify="icon"></span> \' +
				\'<span data-notify="title">{1}</span> \' +
				\'<span data-notify="message">{2}</span>\' +
				\'<div class="progress" data-notify="progressbar">\' +
					\'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>\' +
				\'</div>\' +
				\'<a href="{3}" target="{4}" data-notify="url"></a>\' +
			\'</div>\',
	PM_exitAnimationTimeout: 0 // PHP Melody custom settings
	});
});
</script>
'; ?>


<?php if (@_EU_WARNING == '1'): ?>
<?php echo '
<script type="text/javascript"> 
window.cookieconsent_options = {"message":"'; ?>
<?php echo $this->_tpl_vars['lang']['eu_cookie_warn_message']; ?>
<?php echo '","dismiss":"'; ?>
<?php echo $this->_tpl_vars['lang']['i_agree']; ?>
<?php echo '","learnMore":"'; ?>
<?php echo $this->_tpl_vars['lang']['more_info']; ?>
<?php echo '","link":null,"theme":"cookieconsent-'; ?>
<?php echo @_EU_WARNING_POSITION; ?>
<?php echo '"};
</script>
<script type="text/javascript" src="'; ?>
<?php echo @_URL; ?>
/js/cookieconsent.min.js"></script>
<?php endif; ?>

<?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/jquery.ba-dotimeout.min.js" type="text/javascript"></script>

'; ?>
<?php if ($this->_tpl_vars['tpl_name'] == 'upload' || $this->_tpl_vars['tpl_name'] == "video-edit"): ?><?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
<?php echo '/js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="'; ?>
<?php echo @_URL; ?>
<?php echo '/js/jquery.iframe-transport.js" type="text/javascript"></script>
<script src="'; ?>
<?php echo @_URL; ?>
<?php echo '/js/jquery.fileupload.js" type="text/javascript"></script>
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/upload.clone.js" type="text/javascript"></script>
'; ?>
<?php endif; ?>
<?php if (@_SEARCHSUGGEST == 1): ?><?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
<?php echo '/js/jquery.typewatch.js" type="text/javascript"></script>
'; ?>
<?php endif; ?><?php echo '
<script type="text/javascript" src="'; ?>
<?php echo @_URL; ?>
<?php echo '/js/bootstrap-notify.min.js"></script>
<script src="'; ?>
<?php echo @_URL; ?>
<?php echo '/js/melody.dev.js" type="text/javascript"></script>
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/melody.dev.js" type="text/javascript"></script>
<!-- <script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/lightbox.dev.js" type="text/javascript"></script> -->
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/jquery.dotdotdot.min.js" type="text/javascript"></script>
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/jasny-bootstrap.min.js" type="text/javascript"></script>
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/jquery.autosize.min.js" type="text/javascript"></script>
'; ?>


<?php if ($this->_tpl_vars['tpl_name'] == 'video-watch' || $this->_tpl_vars['tpl_name'] == 'article-read'): ?>

<?php if ($this->_tpl_vars['show_addthis_widget'] == '1'): ?>
<?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/jquery.socialite.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$(\'#pm-socialite\').one(\'mouseenter\', function()
	{
		Socialite.load($(this)[0]);
	});
});
</script>	
'; ?>

<?php endif; ?>

<?php echo '
<script type="text/javascript">
$(document).ready(function(){
	$(\'#nav-link-comments-native\').click(function(){
		$.cookie(\'pm_comment_view\', \'native\', { expires: 180, path: \'/\' });
	});
	$(\'#nav-link-comments-facebook\').click(function(){
		$.cookie(\'pm_comment_view\', \'facebook\', { expires: 180, path: \'/\' });
		FB.XFBML.parse(document.getElementById("comments-facebook"));
	});
	$(\'#nav-link-comments-disqus\').click(function(){
		$.cookie(\'pm_comment_view\', \'disqus\', { expires: 180, path: \'/\' });
	});
});
</script>
'; ?>

<?php endif; ?> 

<?php if ($this->_tpl_vars['p'] == 'detail' && $this->_tpl_vars['playlist']): ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function () {
	$(\'.pm-video-playlist\').animate({
		scrollTop: $(\'.pm-video-playlist-playing\').offset().top - $(\'.pm-video-playlist\').offset().top + $(\'.pm-video-playlist\').scrollTop()
	});
});
</script>
'; ?>

<?php endif; ?>

<?php echo '
<script type="text/javascript">
$(document).ready(function() {
	$(\'textarea\').autosize();
	$(\'.fileinput\').fileinput();
	$(".ellipsis").dotdotdot({
	ellipsis : \'...\',
	wrap : \'word\',
	watch: true,
	height : 40
	});
});
</script>
'; ?>

<?php if ($this->_tpl_vars['tpl_name'] == 'suggest' || $this->_tpl_vars['tpl_name'] == 'upload' || $this->_tpl_vars['tpl_name'] == "video-edit"): ?>
<?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(\'#tags_suggest, #tags_upload\').tagsinput({
		confirmKeys: [188, 13, 44]
	});
});
</script>
'; ?>

<?php endif; ?>

<?php if (@_SEARCHSUGGEST == 1): ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function () {
// live search
$(\'#pm-search\').typeWatch({
	callback: function() {
	$.ajax({
		type: "POST",
		url: MELODYURL2 + "/ajax_search.php",
		data: {
			"queryString": $(\'#pm-search\').val()
		},
		dataType: "html",
		success: function(b){
			if (b.length > 0) {
				$(".pm-search-suggestions-list").html(b);

				$(".pm-search-suggestions").show(function() {

					var $listItems = $(\'.pm-search-suggestions-list\').find(\'li\');

					$(\'#pm-search\').keydown(function(e)
					{

						var key = e.keyCode,
							$selected = $listItems.filter(\'.selected\'),
							$current;

						if ( key === 27 ) { // ESC
							$(".pm-search-suggestions").hide();
						}

						if( key == 38 || key == 40 ){ // UP/DOWN
							e.preventDefault();
						}

						if ( key != 38 && key != 40 ) return;

						$listItems.removeClass(\'selected\');

						if ( key == 40 ) // Down key
						{
							if ( ! $selected.length || $selected.is(\':last-child\') ) {
								$current = $listItems.eq(0);
							}
							else {
								$current = $selected.next();
							}
						}
						else if ( key == 38 ) // Up key
						{
							if ( ! $selected.length || $selected.is(\':first-child\') ) {
								$current = $listItems.last();
							}
							else {
								$current = $selected.prev();
							}
						}

						$current.addClass(\'selected\');
						$selected_url = $current.find(\'a\').attr(\'href\');

						$selected_id = $current.attr(\'data-video-id\');

						($(\'#pm-video-id\').val($selected_id));

					});

					$(document).on(\'click\', (function(e) {
						if(e.target.className !== "pm-search-suggestions" && e.target.id !== "pm-search") {
								$(".pm-search-suggestions").hide();
						}}));
				});

			} else {
				$(".pm-search-suggestions").hide();
			}
		}
	});
},
wait: 400,
highlight: true,
captureLength: 3
});
});
</script>
'; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['p'] == 'detail'): ?>
<?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/jquery.readmore.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function () {
	
	var pm_elastic_player = $.cookie(\'pm_elastic_player\');
	if (pm_elastic_player == null) {
		$.cookie(\'pm_elastic_player\', \'normal\');
	}
	else if (pm_elastic_player == \'wide\') {
		$(\'.pm-video-watch-sidebar\').slideDown(\'slow\');
		$(\'#player_extend\').find(\'i\').removeClass(\'fa-arrows-h\').addClass(\'fa-compress\');
		$(\'#player\').addClass(\'watch-large\');
	} else {
		$(\'#player\').removeClass(\'watch-large\');
	}

	$("#player_extend").click(function() {

		if ($(this).find(\'i\').hasClass("fa-arrows-h")) {
			$(this).find(\'i\').removeClass("fa-arrows-h").addClass("fa-compress");
		} else {
			$(this).find(\'i\').removeClass("fa-compress").addClass("fa-arrows-h");
			$(\'.pm-video-watch-sidebar\').slideDown(300);
		}

		$(\'#player\').animate({
			}, 500, "linear", function() {
				$(\'#player\').toggleClass("watch-large");
		});
		if ($.cookie(\'pm_elastic_player\') == \'normal\') {
			$.cookie(\'pm_elastic_player\',\'wide\');
			$(\'#player_extend\').find(\'i\').removeClass(\'fa-arrows-h\').addClass(\'fa-compress\');
		} else {
			$.cookie(\'pm_elastic_player\', \'normal\');
			$(\'#player_extend\').find(\'i\').removeClass(\'fa-compress\').addClass(\'fa-arrows-h\');
		}
		return false;
		});

	$(\'.pm-video-description\').readmore({
		speed: 50,
		maxHeight: 100,
		moreLink: \'<a href="#">\' + pm_lang.show_more +\'</a>\',
		lessLink: \'<a href="#">\' + pm_lang.show_less +\'</a>\',
	});
});
</script>
'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['p'] == 'index'): ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function() {

	$("ul[class^=\'pm-ul-carousel-videos\']").each(

	function() {
	
		var slides_id = $(this).data("slider-id");
		var slides = $(this).data("slides");
		var video_carousel = $(\'#pm-carousel_\' + slides_id);

		if(slides == null) {
			var slides = 4;
		}
		video_carousel.slick({
			lazyLoad: \'ondemand\',
			slidesToShow: slides, 
			slidesToScroll: slides - 1,
			prevArrow	: "#pm-slide-prev_" + slides_id,
			nextArrow	: "#pm-slide-next_" + slides_id,
			speed: 150,
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
			]
		});
	});
});
</script>
'; ?>

<?php endif; ?>
<?php if (! $this->_tpl_vars['logged_in']): ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function() {
	$(\'#modal-login-form, #modal-register-form\').on(\'shown.bs.modal\', function() {
		document.activeElement.blur();
		$(this).find(".modal-body :input:visible").first().focus();
	});
});
</script>
'; ?>

<?php endif; ?>
<?php if (@_MOD_SOCIAL == '1'): ?>
<?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/waypoints.min.js" type="text/javascript"></script>
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/melody.social.dev.js" type="text/javascript"></script>
'; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['display_preroll_ad'] == true): ?>
<?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
<?php echo '/js/jquery.timer.min.js" type="text/javascript"></script>
<script type="text/javascript">

function timer_pad(number, length) {
	var str = \'\' + number;
	while (str.length < length) {str = \'0\' + str;}
	return str;
}

var preroll_timer;
var preroll_player_called = false;
var skippable = '; ?>
<?php if ($this->_tpl_vars['preroll_ad_data']['skip'] != 1): ?>0<?php else: ?>1<?php endif; ?><?php echo ';
var skippable_timer_current = '; ?>
<?php if ($this->_tpl_vars['preroll_ad_data']['skip_delay_seconds']): ?><?php echo $this->_tpl_vars['preroll_ad_data']['skip_delay_seconds']; ?>
<?php else: ?>0<?php endif; ?><?php echo ' * 1000;
var preroll_disable_stats = '; ?>
<?php if ($this->_tpl_vars['preroll_ad_data']['disable_stats'] == 1): ?>1<?php else: ?>0<?php endif; ?><?php echo ';

$(document).ready(function(){
	if (skippable == 1) {
		$(\'#preroll_skip_btn\').hide();
	}

	var preroll_timer_current = '; ?>
<?php echo $this->_tpl_vars['preroll_ad_data']['duration']; ?>
<?php echo ' * 1000;

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

		$(\'.preroll_timeleft\').html(output);

		if (preroll_timer_current == 0 && preroll_player_called == false) {

			$.ajax({
				type: "GET",
				url: MELODYURL2 + "/ajax.php",
				dataType: "html",
				data: {
					"p": "video",
					"do": "getplayer",
					"vid": "'; ?>
<?php echo $this->_tpl_vars['preroll_ad_player_uniq_id']; ?>
<?php echo '",
					"aid": "'; ?>
<?php echo $this->_tpl_vars['preroll_ad_data']['id']; ?>
<?php echo '",
					"player": "'; ?>
<?php echo $this->_tpl_vars['preroll_ad_player_page']; ?>
<?php echo '",
					"playlist": "'; ?>
<?php echo $this->_tpl_vars['playlist']['list_uniq_id']; ?>
<?php echo '"
				},
				dataType: "html",
				success: function(data){
					$(\'#preroll_placeholder\').replaceWith(data);
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

			$(\'.preroll_skip_timeleft\').html(output);

			if (skippable_timer_current == 0 && preroll_player_called == false) {
				$(\'#preroll_skip_btn\').show();
				$(\'.preroll_skip_countdown\').hide();
				skippable_timer.stop();
			} else {
				skippable_timer_current -= 1000;
				if(skippable_timer_current < 0) {
					skippable_timer_current = 0;
				}
			}
		}, 1000, true);

		$(\'#preroll_skip_btn\').click(function(){
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
						"aid": "'; ?>
<?php echo $this->_tpl_vars['preroll_ad_data']['id']; ?>
<?php echo '",
						"at": "'; ?>
<?php echo @_AD_TYPE_PREROLL; ?>
<?php echo '",
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
'; ?>

<?php endif; ?>

<?php echo '
<script type="text/javascript">
(function() {
	"use strict";
	var toggles = document.querySelectorAll("#navslide-toggle");

	for (var i = toggles.length - 1; i >= 0; i--) {
	var toggle = toggles[i];
	toggleHandler(toggle);
	};

	function toggleHandler(toggle) {
	toggle.addEventListener( "click", function(e) {
		e.preventDefault();
		(this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
	});
	}
})();

</script>
'; ?>



<?php if ($this->_tpl_vars['allow_emojis'] && ( $this->_tpl_vars['tpl_name'] == 'article-read' || $this->_tpl_vars['tpl_name'] == 'video-watch' || $this->_tpl_vars['tpl_name'] == 'channel' )): ?> 
<!-- Emoji provided free by http://emojione.com -->
<script src="<?php echo @_URL; ?>
/js/jquery.textcomplete.min.js"></script>
<script src="<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
/js/melody.emoji.js"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modal-emoji.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['profile_data']['id'] == $this->_tpl_vars['s_user_id']): ?>
<?php echo '
<script src="'; ?>
<?php echo @_URL; ?>
/templates/<?php echo $this->_tpl_vars['template_dir']; ?>
<?php echo '/js/jquery.cropit.js" type="text/javascript"></script>
<script type="text/javascript"> 
$(function() {
	var cropit_avatar_notify = null;
	var cropit_cover_notify = null;
	var cropit_notify_type = \'info\';
	
	// Avatar
	$(\'.pm-profile-avatar-pic\').cropit({
		smallImage: \'allow\',
		// width: '; ?>
<?php if (@THUMB_W_AVATAR): ?><?php echo @THUMB_W_AVATAR; ?>
<?php else: ?>180<?php endif; ?><?php echo ', 
		// height: '; ?>
<?php if (@THUMB_H_AVATAR): ?><?php echo @THUMB_H_AVATAR; ?>
<?php else: ?>180<?php endif; ?><?php echo ',
		width: 120,
		height: 120,
		preview: \'.pm-profile-avatar-preview\',
		onImageLoading: function(){
			cropit_avatar_notify = $.notify({message: pm_lang.please_wait}, {type: cropit_notify_type});
		},
		onImageLoaded: function() {
			cropit_avatar_notify.close();
		},
		onImageError: function(){
			cropit_avatar_notify.close();
		}
	});

	$(\'#btn-edit-avatar\').click(function() {
		$(\'#cropit-avatar-input\').click();
		$(\'#cropit-avatar-form\').css(\'visibility\', \'visible\');
		$(\'.cropit-image-preview\').removeClass(\'animated fadeIn\');
	});

	$(\'.btn-cancel-avatar\').click(function() {
		$(\'.pm-profile-avatar-pic .cropit-image-preview\').removeClass(\'cropit-image-loaded\').addClass(\'animated fadeIn\');
		$(\'#cropit-avatar-form\').css(\'visibility\', \'hidden\');
		return false;
	});

	$(\'form#cropit-avatar-form\').submit(function() {
		
		var image_data = $(\'.pm-profile-avatar-pic\').cropit(\'export\', {
			type: \'image/jpeg\',
			quality: .9,
			fillBg: \'#333\'
		});
		
		// Move cropped image data to hidden input
		$(\'.hidden-avatar-data-img\').val(image_data);
		
		$.ajax({
			url: MELODYURL2 + "/ajax.php",
			type: "POST",
			dataType: "json",
			data: $(\'#cropit-avatar-form\').serialize(),
			beforeSend: function(jqXHR, settings) {
				// clean error message container
				//cropit_avatar_notify.close();
				$.notifyClose();
				cropit_avatar_notify = $.notify({message: pm_lang.swfupload_status_uploading}, {type: cropit_notify_type});
			},
		})
		.done(function(data){
			cropit_avatar_notify.close();
			if (data.success) { 
				// hide form action buttons 
				$(\'#cropit-avatar-form\').css(\'visibility\', \'hidden\');
				
				// reset background with uploaded image 
				$(\'.pm-profile-avatar-pic .cropit-image-preview img\').attr(\'src\', data.file_url);
				
				// stop image movement ability
				$(\'.pm-profile-avatar-pic .cropit-image-preview\').addClass(\'animated fadeIn\');
				// timeout required to allow time for the uploaded image to load before removing the current image obj (and avoid a image-swapping \'glitch\')
				setTimeout(function(){
					$(\'.pm-profile-avatar-pic .cropit-image-preview\').removeClass(\'cropit-image-loaded\')
				}, 700);
				
				// unload selected image to let the user re-select the same image
				$(\'.pm-profile-avatar-pic input.cropit-image-input\')[0].value = null;
			}
			cropit_avatar_notify = $.notify({message: data.msg}, {type: data.alert_type});
		});

		return false;
	});
	
	var cropit_cover_height = parseInt($(\'.pm-profile-cover-preview\').attr(\'data-cropit-height\'));
	if ( ! cropit_cover_height) {
		cropit_cover_height = 200;
	}
		
	// Cover
	$(\'.pm-profile-cover-preview\').cropit({
		smallImage: \'allow\',
		height: cropit_cover_height,
		onImageLoading: function(){
			cropit_cover_notify = $.notify({message: pm_lang.please_wait}, {type: cropit_notify_type});
		},
		onImageLoaded: function() {
			cropit_cover_notify.close();
		},
		onImageError: function(){
			cropit_cover_notify.close();
		}
	});

	$(\'#btn-edit-cover\').click(function() {
		$(\'#cropit-cover-input\').click();
		$(\'#cropit-cover-form\').css(\'visibility\', \'visible\');
		$(\'.cropit-image-preview\').removeClass(\'animated fadeIn\');
	});

	$(\'.btn-cancel\').click(function() {
		$(\'.pm-profile-cover-preview .cropit-image-preview\').removeClass(\'cropit-image-loaded\').addClass(\'animated fadeIn\');
		$(\'#cropit-cover-form\').css(\'visibility\', \'hidden\');
		return false;
	});

	$(\'form#cropit-cover-form\').submit(function() {
		
		var image_data = $(\'.pm-profile-cover-preview\').cropit(\'export\', {
			type: \'image/jpeg\',
			quality: .9,
			fillBg: \'#333\'
		});
		
		// Move cropped image data to hidden input
		$(\'.hidden-cover-data-img\').val(image_data);
		
		$.ajax({
			url: MELODYURL2 + "/ajax.php",
			type: "POST",
			dataType: "json",
			data: $(\'#cropit-cover-form\').serialize(),
			beforeSend: function(jqXHR, settings) {
				// clean error message container
				//cropit_cover_notify.close();
				$.notifyClose();
				cropit_cover_notify = $.notify({message: pm_lang.swfupload_status_uploading}, {type: cropit_notify_type});
			},
		})
		.done(function(data){
			cropit_cover_notify.close();
			if (data.success) { 
				// hide form action buttons 
				$(\'#cropit-cover-form\').css(\'visibility\', \'hidden\');
				
				// reset background with uploaded image 
				$(\'.pm-profile-cover-preview .cropit-image-preview img\').attr(\'src\', data.file_url);
				
				// stop image movement ability
				$(\'.pm-profile-cover-preview .cropit-image-preview\').addClass(\'animated fadeIn\');
				// timeout required to allow time for the uploaded image to load before removing the current image obj (and avoid a image-swapping \'glitch\')
				setTimeout(function(){
					$(\'.pm-profile-cover-preview .cropit-image-preview\').removeClass(\'cropit-image-loaded\')
				}, 700);
				
				// unload selected image to let the user re-select the same image
				$(\'.pm-profile-cover-preview input.cropit-image-input\')[0].value = null;
			}
			cropit_cover_notify = $.notify({message: data.msg}, {type: data.alert_type});
		});

		return false;
	});
});
</script>
'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['tpl_name'] == 'channel' && $_GET['view'] == 'playlists'): ?>
<?php echo '
<script type="text/javascript">
$(document).ready(function(){
	$(\'.pm-pro-playlists-btn\').trigger(\'click\');
});
</script>
'; ?>

<?php endif; ?>

<?php echo @_HTMLCOUNTER; ?>


<?php echo '
<script type="text/javascript">
$(document).ready(function(){
	// Adjustments for the responsive layout
	$(\'#pm-top-mobile-search-show\').click(function(){
		$(\'#pm-top-search\').toggleClass(\'show-me animated fadeIn\');
		$(\'.header-logo\').toggle();
	});
	if ( $(window).width() < 780 ){
		$(\'[rel="tooltip"]\').tooltip(\'destroy\');
	}
});
</script>

'; ?>


</body>
</html>