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

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/errorReporting/developmentErrorReporting.php");

?>


<!-- just need flex direction column , don't need to centre the content, that is done with each of the button options -->
<section class="c-control-panel h-flex">
  <!-- some font and style changes with text align centre -->
<h1 class="c-control-panel-title">Control Panel</h1>
<!-- end of some font and style changes with text align centre -->

<!-- there is a flex on here and an align items centre -->
<div class="c-control-panel-welcome-message-container h-flex">
  <!-- a lighter font weight and a smaller font size -->
	<h5 class="c-control-panel-welcome-message-title">Hello administrator, below is a list of options to add, edit or remove some of the items from the website.</h5>

  <!-- end of a lighter font weight and a smaller font size -->

</div>

<!-- end of a flex on here and an align items centre -->


<!-- this button container has a flex align-items centre so that the button block is small and centred and doesn't span the whole page. -->
<div class="c-control-panel-logout-button-container h-flex">

  <!-- our button for the style for the site also with position relative helper class so that the links can be clickable to the whole box -->
<button class="c-button-mobile c-button-mobile--large h-position ">

<!-- some linkage styles like upper case and font size and text direction underlined  and with out BBC pseudo technique so the user can click the whole box-->
<a href="admin.php?action=logout" class="c-control-panel-desc-links c-control-panel-desc-links--logout-button">
Logout</a>

<!-- end of some linkage styles like upper case and font size and text direction underlined and with out BBC pseudo technique so the user can click the whole box-->


</button>
<!-- end of our button for the style for the site also with position relative helper class so that the links can be clickable to the whole box -->

</div>

<!-- end of this button container has a flex align-items centre so that the button block is small and centred and doesn't span the whole page. -->


<!-- a text-align centre -->

<div class="c-control-panel-admin-options-title-container">

  <!-- just a semantic h1 class -->
	
<h1 class="c-c-control-panel-admin-options-title">Admin Options:</h1>

<!-- end of just a semantic h1 class -->

</div>

<!-- end of a text-align centre -->




<!---TOUR BUTTON---->


<!-- a margin top and bottom of 5em to spread out the vertical admin options -->

<section class="c-control-panel-admin-button-choice-section">

  <!-- just a semantic div class with flex column -->

<div class="h-flex">

  <!-- just the button style we have for much of this site and it gets bigger on bigger screens also with position relative helper class so that the links can be clickable to the whole box -->

<button class="c-button-mobile h-position ">
<!-- some linkage styles
and with out BBC pseudo technique so the user can click the whole box -->
  <a href="/metallicaTourProject/admin/adminMenuOptions/manipulateTour/manipulateTourSection.php" class="c-control-panel-desc-links">Tour Section</a>

  <!-- end of some linkage styles
and with out BBC pseudo technique so the user can click the whole box -->

</button>

 <!--  end of the button style we have for much of this site and it gets bigger on bigger screens also with position relative helper class so that the links can be clickable to the whole box -->


</div>
<!-- end of a semantic div class with flex column -->


</section>

<!-- end of a margin top and bottom of 5em to spread out the vertical admin options -->

<!---END OF THE TOUR BUTTON---->


<!-- NEWS BUTTON -->

<!---the admin section for the news---->

<!-- a margin top and bottom of 5em to spread out the vertical admin options -->
<section class="c-control-panel-admin-button-choice-section">

   <!-- just a semantic div class with flex column -->
<div class="h-flex">

  <!-- just the button style we have for much of this site and it gets bigger on bigger screens also with position relative helper class so that the links can be clickable to the whole box -->

<button class="c-button-mobile h-position  ">

<!-- some linkage styles
and with out BBC pseudo technique so the user can click the whole box -->
  <a href="/metallicaTourProject/admin/adminMenuOptions/manipulateNews/manipulateNewsSection.php" class="c-control-panel-desc-links">News Section</a>
<!-- end of some linkage styles
and with out BBC pseudo technique so the user can click the whole box -->
</button>

 <!-- end of the button style we have for much of this site and it gets bigger on bigger screens also with position relative helper class so that the links can be clickable to the whole box -->

</div>
 <!-- end of a semantic div class with flex column -->

</section>

<!---end of the admin section for the news part of the website---->

<!-- end of the NEWS BUTTON -->

<!-- end of a margin top and bottom of 5em to spread out the vertical admin options -->

<!---the admin section for the music---->

<!-- MUSIC SECTION -->


<!-- a margin top and bottom of 5em to spread out the vertical admin options -->
<section class="c-control-panel-admin-button-choice-section">
 <!-- just a semantic div class with flex column -->

<div class="h-flex">

<!-- just the button style we have for much of this site and it gets bigger on bigger screens also with position relative helper class so that the links can be clickable to the whole box -->

<button class="c-button-mobile h-position  ">

<!-- some linkage styles
and with out BBC pseudo technique so the user can click the whole box -->

  <a href="/metallicaTourProject/admin/adminMenuOptions/manipulateAlbum/manipulateMusicSection.php" class="c-control-panel-desc-links">Music Section</a>

<!-- end of some linkage styles
and with out BBC pseudo technique so the user can click the whole box -->

</button>

<!-- end of the button style we have for much of this site and it gets bigger on bigger screens also with position relative helper class so that the links can be clickable to the whole box -->

</div>

 <!-- end of a semantic div class with flex column -->

</section>

<!---END OF THE MUSIC SECTION---->

<!-- end of a margin top and bottom of 5em to spread out the vertical admin options -->


<!---PHOTOS BUTTON---->


<!-- a margin top and bottom of 5em to spread out the vertical admin options -->
<section class="c-control-panel-admin-button-choice-section">

<!-- just a semantic div class with flex column -->

<div class="h-flex">

<!-- just the button style we have for much of this site and it gets bigger on bigger screens also with position relative helper class so that the links can be clickable to the whole box -->

<button class="c-button-mobile h-position  ">

<!-- some linkage styles
and with out BBC pseudo technique so the user can click the whole box -->
  <a href="/metallicaTourProject/admin/adminMenuOptions/manipulateBandPhotos/manipulatePhotosSection.php" class="c-control-panel-desc-links">Photos Section</a>

  <!-- end of some linkage styles
and with out BBC pseudo technique so the user can click the whole box -->

</button>

<!-- end of the button style we have for much of this site and it gets bigger on bigger screens also with position relative helper class so that the links can be clickable to the whole box -->

</div>

<!-- end of a semantic div class with flex column -->

</section>

<!---END OF PHOTOS BUTTON---->

<!-- end of a margin top and bottom of 5em to spread out the vertical admin options -->


</section>
<!--  end of just need flex direction column , don't need to centre the content, that is done with each of the button options -->

<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");

?>



</div>

<!-- end of grid less rows than the main site -->
</body>
</html>



