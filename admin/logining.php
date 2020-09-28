<?php
session_start();
include("classes/Adb.php");
include("classes/User.php");
include("classes/Users.php");
include("../classes/Db.php");
include("../classes/App.php");
include("../classes/Allapps.php");

$user = User::logining($_POST['strUsername'],$_POST['strPassword']);


if(!$user)
{
	header("location: index.php?error=true");
}else{
	$_SESSION["userid"] = $user["id"];
	header("location: listing.php");
}

?>