<!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden---->
 	<article class="h-overflowH">

 

 	<!---This class below does nothing except overrides a previous height attribute (if needed), was just used as a parent class in case it was needed for a flex or a  grid child ---->

 	  <div class="h-height-auto">
 	  <!-- this helps the auto fit via a height on the image and a object fit cover so not to lose any aspect ratio, it also has a margin 0 and auto to centre the image in the space available and a helper of padding left to right of 1em to help with the responsiveness  -->
 	  	<img src="../img/<?php echo $row['img_ref']?>" class="c-latest-news-articles-photo-img h-margin-centre h-padding-left-to-right"/>
 	  	<!---end of img class with height and object fit cover and with margin auto to centre for the conformation screen and a helper of padding left to right of 1em to help with the responsiveness---->
 	  </div>

 	  <!--- end of height auto class---->

 	  <!---this class aligns the latest news text through padding also with a helper class to centre the text as it is the confirmation screen---->
 	  <div class="c-latest-news-articles-text-container h-text-align">

 	  <!--- this class changes the font size of the dates at different screen sizes --->
 	  		<div class="c-latest-news-articles-date"><?php echo $row['date']?>
 	  	
 	  </div>

 	  <!---- end of font size change ---->


 	   <!----this class changes the font size and the colour to our red ---> 
 	  	<h3 class=c-latest-news-sub-title><?php echo $row['title']?></h3>

            <!---- end of font size change and colour to our red ---->

         <!----keep the default base paragraph width as it helps with the centring of the text when it is a stand alone item on the confirm page----->

 	  	<p><?php echo $row['description']?> </p>

 	  	<!----end of the default base paragraph width as it helps with the centring of the text when it is a stand alone item on the confirm page---->

 	 
 	 </div>

 	 <!---end of the latest news text align through padding and a helper class of text- align centre to centre the text because it is the confirmation screen---->

 	
 </article>

	<!----end of helper class for overflow hidden---->
