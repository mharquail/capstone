/*
	*    ArraysAtOne Capstone 2018 - Maple Leaf Foods
	*
	*    Kevin Baumgartner
	*    Jesse Berube
	*    Marc Harquail
	*    Alex Ireland
	*
	* * * * * * * * * * * * * * * * * * * * * * * * *
	*
	*    registerScript.js
	*    
	*    Alex Ireland
	*
	*/
function createUser(){
	var postData = {
		"user": document.getElementById("username").value,
		"pass" : document.getElementById("password").value,
		"firstname" : document.getElementById("firstname").value,
		"lastname" : document.getElementById("lastname").value,
		"email" : document.getElementById("email").value
	};
	$.post("php/register.php",postData,function(data,status){
		if (data.substring(0,7) == "success"){
			generateSuccess();
		}
		else if(data == "user failed"){
			generateError();
		}
	});
}

function generateSuccess(){
	alert("User Created");
	window.location.replace('./userSettings');
}
function generateError(){
	alert("Error Creating User");
}