<div
	<?php echo get_block_wrapper_attributes(); ?>
	data-wp-interactive
	data-wp-context='{ "wceu2023": { "isOpen": false } }'
>
	<div>
		<strong>
			<?php echo __( 'Question' ) . ": "; ?>
		</strong>

		<?php echo $attributes[ 'question' ]; ?>

		<button data-wp-on--click="actions.wceu2023.toggle">
			<?php echo __( 'Open' ); ?>
		</button>
	</div>

	<div data-wp-bind--hidden="!context.wceu2023.isOpen">
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
