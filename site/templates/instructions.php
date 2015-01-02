<?php snippet('header') ?>
<div class="container toggle-carousel">
		<!--button type="button" class="btn template"><?php echo l::get('ansicht'); ?></button-->
			<div class="container">
				<h2><?php echo $page->title()->html(); ?></h2>
				<?php
					if(cookie::get('view') == 'carousel') { 
						snippet('carousel', array('images' => $images, 'count' => $count, 'instructions' => $instructions));
					}
					else {
						snippet('list');
					} ?>	
			</div>	
		<!--a class="to-top" href="#maincontent"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><span class="sr-only"><?php echo l::get('totop'); ?></span></a-->
	</div>		
<?php snippet('footer') ?>