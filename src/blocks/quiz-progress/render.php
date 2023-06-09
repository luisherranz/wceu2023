<?php
$store = wp_store( array(
	'selectors' => array(
		'wceu2023' => array(
			'answered' => 0,
			'allAnswered' => false
		)
	)
) );
?>

<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive
>
	<div>
		<strong><?php echo __( 'Answered' ); ?></strong>: 
		<span data-wp-text="selectors.wceu2023.answered"></span>/<?php echo count( $store['state']['wceu2023']['quizzes'] ); ?>
	</div>

	<div>
		<button data-wp-bind--disabled="!selectors.wceu2023.allAnswered">
			<?php echo __( 'Check your answers' ); ?>
		</button>
	</div>

	<hr>

	<div>
		<?php echo $content; ?>
	</div>
</div>