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

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/errorReporting/developmentErrorReporting.php");

?>


<!-- this class has a margin bottom on it and some padding, it is also concerned about keeping the content centred when the screen gets bigger so at mobile sizes it centres from a horizontal perspective and then later on also a vertical perspective using flex.   -->

<section class="c-login h-flex">
  <!-- this class just has some fonts and styling like uppercase, is has a text-align centre at a mobile break point to align properly, its pseudo after property where the border bottom goes has a set width on small screens and a margin auto to centre until the screen gets bigger then flex takes over this process from the parent. -->
<h1 class="c-login-admin-warning">For Admin/Webmasters Only!</h1>
 <!--  end of this class just has some fonts and styling like uppercase, is has a text-align centre at a mobile break point to align properly, its pseudo after property where the border bottom goes has a set width on small screens and a margin auto to centre until the screen gets bigger then flex takes over this process from the parent. -->

 <!-- this class is the smaller heading underneath, the difference here it is in capitalize case and has a text declaration of underline with text align centre in it amongst other styles -->
<h1 class="c-login-title">Login</h1>

 <!--  end of this class being the smaller heading underneath, the difference here it is in capitalize case and has a text declaration of underline with text align centre in it amongst other styles -->


<!-- just a semantic form class -->
<form name="login" method="post" action="admin.php" class="c-login-form ">
  <!--just a semantic paragraph class -->
<p class="c-login-form-desc">Username is admin:

<!-- this class has a max width on it of 500px when the screen gets larger -->
 <input name="username" type="text" maxlength=30 class="c-login-form-input" /> 
<!--  end of this class has a max width on it of 500px when the screen gets larger -->

</p>

<!-- end of a the semantic paragraph class -->


<!--just a semantic paragraph class -->
<p class="c-login-form-desc">Password is admin: 

<!-- this class has a max width on it of 500px when the screen gets larger -->

  <input name="password" type="text" maxlength=30  class="c-login-form-input" />
<!--  end of this class has a max width on it of 500px when the screen gets larger -->


   </p>

   <!-- end of a the semantic paragraph class -->

<?php 

if(isset($_POST['login']) && !isset($_SESSION['admin'])){
	?>

  <!-- inherited styles for the normal form paragraphs -->
	<p class="c-login-form-desc"><span class="c-login-form-desc-error">Incorrect username or password</span></p>

  <!-- end of the inherited styles for the normal form paragraphs  -->
	<?php
}


?>

<!--just a semantic paragraph class -->
<p class="c-login-form-desc">

  <!-- log in button styles here with a width of 50% -->
  <input type="submit" name="login" value="Submit" class="c-login-form-input-button  c-button-mobile c-button-mobile--large" />
  <!-- end of log in button styles here with a width of 50% -->
</p>

<!-- end of just a semantic paragraph class -->
</form>

<!-- end of the form semantic class -->
</section>

<!--  end of this class with a margin bottom on it and some padding, it is also concerned about keeping the content centred when the screen gets bigger so at mobile sizes it centres from a horizontal perspective and then later on also a vertical perspective using flex.   -->

<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/abstractFooter.php");

?>

</div>

<!-- end of the grid being less rows than the public part of the website  -->
</body>
</html>