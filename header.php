<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<!--		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php #echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php #echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">-->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="Trauerbegleitung,Aachen,Trauerbewältigung,Beratung,Abschied,Eltern,Lehrer,Erzieher,Fortbildung,Elternabend,Kindertagesstätte,Schule" />

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>

    <body <?php body_class(); ?>>

        <!-- wrapper -->
        <div class="wrapper">
            <!-- header -->
            <div id="content">
            <header class="header">
                <div class="container">
                    <div class="navbar-toggle">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu-bars.svg" alt="toggle-menu" />
                    </div>
                    <!-- nav -->
                    <nav class="nav" role="navigation">
                        <?php html5blank_nav(); ?>
                    </nav>
                    <div class="home-btn mobile-layout">
                        <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('description'); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-btn.svg" alt="Home" />
                        </a>
                    </div>
                    <div id="brand"><a class="brand"href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('description'); ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand.svg" alt="Andrea Bruders - Trauerbegleitung" /></a></div>
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo('description'); ?>">
                            <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="<?php bloginfo('name'); ?>" class="logo-img">

                        </a>
                    </div>
                </div>
            </header>
            <!-- /header -->