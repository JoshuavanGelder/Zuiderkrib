import { __ } from '@wordpress/i18n';
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

export default function save( props ) {
	const { attributes } = props;

	return (
		<div { ...useBlockProps.save() } >
			<div class="mooore-slider-wrapper">
				<InnerBlocks.Content />
			</div>
		</div>
	);
}