<?php

session_start();

if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
}

if (!isset($_SESSION['addBandPhotos'])){
$_SESSION['addBandPhotos']['img'] = "noimage.png";
$_SESSION['addBandPhotos']['state_country']="";
$_SESSION['addBandPhotos']['date']="";



}

else {

if($_SESSION['addBandPhotos']['img']!="noimage.png"){

		@unlink("../img/".$_SESSION['addBandPhotos']['img']);
}
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

        <div class="l-basic-grid-admin-and-c-panel h-grid">
        	<?php
require_once ("header.php");

?>


<!---this parent section comes from the, 'add tour' admin page, because stylistically, the layout is the same, for any modifications, that will be highlighted with a class specfic for its category, 'tour', 'news', 'photos' etc. ---->
		
<section class="c-admin-add-tour-dates h-flex h-position h-margin-bottom">


	<!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="manipulatePhotosSection.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->

<h1 class="c-admin-add-tour-dates-title">Enter details for the new Band Photos</h1>



<form method="post" action="confirmAddBandPhoto.php" class="c-admin-add-tour-dates-form h-padding" enctype="multipart/form-data" />


	<p class="c-admin-add-tour-dates-desc">Add a date: <input type="date" name="date" value="<?php echo $_SESSION['addBandPhotos']['date'];?>" size="40"
maxlength="50" class="c-admin-add-tour-dates-input" required /></p>

<p class="c-admin-add-tour-dates-desc">Insert state or country of tour: <input type="text" name="state_country" value="<?php echo $_SESSION['addBandPhotos']['state_country'];?>" size="40"
maxlength="50" class="c-admin-add-tour-dates-input" required /></p>

<p class="c-admin-add-tour-dates-desc">Add an image: <input type="file" name="fileToUpload"  id="fileToUpload" size="40"
maxlength="50" class="c-admin-add-tour-dates-input" required ></p>

<div class="c-admin-add-tour-dates-submit-button-container h-flex">
<button class="c-button-mobile c-button-mobile--large h-uppercase" type="submit" name="submit"  >Submit</button>
</div>
</form>


<?php

if (isset($_GET['signup'])){

  $correctForm = $_GET['signup'];

  if ($correctForm == "char"){?>

      <p class="c-admin-add-tour-dates-desc h-font-size h-text-align">Entries must begin with letters for venue and location of tour!</p>



<?php
    
  }

}

  


?>

	<!---reusable class from the tour delete section, remains to be seen If I will use this---->


<h1 class="c-admin-DELETE-tour-dates-title">Add Band Photo</h1>


<section class="c-news-stories-DELETE h-grid">





		<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$delPhotos_sql = "SELECT * FROM photo_table";

$delPhotos_query= mysqli_query($dbc, $delPhotos_sql);

 
 		
while ($delPhotos_rs = mysqli_fetch_array($delPhotos_query)){ ?>

 	<article class="c-news-stories-DELETE-container">

 		<div class="h-position  h-height400 h-padding">

 			 <!---the, 'c-music-DELETE-img-album-change' class is in its own comparted sass file---->
 	  	<img class="c-news-stories-DELETE-img-itself c-music-DELETE-img-album-change" src="../img/<?php echo $delPhotos_rs['img_ref']?>" />

 	  	<!---end of the music delete component ---->
		

		<div class="c-news-stories-DELETE-info-container ">
 	  		<div class="c-news-stories-DELETE-date"><?php echo $delPhotos_rs['date']?>
 	  	</div>
 	  	<!---this class is from the tour section, just testing this what it looks like--->
 	  	<div class="c-upcoming-shows-location"> <?php echo $delPhotos_rs['state_country']?>  </div> 

		</div>
 	 
 	
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





 
 	



