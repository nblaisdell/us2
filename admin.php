<?php $pagetitle = "admin"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>

<?php confirm_logged_in(); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>

<div id="main">
  <div id="page">
    <h2>Admin Menu</h2>
    <p>Welcome to the admin area, <?php echo htmlentities($_SESSION['username'])?>!</p>
    <ul>
      <li><a href="manage_content.php">Manage Website Content</a></li>
      <li><a href="manage_admins.php">Manage Admin Users</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<?php include("incl/footer.php"); ?>