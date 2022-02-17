<?php

/*-----------------------------------------------------------------------------------*/
/*  Add More Option for Customizer
/*-----------------------------------------------------------------------------------*/

class Makenzie_Lite_Customize_Control extends WP_Customize_Control {

	/**
	* Render the content on the theme customizer page
	*/
	public function render_content() {
		?>
		<label style="overflow: hidden; zoom: 1;">
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<p>
				<?php
					printf( __( 'Take advandage of our %s<strong>Makenzie PRO</strong>%s. Use the coupon code <strong>"makenzie-lite"</strong> in order to get <strong>20 percent off</strong>.', 'makenzie-lite' ), '<a href="https://wplook.com/product/themes/magazines/makenzie-lifestyle-blog-magazine-wordpress-theme/?utm_source=Buy-Full&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' );
				?>
			</p>

			<p>
				<?php printf( __( '<strong>The full Version is coming with:</strong>', 'makenzie-lite' ) ); ?>
			</p>

			<ul>
				<li><?php printf( __( '- Great Support', 'makenzie-lite' ) ); ?></li>
				<li><?php printf( __( '- Child Theme', 'makenzie-lite' ) ); ?></li>
				<li><?php printf( __( '- Demo Content', 'makenzie-lite' ) ); ?></li>
				<li><?php printf( __( '- Nice Slider', 'makenzie-lite' ) ); ?></li>
				<li><?php printf( __( '- WooCommerce Integration', 'makenzie-lite' ) ); ?></li>
				<li><?php printf( __( '- Custom Logo', 'makenzie-lite' ) ); ?></li>
				<li><?php printf( __( '- Advanced Theme Options', 'makenzie-lite' ) ); ?></li>
				<li><?php printf( __( '- %sand much more...%s', 'makenzie-lite' ), '<a href="https://wplook.com/product/themes/magazines/makenzie-lifestyle-blog-magazine-wordpress-theme/?utm_source=Buy-Full&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></li>
			</ul>

			<span class="customize-control-title"><?php _e( 'Looking for Premium themes?', 'makenzie-lite' ); ?></span>

			<p>
				<span class="customize-control-title"><?php printf( __( 'MorningTime WordPress Theme - %sRead More%s', 'makenzie-lite' ) , '<a href="https://wplook.com/product/themes/personal/personal-blog-wordpress-theme/?utm_source=view_morningtime&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></span>
			</p>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/morning-time.jpg" alt="MorningTime">
			<br />

			<p>
				<span class="customize-control-title"><?php printf( __( 'FamilyBlog WordPress Theme - %sRead More%s', 'makenzie-lite' ) , '<a href="https://wplook.com/product/themes/personal/create-family-blog-wordpress-theme/?utm_source=view_family_blog&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></span>
			</p>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/family-blog.jpg" alt="FamilyBlog">
			<br />

			<p>
				<span class="customize-control-title"><?php printf( __( 'Makenzie WordPress Theme - %sRead More%s', 'makenzie-lite' ) , '<a href="https://wplook.com/product/themes/magazines/makenzie-lifestyle-blog-magazine-wordpress-theme/?utm_source=view_makenzie&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></span>
			</p>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/makenzie.jpg" alt="Makenzie">
			<br />

			<p>
				<span class="customize-control-title"><?php printf( __( 'Studio 8 WordPress Theme - %sRead More%s', 'makenzie-lite' ) , '<a href="https://wplook.com/product/themes/business/studio-8-agency-wordpress-theme/?utm_source=view_studio8&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></span>
			</p>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/studio8.jpg" alt="Studio 8">
			<br />

			<p>
				<span class="customize-control-title"><?php printf( __( 'Charity WordPress Theme - %sRead More%s', 'makenzie-lite' ) , '<a href="https://wplook.com/product/themes/non-profit/charity-nonprofit-wordpress-theme/?utm_source=view_charity&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></span>
			</p>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/charity.jpg" alt="Charity">
			<br />

			<p>
				<span class="customize-control-title"><?php printf( __( 'Event WordPress Theme - %sRead More%s', 'makenzie-lite' ) , '<a href="https://wplook.com/product/themes/conference-events/event-wordpress-theme/?utm_source=view_event&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></span>
			</p>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event.jpg" alt="Event">
			<br />

			<p>
				<span class="customize-control-title"><?php printf( __( 'Health & Medical WordPress Theme - %sRead More%s', 'makenzie-lite' ) , '<a href="https://wplook.com/product/themes/business/medical-wordpress-theme/?utm_source=view_medical&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></span>
			</p>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/medical.jpg" alt="Health & Medical ">
			<br />

			<p>
				<span class="customize-control-title"><?php printf( __( 'StereoClub WordPress Theme - %sRead More%s', 'makenzie-lite' ) , '<a href="https://wplook.com/product/themes/music-band/stereoclub-nightclub-band-wordpress-theme/?utm_source=view_stereoclub&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></span>
			</p>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/stereoclub.jpg" alt="StereoClub ">
			<br />

			<p>
				<span class="customize-control-title"><?php printf( __( 'The Architect WordPress Theme - %sRead More%s', 'makenzie-lite' ) , '<a href="https://wplook.com/product/themes/business/architect-wordpress-theme/?utm_source=view_the_architect&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' ); ?></span>
			</p>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/thearchitect.jpg" alt="The Architect ">
			<br />

			<p>
				<?php
					printf( __( 'Browse more %sWordPress Theme%s', 'makenzie-lite' ), '<a href="https://wplook.com/wordpress/themes/?utm_source=browse_more&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' );
				?>
			</p>

			<span class="customize-control-title"><?php _e( 'Need Help?', 'makenzie-lite' ); ?></span>
			<p>
				<?php
					printf( __( '%sContact us!%s', 'makenzie-lite' ), '<a href="https://wplook.com/help/?utm_source=contact_us&utm_medium=link&utm_campaign=Makenzie-Lite">', '</a>' );
				?>
			</p>
		</label>
		<?php
	}
}

?>
