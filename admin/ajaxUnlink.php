<?php

session_start();

require_once ("../errorReporting/developmentErrorReporting.php");



if (!isset($_SESSION['addMusic']) || !isset($_SESSION['addNewsStory']) || !isset($_SESSION['addBandPhotos'])){

$_SESSION['addMusic']['img'] = "noimage.png";
$_SESSION['addNewsStory']['img']= "noimage.png";
$_SESSION['addBandPhotos']['img'] = "noimage.png";
}

else if($_SESSION['addMusic']['img']!="noimage.png" || $_SESSION['addNewsStory']['img'] !="noimage.png" || $_SESSION['addBandPhotos']['img']!="noimage.png" ){

    @unlink("../img/".$_SESSION['addMusic']['img']);
    @unlink("../img/".$_SESSION['addNewsStory']['img']);
    @unlink("../img/".$_SESSION['addBandPhotos']['img']);
}



?>