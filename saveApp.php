<?php
session_start();
include("classes/Db.php");
Db::execute("INSERT INTO `applicants` (`id`, `strName`, `strEmail`, `introduction`, `portfolio`, `resume`) VALUES (NULL, ?, ?, ?, ?, ?)");
header("location:confirmation.php");
$arrFileTypes = array("pdf");
$check = pathinfo($_FILES["upfile"]["name"])["extension"];

if(in_array($check, $arrFileTypes ,TRUE)){
    $filename = $_FILES["upfile"]["name"];
   move_uploaded_file($_FILES["upfile"]["tmp_name"], "assets/".$filename);
} else {
	header("location:index.php?file=true");
}


