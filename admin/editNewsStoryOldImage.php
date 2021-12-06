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
<link rel="Stylesheet" type="text/css" href="css/style.css">
<meta charset = "utf-8">
</head>

<body>

	<div class="container-fluid">

<?php
require_once ("header.php");


?>

<div class="container2">





		<div class ="layout">

			
	<div class="layout-column alpha">
		<div id="articles-full" >

<h1>Edit Tour Information</h1>

<?php 

require_once ("connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

if(isset($_GET['newsID'])){
$_SESSION['editNewsStoryInfo'] ['newsID'] =$_GET['newsID'];

}



$editNewsStory_sql="SELECT * FROM News_table WHERE id=".$_GET['newsID'];
$editNewsStory_query= mysqli_query($dbc, $editNewsStory_sql);
if($editNewsStory_rs= mysqli_fetch_array($editNewsStory_query)) {

	?>





<p> Do you want to keep this image but amend the text? </p>

<p><a href="editNewsStoryOldImage?newsID=<?php echo $editNewsStory_rs['id'];?>"> Yes proceed keeping old image</a> | <a href="editNewsStoryNewImage.php"> No, I want to change text and the image</a> | <a href="editNewsStorySelect.php"> Go back a step</a> | <a href="admin.php">Back to control panel</a></p>

 	<article class="articles-block">

 	  <div class="articles-photo">
 	  	<a href="editNewsStoryInfo.php?newsID=<?php echo $editNewsStory_rs['id'];?>"><img src="img/<?php echo $editNewsStory_rs ['img_ref'];?>" />

 	  	<div class="articles-body">
 	  		<div class="articles-date"><?php echo $editNewsStory_rs['date'];?>
 	  	</div>
 	  </div>

 	  	<h3 class=articles-headline><?php echo $editNewsStory_rs['title'];?></h3>

 	  	<div class="articles-blurb"><?php echo $editNewsStory_rs['description'];?> </div>

 	 
 	</a>
 	 </div>

 	
 </article>

<?php

}

?>



</div>
</div>
</div>
</div>
</body>
</html>

