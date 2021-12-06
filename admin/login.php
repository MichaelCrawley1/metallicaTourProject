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

<section class="c-login h-flex">
<h1 class="c-login-admin-warning">For Admin/Webmasters Only!</h1>
<h1 class="c-login-title">Login</h1>

<form name="login" method="post" action="admin.php" class="c-login-form ">
<p class="c-login-form-desc">Username is admin: <input name="username" type="text" maxlength=30 class="c-login-form-input" /> </p>
<p class="c-login-form-desc">Password is admin: <input name="password" type="text" maxlength=30  class="c-login-form-input" /> </p>

<?php 

if(isset($_POST['login']) && !isset($_SESSION['admin'])){
	?>
	<p class="c-login-form-desc"><span class="c-login-form-desc-error">Incorrect username or password</span></p>
	<?php
}


?>


<p class="c-login-form-desc"><input type="submit" name="login" value="Submit" class="c-login-form-input-button  c-button-mobile c-button-mobile--large" /></p>
</form>
</section>

<?php
require_once ("../abstractFooter.php");

?>

</div>
</body>
</html>