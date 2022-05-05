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

        <!-- this grid is all rows but less rows than the home page. -->

        <div class="l-basic-grid-tour-page h-grid">
        	<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractHeader.php");

?>

  <!-- this class stands as the semantic element to the upcoming shows section, it does have a grey background effect on it and the before pseudo class has a background strip on it, we have an amendment class on here to take out the pseudo class effect, it is not needed here -->

<!-- THE TOUR SECTION -->

<!-- a helper class to take off the background image strip divider that is present in the home page -->


	<section class="c-upcoming-shows h-take-background-strip-off-pseudo-before-element">

		<!-- the usual heading style with size changes at different screen sizes and margin and paddings -->
		<h1 class="c-upcoming-shows-title h-mobile-title">Upcoming Shows</h1>

		<!-- end of the usual heading style with size changes at different screen sizes and margin and paddings  -->

  
		<!-- this is the hero image for the tour page -->
		<div class="c-upcoming-shows-hero h-flex">

			
			

		</div>

		<!-- end of hero image for the tour page -->
	</section>

<!--- end of an amendment class on here to take out the pseudo class effect ---->

		


<!-- same section class as what came before to match the design from the home page -->


<section class="c-upcoming-shows">
		
	





		
<?php

	

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$tour_query = "SELECT * FROM Tour_table";

 $data = mysqli_query($dbc, $tour_query);

 while ($row = mysqli_fetch_array($data)){ 

 			
require($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/public/theLoops/theTourLoops/tourDatesWhileLoop.php");

} 


mysqli_close($dbc);
?>
	
</section>

<!--  end of same section class as what came before to match the design from the home page -->

<?php 
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");
?>










</div>
<!-- end of the grid layout and this grid layout is less than the home page this grid is all rows -->
</body>
</html>




	






