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

        <div class="l-basic-grid-tour-page h-grid">
        	<?php
require_once ("../abstractHeader.php");

?>

  

<!----below is the component class section taken from the home page (product.php)this is getting reused here for the red title centred above image, with an image modifier to signify a different image for the TOUR page and a modifier on the title for better position.---->
  <section class="c-little-blurb-before-news">

		<h1 class="c-little-blurb-before-news-title h-mobile-title c-little-blurb-before-news-title--margin"> Tour</h1>
		
		<div class="c-little-blurb-before-news-img-container c-little-blurb-before-news-img-container--tour h-flex">

			
			

		</div>
	</section>

<!--- end of reusable component---->

		


<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the TOUR section (upcoming-shows), they only difference is that there are the maximum entries here for the TOUR, not limitied to three like in the home page (product.php), I have also taken out the heading, 'upcoming shows' from the home page,  bit overkill here.---->


<section class="c-upcoming-shows">
		
	





		
<?php

	

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$tour_query = "SELECT * FROM Tour_table";

 $data = mysqli_query($dbc, $tour_query);

 while ($row = mysqli_fetch_array($data)){ ?>

 		<article class="c-upcoming-shows-container h-flex">

 	  <div class="c-upcoming-shows-date">


 	   


 	  <span class="c-upcoming-shows-month"><?php echo  $row['date'] ?></span></div>
 	  <div class="c-upcoming-shows-venue-container"> <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title"><?php echo $row['venue'] ?></h3>
 	 		</div>
 	 	 <div class="c-upcoming-shows-location"> <?php echo $row['state_country']?> </div> 

 	 
 	 
 	
 </article>
 <?php 
		


 	} 


mysqli_close($dbc);
?>
	
</section>
<!--- end of reusable component---->


<?php 
require_once ("../abstractFooter.php");
?>










</div>
</body>
</html>




	






