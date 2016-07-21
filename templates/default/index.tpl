{include file='header.tpl' p="index"} 

<div id="wrapper">

<!-- Start 9gag grid -->
<div >
<div class="post-list-t1 cover">
	<div class="row no-gutter">
    {get_advanced_video_list assignto="advanced_video_list" tag="Hot" limit=9}
        {foreach from=$advanced_video_list key=k item=video_data}
			{if $k==0 }
        		<div class="col-md-6 col-sm-12">
			<div class="badge-grid-item item hero clearfix list-headline">
				<a class="badge-evt img-container" href="{$video_data.video_href}">
					<div class="responsivewrapper" style="background: url('{$video_data.thumb_img_url}') center; background-size: cover;">
					</div>
					<div class="img-shadow">
					</div>
				</a>
				<div class="info">
					<a class="badge-evt title" href="{$video_data.video_href}">
						<h4>{$video_data.video_title}</h4>
					</a>
				</div>
			</div><!-- / item -->
		</div>
			
	        {else}    
        
		<div class="col-md-3 col-sm-6">
			<div class="badge-grid-item item clearfix list-headline">
				<a class="badge-evt img-container" href="{$video_data.video_href}">
					<div class="responsivewrapper" style="background: url('{$video_data.thumb_img_url}') center; background-size: cover;">
					</div>
					<div class="img-shadow"></div>
				</a>
				<div class="info">
				    <a class="badge-evt title" href="{$video_data.video_href}">
					    <h4>{$video_data.video_title}</h4>
				    </a>
			    </div>
		    </div><!-- / item -->
		</div>
			{/if}
         {/foreach}       
        
		

                	</div>
</div>
</div>
<!-- ENd 9gag grid -->



    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span8">
			<div id="primary">
				{if $featured_videos_total == 1}
					<div id="pm-featured" class="border-radius3">
					<h2 class="upper-blue">{$lang.featured}: <a href="{$featured_videos.0.video_href}">{smarty_fewchars s=$featured_videos.0.video_title length=55}</a></h2>
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
							<br />
							<a href="#" class="btn btn-blue hide" id="preroll_skip_btn">{$lang.preroll_ads_skip}</a>
							{/if}
							{if $preroll_ad_data.disable_stats == 0}
								<img src="{$smarty.const._URL}/ajax.php?p=stats&do=show&aid={$preroll_ad_data.id}&at={$smarty.const._AD_TYPE_PREROLL}" width="1" height="1" border="0" />
							{/if}
						</div>
					{else}
						{include file="player.tpl" page="index" video_data=$featured_videos.0}
					{/if}
					</div>
				{elseif $featured_videos_total > 1}
				<div id="pm-featured" class="border-radius3">
					<h2 class="upper-blue"><i class="fa fa-thumbs-o-up"></i> {$lang.homefeatured}</h2>
						<div class="row-fluid row-featured">
							<div class="pm-featured-highlight">
								<a href="{$featured_videos.0.video_href}" class="play-button"></a>
								<div class="pm-featured-highlight-title">
									<h3><a href="{$featured_videos.0.video_href}">{smarty_fewchars s=$featured_videos.0.video_title length=55}</a></h3>
								</div>
								<a href="{$featured_videos.0.video_href}">
									<img src="{$featured_videos.0.thumb_img_url}" width="100%" height="100%" class="pm-featured-highlight-img" />
								</a>
							</div>

							<div class="pm-featured-sidelist">
								<ul class="pm-ul-featured-videos" id="pm-ul-featured">
									{foreach from=$featured_videos key=k item=featured_video_data}
										{if $k > 0}
											<li>
												<span class="pm-video-thumb pm-thumb-120 pm-thumb-top border-radius2">
													<span class="pm-video-li-thumb-info">
														{if $featured_video_data.yt_length > 0}
															<span class="pm-label-duration border-radius3 opac7">{$featured_video_data.duration}</span>
														{/if}
														{if $logged_in}
														<span class="watch-later hide">
															<button class="btn btn-mini watch-later-add-btn-{$featured_video_data.id}" onclick="watch_later_add({$featured_video_data.id}); return false;" rel="tooltip" title="{$lang.add_to} {$lang.watch_later}"><i class="icon-time"></i></button>
															<button class="btn btn-mini btn-remove hide watch-later-remove-btn-{$featured_video_data.id}" onclick="watch_later_remove({$featured_video_data.id}); return false;" rel="tooltip" title="{$lang.playlist_remove_item}"><i class="icon-ok"></i></button>
														</span>
														{/if}
													</span>
													<a href="{$featured_video_data.video_href}" class="pm-thumb-fix pm-thumb-120"><span class="pm-thumb-fix-clip"><img src="{$featured_video_data.thumb_img_url}" alt="{$featured_video_data.attr_alt}" width="120"><span class="vertical-align"></span></span></a>
												</span>
												<h3><a href="{$featured_video_data.video_href}" class="pm-title-link">{smarty_fewchars s=$featured_video_data.video_title length=60}</a></h3>
											</li>
										{/if}
									{/foreach}
								</ul>
								<div class="clearfix"></div>
							</div>
						</div>
				</div>
				{/if}

				{if $total_playingnow > 0}
				<div id="pm-wn">
					<h2 class="upper-blue">{$lang.vbwrn}</h2>
					<div class="btn-group btn-group-sort pm-slide-control">
					<button class="btn btn-mini prev" id="pm-slide-prev"><i class="pm-vc-sprite arr-l"></i></button>
					<button class="btn btn-mini next" id="pm-slide-next"><i class="pm-vc-sprite arr-r"></i></button>
					</div>
					<div id="pm-slide">
					<!-- Carousel items -->
					<ul class="pm-ul-wn-videos clearfix" id="pm-ul-wn-videos">
					{foreach from=$playingnow key=k item=video_data}
					  <li>
						<div class="pm-li-wn-videos">
						<span class="pm-video-thumb pm-thumb-145 pm-thumb-top border-radius2">
						<span class="pm-video-li-thumb-info">
							{if $logged_in}
							<span class="watch-later hide">
								<button class="btn btn-mini watch-later-add-btn-{$video_data.id}" onclick="watch_later_add({$video_data.id}); return false;" rel="tooltip" title="{$lang.add_to} {$lang.watch_later}"><i class="icon-time"></i></button>
								<button class="btn btn-mini btn-remove hide watch-later-remove-btn-{$video_data.id}" onclick="watch_later_remove({$video_data.id}); return false;" rel="tooltip" title="{$lang.playlist_remove_item}"><i class="icon-ok"></i></button>
							</span>
							{/if}
						</span>
						<a href="{$video_data.video_href}" class="pm-thumb-fix pm-thumb-145"><span class="pm-thumb-fix-clip"><img src="{$video_data.thumb_img_url}" alt="{$video_data.attr_alt}" width="145"><span class="vertical-align"></span></span></a>
						</span>
						<h3><a href="{$video_data.video_href}" class="pm-title-link">{$video_data.video_title}</a></h3>
						</div>
					  </li>
					{/foreach}
					</ul>
					</div><!-- #pm-slide -->
				</div>
				<hr />
				<div class="clear-fix"></div>
		        {/if}


<!-- start homeblock -->
				<div class="element-videos">

            <h2 class="upper-blue niceheading">EM BÉ SIÊU DỄ THƯƠNG</h2>
            <ul class="pm-ul-browse-videos thumbnails" id="pm-grid">
            {get_advanced_video_list assignto="advanced_video_list" category_id=4 limit=6}
            {foreach from=$advanced_video_list key=k item=video_data}
              <li>
               <div class="pm-li-video">
                  <span class="pm-video-thumb pm-thumb-145 pm-thumb border-radius2">
                  <span class="pm-video-li-thumb-info">
                  {if $video_data.yt_length != 0}<span class="pm-label-duration border-radius3 opac7">{$video_data.duration}</span>{/if}
                  {if $video_data.mark_new}<span class="label label-new">{$lang._new}</span>{/if}
                  {if $video_data.mark_popular}<span class="label label-pop">{$lang._popular}</span>{/if}
                  </span>
                  <a href="{$video_data.video_href}" class="pm-thumb-fix pm-thumb-145"><span class="pm-thumb-fix-clip"><img src="{$video_data.thumb_img_url}" alt="{$video_data.attr_alt}" width="145"><span class="vertical-align"></span></span></a>
                  </span>
                  <h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
                  <div class="pm-video-attr">
                     <span class="pm-video-attr-author">{$lang.articles_by} <a href="{$video_data.author_profile_href}">{$video_data.author_name}</a></span>
                     <span class="pm-video-attr-since"><small>{$lang.added} <time datetime="{$video_data.html5_datetime}" title="{$video_data.full_datetime}">{$video_data.time_since_added} {$lang.ago}</time></small></span>
                     <span class="pm-video-attr-numbers"><small>{$video_data.views_compact} {$lang.views} / {$video_data.likes_compact} {$lang._likes}</small></span>
                  </div>
                  <p class="pm-video-attr-desc">{$video_data.excerpt}</p>
                  {if $video_data.featured}
                  <span class="pm-video-li-info">
                     <span class="label label-featured">{$lang._feat}</span>
                  </span>
                  {/if}
               </div>
              </li>
            {foreachelse}
               {$lang.top_videos_msg2}
            {/foreach}
         </div><!-- .element-videos -->
<!-- .widget -->
<!-- End homeblock -->

<!-- start homeblock -->
				<div class="element-videos">

            <h2 class="upper-blue niceheading">CHANNEL VIỆT NAM SIÊU BỰA</h2>
            <ul class="pm-ul-browse-videos thumbnails" id="pm-grid">
            {get_advanced_video_list assignto="advanced_video_list" category_id=10 limit=6}
            {foreach from=$advanced_video_list key=k item=video_data}
              <li>
               <div class="pm-li-video">
                  <span class="pm-video-thumb pm-thumb-145 pm-thumb border-radius2">
                  <span class="pm-video-li-thumb-info">
                  {if $video_data.yt_length != 0}<span class="pm-label-duration border-radius3 opac7">{$video_data.duration}</span>{/if}
                  {if $video_data.mark_new}<span class="label label-new">{$lang._new}</span>{/if}
                  {if $video_data.mark_popular}<span class="label label-pop">{$lang._popular}</span>{/if}
                  </span>
                  <a href="{$video_data.video_href}" class="pm-thumb-fix pm-thumb-145"><span class="pm-thumb-fix-clip"><img src="{$video_data.thumb_img_url}" alt="{$video_data.attr_alt}" width="145"><span class="vertical-align"></span></span></a>
                  </span>
                  <h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
                  <div class="pm-video-attr">
                     <span class="pm-video-attr-author">{$lang.articles_by} <a href="{$video_data.author_profile_href}">{$video_data.author_name}</a></span>
                     <span class="pm-video-attr-since"><small>{$lang.added} <time datetime="{$video_data.html5_datetime}" title="{$video_data.full_datetime}">{$video_data.time_since_added} {$lang.ago}</time></small></span>
                     <span class="pm-video-attr-numbers"><small>{$video_data.views_compact} {$lang.views} / {$video_data.likes_compact} {$lang._likes}</small></span>
                  </div>
                  <p class="pm-video-attr-desc">{$video_data.excerpt}</p>
                  {if $video_data.featured}
                  <span class="pm-video-li-info">
                     <span class="label label-featured">{$lang._feat}</span>
                  </span>
                  {/if}
               </div>
              </li>
            {foreachelse}
               {$lang.top_videos_msg2}
            {/foreach}
         </div><!-- .element-videos -->
<!-- .widget -->
<!-- End homeblock -->

<!-- start homeblock -->
<div class="element-videos">

            <h2 class="upper-blue niceheading">CLIP ĐỘNG VẬT CÓ KHIẾU HÀI</h2>
            <ul class="pm-ul-browse-videos thumbnails" id="pm-grid">
            {get_advanced_video_list assignto="advanced_video_list" category_id=7 limit=6}
            {foreach from=$advanced_video_list key=k item=video_data}
              <li>
               <div class="pm-li-video">
                  <span class="pm-video-thumb pm-thumb-145 pm-thumb border-radius2">
                  <span class="pm-video-li-thumb-info">
                  {if $video_data.yt_length != 0}<span class="pm-label-duration border-radius3 opac7">{$video_data.duration}</span>{/if}
                  {if $video_data.mark_new}<span class="label label-new">{$lang._new}</span>{/if}
                  {if $video_data.mark_popular}<span class="label label-pop">{$lang._popular}</span>{/if}
                  </span>
                  <a href="{$video_data.video_href}" class="pm-thumb-fix pm-thumb-145"><span class="pm-thumb-fix-clip"><img src="{$video_data.thumb_img_url}" alt="{$video_data.attr_alt}" width="145"><span class="vertical-align"></span></span></a>
                  </span>
                  <h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
                  <div class="pm-video-attr">
                     <span class="pm-video-attr-author">{$lang.articles_by} <a href="{$video_data.author_profile_href}">{$video_data.author_name}</a></span>
                     <span class="pm-video-attr-since"><small>{$lang.added} <time datetime="{$video_data.html5_datetime}" title="{$video_data.full_datetime}">{$video_data.time_since_added} {$lang.ago}</time></small></span>
                     <span class="pm-video-attr-numbers"><small>{$video_data.views_compact} {$lang.views} / {$video_data.likes_compact} {$lang._likes}</small></span>
                  </div>
                  <p class="pm-video-attr-desc">{$video_data.excerpt}</p>
                  {if $video_data.featured}
                  <span class="pm-video-li-info">
                     <span class="label label-featured">{$lang._feat}</span>
                  </span>
                  {/if}
               </div>
              </li>
            {foreachelse}
               {$lang.top_videos_msg2}
            {/foreach}
         </div><!-- .element-videos -->
<!-- .widget -->
<!-- End homeblock -->

<!-- start homeblock -->
<div class="element-videos">

            <h2 class="upper-blue niceheading">CLIP BÁ ĐẠO, HÀI ĐỠ KHÔNG NỔI</h2>
            <ul class="pm-ul-browse-videos thumbnails" id="pm-grid">
            {get_advanced_video_list assignto="advanced_video_list" category_id=9 limit=6}
            {foreach from=$advanced_video_list key=k item=video_data}
              <li>
               <div class="pm-li-video">
                  <span class="pm-video-thumb pm-thumb-145 pm-thumb border-radius2">
                  <span class="pm-video-li-thumb-info">
                  {if $video_data.yt_length != 0}<span class="pm-label-duration border-radius3 opac7">{$video_data.duration}</span>{/if}
                  {if $video_data.mark_new}<span class="label label-new">{$lang._new}</span>{/if}
                  {if $video_data.mark_popular}<span class="label label-pop">{$lang._popular}</span>{/if}
                  </span>
                  <a href="{$video_data.video_href}" class="pm-thumb-fix pm-thumb-145"><span class="pm-thumb-fix-clip"><img src="{$video_data.thumb_img_url}" alt="{$video_data.attr_alt}" width="145"><span class="vertical-align"></span></span></a>
                  </span>
                  <h3 dir="ltr"><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
                  <div class="pm-video-attr">
                     <span class="pm-video-attr-author">{$lang.articles_by} <a href="{$video_data.author_profile_href}">{$video_data.author_name}</a></span>
                     <span class="pm-video-attr-since"><small>{$lang.added} <time datetime="{$video_data.html5_datetime}" title="{$video_data.full_datetime}">{$video_data.time_since_added} {$lang.ago}</time></small></span>
                     <span class="pm-video-attr-numbers"><small>{$video_data.views_compact} {$lang.views} / {$video_data.likes_compact} {$lang._likes}</small></span>
                  </div>
                  <p class="pm-video-attr-desc">{$video_data.excerpt}</p>
                  {if $video_data.featured}
                  <span class="pm-video-li-info">
                     <span class="label label-featured">{$lang._feat}</span>
                  </span>
                  {/if}
               </div>
              </li>
            {foreachelse}
               {$lang.top_videos_msg2}
            {/foreach}
         </div><!-- .element-videos -->
<!-- .widget -->
<!-- End homeblock -->
				
<!-- 			<div class="element-videos">

				<h2 class="upper-blue niceheading">{$lang.new_videos}</h2>
				<ul class="pm-ul-browse-videos thumbnails" id="pm-grid">
				{foreach from=$new_videos key=k item=video_data}
				  <li>
					<div class="pm-li-video">
						<span class="pm-video-thumb pm-thumb-145 pm-thumb border-radius2">
						<span class="pm-video-li-thumb-info">
						{if $video_data.yt_length != 0}<span class="pm-label-duration border-radius3 opac7">{$video_data.duration}</span>{/if}
						{if $video_data.mark_new}<span class="label label-new">{$lang._new}</span>{/if}
						{if $video_data.mark_popular}<span class="label label-pop">{$lang._popular}</span>{/if}
						{if $logged_in}
						<span class="watch-later hide">
							<button class="btn btn-mini watch-later-add-btn-{$video_data.id}" onclick="watch_later_add({$video_data.id}); return false;" rel="tooltip" title="{$lang.add_to} {$lang.watch_later}"><i class="icon-time"></i></button>
							<button class="btn btn-mini btn-remove hide watch-later-remove-btn-{$video_data.id}" onclick="watch_later_remove({$video_data.id}); return false;" rel="tooltip" title="{$lang.playlist_remove_item}"><i class="icon-ok"></i></button>
						</span>
						{/if}
						</span>
						<a href="{$video_data.video_href}" class="pm-thumb-fix pm-thumb-145"><span class="pm-thumb-fix-clip"><img src="{$video_data.thumb_img_url}" alt="{$video_data.attr_alt}" width="145"><span class="vertical-align"></span></span></a>
						</span>
						<h3><a href="{$video_data.video_href}" class="pm-title-link" title="{$video_data.attr_alt}">{$video_data.video_title}</a></h3>
						<div class="pm-video-attr">
							<span class="pm-video-attr-author">{$lang.articles_by} <a href="{$video_data.author_profile_href}">{$video_data.author_name}</a></span>
							<span class="pm-video-attr-since"><small>{$lang.added} <time datetime="{$video_data.html5_datetime}" title="{$video_data.full_datetime}">{$video_data.time_since_added} {$lang.ago}</time></small></span>
							<span class="pm-video-attr-numbers"><small>{$video_data.views_compact} {$lang.views} / {$video_data.likes_compact} {$lang._likes}</small></span>
						</div>
						<p class="pm-video-attr-desc">{$video_data.excerpt}</p>
						{if $video_data.featured}
						<span class="pm-video-li-info">
							<span class="label label-featured">{$lang._feat}</span>
						</span>
						{/if}
					</div>
				  </li>
				{foreachelse}
					{$lang.top_videos_msg2}
				{/foreach}
				</ul>
			</div> -->
			<!-- .element-videos -->

			<div class="clearfix"></div>
			</div><!-- #primary -->
        </div><!-- .span8 -->

        <div class="span4" id="secondary">
        {if $ad_5 != ''}
		<div class="widget">
        	<div class="pm-ad-zone" align="center">
        	<div class="homeads">{$ad_5}</div>
        	</div>
        </div><!-- .widget -->
        {/if}

<!-- Newvideos -->
        <div class="widget-related widget" id="pm-related" >
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#" data-target="#bestincategory" data-toggle="tab"><i class="fa fa-play-circle-o"></i>Hot trong tháng</a></li>
            
          </ul>
 
          <div id="pm-tabs" class="tab-content">
            <div class="tab-pane fade in active" id="bestincategory2">
                <ul class="pm-ul-top-videos">
                {get_advanced_video_list assignto="advanced_video_list" category_id=$category_id_anhtai order_by="site_views" days_ago=30 limit=12}
                {foreach from=$advanced_video_list key=k item=related_video_data}
                  <li>
                    <div class="pm-li-top-videos">
                    <span class="pm-video-thumb pm-thumb-106 pm-thumb-top border-radius2">
                    <span class="pm-video-li-thumb-info">
                    {if $related_video_data.yt_length > 0}<span class="pm-label-duration border-radius3 opac7">{$related_video_data.duration}</span>{/if}
                    {if $logged_in}
                    <span class="watch-later hide">
                        <button class="btn btn-mini watch-later-add-btn-{$related_video_data.id}" onclick="watch_later_add({$related_video_data.id}); return false;" rel="tooltip" title="{$lang.add_to} {$lang.watch_later}"><i class="icon-time"></i></button>
                        <button class="btn btn-mini btn-remove hide watch-later-remove-btn-{$related_video_data.id}" onclick="watch_later_remove({$related_video_data.id}); return false;" rel="tooltip" title="{$lang.playlist_remove_item}"><i class="icon-ok"></i></button>
                    </span>
                    {/if}
                    </span>
                    <a href="{$related_video_data.video_href}" class="pm-thumb-fix pm-thumb-145"><span class="pm-thumb-fix-clip"><img src="{$related_video_data.thumb_img_url}" alt="{$related_video_data.attr_alt}" width="145"><span class="vertical-align"></span></span></a>
                    </span>
                    <h3><a href="{$related_video_data.video_href}" class="pm-title-link">{$related_video_data.video_title}</a></h3>
                    <div class="pm-video-attr">
					
                    	<span class="pm-video-attr-numbers">
                        <small><i class="fa fa-eye"></i> {$related_video_data.views_compact}</small>
                        
                        </span>
                    
                    </div>
                    {if $related_video_data.featured}
                    <span class="pm-video-li-info">
                        <span class="label label-featured">{$lang._feat}</span>
                    </span>
                    {/if}
                    </div>
                  </li>
                {foreachelse}
                  {$lang.top_videos_msg2}
                {/foreach}
                </ul>
            </div>
            
            
          </div>
          
        </div><!-- .shadow-div -->
        <!-- End Newvideos -->

<!-- Start Original Hotvideo -->
    <!--     <div class="widget topvideo">
            <div class="btn-group btn-group-sort pm-slide-control">
            <button class="btn btn-mini prev" id="pm-slide-top-prev"><i class="pm-vc-sprite arr-l"></i></button>
            <button class="btn btn-mini next" id="pm-slide-top-next"><i class="pm-vc-sprite arr-r"></i></button>
            </div>
            <h4>{$lang.top_m_videos}</h4>
            <ul class="pm-ul-top-videos" id="pm-ul-top-videos">
			{foreach from=$top_videos key=k item=video_data}
			  <li>
				<div class="pm-li-top-videos">
				<span class="pm-video-thumb pm-thumb-106 pm-thumb-top border-radius2">
				<span class="pm-video-li-thumb-info">
				{if $video_data.yt_length != 0}<span class="pm-label-duration border-radius3 opac7">{$video_data.duration}</span>{/if}
				{if $logged_in}
				<span class="watch-later hide">
					<button class="btn btn-mini watch-later-add-btn-{$video_data.id}" onclick="watch_later_add({$video_data.id}); return false;" rel="tooltip" title="{$lang.add_to} {$lang.watch_later}"><i class="icon-time"></i></button>
					<button class="btn btn-mini btn-remove hide watch-later-remove-btn-{$video_data.id}" onclick="watch_later_remove({$video_data.id}); return false;" rel="tooltip" title="{$lang.playlist_remove_item}"><i class="icon-ok"></i></button>
				</span>
				{/if}
				</span>
				<a href="{$video_data.video_href}" class="pm-thumb-fix pm-thumb-106"><span class="pm-thumb-fix-clip"><img src="{$video_data.thumb_img_url}" alt="{$video_data.attr_alt}" width="150"><span class="vertical-align"></span></span></a>
				</span>
				<h3><a href="{$video_data.video_href}" class="pm-title-link">{$video_data.video_title}</a></h3>
				<span class="pm-video-attr-numbers"><small>{$video_data.views_compact} {$lang.views}</small></span>
				</div>
			  </li>
			{/foreach}
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- END Original Hotvideo -->
        
		<div class="widget">
			<h4>{$lang._categories}</h4>
		<ul class="pm-browse-ul-subcats">
			{dropdown_menu_video_categories max_levels=0}
        </ul>
        </div><!-- .widget -->
        
        {if ($show_tags == 1) && (count($tags) > 0)}
		<div class="widget">
			<h4>{$lang.tags}</h4>
            {foreach from=$tags item=tag key=k}
                {$tag.href}
            {/foreach}
        </div><!-- .widget -->
        {/if}
        
        {if $show_stats == 1}
        <div class="widget">
        	<h4>{$lang.site_stats}</h4>
        <ul class="pm-stats-data">
        	<li><a href="{$smarty.const._URL}/memberlist.{$smarty.const._FEXT}?do=online">{$lang.online_users}</a> <span class="pm-stats-count">{$stats.online_users}</span></li>
            <li><a href="{$smarty.const._URL}/memberlist.{$smarty.const._FEXT}">{$lang.total_users}</a> <span class="pm-stats-count">{$stats.users}</span></li>
            <li>{$lang.total_videos} <span class="pm-stats-count">{$stats.videos}</span></li>
        	<li>{$lang.videos_added_lw} <span class="pm-stats-count">{$stats.videos_last_week}</span></li>
        </ul>
		</div><!-- .widget -->
        {/if}
        
        {if $smarty.const._MOD_ARTICLE == 1}
        <div class="widget">
			<h4>{$lang.articles_latest}</h4>
            <ul class="pm-ul-home-articles" id="pm-ul-home-articles">
            {foreach from=$articles item=article key=id}
				<li {if $article.featured == '1'}class="sticky-article"{/if}>
				<article>
				{if $article.meta._post_thumb_show != ''}
				<div class="pm-article-thumb">
					<a href="{$article.link}" class="pm-title-link" title="{$article.title}"><img src="{$smarty.const._ARTICLE_ATTACH_DIR}/{$article.meta._post_thumb_show}" align="left" width="55" height="55" border="0" alt="{$article.title}"></a>
				</div>
				{/if}
				<h6 dir="ltr" class="ellipsis"><a href="{$article.link}" class="pm-title-link" title="{$article.title}">{smarty_fewchars s=$article.title length=92}</a></h6>
				<p class="pm-article-preview">
					{if $article.meta._post_thumb_show == ''}
						<span class="minDesc">{smarty_fewchars s=$article.excerpt length=130}</span>
					{else}
						<span class="minDesc">{smarty_fewchars s=$article.excerpt length=100}</span>
					{/if}
				</p>
				</article>
				</li>
            {/foreach}
            </ul>
        </div><!-- .widget -->
        {/if}
		</div><!-- .span4 -->
      </div><!-- .row-fluid -->
    </div><!-- .container-fluid -->
{include file='footer.tpl' p="index"} 