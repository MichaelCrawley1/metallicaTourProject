<?php


session_start();

require_once ("../errorReporting/developmentErrorReporting.php");





if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
}

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');


if(!isset($_POST['Update'])){

  header("Location:admin.php");
  exit();
} 

else{

 
$_SESSION['editBandPhotoInfo']['state_country']= $_POST['state_country'];
$_SESSION['editBandPhotoInfo']['date']= $_POST['date'];
$_SESSION['editBandPhotoInfo']['img'];

  
	
if(empty($_SESSION['editBandPhotoInfo']['date']) || empty($_SESSION['editBandPhotoInfo']['state_country'])) {

    header("Location:editBandPhotosInfo.php?signup=empty");
    exit();

}

else {
 // check if input characters are valid//

        if(!preg_match("/^[a-zA-Z]/", $_SESSION['editBandPhotoInfo']['state_country'])){

         header("Location:editBandPhotosInfo.php?signup=char");
          exit();
        } 

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
require_once ("header.php");

?>


<!-- this class sets the content bang in the middle of the page vertically and horizontally, the grid set at the beginning has a 100vh height on the main content therefore we can use flex's align items and justify content to centre the page -->

<section class="c-admin-confirm-addDeleteOrEdit-to-db h-flex h-position">

 <!----reusable component icon to go back a page this is in the base section of the scss----->
  <!-- because the parent is position relative we have a position absolute on this of top, left and right of 0 to make the icon align at the top left hand side of the page  -->
    <div class="c-back-page-icon-container">

      <!-- just an increase size on this svg to make it look better -->
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
          <!-- end of size change on the svg -->
           <!-- destination to go back a page with pseudo before technique to give mobile users more click space -->
        <a href="editBandPhotosInfo.php" class="c-back-page-icon-link"></a>
         <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>
<!-- end of position absolute -->
<!----end of reusable component----->

<!-- same style for the headings that appear through most of the site, just a slightly different font size -->

<h1 class="c-admin-confirm-addDeleteOrEdit-to-db-title">Confirm Updated Band Photo</h1>

<!-- end of same style for the headings that appear through most of the site, just a slightly different font size  -->



<!-- THE BAND PHOTOS SECTION -->

 <!-- a helper class to take off the background image strip divider that is present in the home page -->
<!-- a semantic section class -->



<section class="c-bands-photos h-take-background-strip-off-pseudo-before-element">


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



<!-- CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->

<!--- this section will serve as a reusable component as this option design is in the penultimate page of all the other sections of the website too---->

<!-- just a semantic container with a margin top to separate the content -->

<div class="c-admin-confirm-addDeleteOrEdit-to-db-container ">

 <!-- no text here, that is done by the links, it is just to colour the separator our red -->
<p class="c-admin-confirm-addDeleteOrEdit-to-db-desc">

<!-- these links take out their decoration but colour the text our white -->


<a href="editBandPhotosInfoUpdate.php" class="c-admin-confirm-addDeleteOrEdit-to-db-links">Correct, continue </a>
<!-- end of colour the text our white-->

  <!-- these links take out their decoration but colour the text our white -->

 |<a href="editBandPhotosInfo.php" class="c-admin-confirm-addDeleteOrEdit-to-db-links"> Oops, go back</a>
<!-- end of colour the text our white-->

  <!-- these links take out their decoration but colour the text our white -->

  |<a href="admin.php" class="c-admin-confirm-addDeleteOrEdit-to-db-links"> Back to admin</a>
<!-- end of colour the text our white-->
</p>
<!-- end of no text here, that is done by the links, it is just to colour the separator our red   -->
</div>

<!-- end of the semantic container with a margin top to separate the content -->

<!---end of a reusable component as this option design is in the penultimate page of all the other sections of the website too ---->

<!-- END OF CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->



</section>

<!-- end of this class through the use of flexbox helps to centre the content, with position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<!--  end of this class below is for all the items that are deleted and edited through the admin panel, be it; a tour date, a news story, a band photo or a album.  -->

<?php
require_once ("../abstractFooter.php");

?>




</div>

<!-- end of the admin grid, less rows than the home page of the website.  -->
</body>
</html>



