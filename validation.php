<?php
function validate($data){
       $given=trim($data);
       $given=htmlentities($data);
       return $given;
} 
function connection(){
	$connection=$mysqli->connect("localhost","root");

}
?>