<?php include_once'connect.php';?>
<!doctype html>
<html>
<head>
<title>KARLOKATO - Register</title>
<link rel='stylesheet'href='external_css.css'>
<script src='external_js.js'></script>
</head>
<body id='body_0'>
<img class='main_head'src='logo.png'>
<div id='div_register'>
<h2 id='h2_register'>Register</h2>
<form id='form_register'action='form_handler.php'method='POST'>
<input id='input_username_register'class='input_1'type='text'placeholder='Username'>
<input id='input_password_register'class='input_1'type='password'placeholder='Password'>
<input id='input_password_confirm'class='input_1'type='password'placeholder='Confirm Password'>
<p id='p_age'>*MUST BE 13+ YEARS OF AGE TO REGISTER*</p>
<input id='input_age'class='input_1'type='text'placeholder='Age (Years)'>
</form>
<button id='button_register'class='button_1'onclick='register();'>Create Account</button>
<a id='a_login'href='index.php'>Already have an account? Click here to return to the login page.</a>
</div>
</body>
</html>

