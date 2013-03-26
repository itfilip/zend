<?php

if ($this->pageCount) :

	$midRange = floor ( sizeof ( $this->pagesInRange ) / 2 );
	
	if (($this->current + $midRange) < $this->pageCount) :
		array_pop ( $this->pagesInRange );
		$display_end = true;
	endif;
	?>
	
	<div class="paginationControl<?= $this->position; ?>">
	<div class="paginationControl_showing">
		Viewing page <strong class="current"><?= $this->current; ?></strong>
		of <strong class="last"><?= $this->last; ?></strong>
	</div>
	<div class="paginationControl_pages">
	
	<!-- Previous page link -->
	 <?php if (isset($this->previous)): ?>
	 	<a href="<?php echo $this->url(array('page' => $this->previous)) . $this->query; ?>" class="previous">&lt; Previous</a> |
	 <?php else: ?>
	 	<span class="disabled">&lt; Previous</span> |
	 <?php endif; ?>
 
	 <?php if (($this->current - $midRange) > $this->first): ?>
	 	<?php array_shift($this->pagesInRange);?>
	 	<a href="<?php echo $this->url(array('page' => $this->first)) . $this->query; ?>"><?php echo $this->first ?></a>... |
	 <?php endif; ?>
 
	 <!-- Numbered page links -->
	 <?php foreach ($this->pagesInRange as $page): ?>
		 <?php if ($page != $this->current): ?>
		 	<a href="<?php echo $this->url(array('page' => $page)) . $this->query; ?>"><?= $page; ?></a> |
		 <?php else: ?>
		 	<strong><?= $page; ?></strong> |
		 <?php endif; ?>
	 <?php endforeach; ?>
	 
 	<?php if (!empty($display_end)) : ?>
 		...<a href="<?php echo $this->url(array('page' => $this->last)) . $this->query; ?>"><?php echo $this->last ?></a> |
 	<?php endif; ?>
 	
 	<!-- Next page link -->
	<?php if (isset($this->next)): ?>
		<a href="<?php echo $this->url(array('page' => $this->next)) . $this->query; ?>"class="next">Next &gt;</a>
	<?php else: ?>
		<span class="disabled">Next &gt;</span>
	<?php endif; ?>
	</div>
	</div>

<?php endif; ?>