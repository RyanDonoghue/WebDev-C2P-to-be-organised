/* 	Paul Cleary
	C00189984
	13/01/16
*/
    //specifies the seconds in a day  'day*hr*min*sec'
    var day = 24*60*60*1000;
    var days;
    var today = new Date();       
    var christmas = new Date();

    //sets date to 12/25 of today's year
    christmas.setMonth(11);   
    christmas.setDate(25);          
    christmas.setFullYear(today.getFullYear());

    //only if the month is December
    if (today.getMonth() == 11)  
    { 
        if(today.getDate() > 25 && today.getDate() <= 31)
        {
            //adds a year to Christmas
            christmas.setFullYear(christmas.getFullYear() + 1);
        }
    }
    //calculating the difference in milliseconds
    days = christmas.getTime() - today.getTime();
    //rounds the number down
    days = Math.floor(days / day);	
	
    document.getElementById('p_1').innerHTML = "There is only <u>" + days + "</u> day(s) until Christmas!";