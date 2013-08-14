<?php $pagetitle = "Admin"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/validation_functions.php"); ?>
<?php include("incl/header.php"); ?>
<?php confirm_logged_in(); ?>

<?php find_selected_page(); ?>

<nav class="top-nav cf">
    <div id="navigation" class="center">
            <?php echo navigation($current_subject, $current_page); ?>
            <a href="new_subject.php">+ Add a subject</a>
    </div>
</nav>

<div id="main">

    <?php echo message(); ?>
    <?php $errors = errors(); ?>
    <?php echo form_errors($errors); ?>
    
    <a href="admin.php">&laquo; Main Admin Menu</a>

    <h2>Create Subject</h2>
    <form action="create_subject.php" method="post">
      <p>Menu name:
        <input type="text" name="menu_name" value="" />
      </p>
      <p>Position:
        <select name="position">
        <?php
          $subject_set = find_all_subjects();
          $subject_count = mysqli_num_rows($subject_set);
          for($count=1; $count <= ($subject_count + 1); $count++) {
            echo "<option value=\"{$count}\">{$count}</option>";
          }
        ?>
        </select>
      </p>
      <p>Visible:
        <input type="radio" name="visible" value="0" /> No
        &nbsp;
        <input type="radio" name="visible" value="1" /> Yes
      </p>
      <br>
      <input type="submit" name="submit" class="btn" value="Create Subject" />
    </form>
    <br />
    <a href="manage_content.php">Cancel</a>

</div>

<?php include("incl/footer.php"); ?>
