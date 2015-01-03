
<header class="header" role="navigation" aria-label="header">
    <div class="container">
    		<?php if($page->template() == 'instructions') : ?><a class="btn btn-default pull-left" href="<?php echo $page->parent()->url() ?>" role="button"><?php echo l('back') ?></a><?php endif ?>
        <a class="brand" href="<?php echo url() ?>">
        	<span class="icon-radar"></span><span class="icon-ars"></span><span class="icon-nova"></span><span><?php echo $pages->find('start')->title() ?></span>   
        </a>
        <button type="button" class="btn btn-default pull-right"><?php echo l('ansicht'); ?></button>
					<!--div class"btn-group">
					<?php if($page->hasNext()): ?> 
						<a class="btn btn-default pull-right" href="<?php echo $page->next()->url() ?>"><?php echo l('next') ?></a>
					<?php  endif; ?>
					<?php if($page->hasPrev()): ?>
						<a class="btn btn-default pull-right" href="<?php echo $page->prev()->url() ?>"><?php echo l('back') ?></a>
					<?php endif; ?>
					</div-->
        

   </div>
</header>
