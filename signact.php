<?php
	session_start();
	require('funs.php');

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email=$_POST["email"];
		$password=$_POST["pwd"];
		$uname=$_POST["username"];
		if(isset($_POST['g-recaptcha-response'])){
          		$captcha=$_POST['g-recaptcha-response'];

        	}
	        if(!$captcha){
	          echo '<h2>Please check the the captcha form.</h2>';
	          exit;
	        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LddwDIUAAAAAMXqGq_dWyeqDMLsXojv5VCzyBmE&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
         echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }else
       {
echo '<h2>Thanks for posting comment.</h2>';
}

		$email=validate($email);
		$password=validate($password);
		$password=md5($password);
		$uname=validate($uname);

		$con = con();

		// $query = "SELECT * FROM user U where U.email='$email'";
		// $result=$con->query($query);

		$qry = "SELECT * FROM user U WHERE U.email='$email'";
		$result=$con->query($qry);

		if($result->num_rows>0)
		{
			echo "<script>alert('user with email-id exists.');window.location='index.php';</script>";
			die();
		}
		else
		{
			$insqry="INSERT INTO user(email,password,uname) VALUES ('$email','$password','$uname')";
			$insres=$con->query($insqry);
			$find_user="SELECT * FROM user WHERE user.email='$email'";
			$res_find=$con->query($find_user);
			$array=$res_find->fetch_array();
			$_SESSION['id']=$array['uid'];
			echo "<script>window.location='http://localhost/sangeet/profile.php'</script>";
			die();
		}
	}
?>