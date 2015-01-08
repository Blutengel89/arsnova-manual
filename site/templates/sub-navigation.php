<?php if(!r::ajax()) {snippet('header');} ?>
<div id="main-content" class="container main-content">
<a class="btn btn-default pull-left home" href="<?php echo url() ?>"><span class="icon-book"></span><span><?php echo l('start') ?></span></a>
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

	<ul class="list-group">
		<?php foreach($page->children()->visible() as $child) :?>
			
				<li class="list-group-item">
				<a class="text-container noOverflow" href="<?php echo $child->url() ?>" target="_self">
						
							<?php echo $child->title() ?>
						
				</a>		
				</li>    
			
		<?php endforeach ?>  
	</ul>

</div>
<?php snippet('footer'); ?>

	