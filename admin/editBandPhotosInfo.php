<?php



session_start();

require_once ("../errorReporting/developmentErrorReporting.php");

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

     <!-- this is a further change on the admin grid to accommodate the edit form in the middle of the page, THIS IS IMPORTANT, THIS IS THAT INTERMIEDARY PAGE, THE SECOND PAGE WITH THE CARD GRID AND THE FORM AS ONE, NOTHING IN THE ADMIN SECTION IS LIKE THIS  -->

     <!--  BEST SERVED AS A BLANK GRID with min-height 100vw -->

        <div class="l-basic-grid-admin-edit-tNMP h-grid">
        	<?php
require_once ("header.php");

?>

<!-- this class below is for all the items that are deleted and edited through the admin panel, be it; a tour date, a news story, a band photo or a album. -->

<!-- this class through the use of flexbox helps to centre the content, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<!-- also a helper class to take out the padding so the background spans the whole page -->

<section class="c-admin-editAndDelete-item h-flex h-position h-no-padding">

<!----reusable component icon to go back a page this is in the base section of the scss----->
  <!-- because the parent is position relative we have a position absolute on this of top, left and right of 0 to make the icon align at the top left hand side of the page  -->

	<!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <!-- just an increase size on this svg to make it look better -->
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <!-- end of size change on the svg -->
        <!-- destination to go back a page with pseudo before technique to
        give mobile users more click space -->

        <a href="editBandPhotos.php" class="c-back-page-icon-link"></a>
        <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>
  <!-- end of position absolute -->
<!----end of reusable component----->






<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

if(isset($_GET['photoID'])){
$_SESSION['editBandPhotoInfo'] ['photoID'] =$_GET['photoID'];


}




if(!isset($_SESSION ['editBandPhotoInfo'] ['state_country']) &&  !isset($_SESSION ['editBandPhotoInfo'] ['date'])){

	$editBandPhoto_sql="SELECT * FROM photo_table WHERE id=".$_GET['photoID'];
$editBandPhoto_query= mysqli_query($dbc, $editBandPhoto_sql);
$editBandPhoto_rs= mysqli_fetch_array($editBandPhoto_query);



$_SESSION['editBandPhotoInfo'] ['state_country']=$editBandPhoto_rs['state_country'];
$_SESSION['editBandPhotoInfo'] ['date']=$editBandPhoto_rs['date'];

$_SESSION['editBandPhotoInfo']['img'] = $editBandPhoto_rs['img_ref'];

}

?>




<!-- THE BAND PHOTOS SECTION -->

 <!-- a helper class to take off the background image strip divider that is present in the home page -->
<!-- a semantic section class -->



<section class="c-bands-photos h-take-background-strip-off-pseudo-before-element">

 <!-- just the usual heading style for the site with different sizes for different screens and paddings -->

 <!-- MODIFIER HERE, PLEASE SEE CSS COMMENTS FOR WHAT THIS DOES OR WHAT IT IS FOR -->

  <h1 class="c-bands-photos-title c-bands-photos-title--padding-less  h-mobile-title">Latest Band Photos

    </h1>

  <!--  end of the usual heading style for the site with different sizes for different screens and paddings -->






<!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden---->
  <article class="h-overflowH">

  
    <!-- just a div container to keep all the content and This class keeps the height auto  -->
    <div class="h-height-auto">

        <!-- this utility class proves important for the auto-fit style grid when there is no content.  We need to explicitly set the height and width on these images for the auto-fit to work properly.  The reason being at default these are small images so there is a lot of empty space between them so to mitigate that we put on explicit heights and width - 300px height and 600px width seems to do it with no media queries, it also has a margin 0 and auto to centre the image in the space available, there is a helper class override width of 300px because it makes the image look better when centred  
    -->
      <img class="l-image-set-for-auto-fit-grid h-margin-centre h-width-300px" src="../img/<?php echo $_SESSION['editBandPhotoInfo']['img'];?>" />

    <!-- end of explicitly set the height and width on these images for the auto-fit to work, 300px height and 600px width seems to do it with no media queries and the end of margin 0 and auto to centre the image in the space available and end of a helper class override width of 300px because it makes the image look better when centred     -->



   <!-- a semantic container to hold the text in with vertical padding -->
   <!-- a helper class to align the text centre -->
      <div class="c-bands-photos-text-container h-text-align ">
         <!--- this class changes the font size of the dates at different screen sizes --->
        <div class="c-bands-photos-text-container-date"><?php echo $_SESSION['editBandPhotoInfo']['date'];?>
      </div>

      <!-- end of the changes the font size of the dates at different screen sizes -->
      <!-- this class has our red colour and the fancy font with it, it also changes the font size at different screen sizes -->
      <div class="c-bands-photos-location"> <?php echo $_SESSION['editBandPhotoInfo']['state_country'];?> </div>
      <!-- end of this class that has our red colour and the fancy font with it, it also changes the font size at different screen sizes --> 

    </div>

    <!-- end of a semantic container to hold the text in with vertical padding -->
   <!-- end of the helper class to align the text centre -->
  
 </div>
 <!-- end of div container and the height auto to keep all the content in  -->
</article>
    <!-- end of our helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden -->
    

</section>

<!-- end of a helper class to take off the background image strip divider that is present in the home page -->
<!-- end of the semantic section for the Bands photos -->
<!-- END OF THE BAND PHOTOS SECTION -->

 	  	 
</section>

<!-- end of this class for all the items that are added through the admin panel, be it; a new tour date, a new news story, a band photo or a new album. -->

<!-- end of this class through the use of flexbox helps to centre the form, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<!-- end of centring the form -->


<!-- THIS SECTION IS WHERE THE EDIT AND ADD SHOULD BE THE SAME -->


<!-- this section uses flex to centre the items -->

<section class="c-admin-addAndEdit-item-form-section h-flex h-position">


<!----while this is a new section to take advantage of the new grid layout, the form itself is a reusable component of that of the form design in the add new tour section--->


<!-- usual design for headings used throughout, just that the font size is smaller -->

<h1 class="c-admin-addAndEdit-item-form-title">Edit via form</h1>

<!-- end of the usual design for headings used throughout, just that the font size is smaller -->


<!-- THE EDIT FORM -->

<!-- a semantic form class -->

<form action="editBandPhotoInfoConfirm.php" method="post" class="c-admin-addAndEdit-item-dates-form">

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

<p class="c-admin-addAndEdit-item-dates-desc">Change Date of Photo:

 <!-- some margins and font size changes at different screen sizes  -->
  <input type="date" name="date" value="<?php echo $_SESSION ['editBandPhotoInfo']['date'];?>" class="c-admin-addAndEdit-item-dates-input" required/>
<!-- end of some margins and font size changes at different screen sizes -->

</p>

<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

<p class="c-admin-addAndEdit-item-dates-desc">Edit the State/country:

<!-- some margins and font size changes at different screen sizes  -->
  <input type="text" name="state_country" value="<?php echo $_SESSION ['editBandPhotoInfo']['state_country'];?>" class="c-admin-addAndEdit-item-dates-input" required/>
<!-- end of some margins and font size changes at different screen sizes -->
</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->



<!-- this class is to centre the button -->
<div class="c-admin-addAndEdit-item-dates-submit-button-container h-flex">

  <!--- these buttons are reused throughout the website and have the same style that was done at the beginning of the project, they also have a hover state as well and the colour goes a slightly darker red with a position relative for the anchors to span the whole area of the button rather than just the link, however no anchors needed for the form ---->
  <!-- also a helper class to make the text uppercase -->

<button class="c-button-mobile c-button-mobile--large h-uppercase" type="submit" name="Update"  >Update Band Photos</button>

<!--- end of buttons having the same style and a hover state with a position relative for the anchors to span the whole area of the button rather than just the link however no anchors needed for the form ---->

<!-- end of the helper class making the text uppercase -->
</div> 
<!-- end of class to centre the button -->
</form>	

<!-- end of the semantic form class -->

<!-- END OF THE EDIT FORM -->

<?php

if (isset($_GET['signup'])){

  $correctForm = $_GET['signup'];

  if ($correctForm == "char"){?>


    <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
      <p class="c-admin-addAndEdit-item-dates-desc h-font-size h-text-align">Entries must begin with letters for Title and description of News!</p>
       <!-- end of some margins and font size changes at different screen sizes -->



<?php
    
  }

}

  


?>

<!----end of reusable form component----->

</section>








<?php
require_once ("../abstractFooter.php");

?>

</div>
<!--  end of the further change on the admin grid to accommodate the edit form in the middle of the page THIS IS IMPORTANT, THIS IS THAT INTERMIEDARY PAGE, THE SECOND PAGE WITH THE CARD GRID AND THE FORM AS ONE, NOTHING IN THE ADMIN SECTION IS LIKE THIS,  BEST SERVED AS A BLANK GRID with min-height 100vw --> 

</body>
</html>









