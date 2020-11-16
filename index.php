<?php require('functions.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header></header>
<body>
	<div class="wrapper">
		<div class="box" id="clickFill1" onclick="fill()"></div>
		<div class="box"  id="clickFill2" onclick="fill()"></div>
		<div class="box" id="clickFill3"  onclick="fill()"></div>
		<div class="box" id="clickFill4"  onclick="fill()"></div>
		<div class="box" id="clickFill5"  onclick="fill()"></div>
		<div class="box" id="clickFill6"  onclick="fill()"></div>
		<div class="box" id="clickFill7"  onclick="fill()"></div>
		<div class="box" id="clickFill8"  onclick="fill()"></div>
		<div class="box" id="clickFill9"  onclick="fill()"></div>
	</div>
	<button onclick="reset()">Reset</button>
	<button id="countButton"></button>
	<button>Turn</button>

	<div class="winnerBox">
		<h1 class="redWin">Red Team Wins</h1>
		<h1 class="green>Win">Green Team Wins</h1>
	</div>


</body>
<footer></footer>
</html>