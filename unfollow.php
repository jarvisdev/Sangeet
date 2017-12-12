<?php
session_start();
require('funs.php');

$flw=$_POST['following'];
$userid=$_SESSION['id'];

$con=con();
$delsong="DELETE FROM follow WHERE follow.uid='$userid' AND follow.following='$flw'";
$res=$con->query($delsong);

?>