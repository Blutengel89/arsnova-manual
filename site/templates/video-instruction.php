<?php if(!r::ajax()) {snippet('header');} ?>
  <div id="main-content" class="container main-content" role="main">
		<h2>
				<a href="<?php echo $page->parent()->url()?>">
					<span class="overview icon-menu pull-left"><span class="sr-only"><?php echo l('uebersicht') ?></span>
					</span>
				</a>
				<?php echo $page->title();?>
				</h2>
		<div class="text">		
		<?php echo $page->text()->kirbytext() ?>
		</div>
  </div>
<?php snippet('footer'); ?>