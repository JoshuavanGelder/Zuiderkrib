import { __ } from '@wordpress/i18n';
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

export default function save( props ) {
	const { attributes } = props;

	const SliderSettings = `
	jQuery(document).ready(function( $ ) {
		$(".owl-carousel").owlCarousel({
			loop:true,
			margin:16,
			nav:true,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
			mouseDrag:false,
			responsive:{
				0:{
					items:1
				},
				1000:{
					items:2
				}
			}
		})
	});
	`;

	return (
		<div { ...useBlockProps.save() } >
			<div class="owl-carousel">
				<InnerBlocks.Content />
			</div>
			<script dangerouslySetInnerHTML={{__html: SliderSettings}}></script>
		</div>
	);
}