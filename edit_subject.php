<?php $pagetitle = "edit"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/validation_functions.php"); ?>

<?php confirm_logged_in(); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>

<?php find_selected_page(); ?>

<?php
  if (!$current_subject) {
    // subject ID was missing or invalid or 
    // subject couldn't be found in database
    redirect_to("manage_content.php");
  }
?>

<?php
if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("menu_name", "position", "visible");
  validate_presences($required_fields);
  
  $fields_with_max_lengths = array("menu_name" => 30);
  validate_max_lengths($fields_with_max_lengths);
  
  if (empty($errors)) {
    
    // Perform Update

    $id = $current_subject["id"];
    $menu_name = mysql_prep($_POST["menu_name"]);
    $position = (int) $_POST["position"];
    $visible = (int) $_POST["visible"];
  
    $query  = "UPDATE subjects SET ";
    $query .= "menu_name = '{$menu_name}', ";
    $query .= "position = {$position}, ";
    $query .= "visible = {$visible} ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_affected_rows($connection) >= 0) {
      // Success
      // $_SESSION["message"] = "Subject updated.";
      $message = "Subject successfully updated.";
      // redirect_to("manage_content.php");
    } else {
      // Failure
      $message_errors = "Subject update failed.";
    }
  
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>

<nav class="top-nav cf">
    <div id="navigation" class="center">
            <?php echo navigation($current_subject, $current_page); ?>
            <a href="new_subject.php">+ Add a subject</a>
    </div>
</nav>

<div id="main">

    <?php // $message is just a variable, doesn't use the SESSION
      if (!empty($message)) {
        echo "<div class=\"message\">" . htmlentities($message) . "</div>";
      }
    ?>
    <?php // $message_errors is now also just a variable, doesn't use the SESSION
      if (!empty($message_errors)) {
        echo "<div class=\"error\">" . htmlentities($message) . "</div>";
      } // it doesn't seem like this is actually needed though
    ?>
    <?php echo form_errors($errors); ?>

    <a href="admin.php">&laquo; Main Admin Menu</a>
    
    <h2>Edit Subject: <?php echo htmlentities($current_subject["menu_name"]); ?></h2>
    <form action="edit_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>" method="post">
      <p>Menu name:
        <input type="text" name="menu_name" value="<?php echo htmlentities($current_subject["menu_name"]); ?>" />
      </p>
      <p>Position:
        <select name="position">
        <?php
          $subject_set = find_all_subjects();
          $subject_count = mysqli_num_rows($subject_set);
          for($count=1; $count <= $subject_count; $count++) {
            echo "<option value=\"{$count}\"";
            if ($current_subject["position"] == $count) {
              echo " selected";
            }
            echo ">{$count}</option>";
          }
        ?>
        </select>
      </p>
      <p>Visible:
        <input type="radio" name="visible" value="0" <?php if ($current_subject["visible"] == 0) { echo "checked"; } ?> /> No
        &nbsp;
        <input type="radio" name="visible" value="1" <?php if ($current_subject["visible"] == 1) { echo "checked"; } ?>/> Yes
      </p>
      <input type="submit" name="submit" class="btn" value="Submit Edits" />
    </form>
    <br />
    <a href="manage_content.php">Cancel</a>
    &nbsp;
    &nbsp;
    <a href="delete_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>" onclick="return confirm('Are you sure?');">Delete subject</a>
    

</div>

<?php include("incl/layouts/footer.php"); ?>
