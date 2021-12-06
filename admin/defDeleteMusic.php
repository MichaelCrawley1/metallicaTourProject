<?php



session_start();

if(!isset($_SESSION['admin'])){

	header("Location:admin.php");
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


<?php
require_once ("header.php");
require_once ("../connect_database.php");

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

 $delMusic_sql = "DELETE FROM music_table WHERE id=".$_GET['musicID'];
 $delMusic_query= mysqli_query($dbc,$delMusic_sql);


?>

<!---this is going to be a reusable component as all the confirmation screens will follow the same style --->

<section class="c-admin-confirmation-page h-flex">

<h1 class="c-admin-confirmation-page-title">The Music Album has successfully been Deleted!!!!!</h1>

<!----button component ---->
<button class="c-button-mobile c-button-mobile--large h-position"><a class="c-admin-confirmation-page-links" href="admin.php">Return to admin</a></button>

<!----end of button component, but links are a different class --->

</section>

<!---- end of reusable component----->

<?php
require_once ("../abstractFooter.php");

?>




 






</div>
</body>
</html>




