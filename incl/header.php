<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php if (!isset($layout_context)) { $layout_context = "public"; }?>
    <title>US2 - <?php echo $pagetitle; ?><?php if ($layout_context == "admin") { echo " Admin"; } ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel='shortcut icon' type='image/x-icon' href='./favicon.ico'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="US2">
</head>

<body>

<!--[if lte IE 7]
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. 
    Please <a href="http://browsehappy.com/">upgrade your browser</a> 
    or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> 
    to improve your experience.</p>
<![endif]-->

    <header>
        <div class="center cf">
            <a href="./index.php">
                <img src="img/logo-full.jpg" alt="Utility Systems Solutions, Inc." class="top-logo">
            </a>
            <p class="call_to_action">Call us now at<br />(214) 722-7511</p>
        </div>
    </header>

    <nav class="top-nav cf">
        <div id="navigation" class="center">
                <?php echo public_navigation($current_subject, $current_page); ?>
        </div>
    </nav>

<div class="center">
<div class="container">