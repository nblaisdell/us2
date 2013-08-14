<?php $pagetitle = "Home Page"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/validation_functions.php"); ?>
<?php include("incl/header.php"); ?>

<?php find_selected_page(true); ?>

            <!--  Only for ease of testing login/admin stuff. Delete later. - ->
            <a href="login.php">login</a>|<a href="admin.php">admin</a>
            <br/><hr/><br/> <!- - -->

<div id="main">

        <?php if ($current_page) { ?>
            
            <h1><?php echo htmlentities($current_page["menu_name"]); ?></h1>
            <?php echo $current_page["content"]; ?>


        <?php } else { ?>



<!-- START ACTUAL INDEX CONTENT -->



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



<!-- END ACTUAL INDEX CONTENT -->
            


        <?php }?>

</div>

<?php include("incl/footer.php"); ?>