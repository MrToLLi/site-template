<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <!-- Prefetch DNS for external assets (Twitter widgets etc). -->
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//use.typekit.net">
    <link rel="dns-prefetch" href="//platform.twitter.com">
    <link rel="dns-prefetch" href="//secure.livebookings.com">
    <link rel="dns-prefetch" href="//maps.gstatic.com">
    <link rel="dns-prefetch" href="//maps.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">


    <title><?= $title; ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="author" content="Pixelate Design" />

    <meta name="revisit-after" content="14 days" />
    <meta name="robots" content="all" />
    <meta name="generator" content="http://www.pixelatedesign.co.uk" />
    <meta name="apple-mobile-web-app-title" content="Pixelate Design">




    <!-- Mobile viewport optimized: j.mp/bplateviewport :: responsive only 
    <meta name="viewport" content="width=device-width,initial-scale=1">-->

    <link rel="stylesheet" href="/assets/css/main.css">

    <script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="/assets/js/vendor/conditionizr-2.2.0.min.js"></script>

</head>

<body id="<?= $page ?>-page" data-page="<?= $page ?>">

    <div class="page-width">

        

        <header class="l-wrap l-banner" role="banner">
          
            <a href="/" class="logo">Pixelate Template</a>

            <nav>
                <a href="/">Home</a>
            </nav>

        </header>

        

        <div class="l-main" role="main">
            
            <?= $content ?>
        </div>



        <footer class="l-footer" role="contentinfo">

        </footer>



    </div> <!-- /page-width -->



    <!-- JavaScript at the bottom for fast page loading -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

    <script type="text/javascript" src="/assets/js/plugins.js"></script>
    <script type="text/javascript" src="/assets/js/script.js"></script>
    <script>conditionizr();</script>
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

</body>
</html>