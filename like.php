<?php
session_start();
require('funs.php');

$song=$_POST["song"];
$userid=$_SESSION["id"];

$con=con();
$getsong="SELECT song FROM liked WHERE liked.uid='$userid'";
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

$qry="INSERT INTO liked(uid,song) VALUES ('$userid','$song')";
if($flag==0)
{
$result=$con->query($qry);
}

?>