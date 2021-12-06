<?php



session_start();

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

<!---this is a reusable component from the tour section as it follows the same style for every delete confirmation ----->

<section class="c-admin-DELETE-tour-dates-CONFIRM h-flex h-position">

  <!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="delMusicAlbums.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->

<h1 class="c-admin-DELETE-tour-dates-CONFIRM-title">Confirm Music Album Deletion</h1>


<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the NEWS section (latest-news) 

	---->


<section class="c-latest-news c-news-stories-DELETE-confirmation">






<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$delMusic_sql="SELECT * FROM music_table WHERE id=".$_GET['musicID'];

$delMusic_query= mysqli_query($dbc, $delMusic_sql)
or die('Error querying database.');
$delMusic_rs = mysqli_fetch_array($delMusic_query);

?>
 
 	<article class="c-latest-news-articles h-flex">

 	  <div class="c-latest-news-articles-photo-container">
 	  	<img src="../img/<?php echo $delMusic_rs['img_ref']?>" class="c-latest-news-articles-photo-img"/>
 	  </div>

 	</article>
 </section>

<!--- end of reusable component---->


<!--- this will serve as a reusable component as this option design is in the penutimate page of the other sections of the website too---->

<div class="c-admin-confirm-add-tour-desc-container h-flex">


<p class="c-admin-confirm-add-tour-desc"><a class="c-admin-confirm-add-tour-desc-links" href="defDeleteMusic.php?musicID=<?php echo $_GET['musicID'];?>">Yes, delete it!</a> |
<a href="delMusicAlbums.php" class="c-admin-confirm-add-tour-desc-links">No, go back</a> | <a href="admin.php" class="c-admin-confirm-add-tour-desc-links">Back to control panel</a></p>

</div>
<!---end of a reusable component---->
</section>


<?php
require_once ("../abstractFooter.php");

?>






 	

</div>
</body>
</html>





