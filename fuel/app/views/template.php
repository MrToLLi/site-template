<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">

  	<!-- Use the .htaccess and remove these lines to avoid edge case issues. More info: h5bp.com/b/378 -->
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  	<title><?= $title; ?></title>
  	<meta name="description" content="<?= $description ?>">
  	<meta name="keywords" content="<?= $keywords ?>">
  	<meta name="author" content="Pixelate Design" />

  	<!-- Mobile viewport optimized: j.mp/bplateviewport :: responsive only 
  	<meta name="viewport" content="width=device-width,initial-scale=1">-->

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  	<!-- CSS: implied media=all -->
  	<!-- CSS concatenated and minified via ant build script-->
  	<link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
  	<!-- end CSS-->

  

  	<!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  	<script src="/assets/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body id="<?= $page ?>">

  	<?= $content ?>

  	<!-- JavaScript at the bottom for fast page loading -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  	<script type="text/javascript" src="/assets/js/script.js"></script>
  	<!-- end scripts-->

  	<!-- Change UA-XXXX-Y to be your site's ID -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-XXXX-Y');
		ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->

  	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  	<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  	<![endif]-->
  
</body>
</html>