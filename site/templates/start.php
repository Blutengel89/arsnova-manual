<?php snippet('header') ?>
<?php $i = 0; ?>
	<div class="container">

		<nav class="panel-group" id="accordion" role="navigation">
		<?php foreach($page->siblings()->visible() as $page) :?>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="heading<?php echo $i ?>">
		      <h4 class="panel-title">
		        <a href="<?php echo $page->url() ?>">
		          <span class="icon-<?php echo $page->icon() ?>"></span><span><?php echo $page->title() ?></span><span class="pull-right glyphicon glyphicon-chevron-right"></span>
		        </a>
		      </h4>
		    </div>
		  </div>
		<?php endforeach ?>  
		  
		</nav>
	</div>
<?php snippet('footer') ?>


<?php snippet('footer') ?>