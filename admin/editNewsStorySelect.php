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

<!----reusable grid for the same layout as the news stories to be chosen to be deleted---->
        <div class="l-basic-grid-delete-news-stories h-grid">
        	<?php
require_once ("header.php");

?>
 <div class="c-news-stories-DELETE-icon-container h-position">


  <!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container c-news-stories-DELETE-icon-back-to-the-left ">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="manipulateNewsSection.php" class="c-back-page-icon-link"></a>
    </div>


<!----end of reusable component----->

</div>

<!---reusable class from the tour delete section, remains to be seen If I will use this---->


<section class="c-admin-DELETE-tour-dates h-flex c-news-stories-DELETE-max-width">


<h1 class="c-admin-DELETE-tour-dates-title">Select News Story To change</h1>










<section class="c-news-stories-DELETE h-grid">

<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

 unset($_SESSION['editNewsStoryInfo']);

$editNewsStory_sql="SELECT * FROM News_table";
$editNewsStory_query= mysqli_query($dbc, $editNewsStory_sql);


while($editNewsStory_rs= mysqli_fetch_array($editNewsStory_query)){ ?>

	<article class="c-news-stories-DELETE-container">

 		<div class="c-news-stories-DELETE-container-for-anchor-cover h-position c-latest-news-img-container">

 	  
 	  	<img class="c-news-stories-DELETE-img-itself" src="../img/<?php echo $editNewsStory_rs ['img_ref'];?>" />

 	  <div class="c-news-stories-DELETE-info-container ">
 	  		<div class="c-news-stories-DELETE-date"><?php echo $editNewsStory_rs['date'];?>
 	  	</div>
 	  

 	  	<h3 class="c-latest-news-sub-title"><?php echo $editNewsStory_rs['title'];?></h3>

 	  	<p class="c-latest-news-blurb"><?php echo $editNewsStory_rs['description'];?> </p>
 	  </div>
<a class="c-news-stories-DELETE-links-bbc" href="editNewsStoryInfo.php?newsID=<?php echo $editNewsStory_rs['id'];?>">
 	 
 	</a>
 	 </div>

 	
 </article>
 <?php


 }

?>

 
 	



</section>
</section>


<?php
require_once ("../abstractFooter.php");

?>
</div>

</body>
</html>


