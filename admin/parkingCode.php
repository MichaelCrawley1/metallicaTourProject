<?php


if(!isset($_SESSION ['editNewsStoryInfo'] ['date']) &&  !isset($_SESSION ['editNewsStoryInfo'] ['title']) &&  !isset($_SESSION ['editNewsStoryInfo'] ['description']) && !isset($_SESSION ['editNewsStoryInfo'] ['img'])){


$_SESSION['editNewsStoryInfo']['date']=$editNewsStory_rs['date'];
$_SESSION['editNewsStoryInfo']['title']=$editNewsStory_rs['title'];
$_SESSION['editNewsStoryInfo']['description']=$editNewsStory_rs['description'];
$_SESSION['editNewsStoryInfo']['img'] = $editNewsStory_rs['img_ref'];

}

else {

if($_SESSION['editNewsStoryInfo']['img']!=$editNewsStory_rs['img_ref']){

		unlink("img/".$_SESSION['editNewsStoryInfo']['img']);
}
}


?>

<h1 class="bottom">Enter details for the updated news Information</h1>

<p><a href="admin.php">Back To admin</a></p>

<form method="post" action="editNewsStoryInfoConfirm.php" enctype="multipart/form-data">

	<p>Edit the date: <input type="date" name="date" value="<?php echo $_SESSION ['editNewsStoryInfo']['date'];?>" /> </p>
	<p>Edit the title: <input type="text" name="title" value="<?php echo $_SESSION ['editNewsStoryInfo']['title'];?>" /> </p>
	<p>Edit the description about the news: <textarea name="description" cols=60 rows=5 ><?php echo $_SESSION ['editNewsStoryInfo']['description'];?></textarea> </p>
	<p>Change the image: <input type="file" name="fileToUpload"  id="fileToUpload" value="<?php echo $_SESSION ['editNewsStoryInfo']['img'];?>" > </p>


<input type="submit" name="submit" value="Update" />


</form>


