<?php
session_start();
require 'funs.php';
$con=con();
$userid=$_SESSION['id'];

$qry="SELECT song FROM playlist WHERE playlist.uid='$userid'";
$result=$con->query($qry);
while($arr=$result->fetch_array())
{
	echo "<a class=\"youtube\" tt='".$arr['song']."' style=\"background-color:pink;cursor:pointer\" ><button class=\"btn btn-default\" style=\"background:url(userbg.jpg);width:100%;color:white;margin-top:10px;\">".$arr['song']."</button></a><br><button class=\"btn btn-block btn-default dell\" tttt='".$arr['song']."' >delete from playlist</button>";
}

?>
