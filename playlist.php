<?php
session_start();
require('funs.php');

$song=$_POST["song"];
$userid=$_SESSION["id"];

$con=con();
$getsong="SELECT  song FROM playlist WHERE playlist.uid='$userid'";
$res=$con->query($getsong);
$arr=array();
$flag=0;
while($arr=$res->fetch_array())
{	
	if($arr['song']==$song)
	{
		$flag=1;
	}
}

$qry="INSERT INTO playlist(uid,song) VALUES ('$userid','$song')";
if($flag==0)
{
$result=$con->query($qry);
}

?>