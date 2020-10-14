<!doctype html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>Junior Miller</title>

		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Facebook Pixel Code -->
			<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '849049748955143');
			fbq('track', 'PageView');
			</script>
			<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=849049748955143&ev=PageView&noscript=1"
			/></noscript>
		<!-- End Facebook Pixel Code -->


	
        <?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>