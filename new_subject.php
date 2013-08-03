<?php require_once("incl/session.php"); ?>
<?php $pagetitle = "home"; ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>

<?php find_selected_page(); ?>


<div id="main">
  <div id="navigation">
        <?php echo navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
    <?php echo message(); ?>
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
          <input type="submit" name="submit" value="Create Subject" />
        </form>
        <br />
        <a href="manage_content.php">Cancel</a>
    </div>
</div>

<?php include("incl/footer.php"); ?>