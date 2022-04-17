<?php



session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



// check to see if user is logged in.  If not, redirect to admin page

if(!isset($_SESSION['admin'])){

	header("Location:admin.php");


}

//check to see if user has submitted the add category form, this is to prevent a user just inputting the url.  


if(!isset($_POST['submit'])){

	header("Location:admin.php");
  exit();
}

else {



// set addTourDates sessions
$_SESSION['addTourDates']['tourDates'] = $_POST['tourDates'];
$_SESSION['addTourDates2']['venue'] = $_POST['venue'];
$_SESSION['addTourDates3']['state_country'] = $_POST['state_country'];


if(empty($_SESSION['addTourDates']['tourDates']) || empty($_SESSION['addTourDates2']['venue']) || empty($_SESSION['addTourDates3']['state_country'])) {

    header("Location:addTourDates.php?signup=empty");

    exit();

}

  else {
 // check if input characters are valid//

        if(!preg_match("/^[a-zA-Z]/", $_SESSION['addTourDates']['tourDates']) || !preg_match("/^[a-zA-Z]/", $_SESSION['addTourDates2']['venue']) || !preg_match("/^[a-zA-Z]/", $_SESSION['addTourDates3']['state_country'])){

          header("Location:addTourDates.php?signup=char");
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
        <a href="addTourDates.php" class="c-back-page-icon-link"></a>
        <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>
 <!-- end of position absolute -->
<!----end of reusable component----->

<!-- same style for the headings that appear through most of the site, just a slightly different font size -->

<h1 class="c-admin-confirm-addDeleteOrEdit-to-db-title">Confirm Tour Dates New Information</h1>

<!-- end of same style for the headings that appear through most of the site, just a slightly different font size  -->




<!-- this class stands as the semantic progress to the upcoming shows section, it does have a grey background effect on it and the before pseudo class has a background strip on it -->

  <!-- THE TOUR SECTION -->

  <!-- there is an helper admin class here to override the flex for the borders to stretch the whole page -->
<section class="c-upcoming-shows h-admin-addAndEdit-override-flex-to-stretch">

<!-- this is an interesting class, at mobile sizes it uses display flex as the default to centre the text but at bigger screen sizes it goes to max 1300px grid container with a three column grid with the third child, the, 'c-upcoming-shows-location' class at align-self end to stretch to the end of the page -->


<article class="c-upcoming-shows-container h-flex">

  <!-- a semantic date class container -->


 	  <div class="c-upcoming-shows-date">
        <!-- this span class holds all the style of the date, with font size and and uppercase style -->
<span class="c-upcoming-shows-month"><?php echo $_SESSION['addTourDates']['tourDates'];?></span>
 <!-- end of the span class that holds all the style of the date, with font size and and uppercase style -->
</div>
<!-- end a semantic date class container -->

  <!-- the usual style for our headings throughout this project with an added font size difference at different screen sizes -->
 <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title"><?php echo $_SESSION['addTourDates2']['venue'];?></h3>
 <!-- end of the usual style for our headings throughout this project with an added font size difference at different screen sizes  -->
 	 		
      <!-- as said on the article class for this section this class being one of the child's of the grid's 3 columns uses align-self: end; to go to the far end of the column of the right to stretch to the end of the page like the first child does for the other side, it has font size changes for different screen sizes too -->
 	 	 <div class="c-upcoming-shows-location"> <?php echo $_SESSION['addTourDates3']['state_country'];?> </div> 

     <!-- end of the align-self: end and font size changes for different screen sizes -->

 	 
 	 </article>

   <!-- end of at mobile sizes it uses display flex as the default to centre the text but at bigger screen sizes it goes to max 1300px grid container with a three column grid, with the third child, the locations, at align-self end to stretch to the end of the page -->
 	</section>


<!-- end of the helper admin class here to override the flex for the borders to stretch the whole page -->
 <!-- end of the semantic progress to the upcoming shows section, it does have a grey background effect on it and the before pseudo class has a background strip on it   -->

<!-- END OF THE TOUR SECTION -->

<!-- CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->

<!--- this section will serve as a reusable component as this option design is in the penultimate page of all the other sections of the website too---->

<!-- just a semantic container with a margin top to separate the content -->

<div class="c-admin-confirm-addDeleteOrEdit-to-db-container ">
  <!-- no text here, that is done by the links, it is just to colour the separator our red -->
<p class="c-admin-confirm-addDeleteOrEdit-to-db-desc">
  <!-- these links take out their decoration but colour the text our white -->
  <a href="enterTourDates.php" class="
  c-admin-confirm-addDeleteOrEdit-to-db-links">Correct, continue</a>
  <!-- end of colour the text our white-->
  <!-- these links take out their decoration but colour the text our white -->
	 | <a class="
   c-admin-confirm-addDeleteOrEdit-to-db-links" href="addTourDates.php">Ooops, go back</a>
    <!-- end of colour the text our white-->
  <!-- these links take out their decoration but colour the text our white -->
    | <a class="
   c-admin-confirm-addDeleteOrEdit-to-db-links" href="admin.php">Back to admin panel</a>
    <!-- end of colour the text our white-->
  
	</p>

  <!-- end of no text here, that is done by the links, it is just to colour the separator our red   -->
</div>

<!-- end of the semantic container with a margin top to separate the content -->

<!---end of a reusable component as this option design is in the penultimate page of all the other sections of the website too ---->

<!-- END OF CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->


</section>

<!--  end of the main content section in we use flex's align items and justify content to centre the page -->

<?php
require_once ("../abstractFooter.php");

?>



</div>

<!--  end of the admin grid with less rows than the home page -->




</body>
</html>




