{include file='header.tpl' p='article' tpl_name='article-category'}
<div id="category-header" class="container-fluid">
	<div class="pm-category-highlight animated fadeInLeft">
	<h1>{$article_h2}</h1>
	</div>
</div>
<div id="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				{if $cat_id > 0 && $categories.$cat_id.description}
				<div class="pm-category-description">
				{$categories.$cat_id.description}
				</div>
				<div class="clearfix"></div>
				{/if}

				{if ! is_array($articles)}
				<article class="post">
					<h1>{$articles}</h1>
				</article>
				{else}
				<ul class="pm-ul-browse-articles list-unstyled">
					{foreach from=$articles key=id item=article}
					<li{if $article.featured == '1'} class="sticky-article"{/if}>
						<article class="post">
							<header>
								{if $logged_in && $is_admin == 'yes'}
								<span class="pull-right"><a href="{$smarty.const._URL}/{$smarty.const._ADMIN_FOLDER}/article_manager.php?do=edit&id={$article.id}" rel="tooltip" title="{$lang.edit} ({$lang._admin_only})" target="_blank" class="btn btn-sm btn-default">{$lang.edit}</a></span>
								{/if}
								<h2><a href="{$article.link}" title="{$article.title}">{$article.title}</a></h2>
								<div class="entry-meta">
									<span class="entry-date"><a rel="bookmark" href="{$article.link}"><i class="fa fa-clock-o"></i> <time datetime="{$article.html5_datetime}" title="{$article.full_datetime}" pubdate>{$article.date}</time></a></span>
									<span class="entry-author"><a href="{$article.author_profile_href}"><i class="fa fa-user"></i> {$article.name}</a></span>
									<span class="entry-comments"><a href="{$article.link}#jump-comments"><i class="fa fa-comment"></i> {$article.comment_count} {$lang.comments}</a></span>
								</div>
							</header><!-- /header -->

							{if $article.restricted == '1' && ! $logged_in}
								{$lang.article_restricted_sorry}
							{else}
							<div class="entry-summary">
									{$article.content}
									<a href="{$article.link}" class="btn btn-default entry-read-more">{$lang.read_more}</a>
							</div>
							{/if}
						</article>
					</li>
					{/foreach}
				</ul>
				{/if}
				<div class="clearfix"></div>

				{if is_array($pagination)}
					{include file='item-pagination-obj.tpl' custom_class='pagination-arrows'}
				{/if}
			</div>

			<div class="col-md-4">
				<div class="widget">
				<div class="pm-section-head">
					<h4>{$lang._categories}</h4>
				</div>
				<ul class="pm-ul-list-categories list-unstyled">
				{$article_categories}
				</ul>
				</div>
			</div><!-- #sidebar -->
		</div><!-- .row -->
	</div><!-- .container -->
{include file='footer.tpl' tpl_name='article-category'}