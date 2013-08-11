<?php $pagetitle = "Home Page"; ?>
<?php $layout_context = "public"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>

<?php find_selected_page(true); ?>

<div id="main">
    <div id="page">

        <div class="banner-wrap">
            <div class="banner">
                <ul>

                    <li>
                        <a href="#">
                            <img src="http://placehold.it/960x350" alt="">
                            <div class="img-info">
                                <span class="img-title">Steam Monitoring</span>
                                <p>US2 provides retrofit installation of energy conservation measures including steam trap monitoring systems, HVAC installations and renovations, cost efficient hot water systems, and steam/condensate metering.</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="http://placehold.it/960x350" alt="">
                            <div class="img-info">
                                <span class="img-title">Electrical / Lighting</span>
                                <p>US2 provides turnkey services in energy efficient lighting systems upgrades, new and replacement electrical generator and cable installations, and initial electrical energy metering surveys.</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="http://placehold.it/960x350" alt="">
                            <div class="img-info">
                                <span class="img-title">General Construction</span>
                                <p>US2 provides turnkey construction management for a wide range of general construction projects throughout the United States.</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="http://placehold.it/960x350" alt="">
                            <div class="img-info">
                                <span class="img-title">Energy Management</span>
                                <p>With energy costs soaring and natural resources dwindling, it’s more imperative than ever to get a sense of whether or not your facility is working efficiently. At US2, one of our primary strengths is assisting agencies in auditing and monitoring their energy usage to ensure that all of your systems are working to both your advantage and the advantage of the planet.</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="http://placehold.it/960x350" alt="">
                            <div class="img-info">
                                <span class="img-title">Insulation Solutions</span>
                                <p>US2 provides turnkey contracting services that implement state-of-the-art insulation solutions for steam and hot water distribution systems across the United States.</p>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>




        <h1>Welcome to US2!</h1>
        <p>US2 designs, develops, and implements energy efficient retrofit strategies for aging Government facilities that pay their way today and help create a green, and cost-efficient tomorrow. We understand how to achieve energy conservation goals swiftly and effectively in the Federal energy environment. We are on the GSA Schedule and are SBA certified 8(a) and SDB, and VA verified SDVOSB and VOSB. Applying our Management3 Methodology (TM pending) to assignments, US2 delivers results that are cost-effective turnkey solutions based on a collaborative approach to issue resolution.</p>
















        <!--<?php if ($current_page) { ?>
            
            <h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
            <?php echo nl2br(htmlentities($current_page["content"])); ?>

            <!-- <a href="login.php">login</a>|<a href="admin.php">admin</a>
            <br/><br/><hr/>  ->
            
        <?php } else { ?>
            
            <!-- <a href="login.php">login</a>|<a href="admin.php">admin</a>
            <br/><br/><hr/>  ->

            <nav>
                <ul class="cf">
                    <li><a href="#" class="active">Steam Monitoring</a></li>
                    <li><a href="#">Lighting</a></li>
                    <li><a href="#">General Construction</a></li>
                    <li><a href="#">Energy Management Systems</a></li>
                </ul>
            </nav>
            <h1>Steam Monitoring</h1>
            <h2>Energy-Efficient Steam Monitoring Services</h2>
            <img src="http://us2inc.com/img/steam.jpg" alt="">
            <h3>Steam Expertise</h3>
            <p>US2 provides retrofit installation of energy conservation measures including steam trap monitoring systems, HVAC installations and renovations, cost efficient hot water systems, and steam/condensate metering.</p>
            <h3>Customer Challenges</h3>
            <p>Many utility systems currently in use were constructed in an era characterized by values very different from the ones now prevalent. Energy efficiency was not a priority. Consequently, multiple Federal facilities and some private sector facilities are saddled with large, aging steam and hot water systems which under-perform and demand ongoing repairs. Within these structures, with increasing regularity, deficiencies in the existing steam and hot water systems have been costly.</p>
            <h3>Steam Monitoring Services We Offer</h3>
            <p>Our primary area of expertise is the installation of steam trap wireless monitoring systems using a Web-based information collection network. These intelligent systems enable clients to save on energy production costs and maintenance labor. To accomplish this, US2 offers turnkey projects from energy surveys to retrofit installation of energy-saving equipment, with provision for the ongoing measuring of energy utilization. New technologies, including acoustic steam trap sensors and wireless web-enabled receivers make it possible to retrofit older systems cost-effectively and achieve significant performance improvement and measurable energy savings.</p>
            <h3>Who We Serve</h3>
            <p>US2 primarily serves Federal agencies mandated to achieve energy savings, particularly VA hospitals and defense installations. We also support other Federal facilities, and some private sector facilities that desire to Eco-fit their systems to make them ecological and economical for the future.</p>
            <!-- <button class="download-btn">Download</button> ->
            <hr>
            <h2>COMPANY SYNOPSIS</h2>
            <ul>
                <li>Certified SBA 8(a) Program participant (July 21, 2010)</li>
                <li>Certified Small Disadvantaged Business (SDB) (July 21, 2010)</li>
                <li>Certified Service Disabled Veteran Owned Small Business (SDVOSB)</li>
                <li>Verified SDVOSB in "Veterans First" at www.VetBiz.gov (July 3, 2008)</li>
                <li>Bonding Capacity of $5M per project/$10M aggregate, fully insured</li>
                <li>GSA Contract GS-07F-0121T Owner (Removable Insulation Covers)</li>
                <li>GSA Contract GS-03F-0100T Owner (Wall Art, ancillary installation)</li>
                <li>GSA Contract GS-21F-0159X Owner (HVAC Maintenance Services and Energy Audit Services)</li>
                <li>GSA Contract GS-07F-0460M Authorized Dealer (Steam Products)</li>
                <li>GSA Contract 21F-0051Y Authorized Dealer (Hardware Supplies)</li>
                <li>GSA Contract GS-07F-0508Y Owner (Financing for Facility Management & Energy Solutions)</li>
            </ul>
            
        <?php }?>-->
    </div>
</div>

<?php include("incl/footer.php"); ?>