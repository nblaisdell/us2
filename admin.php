<?php $pagetitle = "admin"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>

<?php confirm_logged_in(); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>

<nav class="top-nav cf">
    <div id="navigation" class="center">
            <?php echo navigation($current_subject, $current_page); ?>
            <a href="new_subject.php">+ Add a subject</a>
    </div>
</nav>

<div id="main">

    <h2>Admin Menu</h2>
    <p>Welcome to the admin area, <?php echo htmlentities($_SESSION['username'])?>!</p><br/>
    <ul>
      <li><a href="manage_content.php">Manage Website Content</a></li>
      <li><a href="manage_admins.php">Manage Admin Users</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>

</div>

<?php include("incl/footer.php"); ?>