<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Farmakit · @yield('title')</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="/dist/css/theme.min.css">
        <script src="/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @yield('content')
        
        <script src="/src/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
