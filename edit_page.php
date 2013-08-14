<?php $pagetitle = "Admin"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/validation_functions.php"); ?>
<?php include("incl/header.php"); ?>
<?php confirm_logged_in(); ?>


<?php find_selected_page(); ?>

<?php
  // Unlike new_page.php, we don't need a subject_id to be sent
  // We already have it stored in pages.subject_id.
  if (!$current_page) {
    // page ID was missing or invalid or 
    // page couldn't be found in database
    redirect_to("manage_content.php");
  }
?>

<?php
if (isset($_POST['submit'])) {
  // Process the form
  
  $id = $current_page["id"];
  $menu_name = mysql_prep($_POST["menu_name"]);
  $position = (int) $_POST["position"];
  $visible = (int) $_POST["visible"];
  $content = mysql_prep($_POST["content"]);

  // validations
  $required_fields = array("menu_name", "position", "visible", "content");
  validate_presences($required_fields);
  
  // $fields_with_max_lengths = array("menu_name" => 30);
  // validate_max_lengths($fields_with_max_lengths);
  
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
      //redirect_to("manage_content.php?page={$id}");
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

    <a href="manage_content.php?page=<?php echo urlencode($current_page["id"]); ?>">&laquo; Back</a>
    
    <h2>Edit Page: <?php echo htmlentities($current_page["menu_name"]); ?></h2>
    <form action="edit_page.php?page=<?php echo urlencode($current_page["id"]); ?>" method="post">
      <p><label for="name">Menu name:</label>
        <input type="text" id="name" name="menu_name" value="<?php echo htmlentities($current_page["menu_name"]); ?>" />
      </p>
      <p><label for="position">Position:</label>
        <select name="position" id="position">
        <?php
          $page_set = find_pages_for_subject($current_page["subject_id"]);
          $page_count = mysqli_num_rows($page_set);
          for($count=1; $count <= $page_count; $count++) {
            echo "<option value=\"{$count}\"";
            if ($current_page["position"] == $count) {
              echo " selected";
            }
            echo ">{$count}</option>";
          }
        ?>
        </select>
      </p>
      <p>Visible:&nbsp;
        <input type="radio" id="no" name="visible" value="0" <?php if ($current_page["visible"] == 0) { echo "checked"; } ?> /> <label for="no">No</label>
        &nbsp;
        <input type="radio" id="yes" name="visible" value="1" <?php if ($current_page["visible"] == 1) { echo "checked"; } ?>/> <label for="yes">Yes</label>
      </p>
      <p><label for="content">Content:</label><br />

<!--                   <div id='editControls' style='text-align:center; padding:5px;'>
                    <div class='btn-group'>
                      <a class='btn' data-role='undo' href='#'><i class='icon-undo'></i></a>
                      <a class='btn' data-role='redo' href='#'><i class='icon-repeat'></i></a>
                    </div>
                    <div class='btn-group'>
                      <a class='btn' data-role='bold' href='#'><b>Bold</b></a>
                      <a class='btn' data-role='italic' href='#'><em>Italic</em></a>
                      <a class='btn' data-role='underline' href='#'><u><b>U</b></u></a>
                      <a class='btn' data-role='strikeThrough' href='#'><strike>abc</strike></a>
                    </div>
                    <div class='btn-group'>
                      <a class='btn' data-role='justifyLeft' href='#'><i class='icon-align-left'></i></a>
                      <a class='btn' data-role='justifyCenter' href='#'><i class='icon-align-center'></i></a>
                      <a class='btn' data-role='justifyRight' href='#'><i class='icon-align-right'></i></a>
                      <a class='btn' data-role='justifyFull' href='#'><i class='icon-align-justify'></i></a>
                    </div>
                    <div class='btn-group'>
                      <a class='btn' data-role='indent' href='#'><i class='icon-indent-right'></i></a>
                      <a class='btn' data-role='outdent' href='#'><i class='icon-indent-left'></i></a>
                    </div>
                    <div class='btn-group'>
                      <a class='btn' data-role='insertUnorderedList' href='#'><i class='icon-list-ul'></i></a>
                      <a class='btn' data-role='insertOrderedList' href='#'><i class='icon-list-ol'></i></a>
                    </div>
                    <div class='btn-group'>
                      <a class='btn' data-role='h1' href='#'>h<sup>1</sup></a>
                      <a class='btn' data-role='h2' href='#'>h<sup>2</sup></a>
                      <a class='btn' data-role='p' href='#'>p</a>
                    </div>
                    <div class='btn-group'>
                      <a class='btn' data-role='subscript' href='#'><i class='icon-subscript'></i></a>
                      <a class='btn' data-role='superscript' href='#'><i class='icon-superscript'></i></a>
                    </div>
                  </div>
                  <div style='' contenteditable>
                    <textarea class='editor' name="content">
                      <?php echo htmlentities($current_page["content"]); ?>
                    </textarea>
                  </div> -->

         <textarea class='editor' name="content" id="content"><?php echo htmlentities($current_page["content"]); ?></textarea>
       </p>
      <input type="submit" name="submit" class="btn" value="Submit Edits" />
    </form>
    <br />
    <a href="manage_content.php?page=<?php echo urlencode($current_page["id"]); ?>">Cancel</a>
    &nbsp;
    &nbsp;
    <a href="delete_page.php?page=<?php echo urlencode($current_page["id"]); ?>" onclick="return confirm('Are you sure?');">Delete page</a>
    

  

</div>

<?php include("incl/footer.php"); ?>