<?php $pagetitle = "Admin"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/validation_functions.php"); ?>
<?php include("incl/header.php"); ?>
<?php confirm_logged_in(); ?>

<?php
  $admin_set = find_all_admins();
?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>

<nav class="top-nav cf">
    <div id="navigation" class="center">
            <?php echo navigation($current_subject, $current_page); ?>
            <a href="new_subject.php">+ Add a subject</a>
    </div>
</nav>

<div id="main">

    <?php echo message(); ?>

    <a href="admin.php">&laquo; Main Admin Menu</a>

    <h2>Manage Admins</h2>
    <table>
      <tr>
        <th style="text-align: left; width: 200px;">Username</th>
        <th colspan="2" style="text-align: left;">Actions</th>
      </tr>
    <?php while($admin = mysqli_fetch_assoc($admin_set)) { ?>
      <tr>
        <td><?php echo htmlentities($admin["username"]); ?></td>
        <td><a href="edit_admin.php?id=<?php echo urlencode($admin["id"]); ?>">Edit</a>&nbsp;</td>
        <td><a href="delete_admin.php?id=<?php echo urlencode($admin["id"]); ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
      </tr>
    <?php } ?>
    </table>
    <br />
    <a class="btn" href="new_admin.php">Add new admin</a>

</div>
<?php include("incl/footer.php"); ?>