<?php snippet('header') ?>
<div id="main-content" class="container main-content toggle-carousel">
		<button type="button" class="btn btn-default template pull-right"><?php echo l::get('ansicht'); ?></button>
			<h2><a href="<?php echo $page->parent()->url()?>"><span class="overview icon-menu pull-left"><span class="sr-only"><?php echo l('uebersicht') ?></span></span></a><?php echo $page->title()->html(); ?></h2>
			<div class="container instructions">
			<?php echo (cookie::get('view')); ?>	
				<?php
					if(cookie::get('view') == 'carousel') { 
						snippet('carousel', array('images' => $images, 'count' => $count, 'instructions' => $instructions));
					}
					else {
						snippet('list');
					} ?>	
			</div>	
</div>
<?php snippet('footer') ?>