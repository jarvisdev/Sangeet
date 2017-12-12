<?php
session_start();
require('funs.php');

$song=$_POST['song'];
$userid=$_SESSION['id'];

$con=con();
$delsong="DELETE FROM playlist WHERE playlist.uid='$userid' AND playlist.song='$song'";
$res=$con->query($delsong);

?>