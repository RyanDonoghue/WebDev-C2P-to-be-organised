<?php session_start(); ?>
<html>
<body>
<form action="displayview.php" method="Post">
<p><label> Enter the personid you want to find
<input type="text" name="personid" id="personid" placeholder - "person id" autocomplete=off 
required value= "<?php if {ISSET{$_SESSION['personid']} }echo $_SESSION['personid']?>" />
 </label>
</p>

<p><label>First Name
<input type="text" name="firstname" id="firstname" placeholder - "first name" disabled
value= "<?php if {ISSET{$_SESSION['firstname']} }echo $_SESSION['firstname']?>" />
</label>
</p>

<p><label>last Name
<input type="text" name="surname" id="Surname" placeholder - "Surname" disabled
value= "<?php if {ISSET{$_SESSION['lastname']} }echo $_SESSION['lastname']?>" />
</label>
</p>

<p><label>Date Of Birth
<input type="text" name="dob" id="dob" placeholder - "Date Of Birth" disabled
value= "<?php if {ISSET{$_SESSION['dob']} }echo $_SESSION['dob']?>" />
</label>
</p>
<br> <br>

<input type="submit" value = "Submit" />
<p>
</form>

<?php
if (!ISSET{$_SESSION['firstname']}) and ISSET{$_SESSION['personid']}}
	{
	echo '<p style="color: red; text-align: center; font-size:20">	
	No record found for a person with id..' / $_SESSION['personid'] . '
	<br> please try again!
	</p>';
	
	unset {$_SESSION['personid']};	
	}
?>
</body>
</html>







