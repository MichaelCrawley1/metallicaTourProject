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

        <div class="l-basic-grid-edit-and-delete-tour h-grid">
        	<?php
require_once ("header.php");

?>

<!--- this is going to be a reusable component from the, "deleteTourDates.php" page as the layout to edit the tour information is the same as the data you would maybe want to delete, this is the whole section layout component!!!---->

<section class="c-admin-DELETE-tour-dates h-flex h-position">

  <!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="manipulateTourSection.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->

<h1 class="c-admin-DELETE-tour-dates-title">Edit Tour Dates</h1>


<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the TOUR section (upcoming-shows) there is also a class taken from the add Tour dates page to override the flex to stretch the whole page---->







<section class="c-upcoming-shows c-admin-add-tour-dates-override-flex c-upcoming-shows--before-take-background-off">

<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

 unset($_SESSION['editTourDateInfo']);

$editTour_sql="SELECT * FROM Tour_table";
$editTour_query= mysqli_query($dbc, $editTour_sql);


while($editTour_rs= mysqli_fetch_array($editTour_query)){ ?>

	

<article class="c-upcoming-shows-container h-flex h-position">

  
 	  <div class="c-upcoming-shows-date">

 	  	

 	  	 
 	  	 
	<span class="c-upcoming-shows-month"><?php echo  $editTour_rs['date'] ?></span></div>
 	  <div class="c-upcoming-shows-venue-container"> <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title"><?php echo $editTour_rs['venue'] ?></h3>
 	 		</div>
 	 	 <div class="c-upcoming-shows-location"> <?php echo $editTour_rs['state_country']?> </div> 





 	  	 <a class="c-admin-DELETE-tour-dates-links" href="editTourInfo.php?tourID=<?php echo $editTour_rs['ID'];?>"> </a>
 	  	

 	  	 <!---above is the anchor class this is a little different from the reusable component(hence the different class name) I first did this by wrapping the content inside the anchor tag.  It did work the way I intended but I noticed it messed up my html code best practice because anchor tags are inside elements by default.  I am going back to the pseudo element technique done by the BBC. ---->

 	  </article>

	

<?php

}


?>
 
 </section>

<!--- end of reusable component---->





</section>

<!---end of whole page component---->

<?php
require_once ("../abstractFooter.php");

?>
</div>




</body>
</html>



