<?php

/**
 * Template Name: Links
 */

get_header( 'links' ); ?>

<?php
$makenzie_social_on_off = makenzie_lite_get_theme_mod( 'social_on_off', 'on' );
$makenzie_header_facebook = makenzie_lite_get_theme_mod( 'header_facebook', '' );
$makenzie_header_twitter = makenzie_lite_get_theme_mod( 'header_twitter', '' );
$makenzie_header_instagram = makenzie_lite_get_theme_mod( 'header_instagram', '' );
$makenzie_header_pinterest = makenzie_lite_get_theme_mod( 'header_pinterest', '' );
$makenzie_header_behance = makenzie_lite_get_theme_mod( 'header_behance', '' );
$makenzie_header_etsy = makenzie_lite_get_theme_mod( 'header_etsy', '' );
$makenzie_header_youtube = makenzie_lite_get_theme_mod( 'header_youtube', '' );
?>

	<div id="primary" class="content-area small-12 column">
		<main id="main" class="site-main text-center">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'links' );
				// If comments are open or we have at least one comment, load up the comment template.
			endwhile; // End of the loop.
			?>
				<ul class="social-links">
					<?php if ( $makenzie_header_facebook ) :  ?>
						<li class="facebook">
							<a href="<?php echo esc_url( $makenzie_header_facebook ); ?>"><i class="fab fa-facebook-f"></i><?php _e( 'Facebook', 'makenzie-lite' ); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $makenzie_header_twitter ) :  ?>
						<li class="twitter">
							<a href="<?php echo esc_url( $makenzie_header_twitter ); ?>"><i class="fab fa-twitter"></i><?php _e( 'Twitter', 'makenzie-lite' ); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $makenzie_header_instagram ) :  ?>
						<li class="instagram">
							<a href="<?php echo esc_url( $makenzie_header_instagram ); ?>"><i class="fab fa-instagram"></i><?php _e( 'Instagram', 'makenzie-lite' ); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $makenzie_header_pinterest ) :  ?>
						<li class="pinterest">
							<a href="<?php echo esc_url( $makenzie_header_pinterest ); ?>"><i class="fab fa-pinterest"></i><?php _e( 'Pinterest', 'makenzie-lite' ); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $makenzie_header_behance ) :  ?>
						<li class="behance">
							<a href="<?php echo esc_url( $makenzie_header_behance ); ?>"><i class="fab fa-behance"></i><?php _e( 'Behance', 'makenzie-lite' ); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $makenzie_header_etsy ) :  ?>
						<li class="etsy">
							<a href="<?php echo esc_url( $makenzie_header_etsy ); ?>"><i class="fab fa-etsy"></i><?php _e( 'Etsy', 'makenzie-lite' ); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $makenzie_header_youtube ) :  ?>
						<li class="youtube">
							<a href="<?php echo esc_url( $makenzie_header_youtube ); ?>"><i class="fab fa-youtube"></i><?php _e( 'YouTube', 'makenzie-lite' ); ?></a>
						</li>
					<?php endif; ?>
				</ul>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer( 'links' );
