/* 	Paul Cleary
	C00189984
	13/01/16	*/

//the form is the parameter used
function bDay(form)			
{
	var year = 365*24*60*60*1000;
    var result;
	
	//the value is taken from the form and put into a Date object
	var dob = new Date(form.bday.value);
	var present = new Date();
	
	//getting the difference in milliseconds
	var dif = present.getTime() - dob.getTime();
	
	var age = dif / year;
		age = parseInt(age);

    //output for birthday date and normal 
    if(present.getMonth() == dob.getMonth() && present.getDate() == dob.getDate())
        {
            result = document.getElementById('out').innerHTML = "Happy Birthday! You are " + age + " years old!";
        }
    else
        {
            result = document.getElementById('out').innerHTML = "You are " + age + " years old!";
        }
	return result;
}