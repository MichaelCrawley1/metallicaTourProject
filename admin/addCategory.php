<?php

session_start();

// check to see if user is logged in.  If not, redirect to admin page

if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
}


?>


<!doctype html>
<html lang="en">
<head>
<title>The Band</title>
<link rel="Stylesheet" type="text/css" href="css/style.css">
<meta charset = "utf-8">
</head>

<body>

	<div class="container-fluid">

<?php
require_once ("header.php");

?>
<h1>Add Category</h1>

<form method="post" action="enterCategory.php"/>

<p><input type="text" name="name" size="40"
maxlength="50"/></p>
<p><input type="submit" name="login" value="Add category" />

	</p>
</form>