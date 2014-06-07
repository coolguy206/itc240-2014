<?php

include('password.php');
include('functions.php');

?>
<!doctype html>
<html>

<head>
<title>Assignment 8</title>
<style>
body {
	background:url('http://wfiles.brothersoft.com/j/jackie_chan_50617-1600x1200.jpg');
	background-repeat: no-repeat;
	background-position: top right;
	background-attachment: fixed;
	background-size: 80%;
	font-family: arial;
}
.wrapper {
	width: 960px;
	padding: 10px;
	margin: auto;
}
iframe {
	width: 460px;
	height: 300px;;
	border: none;
}
.single iframe {
	width: 700px;
	height: 460px;
}
a {
	text-decoration: none;
	color: red;
}
a:hover, a:focus {
	color: green;
}
</style>
</head>

<body>
	<div class="wrapper">
		<h1>Jackie Chan's Greatest Fight Scenes!!!</h1>
<?php 

$id = request('id');
if($id) {
$result = get_jackie_by_id();

foreach($result as $row) { ?>	


<div class="single">
<h2><?= sanatize($row['title']); ?></h2>
<iframe src="//www.youtube.com/embed/<?= sanatize($row['video']); ?>" allowfullscreen></iframe>
<P>
<?= sanatize($row['description']); ?>
</p>
<a href="http://itc240.no-ip.org/~dthanp02/itc240-2014/assignment-8/index.php">Back to list</a>
</div>

<?php } 

} else { 

$results = get_jackie();

foreach($results as $row ){ ?>

<div>
<h2><a href="?id=<?= sanatize($row['id']); ?>"><?= sanatize($row['title']); ?></a></h2>
<iframe src="//www.youtube.com/embed/<?= sanatize($row['video']); ?>" allowfullscreen></iframe>
<P>
<?= sanatize($row['description']); ?>
</p>
</div>

<?php } 

} ?>



	</div>
</body>
</html>