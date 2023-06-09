<?php
$store = wp_store();
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
	<div>
		<strong>
			<?php echo __( 'Exercises' ); ?>: 
		</strong>
		<?php echo count( $store['state']['wceu2023']['quizzes'] ); ?>
	</div>

	<hr>

	<div>
		<?php echo $content; ?>
	</div>
</div>