<?php snippet('header') ?>
  <div class="container main-content" role="main">
		<h2>
			<a href="<?php echo $page->parent()->url()?>">
				<span class="overview icon-menu pull-left"><span class="sr-only"><?php echo l('uebersicht') ?></span>
				</span>
			</a>
			<?php echo $page->title(); //snippet('switch'); ?>
			</h2>
	<?php echo $page->text()->kirbytext() ?>
  </div>
<?php snippet('footer') ?>