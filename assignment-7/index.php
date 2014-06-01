<?php 

function make_cookie($name, $value){
	setcookie($name, $value, time() + 60*60*24*30, "/");
}

function delete_cookie($name) {
    setcookie($name, "", 10, "/");
}


if (isset($_COOKIE['view_form'])) {
	$view_form = $_COOKIE['view_form'];
}



if (isset($_REQUEST['view'])){
	$view_form = $_REQUEST['view'];
}

if (isset($_COOKIE['sort_form'])) {
	$sort_form = $_COOKIE['sort_form'];
}


if (isset($_REQUEST['sort_item'])){
	$sort_form = $_REQUEST['sort_item'];
}

if (isset($_COOKIE['style_form'])) {
	$style_form = $_COOKIE['style_form'];
}


if (isset($_REQUEST['style'])){
	$style_form = $_REQUEST['style'];
} 

make_cookie('view_form', $view_form);
make_cookie('sort_form', $sort_form);
make_cookie('style_form', $style_form);


/*if (isset($_COOKIE['library_form'])) {
$library = $_COOKIE['library_form'];
}

if (isset($_REQUEST['view'])) {
	make_cookie('library_form', $_REQUEST['view']);
	$library = $_REQUEST['view'];
}*/

include('password.php'); 

?>
<!doctype html>
<html>
<head>
<title>Assignment 7</title>

<style>

<?php

$style=''; 
if (isset($_REQUEST['style'])) {
$style = $_REQUEST['style'];
}

if ($style == 1){
include('style1.php');
} else if ($style == 2){
include('style2.php');
} else {
include('style1.php');
}


?>

</style>
</head>
<body>
<div class="wrapper">
<h1>The Stupendous Manga Library</h1>

<?php

$sort_item = 'title';
if (isset($_REQUEST['sort_item'])) {
$sort_item = htmlentities($_REQUEST['sort_item']);
}

$prepare = $mysql->prepare('select * from library order by  ' . $sort_item . ' ASC;');
$prepare->execute();
$results = $prepare->get_result();

?>

<form action="index.php" method="get">
<p>Please choose Cover or List View</p>
<input name="view" placeholder="cover or list" value="<?= $view_form; ?>">

<p>Sort by Title or Author</p>
<input name="sort_item" placeholder="title or author" value="<?= $sort_form; ?>">

<p>Please choose theme 1 or 2</p>
<input name="style" placeholder="1 or 2" value="<?= $style_form; ?>">


<button>Submit</button>
</form>
<a href="?sort_item=title">Sort by Title</a>
<a href="?sort_item=author">Sort by Author</a>
<a href="?style=1">Style Theme 1</a>
<a href="?style=2">Style Theme 2</a>

<?php 

$view = '';
if(isset($_REQUEST['view'])) {
$view = htmlentities($_REQUEST['view']);
}

if($view =='list') { 
	foreach($results as $result) { 
		include('list.php');
	}

} else if ($view =='cover') { ?>
<ul class="cover">
<?php 
	foreach($results as $result) {
		include('cover.php'); 
	} ?>
</ul>

<?php } else { ?>
<ul class="cover">
<?php 
	foreach($results as $result) {
		include('cover.php'); 
	} ?>
</ul>

<?php } ?>

<pre>
<?php print_r($_COOKIE); ?>
</pre>



</div>
</body>
</html>