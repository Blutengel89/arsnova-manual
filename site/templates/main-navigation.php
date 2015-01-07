<?php snippet('header') ?>
<?php $i = 0; ?>
	<div id="main-content" class="container main-content">
		<nav class="" role="navigation">
			<?php foreach($page->siblings()->visible() as $page) :?>
				<?php if($i % 2 == 0) { echo '<div class="btn-group">';} ?>
					<a href="<?php echo $page->url() ?>" target="_self">  
				    	<div class="btn-container">
						    <div class="btn btn-default btn-icon">
							    <div class="icon">
							    	<span class="icon-<?php echo $page->icon() ?>"></span>
						    	</div>					    
							</div>
							    <div class="btn-label">
							        <span><?php echo $page->title() ?></span>
							    </div>
						</div>
				    </a>
			    <?php if($i % 2 != 0) {echo '</div>';} ?>
			    <?php if($i % 2 == 0 && ($page->hasNextVisible() == false)) { echo '<div class="btn-group">';} ?>
			<?php $i++; endforeach ?>  
		</nav>
		
		<div class="gravure">
			<?php echo $site->design()->kirbytext() ?>
		</div>
	</div>	
<?php snippet('footer') ?>	