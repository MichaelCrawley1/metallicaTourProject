<!-- The header class doesn't actually do anything except keep the html code semantic here -->

<header class="c-mobile-style-and-menu-system ">
       <!----this class is set to display none at bigger screen sizes so the big screen nav section can take over, this is the mobile nav hamburger UI layout(logo on one side, hamburger on the other) before the user clicks on the icon---->
            <section class="c-mobile-menu ">
                <!-- this class sets the background image and centres it, (which is the grey coloured background) also sets the small horizontal grid for the logo and mobile hamburger to go to -->
                <div class="c-mobile-menu-background h-grid">
    <!-- this class keeps the Metallica logo at an acceptable size for the small screens and uses a margin to position it properly -->
                <div class="c-mobile-menu-logo-container">
                    <!-- img class to manipulate the image is not needed here -->
                    <img src="../img/logo-homepage.svg" alt="Metallica's logo" class="c-mobile-menu-logo-img">
                    <!-- end of the image class -->
                    
                </div>
    <!-- end of the logo size for small screens and margin position -->

    <!-- this is an important class below as it aligns the hamburger with the logo with both at the far end of the block left to right. With being one of the child's of the header section grid it can use the 'justify-self: end' grid property to place the hamburger at the other side away from the logo.  The reason it is called a fat fingers class is when we use the anchor:: before or after technique we can make the border section bigger for users on their mobile so it definitely clicks for them.  There is a position relative on this to position the element and so the anchor pseudo technique can work.  This class is also the javscript class where the click event is on, which manipulates the body layout with a body layout class -->
                <div class="c-js-mobile-menu-hamburger-for-fat-fingers">
                <!-- this is the anchor pseudo technique, it has a z:index on it so that the javascript does work, notice it doesn't have a destination, that behaviour is done with javascript -->
                <a href="#" class="c-mobile-menu-hamburger-link">
                        <!-- the image class here is just its default behaviour at the base section of the css -->
                        <img src="../img/HamburgerMobileMenu.svg" alt="a hamburger svg icon" class="c-mobile-menu-hamburger-svg">
                        <!-- end of the image class -->
                    </a>
                    <!-- end of the pseudo technique for mobile users to experience the functionality of the menu system -->
            </div>
                <!-- end of the aligning the hamburger at the far end of the section and the javascript behaviour and the position relative for the anchor pseudo technique to work -->

            </div>

 <!-- end of the mobile logo and hamburger grid -->



            
                </section>

<!-- end of the mobile nav hamburger layout  -->


    
    

    <!--- the code below is the fixed screen when the mobile hamburger is clicked, this swaps the hamburger icon with an, 'X' icon with the mobile menu system ---->

             

<!-- this section class below is where the magic happens, relatively simple to create but a great effect.  The secret lies in the position fixed and then top, left, right, bottom of 0, then height set to 100vh (to cover the whole screen), then to bring the menu into play we use translate to manipulate the X axis (horizontal axis).  We make it a 100% on default (so it is out of view on the right) and then we put a transition on it, so when we manipulate the state of the body via javascript (when  the hamburger is clicked) we make this class's translate X axis 0% to bring it back into view, with a z:index so the original grid that it is covering cannot use any of its functionality   -->
        <section class="c-fixed-mobile-screen">
            <!-- no class use here, just a semantic nav tag -->
            <nav class="c-fixed-mobile-screen-nav-menu">
                <!-- this is an important class, this is the grid that the fixed mobile screen section uses.  The important properties here are the 7 row grid and the height set to 100vh (height: inherit doesn't work with grids) to match the fixed section, there are a few font style and size option in here to to style the content that comes next.  The columns are two: one of 250px (the mobile menu ) and the red blended background as the second column, so when the user scrolls up and down there is a nice blended effect of the underlying  website's page as the background-->
                <ul class="c-fixed-mobile-screen-nav-menu-list h-grid">
                    <!-- this is strange why I had to use a grid on the list items, but it is a similar thing to flex-box.  If you want to centre the text horizontally or vertically you have to make the child items of the overall grid a grid too.  This gives you access to the full box height and width (sort of like default grid template columns and rows of 1FR unit) then we can align the content the way we want.  If we do not put on a grid on the child items we will lose the height and width and therefore with align-self we can only centre the text but lose the background, even making the list item display block doesn't do anything.  One final note, This is the 250px column (out of the two columns) of the UL grid  -->
                    <li class="c-fixed-mobile-screen-nav-menu-list-item h-grid h-position">

                        <!-- ok this is the, "X" that the javascript exit click event happens, since it is a child of the Li grid we can use the jusitfy-self: end; property to get it the far end of the little 250px block.  Then with a little bit of positioning we can put it exactly where we want to correspond as close as we can to the hamburger icon that it replaces when the user clicks on the hamburger -->
                        <div class="c-js-fixed-mobile-screen-hamburger-exit-container">
                            <!-- again no destination with this anchor tag, the reason being it is just a technique to create more border space for the mobile user in case their fingers misses in pressing the X icon.  It use the pseudo before or after technique used throughout this project.  Javascript provides the behaviour on this from the parent above. Interestingly we have a Z;index on this to keep it over the destination links below, so the user functionality works the way it is suppose to-->
                            <a href="#" class="c-fixed-mobile-screen-hamburger-exit-container-link">
                                <!-- use just a bigger width here to make the icon look better and to correspond with the size of the hamburger icon that it replaced.  Use svg's here so we don't lose any aspect ratio no matter how big or small we make it -->
                                <img src="../img/mobileHamburgerClose.svg" alt="and x mark to get back to menu screen" class="c-fixed-mobile-screen-exit-svg">
                                <!-- end of bigger width on the svg here -->
                            </a>
                            <!-- end of the pseudo technique to create more border space for the mobile user with a Z:index on it to keep it over the destination links below -->
                        </div>
                        <!-- end of the , "X" that the javascript exit click event happens  -->

                        <!-- below are the anchors that take the user to the destination around the site, they have no text decoration and are set to the project's red colour.  These also use the BBC website pseudo technique to make the whole 250px block clickable just in case the user misses the link text, it doesn't have z:index on them so this first link is, 'under' the closing X icon of the mobile menu (that does use a z:index on it) -->

                        <a href="project.php" id="c-fixed-home" class="c-fixed-mobile-screen-list-item-links ">Home</a>
                        <!-- end of the first destination link of the mobile menu with the pseudo technique -->
                    </li>
                    <!-- end of the li grid to align centre the list items -->
                    <!-- see comments for what this class does on first list item  -->
                    <li class="c-fixed-mobile-screen-nav-menu-list-item h-grid h-position">
                        
                        <!-- see comments for the destination anchor links under the first list item -->
                        <a href="aboutus.php" class="c-fixed-mobile-screen-list-item-links">about us</a>
                        <!-- end of the second destination link of the mobile menu with the pseudo technique -->


                    </li>
                      <!-- end of the li grid to align centre the list items for second list item -->

                      <!-- see comments for what this class does on first list item  -->
                    <li class="c-fixed-mobile-screen-nav-menu-list-item h-grid h-position">
                          <!-- see comments for the destination anchor links under the first list item -->
                        <a href="tour.php" class="c-fixed-mobile-screen-list-item-links">tour</a>
                           <!-- end of the third destination link of the mobile menu with the pseudo technique -->

                    </li>

                     <!-- end of the li grid to align centre the list items for third list item -->
                    
                      <!-- see comments for what this class does on first list item  -->
                    <li class="c-fixed-mobile-screen-nav-menu-list-item h-grid h-position ">
                          <!-- see comments for the destination anchor links under the first list item -->
                        <a href="news.php" class="c-fixed-mobile-screen-list-item-links">news</a>

                         <!-- end of the fourth destination link of the mobile menu with the pseudo technique -->

                    </li>

                     <!-- end of the li grid to align centre the list items for fourth list item -->
                    
                      <!-- see comments for what this class does on first list item  -->
                   
                    <li class="c-fixed-mobile-screen-nav-menu-list-item h-grid h-position  ">
                         <!-- see comments for the destination anchor links under the first list item -->

                        <a href="music.php" class="c-fixed-mobile-screen-list-item-links">music</a>

                          <!-- end of the fifth destination link of the mobile menu with the pseudo technique -->

                    </li>

                      <!-- end of the li grid to align centre the list items for fifth list item -->
                    
                      <!-- see comments for what this class does on first list item  -->
                     
                    <li class="c-fixed-mobile-screen-nav-menu-list-item h-grid h-position ">

                         <!-- see comments for the destination anchor links under the first list item -->

                        <a href="photos.php" class="c-fixed-mobile-screen-list-item-links">photos</a>

                          <!-- end of the sixth destination link of the mobile menu with the pseudo technique -->

                    </li>

                     <!-- end of the li grid to align centre the list items for sixth list item -->
                    
                      <!-- see comments for what this class does on first list item  -->
<!-- MODIFIER HERE, PLEASE SEE CSS COMMENTS FOR WHAT THIS DOES OR WHAT IT IS FOR -->
                    <li class="c-fixed-mobile-screen-nav-menu-list-item h-grid c-fixed-mobile-screen-nav-menu-list-item--no-border h-position ">


                         <!-- see comments for the destination anchor links under the first list item -->


                        <a href="../admin/admin.php" class="c-fixed-mobile-screen-list-item-links">admin</a>

                          <!-- end of the seventh destination link of the mobile menu with the pseudo technique -->


                    </li>

                    <!-- end of the li grid to align centre the list items for sixth list item -->
                    <!-- END OF MODIFIER  -->
                     <!-- END OF THE GRID TO ALIGN CENTRE THE LIST ITEMS AND END OF THE ORIGINAL 250PX COLUMN SECTION OF THE UL GRID  -->
                    



                     <!-- this is the 1FR column section of the original UL grid (two column grid) it spans the whole VH and it has a linear gradient on our background colour red -->
                    <div class="c-fixed-mobile-screen-background-red"></div>
                    <!-- end of the 1FR column section of the original grid -->
                </ul>
        <!-- end of the grid for this fixed section 2 columns and 7 rows with a 100vh -->

            </nav>
            
            <!-- end of semantic nav tag -->


        </section>

<!---end of mobile screen menu system with position fixed once hamburger is clicked --->


<!-- this is the big screen layout section of the header section.  This replaces the mobile screen at ipad screen sizes.  It replaces the hamburger mobile menu layout with a more traditional web menu based layout.  The first class down below is set to display none as default until the ipad screen size comes into play then it is display block. -->
        <section class="c-big-screen">
            <!-- these two classes below are taken for the mobile menu because nothing changes here, this is the still the little horizontal grid though for the background-->
            <div class="c-mobile-menu-background h-grid">
                <!-- same as the mobile menu, just that there are more media queries to keep the logo size relevant with the bigger screens -->
                <div class="c-mobile-menu-logo-container">
                    <!-- just a default image class, the container does all the size changes -->
                    <img src="../img/logo-homepage.svg" alt="Metallica's logo" class="c-mobile-menu-logo-img">
                    <!-- end of default image class -->
                    
                </div>

                <!-- end of the image container with the logo increasing size at bigger screen sizes -->


<!-- this class acts as one of the child's to the little horizontal grid (not the fixed mobile grid).  Therefore we can position it with the grid-column property (grid-column) and align-self: end property -->
            <div class="c-big-screen-nav-container">
                <!-- just a semantic nav tag -->
                <nav class="c-big-screen-nav">
                    <!-- traditional desk top menus I find are easily done by display flex, that is what is done here with a little horizontal padding, style and positioning  -->
                    <ul class="c-big-screen-nav-list h-flex">
                        <!-- just a little horizontal padding here -->
                        <li class="c-big-screen-nav-list-item">
                            <!-- big screen page links with some style requirements -->
                            <a href="project.php" id="c-fixed-home" class="c-big-screen-list-item-links ">Home </a>
                            <!-- end of big screen page links with some style requirements -->
                        </li>
                        <!-- end of the horizontal padding -->
                        <!-- just a little horizontal padding here -->
                        <li class="c-big-screen-nav-list-item">
                             <!-- big screen page links with some style requirements --><a href="aboutus.php" class="c-big-screen-list-item-links">About Us</a>
                              <!-- end of big screen page links with some style requirements -->
                         </li>
                          <!-- end of the horizontal padding -->
                        <!-- just a little horizontal padding here -->
                        <li class="c-big-screen-nav-list-item">
                              <!-- big screen page links with some style requirements -->
                            <a href="tour.php" class="c-big-screen-list-item-links">Tour</a>
                            <!-- end of big screen page links with some style requirements -->

                        </li>
                            <!-- end of the horizontal padding -->
                        <!-- just a little horizontal padding here -->
                        <li class="c-big-screen-nav-list-item">
                             <!-- big screen page links with some style requirements -->
                            <a href="news.php" class="c-big-screen-list-item-links">News</a>
                             <!-- end of big screen page links with some style requirements -->
                        </li>
                         <!-- end of the horizontal padding -->
                        <!-- just a little horizontal padding here -->
                        <li class="c-big-screen-nav-list-item">
                             <!-- big screen page links with some style requirements -->
                            <a href="music.php" class="c-big-screen-list-item-links">Music</a>
                            <!-- end of big screen page links with some style requirements -->
                        </li>
                         <!-- end of the horizontal padding -->
                        <!-- just a little horizontal padding here -->
                        <li class="c-big-screen-nav-list-item">
                              <!-- big screen page links with some style requirements -->
                            <a href="photos.php" class="c-big-screen-list-item-links">Photos</a>
                             <!-- end of big screen page links with some style requirements -->


                        </li>
                         <!-- end of the horizontal padding -->
                        <!-- just a little horizontal padding here -->
                        <li class="c-big-screen-nav-list-item">
                            <!-- big screen page links with some style requirements -->
                            <a href="../admin/admin.php" class="c-big-screen-list-item-links">Admin</a>
                             <!-- end of big screen page links with some style requirements -->
                        </li>
                         <!-- end of the horizontal padding -->
                        <!-- just a little horizontal padding here -->
                    </ul>
                    <!-- end of the traditional desk top menu with flex -->
                </nav>
                <!-- end of the semantic nav tag -->
            </div>
            <!-- end of the big screen nav layout being one of the grid children of the horizontal grid, end of properties grid-column and align-self -->
            </div>
            <!-- end of the grey header background and the grey column layout same as the mobile layout with the grid -->


        </section>

<!-- end of the big screen nav menu system that comes in at around ipad screen sizes. -->


      </header>

      <!-- end of semantic header class -->