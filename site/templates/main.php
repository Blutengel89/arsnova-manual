<?php snippet('header') ?>
<?php $i = 0; ?>
	<div class="container">

	<h2><?php echo $page->title()->html() ?></h2>
	<div class="icon-button"><span class="icon-<?php echo $page->icon() ?>"></span></div>
		<div class="panel-group" role="navigation">
		<?php foreach($page->children()->visible() as $child) :?>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="heading<?php echo $i ?>">
		      <h4 class="panel-title">
		        <a href="<?php echo $child->url() ?>">
		          <span><?php echo $child->title() ?></span><span class="pull-right glyphicon glyphicon-chevron-right"></span>
		        </a>
		      </h4>
		    </div>
		  </div>
		<?php endforeach ?>  
		  
		</div>
	</div>
<?php snippet('footer') ?>