import { __ } from '@wordpress/i18n';
import { InnerBlocks, useBlockProps, InspectorControls, } from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
import { useState, useRef } from 'react';
// import { SliderSettings } from './components/inspector/SliderSettings';
import './styles/editor.scss';

const template = [
    ['slider/slide', {}],
    ['slider/slide', {}],
    ['slider/slide', {}],
];

export default function edit( props ) {
	const blockProps = useBlockProps();
	const { attributes, setAttributes } = props;

	return (
		<div {...blockProps}>
			<InspectorControls>
				{/* <SliderSettings
					sliderSlidesPerView={sliderSlidesPerView}
					sliderSpeed={sliderSpeed}
					setAttributes={setAttributes}
				/> */}
			</InspectorControls>
			<InnerBlocks template={template} allowedBlocks={['slider/slide']} />
		</div>
	);
}
