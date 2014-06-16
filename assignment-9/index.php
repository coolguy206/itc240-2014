<?php
include('classes.php');

$bus = new Bus();
$bus->set_speed(20); 
$bus->set_speed(55);
$bus->set_speed(80);
$bus->set_speed(30);
$bus->explode = false;
$bus->trigger();

?>

<!doctype html>
<html>
<head>
<title>Assignment 9</title>
<style>
body {
	background: url('http://ipadwallsdepot.com/detail/keanu-reeves-black-and-white_00038889.jpg');
	background-repeat: no-repeat;
	background-position: top right;
}
</style>
</head>

<body>
<img src="http://i.giftrunk.com/ycyvk1.gif" alt="Keanu Reeves">

<p>
test speed: <?= $bus->speed; ?>
</p>



<p>
test armed: <?= $bus->armed; ?>
</p>

<p>
test explode: <?= $bus->explode; ?>
</p>

</body>
</html>