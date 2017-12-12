<?php
session_start();
require('funs.php');

$song=$_POST['song'];
$userid=$_SESSION['id'];

$con=con();
$delsong="DELETE FROM queue WHERE queue.uid='$userid' AND queue.song='$song'";
$res=$con->query($delsong);

?>