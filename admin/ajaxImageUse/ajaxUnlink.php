<?php

session_start();

require_once ($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/errorReporting/developmentErrorReporting.php");



if (!isset($_SESSION['addMusic']) || !isset($_SESSION['addNewsStory']) || !isset($_SESSION['addBandPhotos'])){

$_SESSION['addMusic']['img'] = "noimage.png";
$_SESSION['addNewsStory']['img']= "noimage.png";
$_SESSION['addBandPhotos']['img'] = "noimage.png";
}

else if($_SESSION['addMusic']['img']!="noimage.png" || $_SESSION['addNewsStory']['img'] !="noimage.png" || $_SESSION['addBandPhotos']['img']!="noimage.png" ){

    @unlink($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/img/".$_SESSION['addMusic']['img']);
    @unlink($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/img/".$_SESSION['addNewsStory']['img']);
    @unlink($_SERVER['DOCUMENT_ROOT']."/metallicaTourProject/img/".$_SESSION['addBandPhotos']['img']);
}



?>