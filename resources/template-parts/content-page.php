<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package radian
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="header sr-only">
        <h1>
		    <?php the_title(); ?>
        </h1>
	</header>

	<section>
		<?php
			the_content();
		?>
	</section><!-- .entry-content -->

</article>
