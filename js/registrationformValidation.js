
	function checkRegistration(){
var f_name = document.forms["register"]["fName"].value; 
	var l_name = document.forms["register"]["lName"].value;
var email  = document.forms["register"]["email"].value;
var password = document.forms["register"]["password"].value;
   if (f_name === '' || l_name === '' || email === '' || password === ''){
		alert("You must fill in all of the fields.");
		return false;
	}
	if(password.length < 6) {
        alert("Error: Password must contain at least six characters!");
        return false;
     }
      re = /[0-9]/;
      if(!re.test(password)) {
        alert("Error: password must contain at least one number (0-9)!");
        return false;
      }
      re = /[a-z]/;
      if(!re.test(password)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        return false;
      }

	var x = document.getElementById("month").selectedIndex;
	var choice = document.getElementsByTagName("option")[x].value;
	var y = document.getElementById("day").selectedIndex;
	var choice1 = document.getElementsByTagName("option")[y].value;
	var z = document.getElementById("year").selectedIndex;
	var choice2 = document.getElementsByTagName("option")[z].value;

	var gender = document.querySelectorAll('input[name="gender"]:checked');

	if (choice==="Month" || choice1==="Day" || choice2 === "Year" || gender.length==0)
	{
	 alert("You must indicate your full birthday to register.");
	 return false;
	}
}


function loginformvalidation(){
var log_email = document.forms["login"]["log_email"].value; 
var log_pword = document.forms["login"]["log_pword"].value; 
	if (log_email === '' || log_pword === ''){
		alert("You must fill login fields.");
		return false;
	}
	return true;
}

function checkEmail(){
/*	//get value of email address inputted by the user
	var e_mail =  document.getElementById("email").value;
	//get the position of at symbol
	var atpos = e_mail.indexOf("@");
	//get the position of dot
	var dotpos = e_mail.lastIndexOf(".");
	//get the class name of div of email
	var divemail = document.getElementById('divemail');

	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){         
	// if the javascript detect the bad inputs from user
	//will set the class Name of error
	//then you can notice that the color of email textbox will turn to red
	   divemail.className = "form-group has-error";
	   //and set the focus to the email
	   document.getElementById('email').focus();
	
	}else{
	//set the class name to success
	//the color will turn to green
	    divemail.className = "form-group has-success";
		
	}*/
}	
function checkEmail2(){
        var email =  document.forms["register"]["email"].value;
        var divreemail = document.getElementById('divremail');
		var divemail = document.getElementById('divemail');
		var reemail = document.getElementById("reemail").value;
		//check if the re enter the email address is equal to the inputted email
		if(email != reemail){
			divreemail.className = "form-group has-error";
			document.getElementById("reemail").focus();
		}else{
			divreemail.className = "form-group has-success";
			divemail.className = "form-group has-success";
		}
}
