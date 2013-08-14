<?php $pagetitle = "Admin"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/validation_functions.php"); ?>
<?php include("incl/header.php"); ?>
<?php confirm_logged_in(); ?>

<nav class="top-nav cf">
    <div id="navigation" class="center">
            <?php echo navigation($current_subject, $current_page); ?>
            <a href="new_subject.php">+ Add a subject</a>
    </div>
</nav>

<div id="main">

    <h2>Admin Menu</h2>
    <p>Welcome to the admin area, <?php echo htmlentities($_SESSION['username'])?>!</p>
    <ul>
      <!-- <li><a href="edit_front.php">Manage Front Page Content</a></li> -->
      <!-- <li><a href="manage_content.php">Manage Other Page Content</a></li> -->
      <li><a href="manage_admins.php">Manage Admin Users</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>

</div>

<?php include("incl/footer.php"); ?>