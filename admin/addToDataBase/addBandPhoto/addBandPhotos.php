<?php

session_start();

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/errorReporting/developmentErrorReporting.php");

$locate_file = "/metallicaTourProject/admin/logIn/admin.php";

if(!isset($_SESSION['admin'])){

	header("Location: http://".$_SERVER['HTTP_HOST'].$locate_file);
}

if (!isset($_SESSION['addBandPhotos'])){
$_SESSION['addBandPhotos']['img'] = "noimage.png";
$_SESSION['addBandPhotos']['state_country']="";
$_SESSION['addBandPhotos']['date']="";



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
        <a href="/metallicaTourProject/admin/adminMenuOptions/manipulateBandPhotos/manipulatePhotosSection.php" class="c-back-page-icon-link"></a>
         <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>
   <!-- end of position absolute -->
<!----end of reusable component----->

<!-- heading style for all the admin add and edit item headings with different sizes at different screens -->


<h1 class="c-admin-addAndEdit-item-title">Add A Band Photo</h1>

<!-- end of heading style for the admin add items headings -->

<!-- a semantic form class -->

<form method="post" action="confirmAddBandPhoto.php" class="c-admin-addAndEdit-item-dates-form h-padding" enctype="multipart/form-data" />

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

	<p class="c-admin-addAndEdit-item-dates-desc">Add a date: 
      <!-- some margins and font size changes at different screen sizes  -->
    <input type="date" name="date" value="<?php echo $_SESSION['addBandPhotos']['date'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required />

<!-- end of some margins and font size changes at different screen sizes -->
</p>

<!-- end of capitalize with some margins and font size changes at different screen sizes   -->


<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

<p class="c-admin-addAndEdit-item-dates-desc">Insert state or country of tour: 

  <!-- some margins and font size changes at different screen sizes  -->
  <input type="text" name="state_country" value="<?php echo $_SESSION['addBandPhotos']['state_country'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required placeholder="Norwich, UK" />

<!-- end of some margins and font size changes at different screen sizes -->

</p>

<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

<p class="c-admin-addAndEdit-item-dates-desc">Add an image: 

  <!-- some margins and font size changes at different screen sizes  -->

  <input type="file" name="fileToUpload"  id="fileToUpload" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required >
<!-- end of some margins and font size changes at different screen sizes -->
</p>

<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is to centre the button -->

<div class="c-admin-addAndEdit-item-dates-submit-button-container h-flex">

  <!--- these buttons are reused throughout the website and have the same style that was done at the beginning of the project, they also have a hover state as well and the colour goes a slightly darker red with a position relative for the anchors to span the whole area of the button rather than just the link, however no anchors needed for the form ---->
  <!-- also a helper class to make the text uppercase -->

<button class="c-button-mobile c-button-mobile--large h-uppercase" type="submit" name="submit"  >Submit</button>

<!--- end of buttons having the same style and a hover state with a position relative for the anchors to span the whole area of the button rather than just the link however no anchors needed for the form ---->

<!-- end of the helper class making the text uppercase -->
</div>

<!-- end of class to centre the button -->
</form>

<!-- end of the semantic form class -->

<?php

if (isset($_GET['signup'])){

  $correctForm = $_GET['signup'];

  if ($correctForm == "char"){?>

     <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

      <p class="c-admin-addAndEdit-item-dates-desc h-font-size h-text-align">Entries must begin with letters for venue and location of tour!</p>
       <!-- end of some margins and font size changes at different screen sizes -->


<?php
    
  }

}

  


?>

<!-- THE BAND PHOTOS SECTION -->

 <!-- a helper class to take off the background image strip divider that is present in the home page -->
<!-- a semantic section class -->

<!-- a helper stretch class to override the align centre from the parent section class -->

<section class="c-bands-photos h-take-background-strip-off-pseudo-before-element h-stretch">

 <!-- just the usual heading style for the site with different sizes for different screens and paddings -->

 <!-- MODIFIER HERE, PLEASE SEE CSS COMMENTS FOR WHAT THIS DOES OR WHAT IT IS FOR -->

  <h1 class="c-bands-photos-title c-bands-photos-title--padding-less  h-mobile-title">Latest Band Photos

    </h1>

  <!--  end of the usual heading style for the site with different sizes for different screens and paddings -->

<!---this class down below is a utility class to keep the grid in a 1300px max container for the big screens ----->

    <div class="l-for-card-grid-columns-max-width-container">

  

<!--- this class down below is the section grid column layout itself, this is for all the card type blocks like the music albums, the band photos and the news stories--->  


    <div class="l-the-card-grid h-grid">

	<!---reusable class from the tour delete section, remains to be seen If I will use this---->


<?php 

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$delPhotos_sql = "SELECT * FROM photo_table";

$delPhotos_query= mysqli_query($dbc, $delPhotos_sql);

 
 		
while ($row = mysqli_fetch_array($delPhotos_query)){ 

 	
 require($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/public/theLoops/theBandPhotoLoops/bandPhotosWhileLoop.php");


 }

?>

</div>

<!----end of the auto-fit grid for the cards (images, album photos, stadium photos etc)----->

</div>
<!----end of utility layout class for max width ---->  

</section>

<!-- end of a helper stretch class to override the align centre from the parent section class -->
<!-- end of a helper class to take off the background image strip divider that is present in the home page -->
<!-- end of the semantic section for the Bands photos -->
<!-- END OF THE BAND PHOTOS SECTION -->

</section>

<!-- end of this class for all the items that are added through the admin panel, be it; a new tour date, a new news story, a band photo or a new album. -->

<!-- end of this class through the use of flexbox helps to centre the form, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<!-- end of centring the form -->


<?php 
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");

?>

</div>

<!-- end of the admin grid, less rows than the home page of the website.  -->
</body>
</html>





 
 	



