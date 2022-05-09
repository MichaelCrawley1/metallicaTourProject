<?php



session_start();

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/errorReporting/developmentErrorReporting.php");

$locate_file = "/metallicaTourProject/admin/logIn/admin.php";



// check to see if user is logged in.  If not, redirect to admin page

if(!isset($_SESSION['admin'])){

	header("Location: http://".$_SERVER['HTTP_HOST'].$locate_file);
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
<link rel="Stylesheet" type="text/css" href="/metallicaTourProject/css/main.css">
<script src="/metallicaTourProject/js/mobileMenu.js" defer></script>
<meta charset = "utf-8">
</head>

<body>
	<!---html classes will be set up using the Block Element Modifier (BEM) styled system.  My method will involve letters with dashes (-) as a prefix to enable the reader to understand if a section of code is a component or a layout element.  Glossary is displayed below:

        c- = this equals a component that is likely to get reused
        l- = this equals a class that acts as block layout like a reusable container for example
        h- = the h prefix is to signify helper classes like clearfix to get elements back in the html document flow
        js- = this is to signify when we need to use JavaScript on an block or a block element to bring in dynamic functionality.
        c-js- = will refer to both components and components that rely on JavaScript functionality
        c-mq- = will be for media queries.

        In addition, throughout this document there will be a comment that says, "MODIFIER HERE, PLEASE SEE CSS COMMENTS FOR WHAT THIS DOES OR WHAT IT IS FOR".  By using the find search tool provided by the editor (control or command F) we can quickly find the modifier we are looking for and then look at the corresponding css file to see what it does.  
        ---->

        <!-----AND EXPLANATION OF THE CSS GRID SYSTEM USED BELOW---->


        <!---below is the class of the standard grid and is for rows only (this is used for the vertical layout of the pages), each row is to correspond with a new section of the html.  By using the grid system this way rather than rows and columns from the beginning, helps to keep the html semantic. Alternatively, using the grid for rows and columns at the beginning of the design means the html will have to be flattened for it to work.  When the, 'subgrid' property becomes more widespread with browsers perhaps this will not need to be the case, but for now, a grid for rows only for the vertical layout and then horizontal grids in each section thereafter if the need arises to keep it semantic----> 

        <!-- this is the admin grid as it has less rows than the home page -->

        <div class="l-basic-grid-admin-and-c-panel h-grid">
        	<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractHeader.php");

?>

<!-- this class below is for all the items that are added through the admin panel, be it; a new tour date, a new news story, a band photo or a new album. -->

<!-- this class through the use of flexbox helps to centre the form, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->
		
<section class="c-admin-addAndEdit-item h-flex h-position">


	<!----reusable component icon to go back a page this is in the base section of the scss----->
  <!-- because the parent is position relative we have a position absolute on this of top, left and right of 0 to make the icon align at the top left hand side of the page  -->
    <div class="c-back-page-icon-container">
        <!-- just an increase size on this svg to make it look better -->
        <img src="/metallicaTourProject/img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <!-- end of size change on the svg -->
        <!-- destination to go back a page with pseudo before technique to give mobile users more click space -->
        <a href="/metallicaTourProject/admin/adminMenuOptions/manipulateTour/manipulateTourSection.php" class="c-back-page-icon-link"></a>
         <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>

    <!-- end of position absolute -->
<!----end of reusable component----->

<!-- heading style for all the admin add and edit item headings with different sizes at different screens -->

<h1 class="c-admin-addAndEdit-item-title">Add Tour Dates</h1>

<!-- end of heading style for the admin add items headings -->

<!-- a semantic form class -->
<form name="tourFormCheck" method="post" action="confirmTour.php" class="c-admin-addAndEdit-item-dates-form"/>
<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
<p class="c-admin-addAndEdit-item-dates-desc">Insert Date of tour: 

  <!-- some margins and font size changes at different screen sizes  -->
  <input type="text" name="tourDates" value="<?php echo $_SESSION['addTourDates']['tourDates'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required placeholder= "JAN 13" />
  <!-- end of some margins and font size changes at different screen sizes -->
</p>

<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
<p class="c-admin-addAndEdit-item-dates-desc">Insert Venue of tour: 
<!-- some margins and font size changes at different screen sizes  -->
  <input type="text" name="venue" value="<?php echo $_SESSION['addTourDates2']['venue'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required placeholder="Halifax Scotiabank Centre" />
<!-- end of some margins and font size changes at different screen sizes -->
</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

<p class="c-admin-addAndEdit-item-dates-desc">Insert state or country of tour: 
<!-- some margins and font size changes at different screen sizes  -->
  <input type="text" name="state_country" value="<?php echo $_SESSION['addTourDates3']['state_country'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required placeholder="Halifax, NS"/>

<!-- end of some margins and font size changes at different screen sizes -->

</p>

<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is to centre the button -->
<div class="c-admin-addAndEdit-item-dates-submit-button-container h-flex">

  <!--- these buttons are reused throughout the website and have the same style that was done at the beginning of the project, they also have a hover state as well and the colour goes a slightly darker red with a position relative for the anchors to span the whole area of the button rather than just the link ---->
<button class="c-button-mobile c-button-mobile--large" type="submit" name="submit"  >Add Tour Date</button>
<!--- end of buttons having the same style and a hover state with a position relative for the anchors to span the whole area of the button rather than just the link ---->
</div>

<!-- end of class to centre the button -->


</form>

<!-- end of the semantic form class -->
<?php

if (isset($_GET['signup'])){

  $correctForm = $_GET['signup'];

  if ($correctForm == "char"){?>
    <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
      <p class="c-admin-addAndEdit-item-dates-desc h-font-size h-text-align">Entries must begin with letters for date, venue and location of tour!</p>

      <!-- end of some margins and font size changes at different screen sizes -->



<?php
    
  }

}

  


?>



<!-- this class stands as the semantic progress to the upcoming shows section, it does have a grey background effect on it and the before pseudo class has a background strip on it -->

  <!-- THE TOUR SECTION -->

  <!-- there is an helper admin class here to override the flex for the borders to stretch the whole page -->

  <section class="c-upcoming-shows h-admin-addAndEdit-override-flex-to-stretch">






<?php 

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

 unset($_SESSION['editTourDateInfo']);

$editTour_sql="SELECT * FROM Tour_table";
$editTour_query= mysqli_query($dbc, $editTour_sql);


while($row= mysqli_fetch_array($editTour_query)){ 

	
	require($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/public/theLoops/theTourLoops/tourDatesWhileLoop.php");


}


?>

</section>

<!-- end of the helper admin class here to override the flex for the borders to stretch the whole page -->

<!-- end of the semantic progress to the upcoming shows section, it does have a grey background effect on it and the before pseudo class has a background strip on it   -->

<!-- END OF THE TOUR SECTION -->



 
</section>


<!-- end of this class for all the items that are added through the admin panel, be it; a new tour date, a new news story, a band photo or a new album. -->

<!-- end of this class through the use of flexbox helps to centre the form, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<!-- end of centring the form -->

<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");


?>
</div>

<!-- end of the admin grid that has less rows than the home page -->
</body>
</html>



