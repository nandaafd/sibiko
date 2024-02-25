

<?php
$mysqli = mysqli_connect("localhost","root","") or die(mysqli_error($mysqli));
mysqli_select_db($mysqli, "db_bk") or die(mysqli_error($mysqli)); 
?>

