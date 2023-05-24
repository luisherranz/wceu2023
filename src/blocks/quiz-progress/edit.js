import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { InnerBlocks } from '@wordpress/block-editor';

export default function Edit() {
	return (
		<div { ...useBlockProps() }>
			<div>
				<strong>{ __( 'Exercises', 'wceu2023' ) }: </strong> 3
			</div>
			<div>
				<strong>{ __( 'Answered', 'wceu2023' ) }: </strong> 0
			</div>
			<hr />
			<InnerBlocks />
		</div>
	);
}
