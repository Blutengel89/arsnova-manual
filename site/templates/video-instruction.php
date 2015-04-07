<?php snippet('header'); ?>
  <div id="main-content" class="container main-content" role="main">
		<h2 class="instruction-header">
				<a href="<?php echo $page->parent()->url()?>" target="_self">
					<div class="overview icon-menu pull-left"><span class="sr-only"><?php echo l('uebersicht') ?></span>
					</div>
				</a>
				<span><?php echo $page->title();?></span>
				</h2>
		<div class="text">		
		<?php echo $page->text()->kirbytext() ?>
		</div>
  </div>
<?php snippet('footer'); ?>