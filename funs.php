<?php
	function validate($val)
	{
		$val=htmlentities($val);
		$val=trim($val);
		return $val;
	}

	function con()
	{
		$dbhost="localhost";
		$dbname="sangeet";
		$dbpass="";
		$dbuser="root";
		$con = new MySQLi($dbhost,$dbuser,$dbpass,$dbname);
		if($con->connect_error)
		{
			die("cannot connect to db".$con->connect_error);
		}
		else
		{
			
			return $con;
		}
	}
?>