<?php snippet('header'); ?>
	<div id="main-content" class="container main-content" role="main">
	<a class="btn btn-default pull-left home" href="<?php echo url() ?>"><span class="icon-book"></span><span><?php echo l('start') ?></span></a>
		<div class="btn-container">
			<div class="btn btn-default btn-icon noHover">
				<div class="icon">
					<span class="icon-<?php echo $page->icon() ?>"></span>
				</div>					    
			</div>
			<div class="btn-label">
				<h2><?php echo $page->title() ?></h2>
			</div>
		</div> 
		<div class="text">	 
		<?php echo $page->text()->kirbytext() ?>
		</div>
	</div>
<?php snippet('footer'); ?>