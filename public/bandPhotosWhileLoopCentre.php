<!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden---->
 	<article class="h-overflowH">

 	
 		<!-- just a div container to keep all the content and This class keeps the height auto  -->
 		<div class="h-height-auto">

 				<!-- this utility class proves important for the auto-fit style grid when there is no content.  We need to explicitly set the height and width on these images for the auto-fit to work properly.  The reason being at default these are small images so there is a lot of empty space between them so to mitigate that we put on explicit heights and width - 300px height and 600px width seems to do it with no media queries, it also has a margin 0 and auto to centre the image in the space available and a helper of padding left to right of 1em to help with the responsiveness 
    -->
 	  	<img class="l-image-set-for-auto-fit-grid h-margin-centre h-padding-left-to-right" src="../img/<?php echo $row['img_ref']?>" />

 		<!-- end of explicitly set the height and width on these images for the auto-fit to work, 300px height and 600px width seems to do it with no media queries and the end of margin 0 and auto to centre the image in the space available and end of a helper of padding left to right of 1em to help with the responsiveness    -->



 	 <!-- a semantic container to hold the text in with vertical padding and a helper class of text align centre -->
 	  	<div class="c-bands-photos-text-container h-text-align ">
 	  		 <!--- this class changes the font size of the dates at different screen sizes --->
 	  		<div class="c-bands-photos-text-container-date"><?php echo $row['date']?>
 	  	</div>

 	  	<!-- end of the changes the font size of the dates at different screen sizes -->
 	  	<!-- this class has our red colour and the fancy font with it, it also changes the font size at different screen sizes -->
 	  	<div class="c-bands-photos-location"> <?php echo $row['state_country']?> </div>
 	  	<!-- end of this class that has our red colour and the fancy font with it, it also changes the font size at different screen sizes --> 

		</div>

		<!-- end of a semantic container to hold the text in with vertical padding and a helper class of text align centre -->
 	 
 	
 </div>
 <!-- end of div container and the height auto to keep all the content in  -->
</article>
		<!-- end of our helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden -->
		