<!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden---->
 	<article class="h-overflowH">

 	

 			<!---This class keeps the height auto with a border red colour on the albums---->

 	  <div class="h-height-auto c-music-image-container-border-red">

 		<!-- this utility class proves important for the auto-fit style grid when there is no content.  We need to explicitly set the height and width on these images for the auto-fit to work properly.  The reason being at default these are small images so there is a lot of empty space between them so to mitigate that we put on explicit heights and width - 300px height and 600px width seems to do it with no media queries 
    -->
 	  	<img class="l-image-set-for-auto-fit-grid" src="/metallicaTourProject/img/<?php echo $row ['img_ref'];?>" />

 	  	<!-- end of explicitly set the height and width on these images for the auto-fit to work, 300px height and 600px width seems to do it with no media queries   -->


 		</div>

 		 <!--- end of height auto class and border red on the images---->
 </article>
 	  	
<!----end of helper class---->