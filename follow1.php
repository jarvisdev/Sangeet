
<?php
session_start();
require 'funs.php';
$con=con();
$userid=$_SESSION['id'];

$qry="SELECT following FROM follow WHERE follow.uid='$userid'";
$result=$con->query($qry);
while ($arr=$result->fetch_array()) {
	# code...
	echo "<a class=\"ast \" st='".$arr['following']."' style=\"cursor:pointer\" ><button class=\"btn btn-default\" style=\"width:100%;background:url(userbg.jpg);color:white;margin-top:10px;\">".$arr['following']."</button></a><br><button class=\"btn btn-block btn-default dell\" tttt='".$arr['following']."' >Unfollow</button>";
}

?>
