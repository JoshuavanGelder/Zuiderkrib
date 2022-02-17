<?php

	/**
	 * Template part for displaying header 3
	 *
	 * @link https://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package makenzie_lite
	 */
?>
<div class="site-header-links header-2-links">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-2 medium-3 text-center"></div>
			<div class="cell small-8 medium-6 text-center">
				<?php
					if ( has_custom_logo() ) :
					$makenzie_custom_logo_id = get_theme_mod( 'custom_logo' );
					$makenzie_image = wp_get_attachment_image_src( $makenzie_custom_logo_id , 'full' );
				?>

				<a class="custom-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="custom-logo" src="<?php echo $makenzie_image[0] ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
				</a>

				<?php elseif ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php
					$makenzie_description = get_bloginfo( 'description', 'display' );
					if ( $makenzie_description || is_customize_preview() ) :
				?>
					<p class="site-description text-center"><?php echo $makenzie_description; ?></p>
				<?php endif; ?>
			</div>
			<div class="cell small-2 medium-3 text-center"></div>

		</div>
	</div>
</div>
