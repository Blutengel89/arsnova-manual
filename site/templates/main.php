<?php snippet('header') ?>
<?php $i = 0; ?>
	<div class="container">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<?php foreach($page->children()->visible() as $child) :?>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="heading<?php echo $i ?>">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
		          <span class="icon-<?php echo $child->icon() ?>"></span><span><?php echo $child->title() ?></span>
		        </a>
		      </h4>
		    </div>
		    <div id="collapse<?php echo $i ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i ?>">
		      <div class="panel-body">
		         <?php echo $child->text()->kt() ?>
		      </div>
		    </div>
		  </div>
		<?php $i ++; endforeach ?>
		  
		</div>
	</div>
<?php snippet('footer') ?>