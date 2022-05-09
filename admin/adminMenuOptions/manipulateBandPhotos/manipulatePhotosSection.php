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
    <meta charset="utf-8">
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

<!-- just our section to keep the content vertically centred and spaced out as the screen gets bigger -->

<!-- this class through the use of flexbox helps to centre the form, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<section class="c-admin-manipulate-website-sections h-position h-flex">

<!----reusable component icon to go back a page this is in the base section of the scss----->
  <!-- because the parent is position relative we have a position absolute on this of top, left and right of 0 to make the icon align at the top left hand side of the page  -->

    <div class="c-back-page-icon-container">

        <!-- just an increase size on this svg to make it look better -->
        
        <img src="/metallicaTourProject/img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <!-- end of size change on the svg -->

          <!-- destination to go back a page with pseudo before technique to give mobile users more click space -->

        <a href="/metallicaTourProject/admin/logIn/cpanel.php" class="c-back-page-icon-link"></a>

          <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>

 <!-- end of position absolute -->

<!----end of reusable component----->


<!-- style and font size and height on the block at big screens of 300px to spread the rest of the content out vertically, the same for all headings in the manipulate section of the site -->

    <h1 class="c-admin-manipulate-website-sections-title">
        
        The Photos Section
    </h1>

      <!--  end of the style and font size and height on the block at big screens of 300px to spread the rest of the content out vertically, the same for all headings in the manipulate section of the site -->

     <!-- a text align centre here and a flex direction column to keep the text centred vertically -->

    <div class="c-admin-manipulate-website-sections-paragraph-container h-flex">

    <!-- just a semantic paragraph -->

    <p class="c-admin-manipulate-website-sections-message">
        
        Administrator, you are behind the scenes in the photos section of the website, here you can make the changes that is needed.  What would you like to change?

    </p>

     <!-- end of  a semantic paragraph -->


    <!-- just a semantic paragraph -->

    <p class="c-admin-manipulate-website-sections-message">

        Would you like to?


    </p>

    <!--end of  a semantic paragraph -->
</div>

<!-- end of a text align centre here and a flex direction column to keep the text centred vertically -->



<!-- BAND PHOTO OPTIONS -->

<!-- important class this one, it has a height and margins and a justify content : space evenly on it to keep the vertical choices looking with equal space between the options  -->
    
<div class="c-admin-manipulate-website-sections-list-container h-flex">

<!-- just a semantic paragraph class -->

<p class="c-admin-manipulate-website-sections-desc ">

<!-- the style on the text comes from the link here not the paragraph element, font size, text decoration etc -->
    <a href="/metallicaTourProject/admin/addToDataBase/addBandPhoto/addBandPhotos.php" class="c-admin-manipulate-website-sections-desc-links">
Add Band Photos</a>

<!-- end of the style on the text comes from the link here not the paragraph element, font size, text decoration etc -->

</p>

<!-- end of a semantic paragraph class -->

<!-- just a semantic paragraph class -->


<p class="c-admin-manipulate-website-sections-desc">

    <!-- the style on the text comes from the link here not the paragraph element, font size, text decoration etc -->


    <a href="/metallicaTourProject/admin/deleteFromDataBase/deleteBandPhoto/delBandPhotos.php" class="c-admin-manipulate-website-sections-desc-links">
Delete Band Photos</a>

<!-- end of the style on the text comes from the link here not the paragraph element, font size, text decoration etc -->

</p>

<!-- end of a semantic paragraph class -->

<!-- just a semantic paragraph class -->

<p class="c-admin-manipulate-website-sections-desc">

     <!-- the style on the text comes from the link here not the paragraph element, font size, text decoration etc -->


    <a href="/metallicaTourProject/admin/editDataBase/editBandPhotos/editBandPhotos.php" class="c-admin-manipulate-website-sections-desc-links">Edit Band Photos</a>

    <!-- end of the style on the text comes from the link here not the paragraph element, font size, text decoration etc -->




</p>

<!-- end of a semantic paragraph class -->


</div>


<!--  end of important class this one, it has a height and margins and a justify content : space evenly on it to keep the vertical choices looking with equal space between the options  -->

<!---END OF BAND PHOTOS OPTIONS---->

</section>


<!-- end our section to keep the content vertically centred and spaced out as the screen gets bigger -->


<!-- end of this class through the use of flexbox helps to centre the form, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->


<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");

?>

</div>

<!-- end of the admin grid, less rows than the home page of the website.  -->
</body>

</html>