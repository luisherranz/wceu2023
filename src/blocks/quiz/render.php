<?php
$unique_id = substr(uniqid(), -5);
?>

<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive
	data-wp-context='{ "wceu2023": { "id": "<?php echo $unique_id; ?>" } }'
>
	<div>
		<strong>
			<?php echo __( 'Question' ) . ": "; ?>
		</strong>

		<?php echo $attributes[ 'question' ]; ?>

		<button
			data-wp-on--click="actions.wceu2023.toggle"
			data-wp-bind--aria-expanded="selectors.wceu2023.isOpen"
			aria-controls="quiz-<?php echo $unique_id; ?>"
		>
			<?php echo __( 'Open' ); ?>
		</button>
	</div>

	<div
		data-wp-bind--hidden="!selectors.wceu2023.isOpen"
		id="quiz-<?php echo $unique_id; ?>"
	>
		<?php if ( $attributes['typeOfQuiz'] == 'boolean' ): ?>
			<button>
				<?php echo __( 'Yes' ); ?>
			</button>
			<button>
				<?php echo __( 'No' ); ?>
			</button>

		<?php elseif ( $attributes['typeOfQuiz'] === 'input'): ?>
			<input type="text">

		<?php endif; ?>
	</div>
</div>
