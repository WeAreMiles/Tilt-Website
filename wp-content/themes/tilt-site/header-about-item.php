<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script>
		window.location = "http://www.google.com/";
	</script>
	<![endif]-->
	<script type="text/javascript">
		window.directoryURI = "<?php echo get_template_directory_uri(); ?>";
	</script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav>
        <div id="tilt--logo" class="header-item header-item--logo">
			<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/tilt-logo.png" alt="">
			</a>
        </div>


		<a id="workButton" class="header-item header-item--menu" href="<?php echo site_url(); ?>/about">About</a>
        <a id="menuButton" class="header-item header-item--menu">Menu</a>
        <a id="closeButton" class="header-item header-item--menu">Close</a>

        <div id="pageMenu" class="menu">
            <ul class="menu__items">
                <li class="menu__item"><a href="<?php echo site_url(); ?>/work">Work</a></li>
                <li class="menu__item"><a href="<?php echo site_url(); ?>/about">About</a></li>
                <li class="menu__item"><a href="<?php echo site_url(); ?>/team">Team</a></li>
                <li class="menu__item"><a href="<?php echo site_url(); ?>/news">News</a></li>
                <li class="menu__item"><a href="<?php echo site_url(); ?>/careers">Careers</a></li>
                <li class="menu__item"><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
            </ul>

            <div class="nav-icons">
				<div id="nav-icon-1" class="nav-icon"><a href="https://www.facebook.com/wearetilt" target="_blank" ></a></div>
				<div id="nav-icon-2" class="nav-icon"><a href="https://twitter.com/wearetilt" target="_blank" ></a></div>
				<div id="nav-icon-3" class="nav-icon"><a href="https://vimeo.com/wearetilt/" target="_blank" ></a></div>
				<div id="nav-icon-4" class="nav-icon"><a href="https://instagram.com/we_are_tilt" target="_blank" ></a></div>
				<div id="nav-icon-5" class="nav-icon"><a href="http://bakery.wearetilt.com/" target="_blank" ></a></div>
				<div class="telephone">
					<span>Tel: + 44(0)1273 675 700</span>
				</div>
			</div> <!-- /end nav-icons -->

        </div> <!-- /end menu -->
    </nav>
	<div class="wrapper"> <!-- Open Wrapper -->