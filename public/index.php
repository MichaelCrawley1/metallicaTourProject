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

        <div class="l-basic-grid-home-page h-grid">

        	<!--- the reused header is down below, both for the mobile sized screen and the desktop size, mainly for the navigation system --->
        	<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractHeader.php");

?>



<!---- this section is for the mobile screens only, the only difference from the mobile size to the larger screen is there is no hero image here and the tour dates image is a different size---->


<!----this class is set to display none at bigger screen sizes (ipad) so the big screen section can take over---->

        		<section class="c-small-screen">
<!-- this class sets the background image and centres it, (which is the grey coloured background) -->
        			<div class="c-small-screen-background">

     <!-- this class is the image container with flex to centre it -->
        				<div class="c-small-screen-image-container h-flex">
       <!-- this image class has different widths to keep the image
        					looking acceptable at different screen sizes also set to position relative for the pseudo::before anchor technique to work -->
        				<img src="/metallicaTourProject/img/promo_tour.png" alt="image for tour dates" class="c-small-screen-tour-dates-img h-position">
       <!-- end of image class for different widths at different screen sizes -->

       <!-- this anchor class uses the pseudo before:: technique i got from the BBC website, which spans the whole image (providing the parent is set to display: relative), this prevents having anchor tags as the parent to block elements like Div's -->
        				<a href="tour.php" class="c-small-screen-tour-dates-img-link" ></a>
        				<!-- end of anchor tag with pseudo before:: -->

        			</div>
       <!-- end of promo tour image centre container --> 				

        			</div>

<!-- end of centring background image -->

	</section>

   <!-- end of small screen section and background colour to black -->



<!--- this is the big screen section where there is a hero image and the tour dates image is put at the bottom of the hero image ----->

<!-- This section class is set to display none at small screen sizes then display block at big screen sizes (ipad) to swap with the mobile display non-hero layout -->
        			<section class="c-big-screen-background">
<!-- this class sets the hero image (Metallica band photo) for the big screen and centres it -->
        				<div class="c-big-screen-background-hero">
        					<!-- this class is important for the layout of the promo tours image (which acts as a button). It is set to display flex with flex direction column and an explicit height of 500px so we can use the, 'justify-content:flex-end;' property to move the image down to the bottom and, 'align-items: center;' to have the image at the bottom middle -->

        					<div class="c-big-screen-image-container h-flex">

        						<!-- just a semantic anchor tag around the image that takes us to the tour page -->

        				<a href="tour.php" class="c-big-screen-tour-dates-img-link" >

        					<!-- width at different screen sizes to keep the tour dates image looking acceptable at different screen sizes -->
        					<img src="/metallicaTourProject/img/promo_tour.png" alt="image for tour dates" class="c-big-screen-tour-dates-img">
        					<!-- end of the image looking acceptable at different screen sizes -->

        				</a>

        				<!-- end of the semantic anchor tag that takes us to the tour page. -->


        			</div>

        			<!-- end of flex layout for the image -->

        				</div>
        				<!-- end of hero image for big screen -->

        			</section>
   <!-- end of display block at big screen sizes -->

 <!---- end of section for big screen with hero included ----->


 <!-----this section is an add on section, we don't see this again throughout the website, this is to highlight Metallica's anniversary  A point about this section is that the text is centred using the margin auto attribute on the left and right, no flex on this section except for the button container down below----->

        		
<!-- this section class begins with making the background black  -->
<!-- THE LITTLE BLURB SECTION -->
	<section class="c-little-blurb-before-news">

		<!-- this has a the grey background similar to the header and font styles and sizes for different screen sizes -->

		<h1 class="c-little-blurb-before-news-title h-mobile-title"> Check it out</h1>

		<!-- end of the grey background similar to the header and font styles and sizes for different screen sizes (being a display: block element means it the background will span the whole screen width automatically) -->
		
		<!-- this class only works on mobile screen sizes it swaps the hero image on big screens for the background of this section -->
		<div class="c-little-blurb-before-news-img-container h-flex">

		
			

		</div>
		<!-- end of background for mobile screen sizes -->

		<!-- this h1 class just has a max width of 650px on it with some styling and text align center with the margin auto centre technique at bigger screen sizes -->

		<h1 class="c-little-blurb-before-news-forty-year-anniversary-title">   METALLICA ANNOUNCES TWO 40TH ANNIVERSARY CONCERTS at: 
			<!-- this span class makes the h1 text smaller -->
			<span class="c-little-blurb-before-news-forty-year-anniversary-title-little-text"> SAN FRANCISCO,
Jul 15, 2021</span> 

	<!-- end of smaller span h1 text -->

</h1>

<!-- end of max width on title with some styling and text align center with the margin auto centre technique at bigger screen sizes -->

	<!-- just usual paragraph styling with some padding and margins -->
	<p class="c-little-blurb-before-news-forty-year-anniversary-desc">
		Metallica will celebrate its 40th anniversary with a pair of hometown shows for its fan club members, scheduled to take place Dec. 17 and 19 at San Francisco’s Chase Center. Each night will feature a different setlist, and tickets will be available for sale only to registered members of Metallica’s Fifth Member fan club through a lottery system. The shows, which mark the first time the band has returned to the home of the Golden State Warriors since performing with the San Francisco Symphony at its grand opening in September 2019, will be part of a four-day weekend honoring Metallica’s 40th year as a band.
	</p>

	<!-- end of paragraph styling with some padding and margins -->

	<!-- this button container uses display flex with a max width of 650 px and margin left and right of auto to centre the section, this with align items property we can have it a flex start to get the button to line up at the left side of the paragraph text -->
<div class="c-little-blurb-before-news-forty-year-anniversary-button-container h-flex">


	<!--- these buttons are reused throughout the website and have the same style that was done at the beginning of the project, they also have a hover state as well and the colour goes a slightly darker red with a position relative for the anchors to span the whole area of the button rather than just the link ---->
	<button class="c-button-mobile h-position ">

		<!-- just some styling on the links and the pseudo before/after techniques used on most links, so the user has access to the whole button -->
		
		<a href="tour.php" class="c-little-blurb-before-news-forty-year-anniversary-button-info">
			More Tour Dates
		</a>

		<!-- end of the styling of the links within the button and the before/after pseudo technique to access the whole button space -->
	</button>

	<!--- end of buttons having the same style and a hover state with a position relative for the anchors to span the whole area of the button rather than just the link ---->
</div>

<!-- end of this display flex button container with a max width and align items flex end property -->
	</section>

	<!-- end of the back background colour -->

	<!-- END OF THE LITTLE BLURB SECTION -->


<!---- end of Metallica's anniversary section with the text being centred with margin left and right on auto, ------->


<!----this is the summary of the news section, kept to a max of three stories, it follows a similar layout to that of the full news page on, 'news.php'---->


<!-- just a semantic section class for the news data of the site, however there is a background image on the pseudo before part of this class-->

<!-- THE NEWS SECTION -->
	<section class="c-latest-news h-background-colour-our-black">


		<!-- just a heading class with the project styles and fonts and with different font sizes at different screen sizes -->
		<h1 class="c-latest-news-title h-mobile-title">Latest News</h1>

		<!-- end of heading class with the project styles and fonts and with different font sizes at different screen sizes -->

<!---this class down below is a utility class to keep the grid in a 1300px max container for the big screens ----->

		<div class="l-for-card-grid-columns-max-width-container">



		<!--- this class down below is the section grid column layout itself, this is for all the card type blocks like the music albums, the band photos and the news stories, this grid uses the auto-fit property with a minmax so it becomes responsive--->	


		<div class="l-the-card-grid h-grid">

	
		<?php

	

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$news_query = "SELECT * FROM news_table LIMIT 3";

 $data = mysqli_query($dbc, $news_query);

 while ($row = mysqli_fetch_array($data)){


 require($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/public/theLoops/theNewsLoops/newsStoriesWhileLoop.php"); 


} 


mysqli_close($dbc);
?>

</div>

<!----end of the auto-fit grid for the cards (images, album photos, stadium photos etc)----->


<!-- because we have a max width set on this via the utility class we can use display flex with flex-start to keep the button on left hand side of the section container  -->
<div class="c-latest-news-button-container h-flex">

	<!-- just the button design used throughout the site changes to a larger button on bigger screen sizes, with position relative to enable the link below to span the whole button width and height -->
	<button class="c-button-mobile h-position ">
		<!-- just some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX -->
		<a href="news.php" class="c-latest-news-info">
			more news
		</a>


		<!-- end of some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX  -->


	</button>
		<!-- end of the button design used throughout the site changes to a larger button on bigger screen sizes with position relative to enable the link to span the whole button width and height  -->
</div>
<!-- end of the display flex with flex-start to keep the button on left hand side of the section container -->

</div>

<!----end of utility layout class for max width ---->	

	</section>

	<!-- end of the semantic section for the news data -->
	<!-- END OF THE NEWS SECTION -->

	<!-- this class stands as the semantic progress to the upcoming shows section, it does have a grey background effect on it and the before pseudo class has a background strip on it -->

	<!-- THE TOUR SECTION -->

	<section class="c-upcoming-shows">

		<!-- the usual heading style with size changes at different screen sizes and margin and paddings -->
		<h1 class="c-upcoming-shows-title h-mobile-title">Upcoming Shows</h1>

		<!-- end of the usual heading style with size changes at different screen sizes and margin and paddings  -->

		<?php

	

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$tour_query = "SELECT * FROM Tour_table LIMIT 3";

 $data = mysqli_query($dbc, $tour_query);

 while ($row = mysqli_fetch_array($data)){ 



 		
require($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/public/theLoops/theTourLoops/tourDatesWhileLoop.php");

} 


mysqli_close($dbc);

?>




<!-- button container class here to centre the button using flex and some padding and margins -->
<div class="l-tour-albums-band-photos-button-container h-flex">
	<!-- just the button design used throughout the site changes to a larger button on bigger screen sizes, with position relative to enable the link to span the whole button width and height -->
	<button class="c-button-mobile c-button-mobile--large h-position">

		<!-- just some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX -->
		
		<a href="tour.php" class="l-tour-albums-band-photos-button-link">
			view more
		</a>

		<!-- end of some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX  -->
	</button>
	<!-- end of the button design used throughout the site changes to a larger button on bigger screen sizes with position relative to enable the link to span the whole button width and height  -->
</div>

<!-- end of button container class here to centre the button using flex and some padding and margins  -->

	</section>

	<!-- end of the semantic progress to the upcoming shows section, it does have a grey background effect on it and the before pseudo class has a background strip on it   -->

<!-- END OF THE TOUR SECTION -->



<!-- THE MUSIC SECTION -->

<!-- a helper class of background colour of black to change the colour tone from what came before and a pseudo before class for the background image strip that precedes it -->

	<section class="c-music h-background-colour-our-black">

		<!-- just the usual heading style for the site with different sizes for different screens and paddings -->

		<h1 class="c-music-title h-mobile-title">Music</h1>

		<!--  end of the usual heading style for the site with different sizes for different screens and paddings -->

	<!---this class down below is a utility class to keep the grid in a 1300px max container for the big screens ----->

		<div class="l-for-card-grid-columns-max-width-container">


<!--- this class down below is the section grid column layout itself, this is for all the card type blocks like the music albums, the band photos and the news stories--->	


		<div class="l-the-card-grid h-grid">
		


		

<?php

	

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$music_query = "SELECT * FROM music_table LIMIT 4";

 $data = mysqli_query($dbc, $music_query);

 while ($row = mysqli_fetch_array($data)){

 require($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/public/theLoops/theAlbumLoops/musicAlbumsWhileLoop.php");
 	  	
 } 


mysqli_close($dbc);
?>

</div>
<!-- end of the layout auto-fit grid -->






<!-- button container class here to centre the button using flex and some padding and margins -->
<div class="l-tour-albums-band-photos-button-container h-flex">
	<!-- just the button design used throughout the site changes to a larger button on bigger screen sizes, with position relative to enable the link to span the whole button width and height -->
	<button class="c-button-mobile c-button-mobile--large h-position">

		<!-- just some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX -->
		
		<a href="music.php" class="l-tour-albums-band-photos-button-link">
			view more
		</a>

		<!-- end of some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX  -->
	</button>
	<!-- end of the button design used throughout the site changes to a larger button on bigger screen sizes with position relative to enable the link to span the whole button width and height  -->
</div>

<!-- end of button container class here to centre the button using flex and some padding and margins  -->

</div>

<!----end of utility layout class for max width ---->	


		

	</section>

	<!-- end of a background colour of black to change the colour tone from what came before and a pseudo before class for the background image strip that precedes it -->

	<!-- END OF THE MUSIC SECTION -->

	<!-- Basically a semantic class with a background strip image on the before pseudo tag -->

	<!-- THE BAND PHOTOS SECTION -->

	<section class="c-bands-photos">

			<!-- just the usual heading style for the site with different sizes for different screens and paddings -->
		
		<h1 class="c-bands-photos-title h-mobile-title">Photos
			

		</h1>

			<!--  end of the usual heading style for the site with different sizes for different screens and paddings -->



<!---this class down below is a utility class to keep the grid in a 1300px max container for the big screens ----->

		<div class="l-for-card-grid-columns-max-width-container">

	

<!--- this class down below is the section grid column layout itself, this is for all the card type blocks like the music albums, the band photos and the news stories--->	


		<div class="l-the-card-grid h-grid">

	


<?php

	

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$photo_query = "SELECT * FROM photo_table limit 4";

 $data = mysqli_query($dbc, $photo_query);

 while ($row = mysqli_fetch_array($data)){ 


 	require($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/public/theLoops/theBandPhotoLoops/bandPhotosWhileLoop.php");

 	
 	 } 


mysqli_close($dbc);
?>

</div>

<!-- end of the class that is for all the card type blocks like the music albums, the band photos and the news stories  -->






<!-- button container class here to centre the button using flex and some padding and margins -->
<div class="l-tour-albums-band-photos-button-container h-flex">
	<!-- just the button design used throughout the site changes to a larger button on bigger screen sizes, with position relative to enable the link to span the whole button width and height -->
	<button class="c-button-mobile c-button-mobile--large h-position">

		<!-- just some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX -->
		
		<a href="photos.php" class="l-tour-albums-band-photos-button-link">
			view more
		</a>

		<!-- end of some style changes on this anchor link and the pseudo technique to enable the whole button square to be clickable for a better UX  -->
	</button>
	<!-- end of the button design used throughout the site changes to a larger button on bigger screen sizes with position relative to enable the link to span the whole button width and height  -->
</div>

<!-- end of button container class here to centre the button using flex and some padding and margins  -->

</div>


	</section>

<!-- end of the semantic section class with the background strip on the before pseudo element  -->

<!-- END OF THE BAND PHOTO SECTION -->






<?php

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");


?>



</div>
<!-- end of the row layout grid for the home page -->
</body>
</html>











