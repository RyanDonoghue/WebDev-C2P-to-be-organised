/* 	Paul Cleary
	C00189984
	18/01/16	*/

	function start(form)
	{
        var theDate = new Date(form.date.value);
        var theDays = form.days.value;
        theDays = parseInt(theDays);
        
        var endDay = new Date();
        endDay.setMonth(theDate.getMonth());
        endDay.setFullYear(theDate.getFullYear());
        endDay.setTime(theDate.getTime());
        
        var a = theDate.getDate() + theDays;
        endDay.setDate(a);
        
        var res = result = document.getElementById('out').innerHTML = theDate + 
            "<br>" + theDays + "<br>" + a + "<br>" + endDay; 

        
        return res;
		
	}