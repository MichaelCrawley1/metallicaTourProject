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

        if(!preg_match("/^[a-zA-Z]/", $_SESSION['addNewsStory']['title']) || !preg_match("/^[a-zA-Z]/", $_SESSION['addNewsStory']['description'])){

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


<!---this parent section comes from the, 'add tour' admin page, because stylistically, the layout is the same, for any modifications, that will be highlighted with a class specfic for its category, 'tour', 'news', 'photos' etc. ---->
        
<section class="c-admin-add-tour-dates h-flex h-position">


    <!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="addNewsDesAImage.php" class="c-back-page-icon-link"></a>
    </div>
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
    <h1 class="c-admin-add-tour-dates-title">Sorry, cannot do</h1>


    <p class="c-latest-news-blurb ">File already exists.</p>

<?php


    
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {?>

     <p class="c-latest-news-blurb">Sorry, your file is too large.  It needs to be smaller!</p>
<?php    
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {?>

     <p class="c-latest-news-blurb">Sorry, only file types; JPG, JPEG, PNG & GIF are allowed.</p>
<?php    
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {?>

    <p class="c-latest-news-blurb  ">File was not uploaded.</p>

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
</body>
</html>