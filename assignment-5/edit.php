<?php
include('password.php');
$insert = 'insert into tracker_food (calories, type, eaten_on) values (?,?, now());';
$prepare = $mysql->prepare($insert);
$prepare->bind_param("is", $_REQUEST["calories"], $_REQUEST["type"]);
$prepare->execute();
header("Location: index.php");
?>