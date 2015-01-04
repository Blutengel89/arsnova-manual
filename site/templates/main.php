<?php snippet('header') ?>
<div class="container main-content">
	<div class="btn-container">
		<div class="btn btn-default btn-icon">
			<div class="icon">
				<span class="icon-<?php echo $page->icon() ?>"></span>
			</div>					    
		</div>
		<div class="btn-label">
			<h2><?php echo $page->title() ?></h2>
		</div>
	</div>  
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

	