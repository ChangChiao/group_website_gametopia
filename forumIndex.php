<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">		
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/forumIndex.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery-canvas-sparkles.js"></script>
	<script src="js/forumIndex.js"></script>
	<!-- <script src="js/header.js"></script> -->
 	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>討論區首頁</title>
</head>
<body>
	<?php 
		error_reporting(E_ALL || ~E_NOTICE);
		include('function/header.php');
		include('function/memberBarSwitcher.php')
	?>
		
	<div class="formsSct">
		<form action="forum.php" id="f-ps">
			<input type="hidden" name="platform" value="ps">
		</form>
		<form action="forum.php" id="f-xbox">
			<input type="hidden" name="platform" value="xbox">
		</form>
		<form action="forum.php" id="f-wii">
			<input type="hidden" name="platform" value="wii">
		</form>
		<form action="forum.php" id="f-pc">
			<input type="hidden" name="platform" value="pc">
		</form>
		<form action="forum.php" id="f-handheld">
			<input type="hidden" name="platform" value="handheld">
		</form>
		<form action="forum.php" id="f-mobile">
			<input type="hidden" name="platform" value="mobile">
		</form>
	</div>
	
	<div class="titlebox">
		<span class="forumtitleword">討論區<span class="titleEnword">Forum</span></span>
		<div class="forumtitle"></div>
	</div>
	<div class="container">

		<img class="consoleImg" src="images/ps4.png">
		<div class="btnsBox">
			<button class="optionBar ps default" id="default" form="f-ps"><img class="btnicons" src="images/ps.png" alt="">Playstation</button>
			<button class="optionBar handheld" form="f-handheld"><img class="btnicons" src="images/han.png" alt="">Handheld</button>
			<button class="optionBar mobile" form="f-mobile"><img class="btnicons" src="images/phone.png" alt="">Mobile</button>
			<button class="optionBar xbox" form="f-xbox"><img class="btnicons" src="images/xbox.png" alt="">XBOX</button>
			<button class="optionBar wii" form="f-wii"><img class="btnicons" src="images/wii-u-logo.png" alt=""> Wii</button>
			<button class="optionBar pc" form="f-pc"><img class="btnicons" src="images/computer.png" alt="">PC</button>
		</div>
	</div>
<?php 

	include("function/footer.php");

?>	
</body>

</html>