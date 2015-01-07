<?php snippet('header'); ?>
<div id="main-content" class="container main-content toggle-carousel">
		<button href="<?php echo $page->url() ?>" type="button" class="btn btn-default template pull-right"><?php echo l::get('ansicht'); ?></button>
			<h2 class="instruction-header"><a href="<?php echo $page->parent()->url()?>"><span class="overview icon-menu pull-left"><span class="sr-only"><?php echo l('uebersicht') ?></span></span></a><span><?php echo $page->title()->html(); ?></span></h2>
			<div class="container instructions">	
				<?php
					if($_COOKIE["view"] == 'list') { 
						snippet('list', array('images' => $images, 'count' => $count, 'instructions' => $instructions));
					}
					else {
						snippet('carousel', array('images' => $images, 'count' => $count, 'instructions' => $instructions));
					} ?>	
			</div>
		<a class="to-top" href="#main-content"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><span class="sr-only"><?php echo l::get('totop'); ?></span></a>		
</div>
<?php snippet('footer'); ?>