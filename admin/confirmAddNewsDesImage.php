<?php


session_start();







if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
}

if(!isset($_POST['submit'])){

    header("Location:admin.php");
  exit();
}

else{


	$_SESSION['addNewsStory']['date']= $_POST['date'];
	$_SESSION['addNewsStory']['title']= $_POST['title'];
	$_SESSION['addNewsStory']['description']= $_POST['description'];
	$_SESSION['addNewsStory']['img']= "noimage.png";


if(empty($_SESSION['addNewsStory']['date']) || empty($_SESSION['addNewsStory']['title']) || empty($_SESSION['addNewsStory']['description']) || empty($_SESSION['addNewsStory']['img'])) {

    header("Location:addNewsDesAImage.php?signup=empty");

    exit();

}

  else {
 // check if input characters are valid//

        if(!preg_match("/^[a-zA-Z]/", $_SESSION['addNewsStory']['date']) ||   !preg_match("/^[a-zA-Z]/", $_SESSION['addNewsStory']['title']) || !preg_match("/^[a-zA-Z]/", $_SESSION['addNewsStory']['description'])){

          header("Location:addNewsDesAImage.php?signup=char");
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
require_once ("header.php");

?>


<!-- this class sets the content bang in the middle of the page vertically and horizontally, the grid set at the beginning has a 100vh height on the main content therefore we can use flex's align items and justify content to centre the page -->
        
<section class="c-admin-confirm-addDeleteOrEdit-to-db h-flex h-position">

<!----reusable component icon to go back a page this is in the base section of the scss----->
  <!-- because the parent is position relative we have a position absolute on this of top, left and right of 0 to make the icon align at the top left hand side of the page  -->

<div class="c-back-page-icon-container">
         <!-- just an increase size on this svg to make it look better -->
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">

          <!-- end of size change on the svg -->
        <!-- destination to go back a page with pseudo before technique to give mobile users more click space -->
        <a href="addNewsDesAImage.php" class="c-back-page-icon-link"></a>
          <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>
<!-- end of position absolute -->
<!----end of reusable component----->



<?php

if($_FILES["fileToUpload"]["name"]!=""){

	 $_SESSION['addNewsStory']['img'] = $_FILES["fileToUpload"]["name"];

	$target_dir = "../img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
?>
    <!-- same style for the headings that appear through most of the site, just a slightly different font size -->
<h1 class="c-admin-confirm-addDeleteOrEdit-to-db-title">Sorry, cannot do</h1>


<!-- end of same style for the headings that appear through most of the site, just a slightly different font size  -->


<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

    <p class="c-admin-addAndEdit-item-dates-desc">File already exists.</p>

    <!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<?php


    
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {?>


<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

    <p class="c-admin-addAndEdit-item-dates-desc">Sorry, your file is too large.  It needs to be smaller!</p>

    <!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<?php    
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {?>

    <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

    <p class="c-admin-addAndEdit-item-dates-desc">Sorry, only file types; JPG, JPEG, PNG & GIF are allowed.</p>

    <!-- end of capitalize with some margins and font size changes at different screen sizes   -->
<?php    
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {?>


     <!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->
     <p class="c-admin-addAndEdit-item-dates-desc">File was not uploaded.</p>

      <!-- end of capitalize with some margins and font size changes at different screen sizes   -->

    <div class="c-admin-confirm-add-tour-desc-container h-flex h-padding">
<p class="c-admin-confirm-add-tour-desc">
      <a class="c-admin-confirm-add-tour-desc-links" href="addNewsDesAImage.php">Ooops, go back</a> | <a class="c-admin-confirm-add-tour-desc-links" href="admin.php">Back to admin panel</a>
    </p>
</div>
<?php

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
  ?>

  
  <h1 class="c-admin-add-tour-dates-title">Confirm Items Details</h1>

  <article class="c-latest-news-articles h-flex h-padding c-latest-news-articles--for-confirm-add-news-story">


    <div class="c-latest-news-articles-text-container c-latest-news-articles-text-container--text-align">

        <div class="c-latest-news-articles-body">
            <div class="articles-date">Date: <?php echo $_SESSION['addNewsStory']['date']; ?>
        </div>
      </div>

        <h3 class=c-latest-news-sub-title>Title: <?php echo $_SESSION['addNewsStory']['title'];?> </h3>

        <p> Description: <?php echo $_SESSION['addNewsStory']['description']; ?>  </p>

      
     </div>

     <div class="c-latest-news-articles-photo-container">Image Ref:
        <img src="../img/<?php echo $_SESSION['addNewsStory']['img']; ?>" class="c-latest-news-articles-photo-img"/>
      </div>


  </article>

  
<!--- this will serve as a reusable component as this option design is in the penutimate page of the other sections of the website too---->

<div class="c-admin-confirm-add-tour-desc-container h-flex">
<p class="c-admin-confirm-add-tour-desc"><a href="enterNewsDesImage.php" class="c-admin-confirm-add-tour-desc-links">Correct, continue</a>
     | <a class="c-admin-confirm-add-tour-desc-links" href="addNewsDesAImage.php">Ooops, go back</a> | <a class="c-admin-confirm-add-tour-desc-links" href="admin.php">Back to admin panel</a>
    </p>
</div>

<!---end of a reusabele component, created here---->


  <?php  	



    } else {?>

         <p class="c-latest-news-blurb h-padding">Sorry, there was an error uploading your file</p>

         <!--- this will serve as a reusable component as this option design is in the penutimate page of the other sections of the website too---->

<div class="c-admin-confirm-add-tour-desc-container h-flex h-padding">
<p class="c-admin-confirm-add-tour-desc">
      <a class="c-admin-confirm-add-tour-desc-links" href="addNewsDesAImage.php">Ooops, go back</a> | <a class="c-admin-confirm-add-tour-desc-links" href="admin.php">Back to admin panel</a>
    </p>
</div>

<!---end of a reusabele component, created here---->
<?php       
    }
}
// the code below only runs if no image is selected
}  

else {

$_SESSION['addNewsStory']['img'] = "noimage.png";

?>
<article class="c-latest-news-articles h-flex h-padding">


    <div class="c-latest-news-articles-text-container">

        <div class="c-latest-news-articles-body">
            <div class="articles-date">Date: <?php echo $_SESSION['addNewsStory']['date']; ?>
        </div>
      </div>

        <h3 class=c-latest-news-sub-title>Title: <?php echo $_SESSION['addNewsStory']['title'];?> </h3>

        <p class="c-latest-news-blurb"> Description: <?php echo $_SESSION['addNewsStory']['description']; ?>  </p>

      
     </div>

     <div class="c-latest-news-articles-photo-container">Image Ref:
        <img src="../img/<?php echo $_SESSION['addNewsStory']['img']; ?>" class="c-latest-news-articles-photo-img"/>
      </div>



  </article>



<!--- this will serve as a reusable component as this option design is in the penutimate page of the other sections of the website too---->

<div class="c-admin-confirm-add-tour-desc-container h-flex">
<p class="c-admin-confirm-add-tour-desc"><a href="enterNewsDesImage.php" class="c-admin-confirm-add-tour-desc-links">Correct, continue</a>
     | <a class="c-admin-confirm-add-tour-desc-links" href="addNewsDesAImage.php">Ooops, go back</a> | <a class="c-admin-confirm-add-tour-desc-links" href="admin.php">Back to admin panel</a>
    </p>
</div>

<!---end of a reusabele component, created here---->






<?php
}


?>


</section>



<?php
require_once ("../abstractFooter.php");

?>

 
 	



</div>
<!-- end of grid that is less rows than the home page -->
</body>
</html>