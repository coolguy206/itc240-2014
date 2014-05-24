<?php 

include('password.php');

$insert = 'insert into neko (calories, date, activity) values (?, ?, ?);';
$preparing = $mysql->prepare($insert);
$preparing->bind_param("iss", $_REQUEST['calories'], $_REQUEST['date'], $_REQUEST['activity']);
$preparing->execute();

header("Location: index.php");