<?php
$conn = mysql_connect(localhost, admin, root);
if(!$conn) {
  die('Could not connect: ' . mysql_error());
}
$db_select = mysql_select_db("us2", $conn);
if(!$db_select) {
  die('No database selected: ' . mysql_error());
}





?><?php $pagetitle = "testing"; ?>
<?php require_once("incl/functions.php"); ?>
<?php include("incl/header.php"); ?>

navigation: |
<?php




$results = mysql_query("SELECT * FROM subjects", $conn);
if(!$results) {
  die('Fail: ' . mysql_error());
}

while($row = mysql_fetch_array($result)) {
  echo $row["menuname"]." ".$row["position"]."<br/>";
}






  echo "<br/><br/><br/>".$results."<br/><br/><br/>";
?> |

<?php include("incl/footer.php"); ?>
<?php mysql_close($conn); ?>