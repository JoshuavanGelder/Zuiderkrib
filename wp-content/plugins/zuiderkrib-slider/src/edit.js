import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

export default function edit() {
	return (
		<p { ...useBlockProps() }>
			{ __(
				'Zuiderkrib Slider – hello from the editor!',
				'zuiderkrib-slider'
			) }
		</p>
	);
}
