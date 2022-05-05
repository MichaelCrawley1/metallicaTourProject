<?php



session_start();


require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/errorReporting/developmentErrorReporting.php");

$locate_file = "/metallicaTourProject/admin/logIn/admin.php";

if(!isset($_SESSION['admin'])){

	header("Location: http://".$_SERVER['HTTP_HOST'].$locate_file);


}


?>


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

     <!-- this is a further change on the admin grid to accommodate the edit form in the middle of the page, THIS IS IMPORTANT, THIS IS THAT INTERMIEDARY PAGE, THE SECOND PAGE WITH THE CARD GRID AND THE FORM AS ONE, NOTHING IN THE ADMIN SECTION IS LIKE THIS  -->

     <!--  BEST SERVED AS A BLANK GRID with min-height 100vw -->

        <div class="l-basic-grid-admin-edit-tNMP h-grid">
        	<?php

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractHeader.php");

?>


<!-- this class below is for all the items that are deleted and edited through the admin panel, be it; a tour date, a news story, a band photo or a album. -->

<!-- this class through the use of flexbox helps to centre the content, it has a position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<!-- also a helper class to take out the padding so the background spans the whole page -->



<section class="c-admin-editAndDelete-item h-flex h-position h-no-padding">

<!----reusable component icon to go back a page this is in the base section of the scss----->
  <!-- because the parent is position relative we have a position absolute on this of top, left and right of 0 to make the icon align at the top left hand side of the page  -->


	
    <div class="c-back-page-icon-container">

       <!-- just an increase size on this svg to make it look better -->
        
        <img src="/metallicaTourProject/img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <!-- end of size change on the svg -->
         <!-- destination to go back a page with pseudo before technique to give mobile users more click space -->
        <a href="editNewsStorySelect.php" class="c-back-page-icon-link"></a>
         <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>
  <!-- end of position absolute -->
<!----end of reusable component----->





<?php 

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

if(isset($_GET['newsID'])){
$_SESSION['editNewsStoryInfo'] ['newsID'] =$_GET['newsID'];


}




if(!isset($_SESSION ['editNewsStoryInfo'] ['date']) &&  !isset($_SESSION ['editNewsStoryInfo'] ['title']) &&  !isset($_SESSION ['editNewsStoryInfo'] ['description'])){

	$editNewsStory_sql="SELECT * FROM News_table WHERE id=".$_GET['newsID'];
$editNewsStory_query= mysqli_query($dbc, $editNewsStory_sql);
$editNewsStory_rs= mysqli_fetch_array($editNewsStory_query);



$_SESSION['editNewsStoryInfo']['date'] = $editNewsStory_rs['date'];
$_SESSION['editNewsStoryInfo']['title'] = $editNewsStory_rs['title'];
$_SESSION['editNewsStoryInfo']['description'] = $editNewsStory_rs['description'];
$_SESSION['editNewsStoryInfo']['img'] = $editNewsStory_rs['img_ref'];
}

?>

<!-- THE NEWS SECTION -->

<!-- just a semantic section class for the news data of the site-->


<!-- a helper class to take off the background image strip divider that is present in the home page -->


<section class="c-latest-news  h-take-background-strip-off-pseudo-before-element">




<!-- heading style of all admin delete and edit items titles, different font sizes at different screens and a helper of text align centre to centre the text  -->


<h1 class="c-admin-editAndDelete-item-title h-text-align">Edit News Story Below:</h1>

<!-- end of heading style of all admin delete and edit items titles, different font sizes at different screens and a helper of text align centre to centre the text  -->


<!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden---->
  <article class="h-overflowH">

 

  <!---This class below does nothing except overrides a previous height attribute (if needed), was just used as a parent class in case it was needed for a flex or a  grid child ---->

    <div class="h-height-auto">
    <!-- this helps the auto fit via a height on the image and a object fit cover so not to lose any aspect ratio, it also has a margin 0 and auto to centre the image in the space available and a helper of padding left to right of 1em to help with the responsiveness  -->
      <img src="/metallicaTourProject/img/<?php echo $_SESSION['editNewsStoryInfo']['img'];?>" class="c-latest-news-articles-photo-img h-margin-centre h-padding-left-to-right"/>
      <!---end of img class with height and object fit cover and with margin auto to centre for the conformation screen and a helper of padding left to right of 1em to help with the responsiveness---->
    </div>

    <!--- end of height auto class---->

    <!---this class aligns the latest news text through padding also with a helper class to centre the text as it is the confirmation screen---->
    <div class="c-latest-news-articles-text-container h-text-align">

    <!--- this class changes the font size of the dates at different screen sizes --->
        <div class="c-latest-news-articles-date"><?php echo $_SESSION['editNewsStoryInfo']['date'];?>
      
    </div>

    <!---- end of font size change ---->


     <!----this class changes the font size and the colour to our red ---> 
      <h3 class=c-latest-news-sub-title><?php echo $_SESSION['editNewsStoryInfo']['title'];?></h3>

            <!---- end of font size change and colour to our red ---->

         <!----keep the default base paragraph width as it helps with the centring of the text when it is a stand alone item on the confirm page, also we have a margin centre, just to get the paragraph to behave, this is the same technique the images use----->

      <p class=" h-margin-centre"><?php echo $_SESSION['editNewsStoryInfo']['description'];?> </p>

      <!----end of the default base paragraph width as it helps with the centring of the text when it is a stand alone item on the confirm page also we have a margin centre, just to get the paragraph to behave, this is the same technique the images use---->

   
   </div>

   <!---end of the latest news text align through padding and a helper class of text- align centre to centre the text because it is the confirmation screen---->

  
 </article>

  <!----end of helper class for overflow hidden---->









 	  </section>



<!-- end of the semantic section for the news data -->

<!-- end of the  helper class to take off the background image strip divider that is present in the home page -->



<!-- END OF THE NEWS SECTION -->


</section>

<!-- end of this class through the use of flexbox helps to centre the content, with position relative on it to aid the back icon below it to position itself on the left hand side of this section's corner otherwise it would go to very top of the browser -->

<!--  end of this class below is for all the items that are deleted and edited through the admin panel, be it; a tour date, a news story, a band photo or a album.  -->


<!-- THIS SECTION IS WHERE THE EDIT AND ADD SHOULD BE THE SAME -->





<!-- this section uses flex to centre the items -->

<section class="c-admin-addAndEdit-item-form-section h-flex h-position">


<!----while this is a new section to take advantage of the new grid layout, the form itself is a reusable component of that of the form design in the add new tour section--->


<!-- usual design for headings used throughout, just that the font size is smaller -->

<h1 class="c-admin-addAndEdit-item-form-title">Edit via form</h1>

<!-- end of the usual design for headings used throughout, just that the font size is smaller -->


<!-- THE EDIT FORM -->

<!-- a semantic form class -->



<form action="editNewsStoryInfoConfirm.php" method="post" class="c-admin-addAndEdit-item-dates-form h-padding">

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
<p class="c-admin-addAndEdit-item-dates-desc">Add a date: 
   <!-- some margins and font size changes at different screen sizes  -->
  <input type="date" name="date" value="<?php echo $_SESSION['editNewsStoryInfo']['date'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required />
<!-- end of some margins and font size changes at different screen sizes -->

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->


<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
<p class="c-admin-addAndEdit-item-dates-desc">Add a title: 
  <!-- some margins and font size changes at different screen sizes  -->
  <input type="text" name="title" value="<?php echo $_SESSION['editNewsStoryInfo']['title'];?>" size="40"
maxlength="50" class="c-admin-addAndEdit-item-dates-input" required  />
<!-- end of some margins and font size changes at different screen sizes -->

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

<p class="c-admin-addAndEdit-item-dates-desc">Add a description about the news: 

  <!-- some margins and font size changes at different screen sizes  -->
  <textarea name="description" cols=60 rows=5 size="40"
 class="c-admin-addAndEdit-item-dates-input" required  ><?php echo $_SESSION['editNewsStoryInfo']['description'];?></textarea>

 <!-- end of some margins and font size changes at different screen sizes -->

</p>
<!-- end of capitalize with some margins and font size changes at different screen sizes   -->



<!-- this class is to centre the button -->
<div class="c-admin-addAndEdit-item-dates-submit-button-container h-flex">

  <!--- these buttons are reused throughout the website and have the same style that was done at the beginning of the project, they also have a hover state as well and the colour goes a slightly darker red with a position relative for the anchors to span the whole area of the button rather than just the link, however no anchors needed for the form ---->
  <!-- also a helper class to make the text uppercase -->
<button class="c-button-mobile c-button-mobile--large h-uppercase" type="submit" name="Update"  >Update News Story</button>

<!--- end of buttons having the same style and a hover state with a position relative for the anchors to span the whole area of the button rather than just the link however no anchors needed for the form ---->

<!-- end of the helper class making the text uppercase -->
</div>

<!-- end of class to centre the button -->
</form>


<!-- end of the semantic form class -->

<!-- END OF THE EDIT FORM -->


<?php

if (isset($_GET['signup'])){

  $correctForm = $_GET['signup'];

  if ($correctForm == "char"){?>

    <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
      <p class="c-admin-addAndEdit-item-dates-desc h-font-size h-text-align">Entries must begin with letters for Title and description of News!</p>
      <!-- end of some margins and font size changes at different screen sizes -->


<?php
    
  }

}

  


?>

</section>
<!-- end of this section using flex to centre the items. -->








<?php

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");

?>




</div>
<!--  end of the further change on the admin grid to accommodate the edit form in the middle of the page THIS IS IMPORTANT, THIS IS THAT INTERMIEDARY PAGE, THE SECOND PAGE WITH THE CARD GRID AND THE FORM AS ONE, NOTHING IN THE ADMIN SECTION IS LIKE THIS,  BEST SERVED AS A BLANK GRID with min-height 100vw --> 
</body>
</html>

