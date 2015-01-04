<?php snippet('header') ?>
<div class="container content toggle-carousel">
		<!--button type="button" class="btn template"><?php echo l::get('ansicht'); ?></button-->
			<h2><?php echo $page->title()->html(); ?></h2>
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