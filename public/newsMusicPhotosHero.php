<!---- this section is for the mobile screens only, the only difference from the mobile size to the larger screen is there is no hero image here and the tour dates image is a different size---->


<!----this class is set to display none at bigger screen sizes (ipad) so the big screen section can take over---->

               <section class="c-small-screen">
<!-- this class sets the background image and centres it, (which is the grey coloured background) -->
                    <div class="c-small-screen-background">

     <!-- this class is the image container with flex to centre it -->
                         <div class="c-small-screen-image-container h-flex">
       <!-- this image class has different widths to keep the image
                              looking acceptable at different screen sizes also set to position relative for the pseudo::before anchor technique to work -->
                         <img src="../img/promo_tour.png" alt="image for tour dates" class="c-small-screen-tour-dates-img h-position">
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
                         <!-- this class sets the hero image (Metallica Face photo) for the big screen and centres it -->
<!-- MODIFIER HERE, PLEASE SEE CSS COMMENTS FOR WHAT THIS DOES OR WHAT IT IS FOR -->
                         <div class="c-big-screen-background-hero c-big-screen-background-hero--news-hero">
                              <!-- this class is important for the layout of the promo tours image (which acts as a button). It is set to display flex with flex direction column and an explicit height of 500px so we can use the, 'justify-content:flex-end;' property to move the image down to the bottom and, 'align-items: center;' to have the image at the bottom middle -->

                              <div class="c-big-screen-image-container h-flex">

                                   <!-- just a semantic anchor tag around the image that takes us to the tour page -->

                         <a href="tour.php" class="c-big-screen-tour-dates-img-link" >

                              <!-- width at different screen sizes to keep the tour dates image looking acceptable at different screen sizes -->
                              <img src="../img/promo_tour.png" alt="image for tour dates" class="c-big-screen-tour-dates-img">
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
