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

        <div class="l-basic-grid-admin-and-c-panel h-grid">
        	<?php
require_once ("header.php");

?>


<section class="c-admin-DELETE-tour-dates-CONFIRM h-flex h-position">

  <!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="deleteTourDates.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->

<h1 class="c-admin-DELETE-tour-dates-CONFIRM-title">Confirm Tour Date Deletion</h1>


<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the TOUR section (upcoming-shows) there is also a class taken from the add Tour dates page to override the flex to stretch the whole page---->


<section class="c-upcoming-shows c-admin-add-tour-dates-override-flex">


<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$delTourDates_sql="SELECT * FROM Tour_table WHERE ID=".$_GET['tourID'];

$delTourDates_query= mysqli_query($dbc, $delTourDates_sql)
or die('Error querying database.');
$delTourDates_rs = mysqli_fetch_array($delTourDates_query);

?>

<article class="c-upcoming-shows-container h-flex">

 	  <div class="c-upcoming-shows-date">
 
 	


 	  <span class="c-upcoming-shows-month"><?php echo  $delTourDates_rs['date'] ?></span></div>
 	  <div class="c-upcoming-shows-venue-container"> <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title"><?php echo $delTourDates_rs['venue'] ?></h3>
 	 		</div>
 	 	 <div class="c-upcoming-shows-location"> <?php echo $delTourDates_rs['state_country']?> </div> 
 	 

 	  </article>

 </section>

 <!--- end of reusable component---->


<!--- this will serve as a reusable component as this option design is in the penutimate page of the other sections of the website too---->

<div class="c-admin-confirm-add-tour-desc-container h-flex">


<p class="c-admin-confirm-add-tour-desc"><a class="c-admin-confirm-add-tour-desc-links" href="defDeleteTour.php?tourID=<?php echo $_GET['tourID'];?>">Yes, delete it!</a> |
<a href="deleteTourDates.php" class="c-admin-confirm-add-tour-desc-links">No, go back</a> | <a href="admin.php" class="c-admin-confirm-add-tour-desc-links">Back to control panel</a></p>

</div>
<!---end of a reusabele component---->
</section>


<?php
require_once ("../abstractFooter.php");

?>
</div>

</body>
</html>

