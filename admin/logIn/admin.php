<?php

session_start();

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/errorReporting/developmentErrorReporting.php");

//check to see if user is logging out

if(isset($_GET['action'])){

	if ($_GET['action']=="logout"){
		unset($_SESSION['admin']);
	}
}

// if login form has been submitted, check if username and password match
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

if(isset($_POST['login'])) {

	$login_sql= "SELECT * FROM user_table WHERE username ='".$_POST['username']."' AND password='".sha1($_POST['password'])."'";

	$login_query=mysqli_query($dbc, $login_sql);

	while($login_rs = mysqli_fetch_array($login_query)){


	$_SESSION['admin'] = $login_rs['username'];

	}

}

if(isset($_SESSION['admin'])){

	require_once ("cpanel.php");

}

else {

	require_once ("login.php");
}



?>


