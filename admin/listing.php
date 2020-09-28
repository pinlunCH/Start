<?php
session_start();
include("classes/Adb.php");
include("classes/User.php");
include("classes/Users.php");
include("../classes/Db.php");
include("../classes/App.php");
include("../classes/Allapps.php");
User::ifLogin();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Application -start();</title>
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@700&family=Source+Serif+Pro:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="ltwp">
	<div class="lsfont">List of applicants</div>
	<div class="listing">
		<div class="listheader">
			<div class="header">
				<span>Name</span>
			</div>
			<div class="header">
				<span>Email</span>
			</div>
			<div class="header">
				<span>Intro</span>
			</div>
			<div class="header">
				<span>Portfolio</span>
			</div>
			<div class="header">
				<span>Resume</span>
			</div>
		</div>
<?php
$app = Allapps::getAll();
foreach (Allapps::getAll() as $eachdata) {
	?>
		<div class="listrow">
			<div class="data" id="radiusa">
				<?=$eachdata->name?>
			</div>
			<div class="data">
				<?=$eachdata->email?>
			</div>
			<div class="data">
				<?=$eachdata->intro?>
			</div>
			<div class="data" id="radiusb">
				<a href="<?=$eachdata->pro?>"><img src="imgs/link.png"></a>
			</div>
			<div class="data" id="radiusb">
				<a href="../assets/<?=$eachdata->resume?>" target="_blank"><img src="imgs/download.png"></a>
			</div>
		</div>	
		<div class="edage"></div>
		<?php
	}
	?>
		<div class="edage"></div>
	</div>
</div>

</body>
</html>