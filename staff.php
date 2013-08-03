<?php $pagetitle = "admin"; ?>
<?php $layout_context = "admin"; ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>

<!-- July Code -->

<ul class="subjects">
<?php
 $query = "SELECT * ";
 $query .= "FROM subjects ";
 $query .= "WHERE visible = 1 ";
 $query .= "ORDER BY position ASC";
 $result = mysqli_query($connection, $query);
// confrim_query($result);  // this line messes it up but there is a $result
 var_dump($result); // result content for testing
?>
<?php
while ($subject = mysql_fetch_assoc($result)) { // fetch_row?
?>
    <li>
        <?php echo $subject["menuname"] . " (" . $subject["id"] .")"; ?>
        <ul class="pages">

        </ul>
    </li>
<?php
}
?>
</ul>

<!-- August Code -->

<?php
 $query = "SELECT * ";
 $query .= "FROM subjects ";
 $query .= "WHERE visible = 1 ";
 $query .= "ORDER BY position ASC";
 $result = mysqli_query($connection, $query);
 if (!$result) {
     die("le fail.");
 }

?><?php

  while ($row = mysql_fetch_row($result)) {
     var_dump($row);
     echo "<hr/>";
  }
?>











<?php mysqli_free_result($result); ?>
<?php require_once("incl/footer.php"); ?>