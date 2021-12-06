<?php



session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



// check to see if user is logged in.  If not, redirect to admin page

if(!isset($_SESSION['admin'])){

	header("Location:admin.php");


}

//check to see if user has submitted the add category form, this is to prevent a user just inputting the url.  


if(!isset($_POST['submit'])){

	header("Location:admin.php");
  exit();
}

else {



// set addTourDates sessions
$_SESSION['addTourDates']['tourDates'] = $_POST['tourDates'];
$_SESSION['addTourDates2']['venue'] = $_POST['venue'];
$_SESSION['addTourDates3']['state_country'] = $_POST['state_country'];


if(empty($_SESSION['addTourDates']['tourDates']) || empty($_SESSION['addTourDates2']['venue']) || empty($_SESSION['addTourDates3']['state_country'])) {

    header("Location:addTourDates.php?signup=empty");

    exit();

}

  else {
 // check if input characters are valid//

        if(!preg_match("/^[a-zA-Z]/", $_SESSION['addTourDates2']['venue']) || !preg_match("/^[a-zA-Z]/", $_SESSION['addTourDates3']['state_country'])){

          header("Location:addTourDates.php?signup=char");
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


<section class="c-admin-confirm-add-tour h-flex h-position">

  <!----reusable component icon to go back a page----->
    <div class="c-back-page-icon-container">
        
        <img src="../img/noun_back.svg" alt="please go back to the page behind" class="c-back-page-icon">
        <a href="addTourDates.php" class="c-back-page-icon-link"></a>
    </div>
<!----end of reusable component----->

<h1 class="c-admin-confirm-add-tour-title">Confirm Tour Dates New Information</h1>


<!----below is the component class section taken from the home page (product.php)this is getting reused to follow the same style display as the TOUR section (upcoming-shows) there is also a class taken from the add Tour dates page to override the flex to stretch the whole page---->


<section class="c-upcoming-shows c-admin-add-tour-dates-override-flex">


<article class="c-upcoming-shows-container h-flex">

 	  <div class="c-upcoming-shows-date">
<span class="c-upcoming-shows-month"><?php echo $_SESSION['addTourDates']['tourDates'];?></span></div>
<div class="c-upcoming-shows-venue-container"> <h3 class="c-upcoming-shows-venue-subtitle h-mobile-title"><?php echo $_SESSION['addTourDates2']['venue'];?></h3>
 	 		</div>
 	 	 <div class="c-upcoming-shows-location"> <?php echo $_SESSION['addTourDates3']['state_country'];?> </div> 

 	 
 	 </article>
 	</section>

 	<!--- end of reusable component---->


<!--- this will serve as a reusable component as this option design is in the penutimate page of the other sections of the website too---->

<div class="c-admin-confirm-add-tour-desc-container h-flex">
<p class="c-admin-confirm-add-tour-desc"><a href="enterTourDates.php" class="c-admin-confirm-add-tour-desc-links">Correct, continue</a>
	 | <a class="c-admin-confirm-add-tour-desc-links" href="addTourDates.php">Ooops, go back</a> | <a class="c-admin-confirm-add-tour-desc-links" href="admin.php">Back to admin panel</a>
	</p>
</div>

<!---end of a reusabele component, created here---->
</section>



<?php
require_once ("../abstractFooter.php");

?>



</div>






</body>
</html>




