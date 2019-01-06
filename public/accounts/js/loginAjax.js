//function to login user
function login(){
    
    var xml = new XMLHttpRequest();
    
    var password = document.getElementById("password").value;
    var passError = document.getElementById("passError");
    
    var email = document.getElementById("email").value;
    var emailError = document.getElementById("emailError");
    
    var successMsg = document.getElementById("successMsg");
    
    //validate input fields
    if(password === ""){
		passError.innerHTML = "<i>Sorry, you must enter your password</i>";
	}else{
		passError.innerHTML = "";
	}

	if(email === ""){
		emailError.innerHTML = "<i>Sorry, you must enter your valid email address</i>";
	}else{
		emailError.innerHTML = "";
	}
    
    var url = "processLogin.php";
    
    var vars = "email="+email+"&password="+password;
    
    xml.open("POST", url, true);
	//check if the connection to server is ok or ready
        
        xml.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200){

            	var ans = this.responseText;

                if(ans.trim() === "Redirecting"){

                	 successMsg.innerHTML = ans;
                	
                	setTimeout(function(){
                	
                	window.location.href="index.php";
                	
                	}, 2000);
                }else{
                	emailError.innerHTML = ans;
                	successMsg.innerHTML = "";
                }

              
            }
        };
        xml.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        xml.send(vars);
        if(email || password !== ""){
        document.getElementById("successMsg").innerHTML = "<i>Processing. Please wait...</i>";
        }else{
            document.getElementById("successMsg").innerHTML = "";
        }
}



//function to register user
function register(){
    
    var xml = new XMLHttpRequest();
    
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    var passError = document.getElementById("passError");
    
    var email = document.getElementById("email").value;
    var emailError = document.getElementById("emailError");
    
    var phone = document.getElementById("phone").value;
    var phoneError = document.getElementById("phoneError");
    
    var fname = document.getElementById("fname").value;
    var nameError = document.getElementById("nameError");
    
    var country = document.getElementById("country").value;
    var contError = document.getElementById("contError");
    
    var refcode = document.getElementById("refcode").value;
    var refError = document.getElementById("refError");
    
    var acid = document.getElementById("accountId").value;
    
    var successMsg = document.getElementById("successMsg");
    var successMsg2 = document.getElementById("successMsg2");
    
    //validate input fields
    if(fname === ""){
		nameError.innerHTML = "<i>Sorry, you must provide your name</i>";
	}else{
		nameError.innerHTML = "";
	}
	
	if(email === ""){
		emailError.innerHTML = "<i>Sorry, you must provide a valid email address</i>";
		//exit;
	}else{
		emailError.innerHTML = "";
	}
	
	if(phone.length > 14){
	    phoneError.innerHTML = "<i>Sorry, your phone number should not be more than 14 digits!";
	    //exit;
	}
	
	if(phone === ""){
	    phoneError.innerHTML = "<i>Sorry, your phone number can not be empty!";
	}else{
	   phoneError.innerHTML = ""; 
	}
	
    if(password === ""){
		passError.innerHTML = "<i>Sorry, you must provide a password</i>";
	}else{
		passError.innerHTML = "";
	}
	
	if(password !== cpassword){
	    passError.innerHTML = "<i>Sorry, your password does not match!</i>";
	}else{
	    passError.innerHTML = "";
	}
	
	if(country === ""){
	    contError.innerHTML = "<i>Sorry, you have to select your country!</i>";
	}else{
	    contError.innerHTML = "";
	}
	
	if(refcode === ""){
	    refError.innerHTML = "<i>Sorry, you have to provide a valid ref. code!</i>";
	}else{
	    refError.innerHTML = "";
	}
    
    var url = "processReg.php";
    
    var vars = "email="+email+"&password="+password+"&cpassword="+cpassword+"&fname="+fname+"&country="+country+"&phone="+phone+"&account_id="+acid+"&ref_code="+refcode;
    
    xml.open("POST", url, true);
	//check if the connection to server is ok or ready
        
        xml.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200){

            	var ans = this.responseText;

                	successMsg2.innerHTML = "";
                	successMsg.innerHTML = "";
                	
                	alert(ans);
              
            }
        };
        xml.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        xml.send(vars);
        if(email !== "" || password !== "" || fname !== "" || phone !== "" || country !== "" || refcode !== ""){
        document.getElementById("successMsg").innerHTML = "<i>Processing. Please wait...</i>";
        
        document.getElementById("successMsg2").innerHTML = "<i>Processing. Please wait...</i>";
        }else{
            document.getElementById("successMsg").innerHTML = "";
            document.getElementById("successMsg2").innerHTML = "";
        }
}