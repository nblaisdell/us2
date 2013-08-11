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


        <div class="banner">
            <ul>
                <li>
                    <img src="http://placehold.it/960x350" alt="">
                    <a href="#">Steam Monitoring</a>
                </li>
                <li>
                    <img src="http://placehold.it/960x350" alt="">
                    <a href="#">Electrical / Lighting</a>
                </li>
                <li>
                    <img src="http://placehold.it/960x350" alt="">
                    <a href="#">General Construction</a>
                </li>
                <li>
                    <img src="http://placehold.it/960x350" alt="">
                    <a href="#">Energy Management</a>
                </li>
                <li>
                    <img src="http://placehold.it/960x350" alt="">
                    <a href="#">Insulation Solutions</a>
                </li>
            </ul>
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