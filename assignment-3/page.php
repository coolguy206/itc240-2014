<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Assignment 3</title>
<style>
* {
	margin: 0px;
	padding: 0px;
}
body {
	font-family:Arial, Helvetica, sans-serif;
	font-size: 1em;
	line-height: 1.5em;
}
h1, h2, h3 {
	margin-bottom: 20px;
}
.wrapper {
	width: 960px;
	padding: 10px;
	margin: auto;
}
ul {
	list-style-type: none;
	overflow: hidden;
}
li {
	overflow: hidden;
	margin-bottom: 20px;
}
.image {
	width: 380px;
	float: left;
	margin-right: 20px;
}
img {
	max-width: 100%;
}
.info {
	width: 540px;
	float: left;
}
</style>
</head>

<body>
<div class="wrapper">
<h1>Marvel Comic Heroes</h1>

<ul>

<?php 
foreach ($heroes as $hero) {
	include("list.php");
}
?>

</ul>
</div>
</body>

</html>
