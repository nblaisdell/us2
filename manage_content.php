<?php require_once("incl/session.php"); ?>
<?php $pagetitle = "home"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>

<?php confirm_logged_in(); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>
<?php find_selected_page(); ?>

<nav class="top-nav cf">
    <div id="navigation" class="center">
            <?php echo navigation($current_subject, $current_page); ?>
            <a href="new_subject.php">+ Add a subject</a>
    </div>
</nav>

<div id="main">
    <?php echo message(); ?>

    <a href="admin.php">&laquo; Main Admin Menu</a><br />

    <?php if ($current_subject) { ?>
      <h2>Manage Subject</h2>
      Menu name: <?php echo htmlentities($current_subject["menu_name"]); ?><br />
      Position: <?php echo $current_subject["position"]; ?><br />
      Visible: <?php echo $current_subject["visible"] == 1 ? 'yes' : 'no'; ?><br />
      <br />
      <a class="btn" href="edit_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>">Edit Subject</a>
      
      <div style="margin-top: 2em; border-top: 1px solid #000000;">
        <h3>Pages in this subject:</h3>
        <ul>
        <?php 
          $subject_pages = find_pages_for_subject($current_subject["id"]);
          while($page = mysqli_fetch_assoc($subject_pages)) {
            echo "<li>";
            $safe_page_id = urlencode($page["id"]);
            echo "<a href=\"manage_content.php?page={$safe_page_id}\">";
            echo htmlentities($page["menu_name"]);
            echo "</a>";
            echo "</li>";
          }
        ?>
        </ul>
        <br />
        <a class="btn" href="new_page.php?subject=<?php echo urlencode($current_subject["id"]); ?>">+ Add a new page to this subject</a>
      </div>

    <?php } elseif ($current_page) { ?>
      <h2>Manage Page</h2>
      Name: <?php echo htmlentities($current_page["menu_name"]); ?><br />
      Position: <?php echo $current_page["position"]; ?><br />
      Visible: <?php echo $current_page["visible"] == 1 ? 'yes' : 'no'; ?><br />
      Content:
      <div class="view-content">
        <?php echo nl2br(htmlentities($current_page["content"])); ?>
      </div>
      <a class="btn" href="edit_page.php?page=<?php echo urlencode($current_page['id']); ?>">Edit page</a>
      
    <?php } else { ?>
      Please select a subject or a page from the navigation bar above.
    <?php }?>

</div>

<?php include("incl/footer.php"); ?>