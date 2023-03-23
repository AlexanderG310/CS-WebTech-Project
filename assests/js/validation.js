// JavaScript Document
function checkName(nameValue,nameId){
	var pattern=/[a-zA-Z]+$/;
	var msg;
	if (nameValue.match(pattern))
	{
		msg = 'Data is valid';
		document.getElementById(nameId+'Help').style.color = '#66FF99';
	}
	else
	{
		msg = 'Invalid data entered';
		document.getElementById(nameId+'Help').style.color = '#FFCCCB';
	}
	document.getElementById(nameId+'Help').innerHTML = msg;
}

function checkEmail(emailValue){
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var msg;
	if(emailValue.match(mailformat))
	{
		msg = "Email is valid";
		document.getElementById('emailHelp').style.color = '#66FF99';
	}
	else
	{
		msg = "Email is invalid";
		document.getElementById('emailHelp').style.color = '#FFCCCB';
	}
	document.getElementById('emailHelp').innerHTML = msg;
}

function checkUsername(usernameValue){
	var userformat = /^[a-zA-Z0-9]{8,}$/;
	var msg;
	if(usernameValue.match(userformat))
	{
		msg = "Valid Username";
		document.getElementById('usernameHelp').style.color = '#66FF99';
	}
	else
	{
		msg = "Invalid Username";
		document.getElementById('usernameHelp').style.color = '#FFCCCB';
	}
	document.getElementById("usernameHelp").innerHTML = msg;
}

function checkComment(commentValue){
	var commentformat = /^[^!@#$%^&*]+$/;
	var msg;
	if(commentValue.match(commentformat))
	{
		msg = "Valid comment";
		document.getElementById('commentHelp').style.color = '#66FF99';
	}
	else
	{
		msg = "Comment contains invalid characters";
		document.getElementById('commentHelp').style.color = '#FFCCCB';
	}
	document.getElementById("commentHelp").innerHTML = msg;
}