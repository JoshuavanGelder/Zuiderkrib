import { registerBlockType } from '@wordpress/blocks';
import './styles/style.scss';
import edit from './edit';
import save from './save';
import {settings, meta, name} from './slide';

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

registerBlockType( { name, ...meta }, settings );