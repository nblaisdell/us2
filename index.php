<?php $pagetitle = "home"; ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>

<?php
    if (isset($_GET["subject"])) {
        $selected_subject_id = $_GET["subject"];
        $selected_page_id = null;
    } elseif (isset($_GET["page"])) {
        $selected_subject_id = null;
        $selected_page_id = $_GET["page"];
    } else {
        $selected_subject_id = null;
        $selected_page_id = null;
    }

?>
<div id="main">
  <div id="navigation">
        <?php echo navigation($selected_subject_id, $selected_page_id); ?>
  </div>
  <div id="page">
    <h2>Manage Content</h2>
        <?php echo $selected_subject_id; ?><br />
        <?php echo $selected_page_id; ?>

        whitespace in header which you need to modify or
        <br><br>
        turn on output buffering
  </div>
</div>




<?php include("incl/footer.php"); ?>