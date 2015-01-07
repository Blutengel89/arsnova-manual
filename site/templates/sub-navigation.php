<?php if(!r::ajax()) {snippet('header');} ?>
<div id="main-content" class="container main-content">
<button class="btn btn-default pull-left home"><a href="<?php echo url() ?>"><span class="icon-book"></span><span><?php echo l('start') ?></span></a></button>
	<div class="btn-container">
		<div class="btn btn-default btn-icon center-block noHover">
			<div class="icon">
				<span class="icon-<?php echo $page->icon() ?>"></span>
			</div>					    
		</div>
		<div class="btn-label">

			<h2 class=" center-block"><?php echo strip_tags($page->title()) ?></h2>
		</div>
	</div>  
	<ul class="list-group" role="navigation">
		<?php foreach($page->children()->visible() as $child) :?>
			<a href="<?php echo $child->url() ?>" target="_self">
				<li class="list-group-item">
						<div class="text-container noOverflow">
							<span class=""><?php echo $child->title() ?></span>
						</div>
				</li>    
			</a>
		<?php endforeach ?>  
	</ul>
</div>
<?php snippet('footer'); ?>

	