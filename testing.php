<?php $pagetitle = "testing"; ?>
<?php require_once("incl/db_connection.php"); ?>
<?php require_once("incl/functions.php"); ?>
<?php require_once("incl/header.php"); ?>
<?php include("incl/sidebar.php"); ?>

<ul class="subjects">
<?php
 $query  = "SELECT * FROM subjects WHERE visible = 1 ORDER BY position ASC";
 $result = mysqli_query($connection, $query);
// confrim_query($result);  // the above doesn't work at the moment
?>
<?php
while ($subject = mysql_fetch_assoc($result)) { 
?>
    <li>
        <?php echo $subject["menuname"] . " (" . $subject["id"] .")"; ?>
        <?php
         $query  = "SELECT * ";
         $query .= "FROM pages ";
         $query .= "WHERE visible = 1 ";
         $query .= "AND subject_id = {$subject["id"]} ";
         $query .= "ORDER BY position ASC";
         $result = mysqli_query($connection, $query);
         // confrim_query($result);
        ?>
        <ul class="pages">

        </ul>
    </li>
<?php
}
?>
</ul>

<!-- This stuff is me just playing around: -->
<?php //$output = "SELECT * FROM subjects"?>
<?php //echo "$output" ?>
<?php echo "$connectio" ?>
<?php //echo $subject["menuname"] . "?" ?>
<!-- I'm about half way through the latest video, where it talks about doubling the stuff that doesn't work to use in the unordered list. -->

<?php mysqli_free_result($result); ?>
<?php require_once("incl/footer.php"); ?>