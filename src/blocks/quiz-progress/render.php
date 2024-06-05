<?php
$state = wp_interactivity_state(
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
		<span data-wp-text="state.answered"></span>/<?php echo count( $state['quizzes'] ); ?>
	</div>

	<div>
		<strong><?php echo __( 'Correct' ); ?></strong>:  <span data-wp-text="state.correct"></span>
		<span data-wp-bind--hidden="!state.allCorrect">
			<?php echo __( 'All correct, congratulations! 🎉' ); ?>
		</span>
	</div>
	<div>
		<button
			data-wp-bind--disabled="!state.allAnswered"
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
