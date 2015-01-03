<?php snippet('header') ?>
<?php snippet('title-bar'); ?>
<div class="container">
	<h2><?php echo $page->title()->html() ?></h2>
	<div class="icon-button"><span class="icon-<?php echo $page->icon() ?>"></span></div>
	<ul class="list-group" role="navigation">
		<?php foreach($page->children()->visible() as $child) :?>
			<a href="<?php echo $child->url() ?>">
				<li class="list-group-item">
						<div class="text-container noOverflow">
							<span class=""><?php echo $child->title() ?></span>
						</div>
				</li>    
			</a>
		<?php endforeach ?>  
	</ul>
</div>
<?php snippet('footer') ?>

	