
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

         <!-- MIGHT  HAVE TO UPDATE NOTES ON THIS AS I THINK THIS IS GOING TO BEST SERVED AS A BLANK GRID. -->


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
    <div class="c-back-page-icon-container">
        <!-- just an increase size on this svg to make it look better -->
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">

         <!-- end of size change on the svg -->
        <!-- destination to go back a page with pseudo before technique to give mobile users more click space -->
        <a href="editTourDateSelect.php" class="c-back-page-icon-link"></a>

         <!-- end of the pseudo before technique to give mobile users more click space  -->

    </div>

  <!-- end of position absolute -->
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

<!-- THE TOUR SECTION -->

  <!-- there is an helper admin class here to override the flex for the borders to stretch the whole page -->

  <!-- also a helper class to take out the pseudo before element background strip -->


<section class="c-upcoming-shows h-admin-addAndEdit-override-flex-to-stretch h-take-background-strip-off-pseudo-before-element">



<!-- heading style of all admin delete and edit items titles, different font sizes at different screens  -->

<!-- a helper class to align the text centre -->

<h1 class="c-admin-editAndDelete-item-title h-text-align">Edit Tour Date Below:</h1>

<!-- end of heading style of all admin delete and edit items titles, different font sizes at different screens  -->

<!-- end of a helper class to align the text centre  -->



<!-- this is an interesting class, at mobile sizes it uses display flex as the default to centre the text but at bigger screen sizes it goes to max 1300px grid container with a three column grid with the third child, the, 'c-upcoming-shows-location' class at align-self end to stretch to the end of the page -->

<article class="c-upcoming-shows-container h-flex">
<!-- a semantic date class container -->

 	  <div class="c-upcoming-shows-date">

 	  	
  <!-- this span class holds all the style of the date, with font size and and uppercase style -->


 	  <span class="c-upcoming-shows-month"><?php echo  $_SESSION ['editTourDateInfo'] ['date']?></span>
 <!-- end of the span class that holds all the style of the date, with font size and and uppercase style -->
  </div>

  <!-- end a semantic date class container -->

  <!-- the usual style for our headings throughout this project with an added font size difference at different screen sizes -->
 	   
  <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title"><?php echo $_SESSION ['editTourDateInfo'] ['venue']?></h3>

  <!-- end of the usual style for our headings throughout this project with an added font size difference at different screen sizes  -->
      
      <!-- as said on the article class for this section this class being one of the child's of the grid's 3 columns uses align-self: end; to go to the far end of the column of the right to stretch to the end of the page like the first child does for the other side, it has font size changes for different screen sizes too -->

 	 	<div class="c-upcoming-shows-location"> <?php echo $_SESSION ['editTourDateInfo'] ['state_country']?> </div> 

 	  <!-- end of the align-self: end and font size changes for different screen sizes -->

 	

 	  </article>
 <!-- end of at mobile sizes it uses display flex as the default to centre the text but at bigger screen sizes it goes to max 1300px grid container with a three column grid, with the third child, the locations, at align-self end to stretch to the end of the page -->
 	  </section>


<!-- end of the admin class here to override the flex for the borders to stretch the whole page -->
 <!--  end of the helper class to take out the pseudo before element background strip -->

<!--- end of reusable component---->

<!-- END OF THE TOUR SECTION -->


</section>

<!-- end of this class through the use of flexbox helps to centre the content, with position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<!--  end of this class for all the items that are deleted or edited through the admin panel, be it; a tour date, a news story, a band photo or a new album.  -->



<!--  end of the helper admin class to take out the padding so the background spans the whole page -->


<!-- THIS SECTION IS WHERE THE EDIT AND ADD SHOULD BE THE SAME -->



<!-- Still at this section but i have changed all the class names, and it looks like it might be consistent now, what I have to do is describe what the classes do now with the comments.  Remember I will be able to copy and paste most of it because the form edit section is the same form used to add tour details to. -->


<!-- this section uses flex to centre the items -->

<section class="c-admin-addAndEdit-item-form-section h-flex h-position">


<!----while this is a new section to take advantage of the new grid layout, the form itself is a reusable component of that of the form design in the add new tour section--->


<!-- usual design for headings used throughout, just that the font size is smaller -->

<h1 class="c-admin-addAndEdit-item-form-title">Edit via form</h1>

<!-- end of the usual design for headings used throughout, just that the font size is smaller -->

<!-- a semantic form class -->
<form action="editTourInfoConfirm.php" method="post" class="c-admin-addAndEdit-item-dates-form">

  <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
<p class="c-admin-addAndEdit-item-dates-desc">Change Date of tour:

  <!-- some margins and font size changes at different screen sizes  -->
  <input type="text" name="date" value="<?php echo $_SESSION ['editTourDateInfo'] ['date'];?>"  size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required/>

<!-- end of some margins and font size changes at different screen sizes  --> 

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

 <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
<p class="c-admin-addAndEdit-item-dates-desc">Change Venue of tour:

<!-- some margins and font size changes at different screen sizes  -->
  <input name="venue" value="<?php echo $_SESSION ['editTourDateInfo'] ['venue'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required/>

<!-- end of some margins and font size changes at different screen sizes  -->

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

 <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

<p class="c-admin-addAndEdit-item-dates-desc">Change state or country of tour:

 <!-- some margins and font size changes at different screen sizes  --> 
<input name="state_country" value="<?php echo $_SESSION ['editTourDateInfo'] ['state_country'];?>"  size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required/>

<!-- end of some margins and font size changes at different screen sizes  -->

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->



<!-- this class is to centre the button -->
<div class="c-admin-addAndEdit-item-dates-submit-button-container h-flex">

  <!--- these buttons are reused throughout the website and have the same style that was done at the beginning of the project, they also have a hover state as well and the colour goes a slightly darker red with a position relative for the anchors to span the whole area of the button rather than just the link ---->
<button class="c-button-mobile c-button-mobile--large" type="submit" name="Update"  >Update Tour Date</button>

<!--- end of buttons having the same style and a hover state with a position relative for the anchors to span the whole area of the button rather than just the link ---->
</div>
<!-- end of class to centre the button --> 

</form>	

<!-- end of a semantic form class  -->

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



</section>
<!-- end of this section using flex to centre the items. -->


<?php
require_once ("../abstractFooter.php");

?>


</div>

<!--  end of the further change on the admin grid to accommodate the edit form in the middle of the page THIS IS IMPORTANT, THIS IS THAT INTERMIEDARY PAGE, THE SECOND PAGE WITH THE CARD GRID AND THE FORM AS ONE, NOTHING IN THE ADMIN SECTION IS LIKE THIS -->
</body>
</html>

