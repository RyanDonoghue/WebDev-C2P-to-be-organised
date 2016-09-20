<?php
include "db.inc.php";

$sql = "SELECT personid, firstname, lastname, DOB FROM persons";

if (!$result = mysqli_query($con, $sql))
{
	die( 'Error in querying the database' . mysqli_error($con));
}

echo "<br><select name = 'listbox' id = 'listbox' onclick = 'populate()'>";

while ($row = mysqli_fetch_array($result))
{
	$id = $row['personid'];
	$fname = $row['firstname'];
	$sname = $row['lastname'];
	$dateofbirth = $row['DOB'];
	$dob = date_create( $row['DOB']);
	$dob = date_format($dob, "Y-m-d");
	$allText = "$id,$fname,$sname,$dob";
	echo "<option value = '$allText'>$fname $sname</option>";
}
echo "</select>";
mysqli_close($con);

?>