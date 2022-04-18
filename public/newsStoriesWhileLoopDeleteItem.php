<!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden, it also has a helper of position relative, this is so the pseudo bbc technique works on the anchor tags.---->
    <article class="h-overflowH h-position">

 

    <!---This class below does nothing except overrides a previous height attribute (if needed), was just used as a parent class in case it was needed for a flex or a  grid child ---->

      <div class="h-height-auto">
      <!-- this helps the auto fit via a height on the image and a object fit cover so not to lose any aspect ratio -->
        <img src="../img/<?php echo $row['img_ref']?>" class="c-latest-news-articles-photo-img"/>
        <!---end of img class with height and object fit cover---->
      </div>

      <!--- end of height auto class---->

      <!---this class aligns the latest news text through padding---->
      <div class="c-latest-news-articles-text-container">

      <!--- this class changes the font size of the dates at different screen sizes --->
            <div class="c-latest-news-articles-date"><?php echo $row['date']?>
        
      </div>

      <!---- end of font size change ---->


       <!----this class changes the font size and the colour to our red ---> 
        <h3 class=c-latest-news-sub-title><?php echo $row['title']?></h3>

            <!---- end of font size change and colour to our red ---->

         <!----this paragraph class overrides the max width on our base paragraphs to auto, this needed doing because with the grid auto fit property the max width of the paragraph was preventing it from working----->

        <p class="c-latest-news-blurb"><?php echo $row['description']?> </p>

        <!----end of the overriding paragraph width for grid auto-fit---->

     
     </div>

     <!---end of the latest news text align through padding---->

       <!-- because the article class  has a helper position relative on it, we can use the bbc pseudo technique to select the whole row at to click to delete  -->
         <a class="c-admin-editAndDelete-item-links" href="deleteNewsStoryConfirm.php?newsID=<?php echo $row['id'];?>"> </a>

          <!--  end of the bbc pseudo technique to select the whole row at to click to delete  -->
    
 </article>

    <!----end of helper class for overflow hidden and the helper of position relative, this is so the pseudo bbc technique works on the anchor tags.---->
