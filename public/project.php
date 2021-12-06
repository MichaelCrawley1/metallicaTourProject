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

        <div class="l-basic-grid-home-page h-grid">
        	<?php
require_once ("../abstractHeader.php");

?>

        		<section class="c-small-screen">

        			<div class="c-small-screen-background">
        				<div class="c-small-screen-image-container h-flex">

        				<img src="../img/promo_tour.png" alt="image for tour dates" class="c-small-screen-tour-dates-img h-position">
        				<a href="tour.php" class="c-small-screen-tour-dates-img-link" ></a>


        			</div>
        				

        			</div>

        	</section>

        			<section class="c-big-screen-background">

        				<div class="c-big-screen-background-hero">

        					<div class="c-big-screen-image-container h-flex">

        				<a href="tour.php" class="c-big-screen-tour-dates-img-link" ><img src="../img/promo_tour.png" alt="image for tour dates" class="c-big-screen-tour-dates-img"></a>


        			</div>

        				</div>
        				

        			</section>

        		

	<section class="c-little-blurb-before-news">

		<h1 class="c-little-blurb-before-news-title h-mobile-title"> Check it out</h1>
		
		<div class="c-little-blurb-before-news-img-container h-flex">

			<!----<img src="../img/black-album-hero.jpg" alt="the whole metallica band playing in concert" class="c-little-blurb-before-news-img">

				---->
			

		</div>

		<h1 class="c-little-blurb-before-news-forty-year-anniversary-title">   METALLICA ANNOUNCES TWO 40TH ANNIVERSARY CONCERTS at: <span class="c-little-blurb-before-news-forty-year-anniversary-title-little-text"> SAN FRANCISCO,
Jul 15, 2021</span> </h1>
	<p class="c-little-blurb-before-news-forty-year-anniversary-desc">
		Metallica will celebrate its 40th anniversary with a pair of hometown shows for its fan club members, scheduled to take place Dec. 17 and 19 at San Francisco’s Chase Center. Each night will feature a different setlist, and tickets will be available for sale only to registered members of Metallica’s Fifth Member fan club through a lottery system. The shows, which mark the first time the band has returned to the home of the Golden State Warriors since performing with the San Francisco Symphony at its grand opening in September 2019, will be part of a four-day weekend honoring Metallica’s 40th year as a band.
	</p>
<div class="c-little-blurb-before-news-forty-year-anniversary-button-container h-flex">
	<button class="c-button-mobile ">
		
		<a href="tour.php" class="c-little-blurb-before-news-forty-year-anniversary-button-info">
			More Tour Dates
		</a>
	</button>
</div>
	</section>



	<section class="c-latest-news  ">
		
		<h1 class="c-latest-news-title h-mobile-title">Latest News</h1>

		<div class="c-news-stories-DELETE-max-width">

		<div class="c-latest-news-container-for-grid h-grid">

		<?php

	

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$news_query = "SELECT * FROM News_table LIMIT 3";

 $data = mysqli_query($dbc, $news_query);

 while ($row = mysqli_fetch_array($data)){ ?>


 	<article class="c-latest-news-articles">

 	  <div class="c-latest-news-articles-photo-container">
 	  	<img src="../img/<?php echo $row['img_ref']?>" class="c-latest-news-articles-photo-img"/>
 	  </div>
 	  <div class="c-latest-news-articles-text-container">

 	  	<div class="c-latest-news-articles-body">
 	  		<div class="c-latest-news-articles-date"><?php echo $row['date']?>
 	  	</div>
 	  </div>

 	  	<h3 class=c-latest-news-sub-title><?php echo $row['title']?></h3>

 	  	<p class="c-latest-news-blurb"><?php echo $row['description']?> </p>

 	  <?php 


 	  

 	 ?>
 	 </div>

 	
 </article>






 <?php 
		


 	} 


mysqli_close($dbc);
?>

</div>



<div class="c-latest-news-button-container h-flex">
	<button class="c-button-mobile">
		
		<a href="news.php" class="c-latest-news-info">
			more news
		</a>
	</button>
</div>
</div>

	</section>

	<section class="c-upcoming-shows">
		<h1 class="c-upcoming-shows-title h-mobile-title">Upcoming Shows</h1>

		<?php

	

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$tour_query = "SELECT * FROM Tour_table LIMIT 3";

 $data = mysqli_query($dbc, $tour_query);

 while ($row = mysqli_fetch_array($data)){ ?>

 	<article class="c-upcoming-shows-container h-flex">

 	  <div class="c-upcoming-shows-date">

 	  <?php 


 	  echo'<span class="c-upcoming-shows-month">'  . $row['date']. '</span></div>';
 	  echo '<div class="c-upcoming-shows-venue-container"> <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title">'. $row['venue']. '</h3>
 	 		</div>';
 	 echo	' <div class="c-upcoming-shows-location">'. $row['state_country']. '</div>'; 

 	 ?>
 	 
 	
 </article>
 <?php 
		


 	} 


mysqli_close($dbc);
?>

<div class="c-upcoming-shows-button-container h-flex">
	<button class="c-button-mobile c-button-mobile--large">
		
		<a href="tour.php" class="c-upcoming-shows-info">
			view more
		</a>
	</button>
</div>

	</section>

<?php
/*
require_once ("../header.php");
*/

?>
	

	<section class="c-music">

		<h1 class="c-music-title h-mobile-title">Music</h1>

		<div class="c-news-stories-DELETE-max-width">

		<div class="c-latest-news-container-for-grid h-grid">

		


		

<?php

	

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$music_query = "SELECT * FROM music_table LIMIT 4";

 $data = mysqli_query($dbc, $music_query);

 while ($row = mysqli_fetch_array($data)){ ?>

 	<article class="c-news-stories-DELETE-container">

 		<div class="c-news-stories-DELETE-container-for-anchor-cover h-position c-music-DELETE-container ">

 			 <!---the, 'c-music-DELETE-img-album-change' class is in its own comparted sass file---->
 	  	<img class="c-news-stories-DELETE-img-itself c-music-DELETE-img-album-change" src="../img/<?php echo $row ['img_ref'];?>" />


 		</div>
 </article>
 	  	

 	  	
 	  
 	  
 	 
 <?php 
		


 	} 


mysqli_close($dbc);
?>

</div>
</div>





<div class="c-music-button-container h-flex">
	<button class="c-button-mobile c-button-mobile--large">
		
		<a href="music.php" class="c-music-info">
			view more
		</a>
	</button>
</div>
		

	</section>

	<section class="c-bands-photos">
		
		<h1 class="c-bands-photos-title h-mobile-title">Photos
			

		</h1>

		<div class="c-news-stories-DELETE-max-width">

		<div class="c-latest-news-container-for-grid h-grid">


<?php

	

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$photo_query = "SELECT * FROM photo_table limit 4";

 $data = mysqli_query($dbc, $photo_query);

 while ($row = mysqli_fetch_array($data)){ ?>

 	<article class="c-news-stories-DELETE-container">

 		<div class="h-position  h-height400 h-padding">

 			 <!---the, 'c-music-DELETE-img-album-change' class is in its own comparted sass file---->
 	  	<img class="c-news-stories-DELETE-img-itself c-music-DELETE-img-album-change" src="../img/<?php echo $row['img_ref']?>" />
 	  	<div class="c-news-stories-DELETE-info-container ">
 	  		<div class="c-news-stories-DELETE-date"><?php echo $row['date']?>
 	  	</div>
 	  	<!---this class is from the tour section, just testing this what it looks like--->
 	  	<div class="c-upcoming-shows-location"> <?php echo $row['state_country']?>  </div> 

		</div>
 	 
 	
 </div>
</article>
		
		
 	 
 <?php 
		


 	} 


mysqli_close($dbc);
?>

</div>
</div>





<div class="c-bands-photos-button-container h-flex">
	<button class="c-button-mobile c-button-mobile--large">
		
		<a href="photos.php" class="c-bands-photos-info">
			view more
		</a>
	</button>
</div>
	</section>








<?php

require_once ("../abstractFooter.php");


?>



</div>
</body>
</html>











