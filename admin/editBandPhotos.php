<?php



session_start();

if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
}

?>


<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="height=device-height, 
                      width=device-width, initial-scale=1.0, 
                      minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>The Band</title>
<link rel="Stylesheet" type="text/css" href="../css/main.css">
<script src="../js/mobileMenu.js" defer></script>
<meta charset = "utf-8">
</head>

<body>
	<!---html classes will be set up using the Block Element Modifier (BEM) styled system.  My method will involve letters with dashes (-) as a prefix to enabled the reader to understand if a section of code is a component or a layout element.  Glossary is displayed below:

        c- = this equals a component that is likely to get reused
        l- = this equals a class that acts as block layout like a reusable container for example
        h- = the h prefix is to signify helper classes like clearfix to get elements back in the html document flow
        js- = this is to signify when we need to use JavaScript on an block or a block element to bring in dynamic functionality.
        c-js- = will refer to both components and components that rely on JavaScript functionality
        c-mq- = could be for media queries.

        In addition, throughout this document there will be a comment that says, 'modifier here, please see css comments for what this does or what it is for'.  This way by using the find search tool provided by the editor we can quickly find the modifier we are looking for.  Might be an advantage to say for media queries too.
        ---->

        <!--- different grid here as the icon will have its own section with very small height---->

        <div class="l-basic-grid-delete-news-stories h-grid">
        	<?php
require_once ("header.php");
?>

<!----I think this class below was to allow for grid to have this in a separate row to keep the icon at the edge of the page--->

 <div class="c-news-stories-DELETE-icon-container h-position">


<!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container c-news-stories-DELETE-icon-back-to-the-left ">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="manipulatePhotosSection.php" class="c-back-page-icon-link"></a>
    </div>


<!----end of reusable component----->

</div>

<!---reusable class from the tour delete section, remains to be seen If I will use this---->


<section class="c-admin-DELETE-tour-dates h-flex c-news-stories-DELETE-max-width">


<h1 class="c-admin-DELETE-tour-dates-title">Edit Band Photo</h1>


<section class="c-news-stories-DELETE h-grid">

<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

 unset($_SESSION['editBandPhotoInfo']);

$editBandPhoto_sql="SELECT * FROM photo_table";
$editBandPhoto_query= mysqli_query($dbc, $editBandPhoto_sql);


while($editBandPhoto_rs= mysqli_fetch_array($editBandPhoto_query)){ ?>


	<article class="c-news-stories-DELETE-container">

 		<div class="h-position  h-height400 h-padding">

 			 <!---the, 'c-music-DELETE-img-album-change' class is in its own comparted sass file---->
 	  	<img class="c-news-stories-DELETE-img-itself c-music-DELETE-img-album-change" src="../img/<?php echo $editBandPhoto_rs['img_ref']?>" />

 	  	<!---end of the music delete component ---->

 	  	<div class="c-news-stories-DELETE-info-container ">
 	  		<div class="c-news-stories-DELETE-date"><?php echo $editBandPhoto_rs['date']?>
 	  	</div>
 	  	<!---this class is from the tour section, just testing this what it looks like--->
 	  	<div class="c-upcoming-shows-location"> <?php echo $editBandPhoto_rs['state_country']?>  </div> 

		</div>

		<a class="c-news-stories-DELETE-links-bbc" href="editBandPhotosInfo.php?photoID=<?php echo $editBandPhoto_rs['id'];?>">
 	 
 	</a>


 </div>
</article>




	
 <?php


 }

?>

</section>

<!---- end of the reusable component ---->

</section>

<!---end of parent component----->

<?php
require_once ("../abstractFooter.php");

?>
</div>

</body>
</html>





 
 	





