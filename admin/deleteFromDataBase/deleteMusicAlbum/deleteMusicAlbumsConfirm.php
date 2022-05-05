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

        <!-- this is the admin grid as it has less rows than the home page -->

        <div class="l-basic-grid-admin-and-c-panel h-grid">
        	<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractHeader.php");

?>

<!--  this class helps to centre the text with flexbox, firstly horizontally centred at mobile sized screens then horizontally and vertically centred at bigger screens thereafter, it also has a position relative for the back icon that comes after There are notes in the css file to explain when these classes are used -->

<section class="c-admin-confirm-addDeleteOrEdit-to-db h-flex h-position">

  <!----reusable component icon to go back a page this is in the base section of the scss----->
  <!-- because the parent is position relative we have a position absolute on this of top, left and right of 0 to make the icon align at the top left hand side of the page  -->

    <div class="c-back-page-icon-container">
        <!-- just an increase size on this svg to make it look better -->
        <img src="/metallicaTourProject/img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
         <!-- end of size change on the svg -->

          <!-- destination to go back a page with pseudo before technique to give mobile users more click space -->
        <a href="delMusicAlbums.php" class="c-back-page-icon-link"></a>

         <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>
   <!-- end of position absolute -->
<!----end of reusable component----->

<!-- heading style of all confirm delete items titles, different font sizes at diffferent screens  -->

<h1 class="c-admin-confirm-addDeleteOrEdit-to-db-title">Confirm Music Album Deletion</h1>

<!-- end of heading style of all admin delete items titles, different font sizes at diffferent screens  -->



<!-- THE MUSIC SECTION -->

<!-- a helper class to take off the background image strip divider that is present in the home page -->

<section class="c-music h-take-background-strip-off-pseudo-before-element">







<?php 

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

$delMusic_sql="SELECT * FROM music_table WHERE id=".$_GET['musicID'];

$delMusic_query= mysqli_query($dbc, $delMusic_sql)
or die('Error querying database.');
$row = mysqli_fetch_array($delMusic_query);


require($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/public/theLoops/theAlbumLoops/musicAlbumsWhileLoopCentre.php");



?>

</section>
<!-- end of the semantic section for the music albums -->

<!--end of a helper class to take off the background image strip divider that is present in the home page -->

<!-- END OF THE MUSIC SECTION -->


<!-- CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->

<!--- this section will serve as a reusable component as this option design is in the penultimate page of all the other sections of the website too---->

<!-- just a semantic container with a margin top to separate the content -->

<!-- with a helper flex to centre the content -->




<div class="c-admin-confirm-addDeleteOrEdit-to-db-container h-flex">

<!-- no text here, that is done by the links, it is just to colour the separator our red -->
<p class="c-admin-confirm-addDeleteOrEdit-to-db-desc">

<!-- these links take out their decoration but colour the text our white -->
  <a class="c-admin-confirm-addDeleteOrEdit-to-db-links" href="defDeleteMusic.php?musicID=<?php echo $_GET['musicID'];?>">Yes, delete it!</a>
 <!-- end of colour the text our white-->

  <!-- these links take out their decoration but colour the text our white -->

   |


<a href="delMusicAlbums.php" class="c-admin-confirm-addDeleteOrEdit-to-db-links">No, go back</a>
<!-- end of colour the text our white-->

  <!-- these links take out their decoration but colour the text our white -->

 | <a href="/metallicaTourProject/admin/logIn/admin.php" class="c-admin-confirm-addDeleteOrEdit-to-db-links">Back to control panel</a>
 <!-- end of colour the text our white-->
</p>
<!-- end of no text here, that is done by the links, it is just to colour the separator our red   -->
</div>

<!-- end of helper flex to centre the content -->

<!-- end of the semantic container with a margin top to separate the content -->

<!---end of a reusable component as this option design is in the penultimate page of all the other sections of the website too ---->

<!-- END OF CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->
</section>


<!-- end of this class to help to centre the text with flexbox, firstly horizontally centred at mobile sized screens then horizontally and vertically centred at bigger screens thereafter, it also has a position relative for the back icon that comes after -->

<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");

?>


</div>

<!-- end of the admin 3 row grid -->
</body>
</html>





