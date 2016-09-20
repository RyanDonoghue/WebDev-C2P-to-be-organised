function formAge()
{
	var year = 365*24*60*60*1000;
	var dob = new Date(document.forms["details"]["dob"].value);
	var age = new Date();
	var present = new Date();
	
	var dif = present.getTime() - dob.getTime();
	
	//calculates age
	age = dif / year;
	age = parseInt(age);
	
	if(age < 17)
	{
		var limit = alert("You must be older than 17");
		return limit;
	}
}

function formVal()
{
	var eMail = document.forms["details"]["email"].value;
	var eConfirm = document.forms["details"]["confirm"].value;
	
	//Compares the two inputs
	if(eMail != eConfirm)
	{
		var a = alert("E-mails don't match");
		return a;
	}
} 



