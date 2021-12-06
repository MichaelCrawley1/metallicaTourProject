<?php


session_start();







if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
}

require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

if(!isset($_POST['Update'])){

  header("Location:admin.php");
  exit();
} 

else{

$_SESSION['editNewsStoryInfo']['date']= $_POST['date'];
$_SESSION['editNewsStoryInfo']['title']= $_POST['title'];
$_SESSION['editNewsStoryInfo']['description']= $_POST['description'];
$_SESSION['editNewsStoryInfo']['img'];



if(empty($_SESSION['editNewsStoryInfo'] ['date']) || empty($_SESSION['editNewsStoryInfo'] ['title']) || empty($_SESSION['editNewsStoryInfo'] ['description']) || empty($_SESSION['editNewsStoryInfo'] ['img'])) {

    header("Location:editNewsStoryInfo.php?signup=empty");

    exit();

}

  else {
 // check if input characters are valid//

        if(!preg_match("/^[a-zA-Z]/", $_SESSION['editNewsStoryInfo'] ['title']) || !preg_match("/^[a-zA-Z]/", $_SESSION['editNewsStoryInfo'] ['description'])){

         header("Location:editNewsStoryInfo.php?signup=char");
          exit();
        } 

      }
	
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
<link rel="Stylesheet" type="text/css" href="../css/main.css">
<script src="../js/mobileMenu.js" defer></script>
<meta charset = "utf-8">
</head>

<body>
	<!---html classes will be set up using the Block Element Modifier (BEM) styled system.  My method will involve letters with dashes (-) as a prefix to enabled the reader to understand if a section of code is a component or a layout element.  Glossary is displayed below:

        c- = this equals a component that is likely to get reused
        l- = this equals a class that acts as block layout like a reusable container for example
        h- = the h prefix is to signify helper classes like clearfix to get elements back in the html document flow
        js- = this is to signify when we need to use JavaScript on an block or a block element to bring in dynamic functionality.
        c-js- = will refer to both components and components that rely on JavaScript functionality
        c-mq- = could be for media queries.

        In addition, throughout this document there will be a comment that says, 'modifier here, please see css comments for what this does or what it is for'.  This way by using the find search tool provided by the editor we can quickly find the modifier we are looking for.  Might be an advantage to say for media queries too.
        ---->

        <div class="l-basic-grid-admin-and-c-panel h-grid">
        	<?php
require_once ("header.php");

?>


<!--- this is a reusable component from the tour edit section, because the layout is very similar---->
<section class="c-admin-confirm-add-tour h-flex h-position">

  <!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="editNewsStoryInfo.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->


<h1 class="c-admin-confirm-add-tour-title">Confirm Updated News Story</h1>
<section class="c-upcoming-shows c-admin-add-tour-dates-override-flex c-EDIT-news-story-before-change">






<article class="c-news-stories-DELETE-container c-EDIT-news-story ">

 	  <div class="c-news-stories-DELETE-container-for-anchor-cover c-EDIT-news-story-change-height">

 	  	<img class="c-news-stories-DELETE-img-itself c-EDIT-news-story-chnage-WH-on-img" src="../img/<?php echo $_SESSION['editNewsStoryInfo']['img'];?>" />
 	  	 

  <div class="c-news-stories-DELETE-info-container c-EDIT-news-story-get-center ">
  	 	  		<div class="c-news-stories-DELETE-date  "><?php echo $_SESSION['editNewsStoryInfo']['date'];?></div>

 	   <h3 class="c-latest-news-sub-title "><?php echo $_SESSION['editNewsStoryInfo']['title'];?>
</h3>
 	 		</div>
 	 		<div class="c-EDIT-news-story-get-center">
 	  <p class="c-news-stories-DELETE-desc  h-padding h-text-align"> <?php echo $_SESSION['editNewsStoryInfo']['description'];?>  </p> 
 	</div>
 	 </div>

 	

 	  </article>

 	  </section>

<!--- end of reusable component---->

</section>

<!--- this will serve as a reusable component as this option design is in the penutimate page of the other sections of the website too---->


<div class="c-admin-confirm-add-tour-desc-container h-flex">

<p class="c-admin-confirm-add-tour-desc"><a href="editNewsStoryInfoUpdate.php" class="c-admin-confirm-add-tour-desc-links">Correct, continue </a> |<a href="editNewsStoryInfo.php" class="c-admin-confirm-add-tour-desc-links"> Oops, go back</a> |<a href="admin.php" class="c-admin-confirm-add-tour-desc-links"> Back to admin</a></p>
</div>

<!---end of a reusabele component---->


</section>

<?php
require_once ("../abstractFooter.php");

?>




</div>
</body>
</html>