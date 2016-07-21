{include file='header.tpl' p="index" tpl_name="index"} 
<div class="container-fluid">
	<div class="row">
		<div class="pm-section-highlighted col-sm-12 col-md-12">
		<div id="video-wrapper">
			<div class="pm-video-watch-featured">
			{if $featured_videos_total == 1}
				<h2><a href="{$featured_videos.0.video_href}">{$featured_videos.0.video_title}</a></h2>
				{if $display_preroll_ad == true}
					<div id="preroll_placeholder">
						<div class="preroll_countdown">
							{$lang.preroll_ads_timeleft} <span class="preroll_timeleft">{$preroll_ad_data.timeleft_start}</span>
						</div>
						{$preroll_ad_data.code}
						
						{if $preroll_ad_data.skip}
						<div class="preroll_skip_countdown">
							{$lang.preroll_ads_skip_msg} <span class="preroll_skip_timeleft">{$preroll_ad_data.skip_delay_seconds}</span>
						</div>
						<div class="preroll_skip_button">
						<button class="btn btn-default hide-me" id="preroll_skip_btn">{$lang.preroll_ads_skip}</button>
						</div>
						{/if}
						{if $preroll_ad_data.disable_stats == 0}
							<img src="{$smarty.const._URL}/ajax.php?p=stats&do=show&aid={$preroll_ad_data.id}&at={$smarty.const._AD_TYPE_PREROLL}" width="1" height="1" border="0" />
						{/if}
					</div>
				{else}
					{include file="player.tpl" page="index" video_data=$featured_videos.0}
				{/if}

			{elseif $featured_videos_total > 1}
				<h2><a href="{$featured_videos.0.video_href}">{$featured_videos.0.video_title}</a></h2>
				<div id="video-wrapper">
					{include file="player.tpl" page="index" video_data=$featured_videos.0}
				</div>
				<div class="clearfix"></div>

				{if $featured_videos_total > 2}
				<div class="row">
					<div class="col-md-12">
						<div class="clearfix"></div>
						<div class="pm-section-head">
							<h2>{$lang.featured|default:'Featured'}</h2>
						</div>
						<div class="pm-carousel-sidebuttons">
							<button class="btn btn-xs btn-link btn-slider btn-car-prev  hidden-xs" id="pm-slide-prev_featuredlist"><i class="fa fa-chevron-left"></i></button>
							<!-- Carousel items -->
							<ul class="pm-ul-carousel-videos list-inline" data-slides="5" data-slider-id="featuredlist" id="pm-carousel_featuredlist">
								{foreach from=$featured_videos key=k item=video_data}
								{if $k > 0}
								<li class="">
									{include file='item-video-obj.tpl' hideLabels='1' hideMeta='1' thumbSize='medium'}
								</li>
								{/if}
								{/foreach}
							</ul>
							<button class="btn btn-xs btn-link btn-slider btn-car-next  hidden-xs" id="pm-slide-next_featuredlist"><i class="fa fa-chevron-right"></i></button>
						</div><!-- #pm-slider -->
					</div>
				</div>
				{/if}
			{/if}
			</div>
		</div>
		</div>
	</div>
</div>


<div id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
			<div class="pm-section-head">
				<h2><a href="{$smarty.const._URL}/newvideos.{$smarty.const._FEXT}">{$lang.new_videos}</a></h2>
			</div>
			<ul class="row pm-ul-browse-videos list-unstyled">
				{foreach from=$new_videos key=k item=video_data}
				<li class="col-xs-6 col-sm-6 col-md-4">
					{include file='item-video-obj.tpl'}
				</li>
				{foreachelse}
				<li class="col-xs-12 col-sm-12 col-md-12">
					{$lang.top_videos_msg2}
				</li>
				{/foreach}
			</ul>
			<div class="clearfix"></div>
        </div><!-- .col-md-8 -->

        <div class="col-md-4">
	        {if $ad_5 != ''}
			<div class="widget">
				<div class="pm-section-head">
					<h4>{$lang._advertisment|default:'Advertisment'}</h4>
				</div>
	        	<div class="pm-ads-banner" align="center">{$ad_5}</div>
	        </div><!-- .widget -->
	        {/if}

			<div class="widget">
			<div class="pm-section-head">
				<h4><a href="{$smarty.const._URL}/topvideos.{$smarty.const._FEXT}">{$lang.top_m_videos}</a></h4>
			</div>
			<ul class="row pm-ul-browse-videos list-unstyled">
				{foreach from=$top_videos key=k item=video_data}
				<li class="col-xs-6 col-sm-6 col-md-6">
					{include file='item-video-obj.tpl' hideMeta='1' hideLabels='1' thumbSize='small'}

				</li>
				{foreachelse}
				<li class="col-xs-12 col-sm-12 col-md-12">
					{$lang.top_videos_msg2}
				</li>
				{/foreach}
			</ul>
			<div class="clearfix"></div>
	        </div><!-- .widget -->				

	        {if $smarty.const._MOD_ARTICLE == 1}
	        <div class="widget">
	        	<h4><a href="{$smarty.const._URL}/article.{$smarty.const._FEXT}">{$lang.articles_latest}</a></h4>
	            <ul class="pm-sidebar-articles list-unstyled">
	            {foreach from=$articles item=article key=id}
				<li class="media{if $article.featured == '1'} media-featured{/if}">
					{if $article.meta._post_thumb_show != ''}
					<a href="{$article.link}" class="pull-left" title="{$article.title}"><img src="{$smarty.const._ARTICLE_ATTACH_DIR}/{$article.meta._post_thumb_show}" align="left" width="55" height="55" border="0" alt="{$article.title}" class="media-object"></a>
					{/if}
					<div class="media-body">
						<h5 class="media-heading"><a href="{$article.link}" title="{$article.title}" >{$article.title}</a></h5>
						<span class="ellipsis">{$article.excerpt|truncate:130}</span>
					</div>
				</li>
	            {/foreach}
	            </ul>
	        </div><!-- .widget -->
	        {/if}
	        
	        {if ($show_tags == 1) && (count($tags) > 0)}
			<div class="widget">
				<h4>{$lang.tags}</h4>
				<div class="entry-tags">
	            {foreach from=$tags item=tag key=k}
	                {$tag.href}
	            {/foreach}
		        </div>
	        </div><!-- .widget -->
	        {/if}
	        
	        {if $show_stats == 1}
	        <div class="widget">
	        	<h4>{$lang.site_stats}</h4>
		        <ul class="pm-ul-stats list-unstyled">
		        	<li><a href="{$smarty.const._URL}/memberlist.{$smarty.const._FEXT}?do=online">{$lang.online_users}</a> <span class="pm-stats-count">{$stats.online_users}</span></li>
		            <li><a href="{$smarty.const._URL}/memberlist.{$smarty.const._FEXT}">{$lang.total_users}</a> <span class="pm-stats-count">{$stats.users}</span></li>
		            <li>{$lang.total_videos} <span class="pm-stats-count">{$stats.videos}</span></li>
		        	<li>{$lang.videos_added_lw} <span class="pm-stats-count">{$stats.videos_last_week}</span></li>
		        </ul>
			</div><!-- .widget -->
	        {/if}
        
		</div><!-- .col-md-4 -->
      </div><!-- .row -->


		<div class="row">
			<div class="col-md-12">
				{if $total_playingnow > 0}
				<div class="pm-section-head">
					<h3>{$lang.vbwrn}</h3>
					<div class="btn-group btn-group-sort">
					<button class="btn btn-xs" id="pm-slide-prev_vbwrn"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-xs" id="pm-slide-next_vbwrn"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				<div id="">
				<!-- Carousel items -->
					<ul class="pm-ul-carousel-videos list-inline" data-slider-id="vbwrn" data-slides="5" id="pm-carousel_vbwrn">
						{foreach from=$playingnow key=k item=video_data}
						<li class="">
						{include file='item-video-obj.tpl'}
						</li>
						{/foreach}
					</ul>
				</div><!-- #pm-slider -->
				{/if}
			</div>
		</div>

	{if count($featured_categories_data) > 0}
		{foreach from=$featured_categories_data key=category_id item=video_data_array}
		<div class="row">
			<div class="col-md-12">
				{if $categories.$category_id.published_videos > 0}
				<div class="pm-section-head">
					<h3><a href="{$categories.$category_id.url}">{$categories.$category_id.name}</a></h3>
					<div class="btn-group btn-group-sort">
					<button class="btn btn-xs" id="pm-slide-prev_{$category_id}"><i class="fa fa-chevron-left"></i></button>
					<button class="btn btn-xs" id="pm-slide-next_{$category_id}"><i class="fa fa-chevron-right"></i></button>
					</div>
				</div>
				<div id="">
				<!-- Carousel items -->
					<ul class="pm-ul-carousel-videos list-inline" data-slider-id="{$category_id}" data-slides="5" id="pm-carousel_{$category_id}">
						{foreach from=$video_data_array key=k item=video_data}
						<li class="">
						{include file='item-video-obj.tpl'}
						</li>
						{/foreach}
					</ul>
				</div><!-- #pm-slider -->
				{/if}
			</div>
		</div>
		{/foreach}
	{/if}

      <div class="clearfix"></div>
    </div><!-- .container -->

{include file='footer.tpl' p="index"} 