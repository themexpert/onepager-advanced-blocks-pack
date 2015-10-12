#<?php echo $id?> {
	<?php if($styles['margin']): ?> margin: <?php echo $styles['margin']?>; <?php endif; ?>
	<?php if($styles['padding']): ?> padding: <?php echo $styles['padding']?>; <?php endif; ?>
	<?php if($styles['background-color']): ?> background-color: <?php echo $styles['background-color']?>; <?php endif; ?>
	<?php if($styles['background-image']): ?> 
		background-image: url(<?php echo $styles['background-image']?>); 
		background-repeat: <?php echo $styles['background-repeat']?>;
	<?php endif; ?>
}