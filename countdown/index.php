<?php  include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/header.php'; ?>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!DOCTYPE html>
<html lang="en-US">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>
            Odpočet do začátku <?php echo $nameOfEvent ;?> v Rudici
        </title>
        <style type="text/css">
            @font-face{
                font-family: 'Trebuchet MS';
                src: url('/fonts/TrebuchetMS.ttf');
            }

            div{
                font-family: Trebuchet MS, 'Open Sans', sans-serif;
                font-weight: bold;
            }
            .sub-title{
                font-family: Trebuchet MS, 'Open Sans',  sans-serif;
                font-weight: bold;
                color: black;
            }

        </style>
        <meta property="og:title" content="Odpočet do začátku pálení čarodějnic 2018 v Rudici" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="https://carodky.buchticka.eu/countdown" />
        <meta property="og:image" content="https://carodky.buchticka.eu/countdown/images/background.jpg" />
        <meta property="og:description" content="Těšíme se na Vás!" />
        <meta property="fb:app_id" content="website" />
        
        <!-- Behavioral Meta Data -->
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Core Meta Data -->
        <meta content="ThemeWagon" name="author">
        <meta content="The most spectacular coming soon template!" name="description">
        <meta content="Comming Soon, Responsive, Landing Page, One Page" name="keywords"><!-- Open Graph Meta Data -->
        <meta content="The most spectacular coming soon template!">
        <meta content="ThemeWagon">
        <meta content="ThemeWagon">
        <meta content="website">
        <meta content="index.html">
        <!-- Twitter Card Meta Data -->
        <meta content="summary" name="twitter:card">
        <meta content="@themewagon" name="twitter:site">
        <meta content="@themewagon" name="twitter:creator">
        <meta content="ThemeWagon" name="twitter:title">
        <meta content="Imminent - The most spectacular coming soon template!" name="twitter:description">

        <!--<link href="favicon.png" rel="shortcut icon" type="image/png">-->

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!-- CSS -->
	<!--<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'><-->
	<!-- Styles -->
        <link href="css/loader.css" rel="stylesheet" type="text/css">
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!-- Javascript -->

        <script src="js/jquery.js"></script>
    </head>
    <body>
        <div class="preloader">
            <div class="loading">
                <h2>
                    Loading...
                </h2>
                <span class="progress"></span>
            </div>
        </div>

        <div class="wrapper">
            <ul class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" id="scene">
                <li class="layer" data-depth="0.00">
                </li>
                <!-- BG -->
                <li class="layer" data-depth="0.10">
                    <div class="background">
                    </div>
                </li>
                <!-- Hero -->
                <li class="layer" data-depth="0.20">
                    <!--
                    <div class="title">
                        <h2>
                            Countdown
                        </h2>
                        <span class="line"></span>
                    </div>
                    -->
                </li>
                <li class="layer" data-depth="0.30">
                    <div class="hero">
                        <h2>
                            Odpočet
                        </h2>
                        <span class="line"></span>
                        <br>
                        <h1 id="countdown">
                            ČAS
                        </h1>
                        <p class="sub-title">
                            do zahájení <?php echo $nameOfEvent ;?> v Rudici!
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Javascript -->
<!--        <script src="js/plugins.js"></script>-->
        <script src="js/jquery.countdown.min.js"></script> 
        <script src="js/main.js"></script>
    </body>
</html>
