 <?php
	$themeColor = "#c7d5ed";
	$nameOfEvent = "Pálení čarodejnic 2019";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="<?php print($themeColor); ?> ">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="<?php print($themeColor); ?> ">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="<?php print($themeColor); ?> ">
        <!-- Google ReCaptcha -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- load MUI -->
        <link href="/css/mui.min.css" rel="stylesheet" type="text/css" />
        <script src="/js/mui.min.js"></script>
        <!-- other styles -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/emoji.css" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">    
        <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <!-- Sharing -->
        <meta property="og:url" content=<?php echo '"'.$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'].'"'; ?>/>
