{include file='header.tpl' p="general" tpl_name="video-category"}
<div id="category-header" class="container-fluid">
	<div class="pm-category-highlight animated fadeInLeft">
		<h1>{$gv_category_name}</h1>
	</div>
	{if ! empty($list_subcats)}
	<div class="row pm-category-header-subcats">
		<div class="col-md-12">
			<div class="pm-category-subcats">
				<h5>{$lang.related_cats}</h5>
 				<ul class="list-inline">
					{$list_subcats} 
				</ul>
			</div>
		</div>
	</div>
	{/if}
</div>
<div id="content">
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">

		{if ! empty($results)}
			<div class="pm-section-head">
				<div class="btn-group btn-group-sort">
					<a class="btn btn-default" id="show-grid" rel="tooltip" title="{$lang._grid}"><i class="fa fa-th"></i></a>
					<a class="btn btn-default" id="show-list" rel="tooltip" title="{$lang._list}"><i class="fa fa-th-list"></i></a>
					<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-target="#">
					{if $gv_sortby == ''}{$lang.sorting}{/if} {if $gv_sortby == 'date'}{$lang.date}{/if}{if $gv_sortby == 'views'}{$lang.views}{/if}{if $gv_sortby == 'rating'}{$lang.rating}{/if}{if $gv_sortby == 'title'}{$lang.title}{/if}
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						{if $smarty.const._SEOMOD == '1'}
		                <li {if $gv_sortby == 'date'}class="selected"{/if}>
		                <a href="{$smarty.const._URL}/{$gv_cat}/trang-{$gv_pagenumber}/date" rel="nofollow">{$lang.date}</a></li>
		                <li {if $gv_sortby == 'views'}class="selected"{/if}>
		                <a href="{$smarty.const._URL}/{$gv_cat}/trang-{$gv_pagenumber}/views" rel="nofollow">{$lang.views}</a></li>
		                <li {if $gv_sortby == 'rating'}class="active"{/if}>
		                <a href="{$smarty.const._URL}/{$gv_cat}/trang-{$gv_pagenumber}/rating" rel="nofollow">{$lang.rating}</a></li>
		                <li {if $gv_sortby == 'title'}class="active"{/if}>
		                <a href="{$smarty.const._URL}/{$gv_cat}/trang-{$gv_pagenumber}/title" rel="nofollow">{$lang.title}</a></li>
		                {else}
		                <li {if $gv_sortby == 'date'}class="selected"{/if}>
		                <a href="{$smarty.const._URL}/category.php?cat={$gv_cat}&page={$gv_pagenumber}&sortby=date" rel="nofollow">{$lang.date}</a></li>
		                <li {if $gv_sortby == 'views'}class="selected"{/if}>
		                <a href="{$smarty.const._URL}/category.php?cat={$gv_cat}&page={$gv_pagenumber}&sortby=views" rel="nofollow">{$lang.views}</a></li>
		                <li {if $gv_sortby == 'rating'}class="selected"{/if}>
		                <a href="{$smarty.const._URL}/category.php?cat={$gv_cat}&page={$gv_pagenumber}&sortby=rating" rel="nofollow">{$lang.rating}</a></li>
		                <li {if $gv_sortby == 'title'}class="selected"{/if}>
		                <a href="{$smarty.const._URL}/category.php?cat={$gv_cat}&page={$gv_pagenumber}&sortby=title" rel="nofollow">{$lang.title}</a></li>
		    			{/if}
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>

			{if $gv_category_description}
				<div class="pm-category-description">
				{$gv_category_description}
				</div>
			{/if}

			<ul class="row pm-ul-browse-videos list-unstyled" id="pm-grid">
			{foreach from=$results key=k item=video_data}
				<li class="col-xs-6 col-sm-4 col-md-3">
				{include file='item-video-obj.tpl'}
				</li>
			{/foreach}
			</ul>
			<div class="clearfix"></div>

			{if is_array($pagination)}
				{include file='item-pagination-obj.tpl' custom_class='pagination-arrows'}
			{/if}

		{else}
			<div class="row">
				<div class="col-md-12 text-center">
					<p></p>
					<p>{$lang.browse_msg2}</p>
				</div>
			</div>
		{/if}


		</div><!-- #content -->
		</div><!-- .row -->
	</div><!-- .container -->
{include file="footer.tpl" tpl_name="video-category"}