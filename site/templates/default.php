<?php snippet('header') ?>
  <div class="container" role="main">
    <div>
	    <h2><?php echo $page->title()->html() ?></h1>
	    <div class="icon-button"><span class="icon-<?php echo $page->icon() ?>"></span></div>
	    <?php echo $page->text()->kirbytext() ?>
    </div>
  </div>