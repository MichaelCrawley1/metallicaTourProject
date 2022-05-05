<?php



session_start();

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/errorReporting/developmentErrorReporting.php");

$locate_file = "/metallicaTourProject/admin/logIn/admin.php";

if(!isset($_SESSION['admin'])){

  header("Location: http://".$_SERVER['HTTP_HOST'].$locate_file);
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


<?php

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

// this variable down below is the start of the file path, it takes past the htdocs but to the begining of the metallicaTourProject. so it like this: /Applications/MAMP/htdocs

$imageFilePath = $_SERVER['DOCUMENT_ROOT'];



$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

// we have to a select query again and unlink the image from the select query as we cannot do it from the delete query because the record is gone before we have a chance to select the image ref from it.
$theUnlink_image_sql="SELECT * FROM photo_table WHERE id=".$_GET['photoID'];
$theUnlink_image_query = mysqli_query($dbc,$theUnlink_image_sql) or die('Error querying database.');

// this lets us into the record so we can select the img ref column.  
$theUnlink_image_rs = mysqli_fetch_array($theUnlink_image_query);
// this variable is following from the document root, so it begins after the htdocs which would be the metallicaTourProject/ folder
$whereTheImageIs = "/metallicaTourProject/img/".$theUnlink_image_rs['img_ref'];
// this variable appends everything we have collected so far, giving the complete file path which would be Applications/MAMP/htdocs/metallicaTourProject/img/the image extention.
$completePath = $imageFilePath.$whereTheImageIs;

// take it away from the image folder of the CRUD application
 
@unlink($completePath);

// now we are free to delete the application and re use that image if we want to later.  

 $delPhoto_sql = "DELETE FROM photo_table WHERE id=".$_GET['photoID'];
 $delPhoto_query= mysqli_query($dbc,$delPhoto_sql);


?>



<!---this is going to be a reusable component as all the confirmation screens will follow the same style --->

<!-- this class sets the content bang in the middle of the page vertically and horizontally, the three row grid set at the beginning has a 100vh height on the main content therefore we can use flex's align items and justify content to centre the page -->

<section class="c-admin-confirmation-page h-flex">

<!-- Our usual title style used throughout the site, with bigger sizes at ipad screens and above -->
<h1 class="c-admin-confirmation-page-title">The Band Photo has successfully been Deleted!!!!!</h1>

<!-- end of our usual title style used throughout the site, with bigger sizes at ipad screens and above  -->

<!-- just the button design used throughout the site , with position relative to enable the link to span the whole button width and height -->

<button class="c-button-mobile c-button-mobile--large h-position">

<!-- just some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX -->


  <a class="c-admin-confirmation-page-links" href="/metallicaTourProject/admin/logIn/admin.php">Return to admin</a>
<!-- end of some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX  -->

</button>

<!-- end of the button design used throughout the site  with position relative to enable the link to span the whole button width and height  -->

<!----end of button component, but links are a different class --->



</section>
<!-- end of the class setting the content bang in the middle of the page vertically and horizontally, the three row grid set at the beginning has a 100vh height on the main content therefore we can use flex's align items and justify content to centre the page -->

<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");


?>


</div>
<!-- end of the admin 3 row grid -->
</body>
</html>



 








