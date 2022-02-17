<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Makenzie_Blog
 */

?>

<!-- Post Thumbnail -->
<?php if ( has_post_thumbnail() ) : ?>
	<div class="post-thumb">
		<?php the_post_thumbnail(); ?>
	</div>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>
	<div class="entry-content-links">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
