<?php include_once'connect.php';?>
<!doctype html>
<html>
<head>
<title>KARLOKATO - Login</title>
<script src='external_js.js'></script>
<link rel='stylesheet'href='external_css.css'>
</head>
<img class='main_head'src='logo.png'>
<body id='body_0'>
<div id='div_login'>
<h2 id='h2_login'>Login</h2>
<form action='form_handler.php'method='GET'>
<input id='input_username_login'class='input_1'type='text'placeholder='Username'>
<input id='input_password_login'class='input_1'type='password'placeholder='Password'>
<button id='button_login'class='button_1'type='submit'>Login</button>
</form>
<a id='a_register'href='register.php'>Don't have an account? You can create one here!</a>
</div>
</body>
</html>