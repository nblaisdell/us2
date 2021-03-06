<?php $pagetitle = "Log In"; ?>
<?php require_once("incl/session.php"); ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/validation_functions.php"); ?>
<?php include("incl/header.php"); ?>


<?php
$username = "";

if (isset($_POST['submit'])) {
  // Process the form
  
  // validations
  $required_fields = array("username", "password");
  validate_presences($required_fields);
  
  if (empty($errors)) {
    // Attempt Login

        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $found_admin = attempt_login($username, $password);

    if ($found_admin) {
      // Success
            // Mark user as logged in
            $_SESSION["admin_id"] = $found_admin["id"];
            $_SESSION["username"] = $found_admin["username"];
            // redirect_to("admin.php");
            // avoid redirect:
            print "Successfully logged in";
            print "<br/>Go to <a href='admin.php'>admin</a> page";
            exit;
    } else {
      // Failure
      $_SESSION["message_errors"] = "Username/password not found.";
    }
  }
} else {
  // This is probably a GET request
  
} // end: if (isset($_POST['submit']))

?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>
<div id="main">

    <?php echo message(); ?>
    <?php echo form_errors($errors); ?>
    
    <h2>Login</h2>
    <form action="login.php" method="post">
      <p>Username:
        <input type="text" name="username" value="<?php echo htmlentities($username); ?>" />
      </p>
      <p>Password:
        <input type="password" name="password" value="" />
      </p>
      <input type="submit" name="submit" value="Submit" />
    </form>

</div>

<?php include("incl/layouts/footer.php"); ?>
