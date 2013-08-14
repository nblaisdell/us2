<?php $pagetitle = "edit"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/validation_functions.php"); ?>

<?php confirm_logged_in(); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>


<?php // find_selected_page(); // is this needed? ?>

<?php
if (isset($_POST['submit'])) {
  // Process the form
  
  $id = $current_page["id"];
  $menu_name = mysql_prep($_POST["menu_name"]);
  $position = (int) $_POST["position"];
  $visible = (int) $_POST["visible"];
  $content = mysql_prep($_POST["content"]);

  // validations
  $required_fields = array("title", "content");
  validate_presences($required_fields);
  
  $fields_with_max_lengths = array("menu_name" => 30);
  validate_max_lengths($fields_with_max_lengths);
  
  if (empty($errors)) {
    
    // Perform Update

    $query  = "UPDATE pages SET ";
    $query .= "menu_name = '{$menu_name}', ";
    $query .= "position = {$position}, ";
    $query .= "visible = {$visible}, ";
    $query .= "content = '{$content}' ";
    $query .= "WHERE id = {$id} ";
    $query .= "LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_affected_rows($connection) == 1) {
      // Success
      $_SESSION["message"] = "Page updated.";
      redirect_to("manage_content.php?page={$id}");
    } else {
      // Failure
      $_SESSION["message_errors"] = "Page update failed.";
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
    <?php echo message(); ?>
    <?php echo form_errors($errors); ?>

    <a href="admin.php">&laquo; Main Admin Menu</a>
    
    <h2>Edit Front Page:</h2>
    <form action="edit_front.php" method="post">
      <p>Title:
        <input type="text" name="title" value="<?php echo htmlentities(['title']); ?>">
      </p>
<!--       <p>Position:
        <select name="position">
        <?php
          // $page_set = find_pages_for_subject($current_page["subject_id"]);
          // $page_count = mysqli_num_rows($page_set);
          // for($count=1; $count <= $page_count; $count++) {
          //   echo "<option value=\"{$count}\"";
          //   if ($current_page["position"] == $count) {
          //     echo " selected";
          //   }
          //   echo ">{$count}</option>";
          // }
        ?>
        </select>
      </p> -->
<!--       <p>Visible:
        <input type="radio" name="visible" value="0" <?php // if ($current_page["visible"] == 0) { echo "checked"; } ?> /> No
        &nbsp;
        <input type="radio" name="visible" value="1" <?php // if ($current_page["visible"] == 1) { echo "checked"; } ?>/> Yes
      </p> -->
      <p>Content:<br />
        <textarea name="content"><?php echo htmlentities(["text"]); ?></textarea>
      </p>
      <input type="submit" name="submit" class="btn" value="Submit Edits" />
    </form>
<!--     <br />
    <a href="manage_content.php?page=<?php // echo urlencode($current_page["id"]); ?>">Cancel</a>
    &nbsp;
    &nbsp;
    <a href="delete_page.php?page=<?php // echo urlencode($current_page["id"]); ?>" onclick="return confirm('Are you sure?');">Delete page</a> -->

</div>

<?php include("incl/footer.php"); ?>