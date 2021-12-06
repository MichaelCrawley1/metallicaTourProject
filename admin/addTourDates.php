<?php



session_start();



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// check to see if user is logged in.  If not, redirect to admin page

if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
  exit();
}

// set session to blank if user has just entered this page from the admin panel

if(!isset($_SESSION['addTourDates']['tourDates'])){

$_SESSION['addTourDates']['tourDates'] = "";

}

if(!isset($_SESSION['addTourDates2']['venue'])){

$_SESSION['addTourDates2']['venue'] = "";

}

if(!isset($_SESSION['addTourDates3']['state_country'])){

$_SESSION['addTourDates3']['state_country'] = "";

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

<!---this parent section will serve to be a reusable component for all the other, admin 'add' details pages because stylistically the layout is the same, for any modifications, that will be highlighted with a class specfic for its category, 'tour', 'news', 'photos' etc. ---->
		
<section class="c-admin-add-tour-dates h-flex h-position">


	<!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="manipulateTourSection.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->



<h1 class="c-admin-add-tour-dates-title">Add Tour Dates</h1>

<form name="tourFormCheck" method="post" action="confirmTour.php" class="c-admin-add-tour-dates-form"/>

<p class="c-admin-add-tour-dates-desc">Insert Date of tour: <input type="date" name="tourDates" value="<?php echo $_SESSION['addTourDates']['tourDates'];?>" size="40"
maxlength="50" class="c-admin-add-tour-dates-input" required /></p>


<p class="c-admin-add-tour-dates-desc">Insert Venue of tour: <input type="text" name="venue" value="<?php echo $_SESSION['addTourDates2']['venue'];?>" size="40"
maxlength="50" class="c-admin-add-tour-dates-input" required /></p>
<p class="c-admin-add-tour-dates-desc">Insert state or country of tour: <input type="text" name="state_country" value="<?php echo $_SESSION['addTourDates3']['state_country'];?>" size="40"
maxlength="50" class="c-admin-add-tour-dates-input" required /></p>

<div class="c-admin-add-tour-dates-submit-button-container h-flex">
<button class="c-button-mobile c-button-mobile--large" type="submit" name="submit"  >Add Tour Date</button>
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





<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the TOUR section (upcoming-shows), they only difference is that there are the maximum entries here for the TOUR, not limitied to three like in the home page (product.php), I have also taken out the heading, 'upcoming shows' from the home page,  bit overkill here.---->


<section class="c-upcoming-shows c-admin-add-tour-dates-override-flex">

<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

 unset($_SESSION['editTourDateInfo']);

$editTour_sql="SELECT * FROM Tour_table";
$editTour_query= mysqli_query($dbc, $editTour_sql);

?>



<?php
while($editTour_rs= mysqli_fetch_array($editTour_query)){ ?>

	<article class="c-upcoming-shows-container h-flex">

 	  <div class="c-upcoming-shows-date">


 	   


 	  <span class="c-upcoming-shows-month"><?php echo  $editTour_rs['date'] ?></span></div>
 	  <div class="c-upcoming-shows-venue-container"> <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title"><?php echo $editTour_rs['venue'] ?></h3>
 	 		</div>
 	 	 <div class="c-upcoming-shows-location"> <?php echo $editTour_rs['state_country']?> </div> 

 	 
 	 </article>
	

<?php

}


?>

</section>

<!--- end of reusable component---->



 
</section>



<?php
require_once ("../abstractFooter.php");

?>
</div>
</body>
</html>



