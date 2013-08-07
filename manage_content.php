<?php require_once("incl/session.php"); ?>
<?php $pagetitle = "home"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>

<?php confirm_logged_in(); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>
<?php find_selected_page(); ?>

<div id="main">
    <a href="admin.php">&laquo; Main menu</a><br /><br /><br />
    manage content: add a thing about selecting something from the menu, 
    I also wonder about deleting the #main div or #page as they might be redundant
    <br /><br /><br />
    after more thought: what i need to do is revise the sidebar admin thing to be what it was, 
    but then use it as part of the main div / page div combo and change the public area to only
    have one
    <br /><br /><br />
    <a href="new_subject.php">+ Add a subject</a>
  <div id="page">
    <?php echo message(); ?>
    <?php if ($current_subject) { ?>
      <h2>Manage Subject</h2>
      Menu name: <?php echo htmlentities($current_subject["menu_name"]); ?><br />
      Position: <?php echo $current_subject["position"]; ?><br />
      Visible: <?php echo $current_subject["visible"] == 1 ? 'yes' : 'no'; ?><br />
      <br />
      <a href="edit_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>">Edit Subject</a>
      
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
        + <a href="new_page.php?subject=<?php echo urlencode($current_subject["id"]); ?>">Add a new page to this subject</a>
      </div>

    <?php } elseif ($current_page) { ?>
      <h2>Manage Page</h2>
      Name: <?php echo htmlentities($current_page["menu_name"]); ?><br />
      Position: <?php echo $current_page["position"]; ?><br />
      Visible: <?php echo $current_page["visible"] == 1 ? 'yes' : 'no'; ?><br />
      Content:<br />
      <div class="view-content">
        <?php echo nl2br(htmlentities($current_page["content"])); ?>
      </div>
      <br />
      <br />
      <a href="edit_page.php?page=<?php echo urlencode($current_page['id']); ?>">Edit page</a>
      
    <?php } else { ?>
      Please select a subject or a page.
    <?php }?>
  </div>
</div>

<?php include("incl/footer.php"); ?>