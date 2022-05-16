<!-- this is an interesting class, at mobile sizes it uses display flex as the default to centre the text but at bigger screen sizes it goes to max 1300px grid container with a three column grid with the third child, the, 'c-upcoming-shows-location' class at align-self end to stretch to the end of the page there is also a modifer to take out the bottom border on the last-child. -->

 	<article class="c-upcoming-shows-container c-upcoming-shows-container--last-child-bottom-border h-flex">

 		<!-- a semantic date class container -->

 	  <div class="c-upcoming-shows-date">


 	  	<!-- this span class holds all the style of the date, with font size and and uppercase style -->
 	  	 <span class="c-upcoming-shows-month"><?php echo  $row['date'] ?></span>

 	  	 <!-- end of the span class that holds all the style of the date, with font size and and uppercase style -->

 	  	</div>

 	  	<!-- end a semantic date class container -->

 	  	<!-- the usual style for our headings throughout this project with an added font size difference at different screen sizes -->

 	  <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title"><?php echo $row['venue'] ?></h3>
 	 		<!-- end of the usual style for our headings throughout this project with an added font size difference at different screen sizes  -->

 	 		<!-- as said on the article class for this section this class being one of the childs of the grid's 3 columns uses align-self: end; to go to the far end of the column of the right to stretch to the end of the page like the first child does for the other side, it has font size changes for different screen sizes too -->
 	 	 <div class="c-upcoming-shows-location"> <?php echo $row['state_country']?> </div>

 	 	 <!-- end of the align-self: end and font size changes for different screen sizes -->

 	 
</article>

 <!-- end of at mobile sizes it uses display flex as the default to centre the text but at bigger screen sizes it goes to max 1300px grid container with a three column grid, with the third child, the locations, at align-self end to stretch to the end of the page.  Also the end of a modifer to take out the bottom border on the last-child. -->