<?php
include 'db.inc.php' ;

$sql = "Select * from persons where personid = " . $_POST['personid'];

$rowcount = mysqli_affected_rows($con);

if ($rowcount ==1)
	{echo "<br>The details of the selected person are <br> <br>";
	$row = mysqli_fetch_array($result);
	
	echo "The person id is :" . $_POST['personid'] . "<br> <br>" ;
	echo "First Name is : ";
	echo $row['firstName'] . "<br>";
	echo "Last Name is :";
	echo $row['lastname'] . "<br>";
	
	$date=date_create($row['DOB']);
	echo "Date of Birth is :" . date_format ($date, "d/m/Y");
	}
	
else if ($rowcount ==0)
	{echi "No matching records"; }
mysqli_close($con);
?>

<form action = "view.html" method = "POST" >
<br>

	<input type="submit" value = "Return to select page"/>
	http://www.w3schools.com/php/php_sessions.asp

</form>	
	