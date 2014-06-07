<?php

function get_jackie() {
global $mysql;
$prepare = $mysql->prepare('select * from jackie;');
$prepare->execute();
return $prepare->get_result();
}

function sanatize($key) {
return htmlentities($key);
}

function request($name) {
$var = $name;
if (isset($_REQUEST[$name])) {
$var = $_REQUEST[$name];
return $var;
}
return false;
}

function get_jackie_by_id() {
global $mysql;
global $id;
$prepare = $mysql->prepare('select * from jackie where id = ?;');
$prepare->bind_param("i", $id);
$prepare->execute();
return $prepare->get_result();
}