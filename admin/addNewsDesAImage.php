<?php

session_start();

if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
}

if (!isset($_SESSION['addNewsStory'])){
$_SESSION['addNewsStory']['date']="";
$_SESSION['addNewsStory']['title']="";
$_SESSION['addNewsStory']['description']="";
$_SESSION['addNewsStory']['img'] = "noimage.png";

}

else {

if($_SESSION['addNewsStory']['img']!="noimage.png"){

		@unlink("../img/".$_SESSION['addNewsStory']['img']);
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

<!---this parent section comes from the, 'add tour' admin page, because stylistically, the layout is the same, for any modifications, that will be highlighted with a class specfic for its category, 'tour', 'news', 'photos' etc. ---->
		
<section class="c-admin-add-tour-dates h-flex h-position">


	<!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="manipulateNewsSection.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->



<h1 class="c-admin-add-tour-dates-title">Add A News story</h1>

<form method="post" action="confirmAddNewsDesImage.php" class="c-admin-add-tour-dates-form h-padding" enctype="multipart/form-data" />

<p class="c-admin-add-tour-dates-desc">Add a date: <input type="date" name="date" value="<?php echo $_SESSION['addNewsStory']['date'];?>" size="40"
maxlength="50" class="c-admin-add-tour-dates-input" required /></p>
<p class="c-admin-add-tour-dates-desc">Add a title: <input type="text" name="title" value="<?php echo $_SESSION['addNewsStory']['title'];?>" size="40"
maxlength="50" class="c-admin-add-tour-dates-input" required  /></p>
<p class="c-admin-add-tour-dates-desc">Add a description about the news: <textarea name="description" cols=60 rows=5 size="40"
 class="c-admin-add-tour-dates-input" required  ><?php echo $_SESSION['addNewsStory']['description'];?></textarea></p>
<p class="c-admin-add-tour-dates-desc">Add an image: <input type="file" name="fileToUpload"  id="fileToUpload" size="40"
maxlength="50" class="c-admin-add-tour-dates-input" required  ></p>

<div class="c-admin-add-tour-dates-submit-button-container h-flex">
<button class="c-button-mobile c-button-mobile--large h-uppercase" type="submit" name="submit"  >Submit</button>
</div>
</form>

<?php

if (isset($_GET['signup'])){

  $correctForm = $_GET['signup'];

  if ($correctForm == "char"){?>

      <p class="c-admin-add-tour-dates-desc h-font-size h-text-align">Entries must begin with letters for Title and description of News!</p>



<?php
    
  }

}

  


?>


<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the NEWS section (latest-news), the only difference is that there are the maximum entries here for the NEWS, not limited to three like in the home page (product.php).  We don't need a  hero image for this page, so I have taken this NEWS section towards the top of the page.  A few modifiers need to be in place then. One, we need to take out the black background on the section class(c-latest-news) and we need to amend the position to bring the section nearer to the hamburger mobile menu to enable a more presenting outlook  The modifiers are below---->
	
<section class="c-admin-DELETE-tour-dates h-flex c-news-stories-DELETE-max-width">
	<h1 class="c-latest-news-title h-mobile-title">Latest News</h1>


<section class="c-news-stories-DELETE h-grid">

<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$delNewsStory_sql = "SELECT * FROM News_table";

$delNewsStory_query= mysqli_query($dbc, $delNewsStory_sql);

 
 		
while ($delNewsStory_rs = mysqli_fetch_array($delNewsStory_query)){ ?>

 	<article class="c-news-stories-DELETE-container">


 	   <div class="c-news-stories-DELETE-container-for-anchor-cover h-position c-latest-news-img-container">
 	  	<img src="../img/<?php echo $delNewsStory_rs['img_ref']?>" class="c-news-stories-DELETE-img-itself"/>
 	  </div>

 	  	 <div class="c-news-stories-DELETE-info-container c-news-stories-DELETE-info-container--no-padding">

 	  	<div class="c-news-stories-DELETE-date"><?php echo $delNewsStory_rs['date']?>
 	  	</div>
 	  

 	  	<h3 class=c-latest-news-sub-title><?php echo $delNewsStory_rs['title']?></h3>

 	  	<p class="c-latest-news-blurb"><?php echo $delNewsStory_rs['description']?> </p>

 	  
 	 </div>

 	
 </article>

 	 
 	
 	
 <?php


 }
mysqli_close($dbc);
?>
</section>
</section>

<!---- end of the reusable component ---->

</section>

<!---end of parent component----->

<?php 
require_once ("../abstractFooter.php");

?>

 
</div>
</body>
</html>



