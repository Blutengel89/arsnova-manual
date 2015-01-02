<div id="carousel-example-<?php echo $page->uid();?>" class="carousel slide" data-interval="false" data-wrap="true">
<!-- Wrapper for slides -->
	<div class="toggle-temp">
		<?php
			a::show($instructions);
			$image=$images->first();
			//Loop through images and add instructions from yaml-fields for each image
				foreach($instructions as $instruction) : ?>
					<div class="item <?php if ($count==1): echo 'active'; endif;?>">
							<div class="carousel-caption">
								<?php if($instruction['instruction'] != ""): ?>
									<span class="number"><?php echo $count ?>.&nbsp;</span><?php $action = markdown($instruction['Action']); echo $action ?>
								<?php endif ?>
								<?php if($instruction['result'] != ""): ?>
									<div><?php echo markdown($instruction['Details']) ?></div>
								<?php endif; ?>
							</div>
						<img class="screenshot" src="<?php echo $image->url() ?>" alt="<?php echo $page->url_key() . "-" . $count ?>" /> 
					</div>
					<?php 
						$count++; 
						$image=$images->next(); 	
				endforeach; ?>
	</div>
	<!-- Controls -->
	<a class="left carousel-control hidden" href="#carousel-example-<?php echo $page->uid();?>" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control hidden" href="#carousel-example-<?php echo $page->uid();?>" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>