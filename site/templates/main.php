<?php snippet('header') ?>
<div class="container">
	<h2><?php echo $page->title()->html() ?></h2>
	<div class="icon-button"><span class="icon-<?php echo $page->icon() ?>"></span></div>
	<ul class="list-group" role="navigation">
		<?php foreach($page->children()->visible() as $child) :?>
			<a href="<?php echo $child->url() ?>">
				<li class="list-group-item">
						<span><?php echo $child->title() ?></span><span class="pull-right glyphicon glyphicon-chevron-right"></span>
				</li>    
			</a>
		<?php endforeach ?>  
	</ul>
</div>
<?php snippet('footer') ?>

	