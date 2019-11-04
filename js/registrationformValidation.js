
function checkRegistration(){
	var f_name = document.forms["register"]["fName"].value; 
 	var l_name = document.forms["register"]["lName"].value;
	var email  = document.forms["register"]["email"].value;
	var reemail = document.forms["register"]["reemail"].value;
	var password = document.forms["register"]["password"].value;
	   if (f_name == '' || l_name == '' || email == '' || reemail == '' || password == ''){
			alert("You must fill in all of the fields.");
			window.location = "index.php";
			return false;
		}

		var x = document.getElementById("month").selectedIndex;
		//get the specific value based on the selectedIndex
		var choice = document.getElementsByTagName("option")[x].value;

		//get the selected value for Day
		var y = document.getElementById("day").selectedIndex;
		var choice1 = document.getElementsByTagName("option")[y].value;

		//get the selected value for Year
		var z = document.getElementById("yr").selectedIndex;
		var choice2 = document.getElementsByTagName("option")[z].value;

		//check if the selected value is empty then it will return the function to false	
		if (choice == "" || choice1 == "" || choice2 == ""){
		 alert("You must indicate your full birthday to register.");
		 return false;
		}
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
