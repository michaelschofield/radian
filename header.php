<?php
/**
 * # Here is where we markup our header, which includes all the styles and metadata in the `<head>`
 * # in addition to Radian's logo and top menu.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package radian
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php
    /**
     * `wp_head()` is a workhorse that, among other things, pulls in all of the stylesheets we enqueued
     * in `functions.php`.
     */
    wp_head();
    ?>

</head>

<body <?php body_class('radian'); ?>>

	<a class="sr-only" href="#content">
        <?php esc_html_e( 'Skip to content', 'radian' ); ?>
    </a>

	<header class="align-items-start d-flex">

        <!--
        # We are hiding our site's title and its description, but it's important for
        # discovery as well as accessibility that we include them.
        -->
        <?php
        if ( is_front_page() && is_home() ) : ?>
            <h1 class="sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
            <p class="sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
        endif;

        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) : ?>
            <p class="sr-only"><?php echo $description; ?></p>
            <?php
        endif; ?>

        <!--
        # Our logo. These are two separate `<svg>` blocks so that we can style them a little more easily.
        # For instance, whether we want to reorganize it based on screen size.
        -->
        <a class="align-items-center col-2 d-flex radian__logo pl-0" href="<?php echo esc_url( home_url('/') ); ?>">

            <span class="sr-only">Home</span>

            <svg aria-labelledby="radianCircles radianCirclesDescription" class="col pl-0 pr-3" viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg">

                <title id="radianCircles">Circles</title>
                <desc id="radianCirclesDescription">Circles inset in circles as if radiating outward.</desc>

                <g transform="translate(-25 1)" stroke="#ED6449" stroke-width="3" fill="none" fill-rule="evenodd">
                    <circle opacity=".9" cx="100.3" cy="73.9" r="73.2"/>
                    <circle opacity=".5" cx="100.3" cy="73.9" r="55.5"/>
                    <circle opacity=".3" cx="100.3" cy="73.9" r="47.5"/>
                    <circle opacity=".7" cx="100.3" cy="73.9" r="65"/>
                    <circle opacity=".2" cx="100.3" cy="73.9" r="38.2"/>
                </g>

            </svg>

            <svg aria-labelledby="radianLogo" class="col-8 p-0" viewBox="0 0 198 35" xmlns="http://www.w3.org/2000/svg">

                <title id="radianLogo">Radian</title>

                <g fill-rule="nonzero" fill="#ED6449">
                    <path d="M.2.4h9.4C15.5.4 20 3.9 20 9.7c0 4.6-2.9 8-7.4 8.8l9.2 15.9H18L9.5 19h-6v15.4H.3V.4H.2zm10 15.4c3.8-.2 6.6-2.2 6.6-6.2 0-4.1-3.1-6.4-7.2-6.4H3.4v12.6h6.8zM45.1.3h2.5l12.5 34h-3.5L54 26.9H38.6L36 34.3h-3.5L45.1.3zm7.8 23.5L46.3 5l-6.6 18.8h13.2zM74.1.3h8.4c10.9 0 17 6.1 17 17.2 0 10.7-6.2 16.7-17 16.7h-8.3V.3h-.1zm7.8 31c8 0 14.4-4.5 14.4-14 0-8.9-4.7-14.1-13.9-14.1h-5v28.2h4.5v-.1zM114.9.3h3.2v34h-3.2M144.8.3h2.5l12.5 34h-3.5l-2.6-7.4h-15.4l-2.6 7.4h-3.5l12.6-34zm7.8 23.5L146 5l-6.6 18.8h13.2zM173.8.3h5.4l14.7 31.5V.3h3.2v34h-5.5L177 2.8v31.5h-3.3V.3"/>
                </g>

            </svg>

        </a>

		<nav class="col d-flex justify-content-end" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'radian' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
