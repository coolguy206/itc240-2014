<?php include('password.php'); ?>
<!doctype html>
<html>
<head>
<title>Assignment 6</title>
<style>
label, textarea, input {
	display: block;
	margin-bottom: 10px;
}
.items {
	border-bottom: 1px solid #000;
}
.items:nth-child(odd) {
	background: yellow;
}
.container {
	width: 960px;
	margin: auto;
}
</style>
</head>

<body>
<div class="container">
<h1>Neko's Calorie Counter</h1>

<?php 

$query = 'select sum(calories) as total from neko;';
$prepared = $mysql->prepare($query);
$prepared->execute();
$output = $prepared->get_result();
$fetch = $output->fetch_array();

$select = $mysql->prepare('select max(calories) as max from neko;');
$select->execute();
$return = $select->get_result();
$fetching = $return->fetch_array();

?>

<h2>Neko's Total Calories Burned <?= htmlentities($fetch['total']); ?></h2>
<h3>Neko's Highest Calory Burn is <?= htmlentities($fetching['max']); ?></h3>

<form action="query.php" method="post">
<label>Calories Burned</label>
<input name="calories" placeholder="calories">
<label>Date</label>
<input name="date" placeholder="date">
<label>Activity Description</label>
<textarea name="activity" placeholder="activity">
</textarea>
<input type="submit">
</form>


<?php

$prepare = $mysql->prepare('select * from neko order by date desc;');
$prepare->execute();
$results = $prepare->get_result();

foreach($results as $result) { ?>

<div class="items">
<p>Calories burned: <?= htmlentities($result['calories']); ?></p>
<p>Date: <?= htmlentities($result['date']); ?></p>
<p>Activity: <?= htmlentities($result['activity']); ?></p>
</div>

<?php } ?>
</div>
</body>

</html>