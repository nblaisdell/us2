<?php require_once("incl/session.php"); ?>
<?php require_once("incl/functions.php"); ?>

<?php
    // v1: simple logout
    // session_start();
    $_SESSION["admin_id"] = null;
    $_SESSION["username"] = null;
    redirect_to("login.php");

    //might need to add a message here, also, check to see if delete admin message is deleted properly. 
?>

<?php
    // v2: completely destroy session
    // assumes nothing else in session to keep
    // session_start();
    // $_SESSION = array();
    // if (isset($_COOKIE[session_name()])) {
    //   setcookie(session_name(), '', time()-42000, '/');
    // }
    // session_destroy(); 
    // redirect_to("login.php");
?>