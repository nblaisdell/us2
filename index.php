<?php $pagetitle = "home"; ?>
<?php $layout_context = "public"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>

<?php find_selected_page(true); ?>

<div id="main">
  <div id="navigation">
        <?php echo public_navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
        <?php if ($current_page) { ?>
            
            <h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
            <?php echo nl2br(htmlentities($current_page["content"])); ?>
            
        <?php } else { ?>
            
            <p>Welcome!</p>
            
<a href="login.php">login</a>

        <?php }?>
  </div>
</div>

<?php include("incl/footer.php"); ?>