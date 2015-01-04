<?php snippet('header') ?>
<div id="main-content" class="container main-content toggle-carousel">
		<button type="button" class="btn template"><?php echo l::get('ansicht'); ?></button>
			<h2><a href="<?php echo $page->parent()->url()?>"><span class="overview icon-menu pull-left"><span class="sr-only"><?php echo l('uebersicht') ?></span></span></a><?php echo $page->title()->html(); ?></h2>
			<div class="container instructions">
				
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