<?php
session_start();
$artist=$_POST["artist"];
require('funs.php'); 
$userid=$_SESSION["id"];

$con=con();
$getsong="SELECT following FROM follow WHERE follow.uid='$userid'";
$res=$con->query($getsong);
$arr=array();
$flag=0;
while($arr=$res->fetch_array())
{	
	if($arr['following']==$artist)
	{
		$flag=1;
	}
}

$qry="INSERT INTO follow(uid,following) VALUES ('$userid','$artist')";
if($flag==0)
{
	$result=$con->query($qry);
}
?>
