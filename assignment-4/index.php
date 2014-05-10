<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Assignment 4</title>
<style>
table {
	margin: auto;
}
thead, th, td {
	border: 1px solid black;
	padding: 5px;
}
h1, h2 {
	text-align: center;
}
img {
	width: 200px;
}
</style>
</head>

<body>


<?php 

include('password.php');

$mysql = new mysqli("localhost", "dthanp02", $password, "dthanp02");

$prepared = $mysql->prepare('select * from sf4;');

if(isset($_REQUEST['sort'])){
if ($_REQUEST['sort'] == 'name') {
	$prepared = $mysql->prepare('select * from sf4 order by name ASC;');

} else if ($_REQUEST['sort'] == 'height') { 
	$prepared = $mysql->prepare('select * from sf4 order by height DESC;');

} else if ($_REQUEST['sort'] == 'weight') { 
	$prepared = $mysql->prepare('select * from sf4 order by weight ASC;');

}
}

$prepared->execute();

$results = $prepared->get_result();


?>

<table>
<thead>
<tr>
<th colspan="4"><img src="http://iplaywinner.com/storage/images/StreetFighterIV.jpg?__SQUARESPACE_CACHEVERSION=1252664496241" alt="Street Fighter IV"></th>
</tr>
</thead>
<thead>
	<tr>
		<th><a href="index.php?sort=name">Name</a></th>
		<th>Gender</th>
		<th><a href="index.php?sort=height">Height</a></th>
		<th><a href="index.php?sort=weight">Weight</a></th>
	</tr>
</thead>
<?php 
foreach($results as $result) { ?>
<tr>
	<td><h2><?php echo $result["name"]; ?></h2><img src="<?php echo $result["image"]; ?>"></td>
	<td><?php echo $result["gender"]; ?></td>
	<td><?php echo $result["height"]; ?></td>
	<td><?php echo $result["weight"]; ?></td>
</tr>
<?php } ?>

</table>

</body>

</html>
