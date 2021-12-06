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

        <div class="l-basic-grid-news-music-and-photos-page h-grid">
        	<?php
require_once ("../abstractHeader.php");

?>

  
<!----below is the component class section taken from the home page (product.php)this is getting reused here for the promo tour dates image click through---->
<section class="c-small-screen">

        			<div class="c-small-screen-background">
        				<div class="c-small-screen-image-container h-flex">

        				<img src="../img/promo_tour.png" alt="image for tour dates" class="c-small-screen-tour-dates-img">
                         <a href="tour.php" class="c-small-screen-tour-dates-img-link" ></a>


        			</div>
        				

        			</div>
        			

        		</section>

               <section class="c-big-screen-background">

                         <div class="c-big-screen-background-hero c-big-screen-background-hero--news-hero">

                              <div class="c-big-screen-image-container h-flex">

                         <a href="tour.php" class="c-big-screen-tour-dates-img-link" ><img src="../img/promo_tour.png" alt="image for tour dates" class="c-big-screen-tour-dates-img"></a>


                    </div>

                         </div>
                         

                    </section>


     <!---end of reusable component--->



<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the NEWS section (latest-news), the only difference is that there are the maximum entries here for the NEWS, not limited to three like in the home page (product.php).  We don't need a  hero image for this page, so I have taken this NEWS section towards the top of the page.  A few modifiers need to be in place then. One, we need to take out the black background on the section class(c-latest-news) and we need to amend the position to bring the section nearer to the hamburger mobile menu to enable a more presenting outlook  The modifiers are below---->
	
<section class="c-admin-DELETE-tour-dates h-flex c-latest-news-max-width">
	<h1 class="c-latest-news-title h-mobile-title">Latest News</h1>

     <div class="c-news-stories-DELETE h-grid">

<?php

	

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$news_query = "SELECT * FROM News_table";

 $data = mysqli_query($dbc, $news_query);

 while ($row = mysqli_fetch_array($data)){ ?>

 	<article class="c-news-stories-DELETE-container">

          <div class="c-news-stories-DELETE-container-for-anchor-cover h-position c-latest-news-img-container">
      <img src="../img/<?php echo $row['img_ref']?>" class="c-news-stories-DELETE-img-itself"/>
    </div>
 	  <div class="c-news-stories-DELETE-info-container c-news-stories-DELETE-info-container--no-padding">
               <div class="c-news-stories-DELETE-date"><?php echo $row['date']?>
 	  	</div>
 	

 	  	<h3 class=c-latest-news-sub-title><?php echo $row['title']?></h3>

          <!----this element down below was causing the auto-fit grid to not work
               got to overide the max width properites on the base paragraphs----->

 	  	<p class="c-latest-news-blurb"><?php echo $row['description']?> </p>

 	  
 	 </div>

 	
 </article>
 <?php 
		


 	} 


mysqli_close($dbc);
?>


</div>
</section>



<!---- end of the reusable component ---->






<?php 
require_once ("../abstractFooter.php");

?>
</div>

</body>
</html>


