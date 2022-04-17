<!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden it also has a helper of position relative, this is so the pseudo bbc technique works on the anchor tags---->
 	<article class="h-overflowH h-position">

 	
 		<!-- just a div container to keep all the content in  -->
 		<div class="h-position">

 				<!-- this utility class proves important for the auto-fit style grid when there is no content.  We need to explicitly set the height and width on these images for the auto-fit to work properly.  The reason being at default these are small images so there is a lot of empty space between them so to mitigate that we put on explicit heights and width - 300px height and 600px width seems to do it with no media queries 
    -->
 	  	<img class="l-image-set-for-auto-fit-grid" src="../img/<?php echo $row['img_ref']?>" />

 		<!-- end of explicitly set the height and width on these images for the auto-fit to work, 300px height and 600px width seems to do it with no media queries   -->



 	 <!-- a semantic container to hold the text in with vertical padding -->
 	  	<div class="c-bands-photos-text-container ">
 	  		 <!--- this class changes the font size of the dates at different screen sizes --->
 	  		<div class="c-bands-photos-text-container-date"><?php echo $row['date']?>
 	  	</div>

 	  	<!-- end of the changes the font size of the dates at different screen sizes -->
 	  	<!-- this class has our red colour and the fancy font with it, it also changes the font size at different screen sizes -->
 	  	<div class="c-bands-photos-location"> <?php echo $row['state_country']?> </div>
 	  	<!-- end of this class that has our red colour and the fancy font with it, it also changes the font size at different screen sizes --> 

		</div>

		<!-- end of a semantic container to hold the text in with vertical padding -->


		 <!-- because the article class  has a helper position relative on it, we can use the bbc pseudo technique to select the whole row at to click to delete  -->
 	 <a class="c-admin-editAndDelete-item-links" href="deleteBandPhotosConfirm.php?photoID=<?php echo $row['id'];?>"> </a>
 	
 </div>
 <!-- end of div container to keep all the content in  -->
</article>
		<!-- end of our helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden also end of a helper of position relative, this is so the pseudo bbc technique works on the anchor tags -->
		