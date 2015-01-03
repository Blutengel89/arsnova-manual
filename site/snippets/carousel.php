<div id="carousel-example-<?php echo $page->uid();?>" class="carousel slide" data-interval="false" data-wrap="true">
	<!-- Wrapper for slides -->
	<div class="toggle-temp carousel-inner">
		<?php 
		//Loop through images and add instructions from yaml-fields for each image
			$image = $images->first();
			foreach($instructions as $instruction) :?>
				<div class="item <?php if ($count == 1): echo 'active'; endif;?>">
					<img class="screenshot" src="<?php echo $image->url() ?>" alt="<?php echo $page->title() . "-" . $count ?>" /> 
						<div class="carousel-caption">
							<?php if($instruction['instruction'] != ""): ?>
								<div class="instruction-item clearfix">	
									<span class="list-counter"><?php echo $count . ". "?></span><span class="instruction-text"><?php echo $instruction['instruction']; ?></span>
								</div>
							<?php endif ?>
							<?php if($instruction['result'] != ""): ?>
								<div class="result-text"><?php echo markdown($instruction['result']) ?></div>
							<?php endif; ?>
						</div>
				</div>
				<?php $count++; $image=$images->next();
			endforeach;?>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-<?php echo $page->uid();?>" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-<?php echo $page->uid();?>" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>		
</div>
	