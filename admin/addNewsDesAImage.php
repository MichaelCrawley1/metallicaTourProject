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

<!-- this class below is for all the items that are added through the admin panel, be it; a new tour date, a new news story, a band photo or a new album. -->

<!-- this class through the use of flexbox helps to centre the form, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->
		
<section class="c-admin-addAndEdit-item h-flex h-position">


	<!----reusable component icon to go back a page this is in the base section of the scss----->
  <!-- because the parent is position relative we have a position absolute on this of top, left and right of 0 to make the icon align at the top left hand side of the page  -->
    <div class="c-back-page-icon-container">
        <!-- just an increase size on this svg to make it look better -->
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <!-- end of size change on the svg -->

        <!-- destination to go back a page with pseudo before technique to give mobile users more click space -->
        <a href="manipulateNewsSection.php" class="c-back-page-icon-link"></a>
         <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>

   <!-- end of position absolute -->
<!----end of reusable component----->

<!-- heading style for all the admin add and edit item headings with different sizes at different screens -->


<h1 class="c-admin-addAndEdit-item-title">Add A News story</h1>

<!-- end of heading style for the admin add items headings -->

<!-- a semantic form class -->

<form method="post" action="confirmAddNewsDesImage.php" class="c-admin-addAndEdit-item-dates-form h-padding" enctype="multipart/form-data" />

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
<p class="c-admin-addAndEdit-item-dates-desc">Add a date: 
   <!-- some margins and font size changes at different screen sizes  -->
  <input type="text" name="date" value="<?php echo $_SESSION['addNewsStory']['date'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required />
<!-- end of some margins and font size changes at different screen sizes -->

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->


<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
<p class="c-admin-addAndEdit-item-dates-desc">Add a title: 
  <!-- some margins and font size changes at different screen sizes  -->
  <input type="text" name="title" value="<?php echo $_SESSION['addNewsStory']['title'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required  />
<!-- end of some margins and font size changes at different screen sizes -->

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

<p class="c-admin-addAndEdit-item-dates-desc">Add a description about the news: 

  <!-- some margins and font size changes at different screen sizes  -->
  <textarea name="description" cols=60 rows=5 size="40"
 class="c-admin-addAndEdit-item-dates-input" required  ><?php echo $_SESSION['addNewsStory']['description'];?></textarea>

 <!-- end of some margins and font size changes at different screen sizes -->

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

<p class="c-admin-addAndEdit-item-dates-desc">Add an image: 
<!-- some margins and font size changes at different screen sizes  -->
  <input type="file" name="fileToUpload"  id="fileToUpload" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required  >
<!-- end of some margins and font size changes at different screen sizes -->

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is to centre the button -->
<div class="c-admin-addAndEdit-item-dates-submit-button-container h-flex">

  <!--- these buttons are reused throughout the website and have the same style that was done at the beginning of the project, they also have a hover state as well and the colour goes a slightly darker red with a position relative for the anchors to span the whole area of the button rather than just the link ---->
  <!-- also a helper class to make the text uppercase -->
<button class="c-button-mobile c-button-mobile--large h-uppercase" type="submit" name="submit"  >Submit</button>

<!--- end of buttons having the same style and a hover state with a position relative for the anchors to span the whole area of the button rather than just the link ---->

<!-- end of the helper class making the text uppercase -->
</div>

<!-- end of class to centre the button -->
</form>

<!-- end of the semantic form class -->

<?php

if (isset($_GET['signup'])){

  $correctForm = $_GET['signup'];

  if ($correctForm == "char"){?>
     <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
      <p class="c-admin-addAndEdit-item-dates-desc h-font-size h-text-align">Entries must begin with letters for Title and description of News!</p>
      <!-- end of some margins and font size changes at different screen sizes -->


<?php
    
  }

}

  


?>

<!-- RESUME HERE TOMORROW -->


<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the NEWS section (latest-news), the only difference is that there are the maximum entries here for the NEWS, not limited to three like in the home page (product.php).  We don't need a  hero image for this page, so I have taken this NEWS section towards the top of the page.  A few modifiers need to be in place then. One, we need to take out the black background on the section class(c-latest-news) and we need to amend the position to bring the section nearer to the hamburger mobile menu to enable a more presenting outlook  The modifiers are below---->
	
  <!---this section down below uses the utility class to keep the grid in a 1300px max container for the big screens, also there is a class to keep the flex direction at a column THINK ABOUT CHANGING THIS FIRST CLASS TO SOMETHING THAT WOULD RESONATE WITH THE HOME PAGE ----->
<section class="c-admin-DELETE-tour-dates h-flex l-for-card-grid-columns-max-width-container">
	<h1 class="c-latest-news-title h-mobile-title">Latest News</h1>

 <!--- this class down below is the section grid column layout itself, this is for all the card type blocks like the music albums, the band photos and the news stories--->     
<div class="l-the-card-grid h-grid">
<?php 

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$delNewsStory_sql = "SELECT * FROM News_table";

$delNewsStory_query= mysqli_query($dbc, $delNewsStory_sql);

 
 		
while ($row = mysqli_fetch_array($delNewsStory_query)){ ?>

 <!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden---->
  <article class="h-overflowH">

  <!----end of helper class---->


 	   <div class="c-news-stories-DELETE-container-for-anchor-cover h-position c-latest-news-img-container">
 	  	<img src="../img/<?php echo $row['img_ref']?>" class="c-news-stories-DELETE-img-itself"/>
 	  </div>

 	  	 <div class="c-news-stories-DELETE-info-container c-news-stories-DELETE-info-container--no-padding">

 	  	<div class="c-news-stories-DELETE-date"><?php echo $row['date']?>
 	  	</div>
 	  

 	  	<h3 class=c-latest-news-sub-title><?php echo $row['title']?></h3>

 	  	<p class="c-latest-news-blurb"><?php echo $row['description']?> </p>

 	  
 	 </div>

 	
 </article>

 	 
 	
 	
 <?php


 }
mysqli_close($dbc);
?>
</div>

<!----end of the grid for the cards (images, album photos, stadium photos etc)----->
</section>

<!----end of utility layout class for max width on the section this time ---->  

<!---- end of the reusable component ---->

</section>

<!-- end of this class for all the items that are added through the admin panel, be it; a new tour date, a new news story, a band photo or a new album. -->

<!-- end of this class through the use of flexbox helps to centre the form, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<!-- end of centring the form -->

<?php 
require_once ("../abstractFooter.php");

?>

 
</div>
<!-- end of the grid, less rows than the home page -->
</body>
</html>




