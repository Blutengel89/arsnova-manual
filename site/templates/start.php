<?php snippet('header') ?>
<?php $i = 0; ?>
	<div class="container main-content">
		<nav class="" role="navigation">
			<?php foreach($page->siblings()->visible() as $page) :?>
				<?php if($i % 2 == 0) { echo '<div class="btn-group">';} ?>
					<?php if(!$page->link()->empty()): ?>
						<a href="<?php echo $page->link() ?>">
					<?php else: ?>	
					    <a href="<?php echo $page->url() ?>">
					<?php endif ?>    
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
			<?php $i++; endforeach ?>  
		</nav>
	</div>
	<div class="gravure">
		<?php echo $site->design()->kirbytext() ?></a>
	</div>
<?php snippet('footer') ?>	