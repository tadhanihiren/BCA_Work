//Implement all the javascript validations here and call it in html page

function marks()
{
	var n1=parseInt(document.myForm.event1.value);
	var n2=parseInt(document.myForm.event2.value);
	var n3=parseInt(document.myForm.event3.value);
	var n4=parseInt(document.myForm.event4.value);
	
	var result=n1+n2+n3+n4;
	
	document.myForm.m1.value=result;
}

function percentage()
{
	var n1=parseInt(document.myForm.event1.value);
	var n2=parseInt(document.myForm.event2.value);
	var n3=parseInt(document.myForm.event3.value);
	var n4=parseInt(document.myForm.event4.value);
	
	var result=n1+n2+n3+n4;
	var per=(result*100)/200;
	document.myForm.per.value=per;
}






function validateForm() 
{
    
	//Student name validation 
	
	var x = document.forms["myForm"]["name"].value;
    if (x == "") 
	{
        alert("Name must be filled out");
        return false;
    }
	
	if(x.length >=15)
	{
		alert("Student name limit is 15 charecter");
		return false;
	}
	
	
	
	
// Mobile number validation	
	
	
	
	var y = document.myForm.mobile.value;
	
	if(isNaN(y) || y.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false; 
           }
           if (y.length==10 && y.charAt(0)=="9")
           {
                alert("Greate...!!!  valid no");
                return true;
           }
		   else
		   {
				alert("Sorry..!!!   It's _invalid no..");
				return false;
		   }
 var z = document.myForm.email.value;
    var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
        alert("Not a valid e-mail address");
        return false;
   }
}

