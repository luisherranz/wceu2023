<?php
$unique_id = wp_unique_id( 'quiz-' );

wp_interactivity_state(
	'wceu2023',
	array(
		'openText'    => __( 'Open' ),
		'closeText'   => __( 'Close' ),
		'selected'    => null,
		'isOpen'      => false,
		'toggleText'  => __( 'Open' ),
		'isActive'    => false,
		'inputAnswer' => '',
		'quizzes'     => array(
			$unique_id => array(
				'current' => null,
				'correct' => $attributes['answer'],
			),
		),
	)
);

$context = array(
	'id'     => $unique_id,
	'answer' => null,
);
?>

<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive="wceu2023"
	data-wp-on--keydown="actions.closeOnEsc"
	<?php echo wp_interactivity_data_wp_context( $context ); ?>
>
	<div>
		<strong>
			<?php echo __( 'Question' ) . ': '; ?>
		</strong>

		<?php echo $attributes['question']; ?>

		<button
			data-wp-on--click="actions.toggle"
			data-wp-bind--aria-expanded="state.isOpen"
			aria-controls="<?php echo esc_attr( $unique_id ); ?>"
			data-wp-text="state.toggleText"
		></button>
	</div>

	<div
		data-wp-bind--hidden="!state.isOpen"
		id="<?php echo esc_attr( $unique_id ); ?>"
	>
		<?php if ( $attributes['typeOfQuiz'] === 'boolean' ) : ?>
			<button
				data-wp-context='{ "thisAnswer": true }'
				data-wp-watch="callbacks.focusOnOpen"
				data-wp-on--click="actions.answerBoolean"
				data-wp-class--active="state.isActive"
			>
				<?php echo __( 'Yes' ); ?>
			</button>
			<button
				data-wp-context='{ "thisAnswer": false }'
				data-wp-on--click="actions.answerBoolean"
				data-wp-class--active="state.isActive"
			>
				<?php echo __( 'No' ); ?>
			</button>

		<?php elseif ( $attributes['typeOfQuiz'] === 'input' ) : ?>
			<input
				type="text"
				data-wp-watch="callbacks.focusOnOpen"
				data-wp-on--input="actions.answerInput"
				data-wp-bind--value="state.inputAnswer"
			/>

		<?php endif; ?>
	</div>
</div>
