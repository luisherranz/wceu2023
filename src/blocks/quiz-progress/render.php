<?php
$store = wp_interactivity_state(
	'wceu2023',
	array(
		'answered'    => 0,
		'allAnswered' => false,
		'showAnswers' => false,
	)
);

?>

<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive="wceu2023"
>
	<div>
		<strong>
			<?php echo esc_html_e( 'Answered' ); ?>
		</strong>
		<span data-wp-text="selectors.answered"></span>/<?php echo count( $store['quizzes'] ); ?>
	</div>

	<div>
		<strong><?php echo __( 'Correct' ); ?></strong>:  <span data-wp-text="selectors.correct"></span>
		<span data-wp-bind--hidden="!selectors.allCorrect">
			<?php echo __( 'All correct, congratulations! 🎉' ); ?>
		</span>
	</div>
	<div>
		<button
			data-wp-bind--disabled="!selectors.allAnswered"
			data-wp-on--click="actions.checkAnswers"
			data-wp-bind--hidden="state.showAnswers"
		>
			<?php echo __( 'Check your answers' ); ?>
		</button>
		<button
			data-wp-bind--hidden="!state.showAnswers"
			data-wp-on--click="actions.reset"
		>
			<?php echo __( 'Reset' ); ?>
		</button>
	</div>

	<hr>

	<div>
		<?php echo $content; ?>
	</div>
</div>
