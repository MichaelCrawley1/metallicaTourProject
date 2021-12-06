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
    <meta charset="utf-8">
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
    <div class="l-basic-grid-admin-manipulation h-grid">
        <?php
require_once ("header.php");

?>

<section class="c-admin-manipulate-website-sections h-position h-flex">

   <!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="cpanel.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->

    <h1 class="c-admin-manipulate-website-sections-title">
        
        The Photos Section
    </h1>

    <div class="c-admin-manipulate-website-sections-paragraph-container h-flex">

    <p class="c-admin-manipulate-website-sections-message">
        
        Administrator, you are behind the scenes in the photos section of the website, here you can make the changes that is needed.  What would you like to change?

    </p>

    <p class="c-admin-manipulate-website-sections-message">

        Would you like to?


    </p>
</div>

    <!---below is the Photos options to change---->
    
<div class="c-admin-manipulate-website-sections-list-container h-flex">
<p class="c-admin-manipulate-website-sections-desc "><a href="addBandPhotos.php" class="c-admin-manipulate-website-sections-desc-links">
Add Band Photos</a></p>

<p class="c-admin-manipulate-website-sections-desc"><a href="delBandPhotos.php" class="c-admin-manipulate-website-sections-desc-links">
Delete Band Photos</a></p>

<p class="c-admin-manipulate-website-sections-desc"><a href="editBandPhotos.php" class="c-admin-manipulate-website-sections-desc-links">Edit Band Photos</a></p>


</div>

<!---end of Photos options---->

</section>


<?php
require_once ("../abstractFooter.php");

?>

    </div>
</body>

</html>