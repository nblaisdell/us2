<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php if (!isset($layout_context)) { $layout_context = "public"; }?>
    <title>US2 - <?php echo $pagetitle; ?><?php if ($layout_context == "admin") { echo " Admin"; } ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/shame.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="US2">
</head>

<body>
<!--[if lte IE 7]<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]-->

    <header>

        <div class="center cf">
            <a href="./index.php">
                <img src="img/logo-full.jpg" alt="Utility Systems Solutions, Inc." class="top-logo">
            </a>
            <input type="search" results="5" class="top-search">
        </div>

<!--         <h1>US2inc<?php // if ($layout_context == "admin") { echo " Admin"; } ?></h1>
        <a href="./index.php">index</a>
        <a href="./testing.php">testing</a>
        <a href="./staff.php">staff</a>
 -->
    </header>

    <nav class="top-nav cf">
        <div id="navigation" class="center">
                <?php echo public_navigation($current_subject, $current_page); ?>
        </div>
    </nav>
<!-- 
<br/><br/><br/>
<nav class="top-nav cf">
    <div class="center">
        <ul>
            <li><a class="active" href="index.php">Home</a>
                <ul>
                    <li><a href="#">Company Profile</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Vision</a></li>
                </ul>
            </li>
            <li><a href="#">Services</a>
                <ul>
                    <li><a href="#">Energy Audits</a></li>
                    <li><a href="#">Electrical/Lighting</a></li>
                    <li><a href="#">General Construction</a></li>
                    <li><a href="#">Insulation Solutions</a></li>
                    <li><a href="#">Steam Monitoring</a></li>
                </ul>
            </li>
            <li><a href="#">Partners</a>
                <ul>
                    <li><a href="#">Pre-qualification</a></li>
                </ul>
            </li>
            <li><a href="#">Projects</a>
                <ul>
                    <li><a href="#">Project Portfolio</a></li>
                    <li><a href="#">Case Studies</a></li>
                </ul>
            </li>
            <li><a href="#">News</a>
                <ul>
                    <li><a href="#">US2 Blog</a></li>
                    <li><a href="#">Testimonials</a></li>
                </ul>
            </li>
            <li><a href="#">Purchase</a>
                <ul>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">GSA Schedule Projects &amp; Services</a>
                        <ul>
                            <li><a href="#">Schedule 51V - Hardware Superstore</a></li>
                            <li><a href="#">Schedule 56 - Buildings and Building Materials/Industrial Services and Supplies</a></li>
                            <li><a href="#">Schedule 72 - Furnishing and Floor Coverings</a></li>
                            <li><a href="#">Schedule 03FAC - Facilities Maintenance and Management</a></li>
                            <li><a href="#">Schedule 84 - Financing for Facility Management and Energy Solutions</a></li>
                            <li><a href="#">Schedule 871 - Professional Engineering Services</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Careers</a>
                <ul>
                    <li><a href="#">Working With Us</a></li>
                    <li><a href="#">Jobs</a></li>
                </ul>
            </li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
</nav> -->
<div class="center">
<div class="container">