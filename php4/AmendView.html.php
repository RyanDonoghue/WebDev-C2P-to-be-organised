<html>
<body>

<h1> Amend/View a Person </h1>
<h4>Please select a person and then click the amend button if you wish to update</h4>

<?php include 'listbox.php'; ?>
<script>
function populate()
{
	var sel = document.getElementById("listbox");
	var result;
	result = sel.options[sel.selectedIndex].value;
	var result;
	result = sel.options[sel.selectedIndex].value;
	var personDetails = result.split(',');
	document.getElementById("display").innerHTML = "The details of the selected person are: " + result;
	document.getElementById("amendid").value = personDetails[0];
	document.getElementById("amendfirstname").value = personDetails[1];
	document.getElementById("amendlastname").value = personDetails[2];
	document.getElementById("amendDOB").value = personDetails[3];
}

function toggleLock()
{
	
if (document.getElementById("amendViewbutton").value == "Amend Details")
	{
		document.getElementById("amendfirstname").disabled = false;
		document.getElementById("amendlastname").disabled = false;
		document.getElementById("amendDOB").disabled = false;
		document.getElementById("amendViewbutton").value = "Amend Details";
	}
}

function confirmCheck ()
{
	var responce;
	responce = confirm('Are you sure you want to save these changes?');
	if (response)
	{
		document.getElementById("amendid").disabled = false;
		document.getElementById("amendfirstname").disabled = false;
		document.getElementById("amendlast name").disabled = false;
		document.getElementById("amendDOB").disabled = false;
		return true;
	}
	else
	{
		populate ();
		toggleLock ();
		return false;
	}
}

<p id = 'display'> </p>
<input type = "button" value = "Amend Details" id = "amendViewbutton" onclick = "toggleLock()">


<form name="myForm" action="AmendView.php" onsubmit="return confirmCheck()" method="post">

<table cellspacing = "10">
<tr><td><label>Person Id </td> <td><input type = "text" name = "amendid" id = "amendid" disabled> </label></td></tr>
<tr><td><label>First Name </td> <td><input type = "text" name = "amendfirstname" id = "amendfirstname" disabled> </label></td></tr>
<tr><td><label>Surname </td> <td><input type = "text" name = "amendlastname" id = "amendlastname" disabled> </label></td></tr>
<tr><td><label>Date of Birth </td> <td><input type = "date" name = "amendDOB" id = "amendDOB" title = "format is dd-mm-yyyy" disabled> </label></td></tr>
</table>
<br>
<input type = "submit" value = "Save Changes" >
</form>

</body>
</html>