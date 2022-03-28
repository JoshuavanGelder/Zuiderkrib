import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import edit from './edit';
import save from './save';

registerBlockType( 'slider/zuiderkrib-slider', {
	attributes: {
		blockId: {
			type: 'string'
		},
		sliderSpeed: {
			type: 'number',
			default: 300
		},
		sliderSlidesPerView: {
			type: 'number',
			default: 1
		},
		align: {
			type: 'string',
			default: 'full'
		}
	},
	edit,
	save,
} );
