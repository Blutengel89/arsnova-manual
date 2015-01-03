<?php snippet('header') ?>
<?php snippet('title-bar'); ?>
  <div class="container main-content" role="main">
  	<h2><?php echo $page->title()->html() ?></h2>
	<?php echo $page->text()->kirbytext() ?>
  </div>
<?php snippet('footer') ?>