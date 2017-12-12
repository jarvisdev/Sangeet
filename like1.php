<?php
session_start();
require 'funs.php';
$con=con();
$userid=$_SESSION['id'];

$qry="SELECT song FROM liked WHERE liked.uid='$userid'";
$result=$con->query($qry);
while($arr=$result->fetch_array())
{
	echo "<a class=\"youtube\" tt='".$arr['song']."' style=\"cursor:pointer\" ><button class=\"btn btn-default\" style=\"width:100%;margin-top:10px;background:url(userbg.jpg);color:white;\">".$arr['song']."</button></a><br><button class=\"btn btn-block btn-default dell\" tttt='".$arr['song']."' >Unlike</button>";
}

?>
