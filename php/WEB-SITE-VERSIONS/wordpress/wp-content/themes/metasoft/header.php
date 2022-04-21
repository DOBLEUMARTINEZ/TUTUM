<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php echo esc_url(get_bloginfo( 'pingback_url' )); ?>">
		<?php endif; ?>

		<?php wp_head(); ?>
	</head>
	
	<style>
		:root {
			--bs-black: #000000;
			--bs-blue: #0d6efd;
			--bs-indigo: #6610f2;
			--bs-purple: #6f42c1;
			--bs-pink: #e91e63;
			--bs-red: #f74848;
			--bs-orange: #fd7e14;
			--bs-orange-dark: #ee4a34;
			--bs-orange-dark-light: #fae4df;
			--bs-yellow: #f5a416;
			--bs-green: #4caf50;
			--bs-teal: #20c997;
			--bs-cyan: #17a2b8;
			--bs-white: #ffffff;
			--bs-gray: #eeeeee;
			--bs-gray-light: #ebeced;
			--bs-gray-dark: #979797;
			--bs-primary: #26cfe0;
			--bs-primary-dark: #0279b5;
			--bs-primary-light: #f2f8fb;
			--bs-primary-shadow: rgba(0, 136, 204, 0.3);
			--bs-secondary: #000401;
			--bs-secondary-dark: #222222;
			--bs-gray-500: #f2f2f2;
			--bs-gray-500-thumb: #c2c2c2;
			--bs-success: #28a745;
			--bs-info: #17a2b8;
			--bs-warning: #ffc107;
			--bs-danger: #dc3545;
			--bs-light: #f8f9fa;
			--bs-dark: #343a40;
			--bs-font-family: 'Sarabun', sans-serif;
			--bs-font-sans-serif: "Montserrat",system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
			--bs-font-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
			--bs-font-default: "Rubik", sans-serif;
			--bs-font-title-text: "Rubik", sans-serif;
			--bs-font-awesome: "FontAwesome";
			--bs-gradient: linear-gradient(180deg,rgba(255,255,255,0.15),rgba(255,255,255,0));
			--bs-gradient-image: linear-gradient(180deg,rgba(255,255,255,0.15),rgba(255,255,255,0));
			--bs-shadow: 2px 5px 20px rgba(0, 0, 0, .2);
			--bs-radius-defualt: 0.1875rem;
			--bs-theme-radius: 40% 60% 45% 55%/71% 67% 33% 29%;
			--bs-theme-radius-reverse: 72% 28% 56% 44%/29% 37% 63% 71%;
			--bs-transition: all .35s cubic-bezier(.645,.045,.355,1);
			--bs-transition-slow: all .55s cubic-bezier(.645,.045,.355,1);
			--bs-transition-very-slow: all .75s cubic-bezier(.645,.045,.355,1);
		}
		
	</style>
	
<body <?php body_class('header-transparent'); ?>>
<?php wp_body_open(); ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'metasoft' ); ?></a>
	
	<?php get_template_part('template-parts/sections/section','header'); ?>
	
	<div id="content" class="metasoft-content">
	