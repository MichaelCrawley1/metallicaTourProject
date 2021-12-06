<?php
session_start();

//check to see if user is logged in.  If not, redirect to admin page

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
<h1>Enter Category</h1>



