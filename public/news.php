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

        <!-- this grid has less rows than the home page's grid -->

        <div class="l-basic-grid-news-music-and-photos-page h-grid">
        	<?php
require_once ("../abstractHeader.php");
require_once("newsMusicPhotosHero.php");

?>

  





<!-- THE NEWS SECTION -->

<!-- just a semantic section class for the news data of the site-->

<!-- a helper class to take off the background image strip divider that is present in the home page -->

     <section class="c-latest-news h-take-background-strip-off-pseudo-before-element">


          <!-- just a heading class with the project styles and fonts and with different font sizes at different screen sizes -->
          <h1 class="c-latest-news-title h-mobile-title">Latest News</h1>

          <!-- end of heading class with the project styles and fonts and with different font sizes at different screen sizes -->

<!---this class down below is a utility class to keep the grid in a 1300px max container for the big screens ----->

          <div class="l-for-card-grid-columns-max-width-container">



          <!--- this class down below is the section grid column layout itself, this is for all the card type blocks like the music albums, the band photos and the news stories, this grid uses the auto-fit property with a minmax so it becomes responsive--->   


          <div class="l-the-card-grid h-grid">

<?php

	

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$news_query = "SELECT * FROM news_table";

 $data = mysqli_query($dbc, $news_query);

 while ($row = mysqli_fetch_array($data)){ 

 require('newsStoriesWhileLoop.php');
  
		
}


mysqli_close($dbc);
?>


</div>

<!----end of the auto-fit grid for the cards (images, album photos, stadium photos etc)----->

</div>
<!----end of utility layout class for max width ---->  
</section>
<!-- end of the semantic section for the news data -->

<!-- end of the  helper class to take off the background image strip divider that is present in the home page -->

<!-- END OF THE NEWS SECTION -->










<?php 
require_once ("../abstractFooter.php");

?>
</div>
<!-- end of the row grid, less than the home page's grid -->
</body>
</html>


