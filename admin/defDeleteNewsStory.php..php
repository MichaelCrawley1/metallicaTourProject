<?php



session_start();

if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
}

?>


<!doctype html>
<html lang="en">
<head>
<title>The Band</title>
<link rel="Stylesheet" type="text/css" href="../css/style.css">
<meta charset = "utf-8">
</head>

<body>

	<div class="container-fluid">

<?php
require_once ("header.php");
require_once ("connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

 $delNewsStory_sql = "DELETE FROM News_table WHERE id=".$_GET['newsID'];
 $delNewsStory_query= mysqli_query($dbc,$delTour_sql);


?>

<h1>Tour Date Deleted!!</h1>

<p> Category has successfully been deleted</p>
<p><a href="admin.php">Return to control panel</a></p>

 






</div>
</body>
</html>

