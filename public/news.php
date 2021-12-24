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
	
<!---this section down below uses the utility class to keep the grid in a 1300px max container for the big screens, also there is a class to keep the flex direction at a column  THINK ABOUT CHANGING THIS FIRST CLASS TO SOMETHING THAT WOULD RESONATE WITH THE HOME PAGE----->
<section class="c-admin-DELETE-tour-dates h-flex l-for-card-grid-columns-max-width-container">


	<h1 class="c-latest-news-title h-mobile-title">Latest News</h1>

     <!--- this class down below is the section grid column layout itself, this is for all the card type blocks like the music albums, the band photos and the news stories--->     

  <div class="l-the-card-grid h-grid">

<?php

	

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$news_query = "SELECT * FROM News_table";

 $data = mysqli_query($dbc, $news_query);

 while ($row = mysqli_fetch_array($data)){ ?>

 	<!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden---->
     <article class="h-overflowH">

   

               <!---This class below does nothing, was just used as a parent class in case it was needed for a flex or a  grid child ---->
          <div class="h-height-auto">

     <!---this class is what enables the auto-fit to work, changing the width at different screen sizes and using object-fit cover to maintain aspect ratio on the images---->
          <img src="../img/<?php echo $row['img_ref']?>" class="c-latest-news-articles-photo-img"/>
          <!---end of img class width changes and object fit cover---->
    </div>

     <!--- end of height auto class---->
 	  <!---this class aligns the latest news text through padding---->
       <div class="c-latest-news-articles-text-container">
              <!--- this class changes the font size of the dates --->
               <div class="c-latest-news-articles-date"><?php echo $row['date']?>
          
       </div>

       <!---- end of font size change ---->
 	
       <!----this class changes the font size and the color to our red ---> 
 	  	<h3 class=c-latest-news-sub-title><?php echo $row['title']?></h3>

            <!---- end of font size change and colour to our red ---->

       <!----this paragraph class overrides the max width on our base paragraphs, this needed doing because with the grid auto fit property the max width of the paragraph was preventing it from working----->

          <p class="c-latest-news-blurb"><?php echo $row['description']?> </p>

          <!----end of the overriding paragraph width for grid auto-fit---->

 	  	

 	  
 	 </div>

           <!---end of the latest news text align through padding---->

 	
 </article>

 <!----end of helper class for overlow hidden---->
 <?php 
		


 	} 


mysqli_close($dbc);
?>


</div>

<!----end of the grid for the cards (images, album photos, stadium photos etc)----->

</section>

<!----end of utility layout class for max width on the section this time ---->  



<!---- end of the reusable component ---->






<?php 
require_once ("../abstractFooter.php");

?>
</div>

</body>
</html>


