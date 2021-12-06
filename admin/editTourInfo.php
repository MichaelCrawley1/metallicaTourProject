
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



<!---this is a new grid layout to space put the form and the tour details that need to be changed ------>

        <div class="l-basic-grid-admin-edit-tour h-grid">
        	<?php
require_once ("header.php");

?>

<!----this is a reusable component be very similar to the add a new tour details in,since that also use forms---->

<section class="c-admin-add-tour-dates h-flex h-position">


	<!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="editTourDateSelect.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->



<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

if(isset($_GET['tourID'])){
$_SESSION['editTourDateInfo'] ['tourID'] =$_GET['tourID'];
}

if(!isset($_SESSION ['editTourDateInfo'] ['date']) &&  !isset($_SESSION ['editTourDateInfo'] ['venue'])&&  !isset($_SESSION ['editTourDateInfo'] ['state_country'])){

$editTour_sql="SELECT * FROM Tour_table WHERE ID=".$_GET['tourID'];
$editTour_query= mysqli_query($dbc, $editTour_sql);
$editTour_rs= mysqli_fetch_array($editTour_query);
$_SESSION ['editTourDateInfo'] ['date'] = $editTour_rs['date'];
$_SESSION['editTourDateInfo'] ['venue'] = $editTour_rs['venue'];
$_SESSION['editTourDateInfo'] ['state_country'] = $editTour_rs['state_country'];
}

?>


<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the TOUR section (upcoming-shows), they only difference is that there are the maximum entries here for the TOUR, not limitied to three like in the home page (product.php), I have also taken out the heading, 'upcoming shows' from the home page,  bit overkill here.---->


<section class="c-upcoming-shows c-admin-add-tour-dates-override-flex">

<h1 class="c-admin-add-tour-dates-title">Edit Tour Date Below:</h1>







<article class="c-upcoming-shows-container h-flex">

 	  <div class="c-upcoming-shows-date">

 	  	
 	  	 


 	  <span class="c-upcoming-shows-month"><?php echo  $_SESSION ['editTourDateInfo'] ['date']?></span></div>
 	  <div class="c-upcoming-shows-venue-container"> <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title"><?php echo $_SESSION ['editTourDateInfo'] ['venue']?></h3>
 	 		</div>
 	  <div class="c-upcoming-shows-location"> <?php echo $_SESSION ['editTourDateInfo'] ['state_country']?> </div> 

 	 
 	

 	  </article>

 	  </section>

<!--- end of reusable component---->

</section>

<!----end of the section design of the add tour details, below we are extending the grid layout for this page, so we need a new section as it will help to give extra space between the the above section and the one below---->

<!----this is a new section specifically for the edit tour info, this helps to give better spacing between the tour component that needs to be edited, this takes adavantage of the new grid layout class at the top of this page---->

<section class="c-admin-edit-selected-tour-form h-flex">


<!----while this is a new section to take advantage of the new grid layout, the form itself is a reusable component of that of the form design in the add new tour section--->

<h1 class="c-admin-add-tour-dates-title">Edit via form</h1>
<form action="editTourInfoConfirm.php" method="post" class="c-admin-add-tour-dates-form">
<p class="c-admin-add-tour-dates-desc">Change Date of tour:<input type="date" name="date" value="<?php echo $_SESSION ['editTourDateInfo'] ['date'];?>" class="c-admin-add-tour-dates-input" required/></p>
<p class="c-admin-add-tour-dates-desc">Change Venue of tour:<input name="venue" value="<?php echo $_SESSION ['editTourDateInfo'] ['venue'];?>" class="c-admin-add-tour-dates-input" required/></p>
<p class="c-admin-add-tour-dates-desc">Change state or country of tour:
<input name="state_country" value="<?php echo $_SESSION ['editTourDateInfo'] ['state_country'];?>" class="c-admin-add-tour-dates-input" required/></p>





<div class="c-admin-add-tour-dates-submit-button-container h-flex">
<button class="c-button-mobile c-button-mobile--large" type="submit" name="Update"  >Update Tour Date</button>
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

<!----end of reusable form component----->

</section>

<!---end of this new grid section----->



<?php
require_once ("../abstractFooter.php");

?>

</div>
</body>
</html>

