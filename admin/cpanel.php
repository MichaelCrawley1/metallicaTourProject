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

        <div class="l-basic-grid-admin-and-c-panel h-grid">
        	<?php
require_once ("header.php");

?>

<section class="c-control-panel h-flex">
<h1 class="c-control-panel-title">Control Panel</h1>

<div class="c-control-panel-welcome-message-container h-flex">
	<h5 class="c-control-panel-welcome-message-title">Hello administrator, below is a list of options to add, edit or remove some of the items from the website.</h5>
</div>


<div class="c-control-panel-logout-button-container h-flex">
<button class="c-button-mobile c-button-mobile--large ">
<a href="admin.php?action=logout" class="c-control-panel-desc-links c-control-panel-desc-links--logout-button">
Logout</a></button>
</div>

<div class="c-control-panel-admin-options-title-container">
	
<h1 class="c-c-control-panel-admin-options-title">Admin Options:</h1>

</div>

<!---the admin section for the tour---->

<section class="c-control-panel-admin-button-choice-section">

<div class="c-control-panel-admin-button-choice-section-button-container h-flex">

<button class="c-button-mobile  "><a href="manipulateTourSection.php" class="c-control-panel-desc-links">Tour Section</a>

</button>

</div>


</section>

<!---end of the admin section for the tour part of the website---->
<!---the admin section for the news---->

<section class="c-control-panel-admin-button-choice-section">

<div class="c-control-panel-admin-button-choice-section-button-container h-flex">

<button class="c-button-mobile  "><a href="manipulateNewsSection.php" class="c-control-panel-desc-links">News Section</a>

</button>

</div>


</section>

<!---end of the admin section for the news part of the website---->

<!---the admin section for the music---->

<section class="c-control-panel-admin-button-choice-section">

<div class="c-control-panel-admin-button-choice-section-button-container h-flex">

<button class="c-button-mobile  "><a href="manipulateMusicSection.php" class="c-control-panel-desc-links">Music Section</a>

</button>

</div>


</section>

<!---end of the admin section for the music part of the website---->

<!---the admin section for the photos---->

<section class="c-control-panel-admin-button-choice-section">

<div class="c-control-panel-admin-button-choice-section-button-container h-flex">

<button class="c-button-mobile  "><a href="manipulatePhotosSection.php" class="c-control-panel-desc-links">Photos Section</a>

</button>

</div>


</section>

<!---end of the admin section for the photos part of the website---->


</div>

</section>


<?php
require_once ("../abstractFooter.php");

?>

</div>
</body>
</html>



