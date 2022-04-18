<?php


session_start();

require_once ("../errorReporting/developmentErrorReporting.php");





if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
}

if(!isset($_POST['submit'])){

    header("Location:admin.php");
  exit();
}


else{

    $_SESSION['addMusic']['img']= "noimage.png";


if(empty($_SESSION['addMusic']['img'])) {

    header("Location:addMusicAlbums.php?signup=empty");

    exit();

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
<script src="../js/ajaxUnlinkImage.js" defer></script>
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
        <!-- JAVASCRIPT FUNCTIONALITY:  here we make the pseudo before technique link a js component because we disable this way back out of the page navigation, compelling the user to use the options in the middle of the page be it a successful image upload or not.  This is prevent unused images getting mistakenly uploaded to the image folder  -->
        <a href="addMusicAlbums.php" class="c-js-back-page-icon-link"></a>

        <!-- end of JAVASCRIPT FUNCTIONALITY  -->
         <!-- end of the pseudo before technique to give mobile users more click space  -->
    </div>
<!-- end of position absolute -->
<!----end of reusable component----->




<?php

function displayErrorMessage($message) {?>

     <!-- same style for the headings that appear through most of the site, just a slightly different font size -->
<h1 class="c-admin-confirm-addDeleteOrEdit-to-db-title">Sorry, cannot do</h1>


<!-- end of same style for the headings that appear through most of the site, just a slightly different font size  -->


<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

    <p class="c-admin-addAndEdit-item-dates-desc"><?php echo "$message" ?></p>

    <!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<?php




}

function uploadErrorMessageWithNoHeading($message) {?>

    
<!-- this class is set to capitalize with some margins and font size changes at different screen sizes -->

    <p class="c-admin-addAndEdit-item-dates-desc"><?php echo "$message" ?></p>

    <!-- end of capitalize with some margins and font size changes at different screen sizes   -->

<?php




}


function instructionsOnWhereToGo($backAPage){?>

<!-- CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->

<!--- this section will serve as a reusable component as this option design is in the penultimate page of all the other sections of the website too---->

<!-- just a semantic container with a margin top to separate the content -->



    <div class="c-admin-confirm-addDeleteOrEdit-to-db-container h-flex h-padding">

<!-- no text here on our paragraph element, that is done by the links, it is just to colour the separator our red -->
<p class="c-admin-confirm-addDeleteOrEdit-to-db-desc">

    <!-- these links take out their decoration but colour the text our white -->
      <a class="c-admin-confirm-addDeleteOrEdit-to-db-links" href="<?php echo $backAPage; ?>">Ooops, go back</a>
      <!-- end of colour the text our white-->

       | 
       <!-- these links take out their decoration but colour the text our white -->
       <a class="c-admin-confirm-addDeleteOrEdit-to-db-links" href="admin.php">Back to admin panel</a>
        <!-- end of colour the text our white-->
    </p>
    <!-- end of no text here, that is done by the links, it is just to colour the separator our red   -->
</div>

<!-- end of the semantic container with a margin top to separate the content -->

<!---end of a reusable component as this option design is in the penultimate page of all the other sections of the website too ---->

<!-- END OF CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->

<?php

}


function successMessage($correctCont, $wrongGoBack){?>

     <!-- same style for the headings that appear through most of the site, just a slightly different font size -->
  <h1 class="c-admin-confirm-addDeleteOrEdit-to-db-title">Confirm Items Details</h1>
  <!-- end of same style for the headings that appear through most of the site, just a slightly different font size -->

  <!---this helper class below is for the card design elements like the band photos, the news stories and the music albums to keep the overflow hidden---->
    <article class="h-overflowH">

 

    <!---This class below does nothing except overrides a previous height attribute (if needed), was just used as a parent class in case it was needed for a flex or a  grid child ---->

      <div class="h-height-auto">
      <!-- this helps the auto fit via a height on the image and a object fit cover so not to lose any aspect ratio, also we have a helper class in here to centre the image when it is just one item in the auto-grid and a helper of padding left to right of 1em to help with the responsiveness -->
        <img src="../img/<?php echo $_SESSION['addMusic']['img']; ?>" class="c-latest-news-articles-photo-img h-margin-centre h-padding-left-to-right"/>
        <!---end of img class with height and object fit cover also the end of a helper class in here to centre the image when it is just one item in the auto-grid and a helper of padding left to right of 1em to help with the responsiveness---->
      </div>

      

    
 </article>

    <!----end of helper class for overflow hidden---->


 
<!-- CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->

<!--- this section will serve as a reusable component as this option design is in the penultimate page of all the other sections of the website too---->

<!-- just a semantic container with a margin top to separate the content -->



    <div class="c-admin-confirm-addDeleteOrEdit-to-db-container h-flex ">

<!-- no text here on our paragraph element, that is done by the links, it is just to colour the separator our red -->
<p class="c-admin-confirm-addDeleteOrEdit-to-db-desc">

    <!-- these links take out their decoration but colour the text our white -->
    
    <a href="<?php echo $correctCont?>" class="c-admin-confirm-addDeleteOrEdit-to-db-links">Correct, continue</a>
    | 
    <!-- end of colour the text our white-->

      <!-- these links take out their decoration but colour the text our white -->

     
      <!-- JAVASCRIPT FUNCTIONALITY: this class below is a javascript component because we use an Ajax call to dynamically unlink the image when the go back button or return to admin is pressed, this is to prevent the image getting uploaded to the image folder accidentally, therefore making it free to be used again  -->
      <a class="c-js-admin-confirm-addDeleteOrEdit-to-db-links" href="<?php echo $wrongGoBack?>">Ooops, go back </a>
      <!-- END OF JAVASCRIPT FUNCTIONALITY -->
      <!-- end of colour the text our white-->
      
       | 
       <!-- these links take out their decoration but colour the text our white -->
        <!-- JAVASCRIPT FUNCTIONALITY: this class below is a javascript component because we use an Ajax call to dynamically unlink the image when the go back button or return to admin is pressed, this is to prevent the image getting uploaded to the image folder accidentally, therefore making it free to be used again  -->
       <a class="c-js-admin-confirm-addDeleteOrEdit-to-db-links" href="admin.php">Back to admin panel</a>
        <!-- END OF JAVASCRIPT FUNCTIONALITY -->
        <!-- end of colour the text our white-->
    </p>
    <!-- end of no text here, that is done by the links, it is just to colour the separator our red   -->
</div>

<!-- end of the semantic container with a margin top to separate the content -->

<!---end of a reusable component as this option design is in the penultimate page of all the other sections of the website too ---->

<!-- END OF CONFIRM ADD ITEM OR DELETE OR EDIT TO DATABASE SECTION -->

<?php

}

// set the superglobal file name variables.

$imageName = $_FILES["fileToUpload"]["name"];
$imageFileType = "";
$imageSize = $_FILES["fileToUpload"]["size"];
$imageTempFile = $_FILES["fileToUpload"]["tmp_name"];
 

// we need this variable to be global as it acts as a flag for the successful image uploads or not
global $uploadOk;

$uploadOk = 0;



// image upload button is pressed first before the submit button, so the logic is this comes first in the if statement order.  
if($imageName!=""){

     $_SESSION['addMusic']['img'] = $imageName;

     // this is the whole file path e.g race-ur-self1.jpg in the session
     
   

    $target_dir = "../img/";
    // as it says ../img/
    $target_file = $target_dir . basename($imageName);
    // the same as the session up above the base name, not the directory so e.g race-ur-self1.jpg but it is prepended with the directory.   

    
    $uploadOk = 1;
    
    // 1 is successful image upload.
    
    
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // this function means string to lower case with the paramaters of what target file to examine and what details to leave of it, this time it is just the extention, so the jpg, png, gif, basically all the MIME types
    
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = exif_imagetype($imageTempFile);
   

    // the notes on the php site say not to use the getimagesize()  function to check if it is a valid image because it says non images may still get counted as images.  However it didn't stop W3schools because that is exactly what they are doing.  exif_imagetype() is much faster. exif_imagetype has an array of 18 image types and if it doesn't fit that number then it returns false and therefore it doesn't work. 
    

    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {

    

        
        $uploadOk = 0;
       

        // this ends this program here so the other if conditions don't get computed.  
    }
}
// this ends the isset POST Submit if and else statement.  The first If statement is still opened.

// this array and subsequent for each loop below is really just a bit of syntax sugar on my part.  I done this because this image uploading code is taken from the source, "w3schools" url here = https://www.w3schools.com/php/php_file_upload.asp.  There is too many nested if statements for my liking and feels like bad code orientation.  Given my lack of expertise at the moment for refactoring, I tried my best.  I checked for solutions from Stack overflow but didn't really find anything.  So I decided that if I can't abstract the conditions away into separate functions, perhaps I can compartmentalise them in another way.  Hence this solution below.  Really it is just the continuation of the many if conditions we have to look for when a user uploads an image to the database, however the difference is I have managed to take at least three if conditions (checking for same file, checking if said file is too big and seeing if it is the correct image file type) out of the parent beginning If statement to make it easier to read and for fellow developers to follow and then subsequently amend if need be.  The break in each of the if conditions in the for each loop enables the behaviour to be same as the original W3school code.  It is just compartmentalised better, in my humble opinion.    


$imageUploadSituations = array(
    'duplicateFile' => $target_file,
    'tooBig' => $imageSize,
    'wrongFile' => $imageFileType);




function threeRemainingIfConditionsCheck($associatedArrayImageUpload){

 global $uploadOk;
foreach($associatedArrayImageUpload as $key => $messageResponse){

  

    if (file_exists($associatedArrayImageUpload["duplicateFile"])) {

   
    
     displayErrorMessage("File already exists!");




     $uploadOk = 0;
     
     
   
     break;

}


    
    if ($associatedArrayImageUpload["tooBig"] > 500000 && $associatedArrayImageUpload["wrongFile"] != "jpg" && $associatedArrayImageUpload["wrongFile"] != "png" && $associatedArrayImageUpload["wrongFile"] != "jpeg"
&& $associatedArrayImageUpload["wrongFile"] != "gif" ){

    displayErrorMessage("Sorry file size is too big and we only accept file types of; JPG, JPEG, PNG & GIF");

    $uploadOk = 0;

   
    break;

    
}

else if($associatedArrayImageUpload["tooBig"] > 500000){

     displayErrorMessage("Sorry, your file is too large.  It needs to be smaller than 500KB!");
    $uploadOk = 0;
    
    break;

}

else if($associatedArrayImageUpload["wrongFile"]!= "jpg" && $associatedArrayImageUpload["wrongFile"]!= "png" && $associatedArrayImageUpload["wrongFile"]!= "jpeg"
&& $associatedArrayImageUpload["wrongFile"]!= "gif" ) {

     
    displayErrorMessage("Sorry, only file types; JPG, JPEG, PNG & GIF are allowed.");   
    $uploadOk = 0;
     
    break;
}





}
 return $uploadOk;
}

// this if statement below calls the function up above and we can see it returns 0, so just to keep the flow of the code going we just confirm that if it does return 0 via the value of the variable $uploadOk we reconfirm that value with the  variable $uploadOk is 0, so the error handing with the functions down below continue to compute.


if(threeRemainingIfConditionsCheck($imageUploadSituations) == 0){

    $uploadOk = 0;

}



// end of the for each compartmentalisation of the three if conditions (checking for same file, checking if said file is too big and seeing if it is the correct image file type).


// Check file size

// Allow certain file formats



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

uploadErrorMessageWithNoHeading("File was not uploaded.");
instructionsOnWhereToGo("addMusicAlbums.php");

} 


// if everything is ok, try to upload file
else if (move_uploaded_file($imageTempFile, $target_file)) {
        
  successMessage("enterNewMusicAlbum.php", "addMusicAlbums.php");

    } 

else {

     

 displayErrorMessage("Sorry, there was an error uploading your file."); 
 instructionsOnWhereToGo("addMusicAlbums.php");     


    }
}

//end of the opening if statement where it checks the veracity of the imageName



// the code below only runs if no image is selected
  

else {

$_SESSION['addMusic']['img'] = "noimage.png";
successMessage("enterNewMusicAlbum.php", "addMusicAlbums.php");


}


?>




</section>

<!-- end of this class sets the content bang in the middle of the page vertically and horizontally, the grid set at the beginning has a 100vh height on the main content therefore we can use flex's align items and justify content to centre the page -->



<?php
require_once ("../abstractFooter.php");

?>


 
 	



</div>

<!-- end of grid that is less rows than the home page -->
</body>
</html>