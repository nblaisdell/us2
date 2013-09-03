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

            <div class="page">
                <h1><?php echo htmlentities($current_page["menu_name"]); ?></h1>
                <?php echo nl2br($current_page["content"]); ?>
            </div>

        <?php } else { ?>



<!-- START ACTUAL INDEX CONTENT -->


        <div class="welcome">
            <h1>Welcome to US2!</h1>

            <div class="banner-wrap">
                <div class="banner">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="img/home_page/steam.jpg" alt="">
                                <div class="img-info">
                                    <span class="img-title">Steam Monitoring</span>
                                    <p>US2 provides retrofit installation of energy conservation measures including steam trap monitoring systems, HVAC installations and renovations, cost efficient hot water systems, and steam/condensate metering.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/home_page/electrical.jpg" alt="">
                                <div class="img-info">
                                    <span class="img-title">Electrical / Lighting</span>
                                    <p>US2 provides turnkey services in energy efficient lighting systems upgrades, new and replacement electrical generator and cable installations, and initial electrical energy metering surveys.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/home_page/general.jpg" alt="">
                                <div class="img-info">
                                    <span class="img-title">General Construction</span>
                                    <p>US2 provides turnkey construction management for a wide range of general construction projects throughout the United States.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/home_page/energy.jpg" alt="">
                                <div class="img-info">
                                    <span class="img-title">Energy Management</span>
                                    <p>With energy costs soaring and natural resources dwindling, it’s more imperative than ever to get a sense of whether or not your facility is working efficiently. At US2, one of our primary strengths is assisting agencies in auditing and monitoring their energy usage to ensure that all of your systems are working to both your advantage and the advantage of the planet.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/home_page/insulation.jpg" alt="">
                                <div class="img-info">
                                    <span class="img-title">Insulation Solutions</span>
                                    <p>US2 provides turnkey contracting services that implement state-of-the-art insulation solutions for steam and hot water distribution systems across the United States.</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <p>US2 designs, develops, and implements energy efficient retrofit strategies for aging Government facilities that pay their way today and help create a green, and cost-efficient tomorrow. We understand how to achieve energy conservation goals swiftly and effectively in the Federal energy environment. We are on the GSA Schedule and are SBA certified 8(a) and SDB, and VA verified SDVOSB and VOSB. Applying our Management3 Methodology (TM pending) to assignments, US2 delivers results that are cost-effective turnkey solutions based on a collaborative approach to issue resolution.</p>

            <h2>Bonham VA Gets New Water Heater</h2>
            <p>Sam Rayburn Memorial Veterans Center located in Bonham, Texas is considered a part of the VA North Healthcare System serving more than 111,000 Veterans in 38 counties in North Texas and 2 in southern Oklahoma. US2 recently installed a Flo-Rite-Temp Model 535 DW-DMC1 at the Bonham VA facility which is a mixing unit to supply water to the heat exchanger where it is overheated and then returned to the mixing unit for proportional re-mixing with cold water to a pre-set outlet temperature. The double wall instantaneous water heater uses a double- wall tube to provide positive separation of the steam and water in the heat exchanger. With the integration of the Brain Model, the instantaneous water heater offers a two temperature system option with connectivity to the Siemen’s building automation system to lower energy use, monitor performance of mechanical subsystems, and improve occupant comfort.
            </p>

        </div>



<!-- END ACTUAL INDEX CONTENT -->
            


        <?php }?>

</div>

<?php include("incl/footer.php"); ?>