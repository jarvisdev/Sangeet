<?php
	session_start();
	require('funs.php');

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=validate($_POST["email"]);
		$password=validate($_POST["passwd"]);
		$password=md5($password);
		$con=con();
		$qry="SELECT * FROM user WHERE user.email='$email'";
		$result=$con->query($qry);
		if(mysqli_num_rows($result)==0)
		{
			echo "<script>alert('Inavalid input.Login again');window.location='index.php';</script>";
		}
		else
		{
			$userid=$pass="";
			$arr=$result->fetch_array();
			$userid=$arr["uid"];
			$pass=$arr["password"];
			if($password==$pass)
			{
				$_SESSION['id']=$userid;
				echo "<script>window.location='/sangeet/profile.php';</script>";
				die();
			}
			else
			{
				echo "<script>alert('incorrect password.login again');window.location='index.php';</script>";
				die();
			}
		}
	}
?>