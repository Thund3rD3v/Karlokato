alert('This website is under construction. Press OK to acknowledge.')
function register(){
	var usr=document.getElementById('input_username_register')
	var pwd=document.getElementById('input_password_register')
	var pwdConf=document.getElementById('input_password_confirm')
	var age=document.getElementById('input_age')
	if(usr.value==''){
		usr.style.borderColor='red'
	}
	else if(pwd.value==''){
		pwd.style.borderColor='red'
	}
	else if(pwdConf.value!=pwd.value){
		pwdConf.style.borderColor='red'
	}
	else if(age.value<13){
		age.style.borderColor='red'
	}
	else{
		alert('We don\'t track you in any form, unless you agree to it so we can improve Karlokato and your experience. We do not sell data or anything related to you. All data will be kept in a secure place and will never be used out of Karlokato and it\'s services.');
		document.getElementById('form_register').submit();
		window.location.replace('index.php')
		alert('Your account has been created! You can now login to Karlokato.')
	}
}