<?php if(!r::ajax()) {snippet('header');} ?>
	<div id="main-content" class="container main-content" role="main">
		<div class="btn-container">
			<div class="btn btn-default btn-icon noHover">
				<div class="icon">
					<span class="icon-<?php echo $page->icon() ?>"></span>
				</div>					    
			</div>
			<div class="btn-label">
				<h2><?php echo $page->title()->html() ?></h2>
			</div>
		</div> 
		<div class="text">	 
			 <?php echo str_replace('(\\', '(', $page->text()->kt()) ?>
		</div>
	</div>
<?php if(!r::ajax()) {snippet('footer');} ?>