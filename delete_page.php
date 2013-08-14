<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>

<?php confirm_logged_in(); ?>

<?php
  $current_page = find_page_by_id($_GET["page"]);
  if (!$current_page) {
    // page ID was missing or invalid or 
    // page couldn't be found in database
    redirect_to("manage_content.php");
  }
  
  $id = $current_page["id"];
  $query = "DELETE FROM pages WHERE id = {$id} LIMIT 1";
  $result = mysqli_query($connection, $query);

  if ($result && mysqli_affected_rows($connection) == 1) {
    // Success
    $_SESSION["message"] = "Page deleted.";
    //redirect_to("manage_content.php");
  } else {
    // Failure
    $_SESSION["message_errors"] = "Page deletion failed.";
    //redirect_to("manage_content.php?page={$id}");
  }
  
?>
    <?php echo message(); ?>
    <?php echo message_errors(); ?>
    <?php echo form_errors($errors); ?>

    <a href="admin.php">back to admin</a>