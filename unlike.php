<?php
session_start();
require('funs.php');

$song=$_POST['song'];
$userid=$_SESSION['id'];

$con=con();
$delsong="DELETE FROM liked WHERE liked.uid='$userid' AND liked.song='$song'";
$res=$con->query($delsong);

?>