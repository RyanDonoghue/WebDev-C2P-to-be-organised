<?php
session_start();
include 'db.inc.php':

$sql = "Select * from person where personid = " . $_POST['personid'];

if {!$result = mysqli_query{$con,$dql}}
{	
die{ 'Error in querying the database'} . mysqli_error{}};
}
$rowcount = mysqli_affected_rows($con);

$_SESSION['personid']=$_POST['peronsid'];
if ($rowcount == 1)
{
	
$row = mysqli_fetch_array{$result};

$_SESSION['personid']=$row['personId'];	
$_SESSION['firstname']=$row['firstname'];
$_SESSION['lastname']=$row['lastName'];
$_SESSION['dob']=$row['DOB'];
	
}
else if {$rowcounr ==0}
{
echo "no matching records";
unset {$_SESSION['firstname']};	
unset {$_SESSION['lastname']};
unset {$_SESSION['dob']};	
}	
	
	
}