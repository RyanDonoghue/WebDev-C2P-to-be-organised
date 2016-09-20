<?php
$hostname = "localhost";  //name of host or ip address
$username = "MyDBPaul"; //mySQL username - Students need to change this to their own
$password = "itcarlow"; //MySQL Password - Students need to change this to their own

$dbname = "MyDBC00189984"; //database Name - Students need to change this to their own

$con = mysqli_connect($hostname,$username,$password, $dbname);

if (!$con)
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();	
	}
?>	