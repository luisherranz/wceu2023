<?php
$store = wp_store( array(
	'state' => array(
		'wceu2023' => array(
			'showAnswers' => false,
		)
	),
	'selectors' => array(
		'wceu2023' => array(
			'answered' => 0,
			'allAnswered' => false,
			'correct' => "?"
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
		<strong><?php echo __( 'Correct' ); ?></strong>: 
		<span data-wp-text="selectors.wceu2023.correct"></span>
	</div>

	<div>
		<button
			data-wp-bind--hidden="state.wceu2023.showAnswers"
			data-wp-bind--disabled="!selectors.wceu2023.allAnswered"
			data-wp-on--click="actions.wceu2023.checkAnswers"
		>
			<?php echo __( 'Check your answers' ); ?>
		</button>
		<button
			data-wp-bind--hidden="!state.wceu2023.showAnswers"
			data-wp-on--click="actions.wceu2023.reset"
		>
			<?php echo __( 'Reset' ); ?>
		</button>
	</div>

	<hr>

	<div>
		<?php echo $content; ?>
	</div>
</div>