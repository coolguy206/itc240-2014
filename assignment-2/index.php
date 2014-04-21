<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Assignment 2</title>
<style>
b {
	color: #f00;
}
</style>

</head>

<body>

<p>Enter a noun, verb, adjective, and a number to see the story.</p>

<form method="post">
<label for="noun">Noun</label>
<input type="text" name="noun" placeholder="noun">

<label for="verb">Verb</label>
<input type="text" name="verb" placeholder="verb">

<label for="adjective">Adjective</label>
<input type="text" name="adjective" placeholder="adjective">

<label for="number">a Number between 1-10</label>
<input type="text" name="number1" placeholder="number">

<label for="number">a Number between 1-10</label>
<input type="text" name="number2" placeholder="number">

<button>STORY TIME</button>

</form>

<?php 

if ($_SERVER['REQUEST_METHOD']== "POST"){

$noun = $_REQUEST['noun'];
$verb = $_REQUEST['verb'];
$adjective = $_REQUEST['adjective'];
$number1 = $_REQUEST['number1'];
$number2 = $_REQUEST['number2'];


?>


<p>
It's just another rainy night in Seattle, the lead of our story a <b><?= htmlentities($adjective); ?></b> costumed hero by the name of <b><?= htmlentities($noun); ?></b> is busy making sure our streets are safe. As <b><?= htmlentities($noun); ?></b> was <b><?= htmlentities($verb); ?></b> there was a loud womanly 
shriek! <b><?= htmlentities($noun); ?></b> jumped to action and cartwheeled to the rescue.
</p>

<p>
When <b><?= htmlentities($noun); ?></b> arrived the first thing the massively muscled hero noticed was a desperate woman screaming at the top of her lungs as what looked liked mutated evildoers from the depths of hell were attacking this woman.
</p>

<?php if($number1 == 5) { ?>
<p>
 <b><?= htmlentities($noun); ?></b> considered the option of calling for backup due to the grotesque features of the villains.
</p>

<?php } ?>
 

<?php if($number2 > 5) { ?>
<p>
Our hero <b><?= htmlentities($noun); ?></b>, realizing that being greatly out numbered one to <b><?= htmlentities($number2); ?></b> decided that a frontal assault would not be the best plan. Instead <b><?= htmlentities($noun); ?></b> decided to take out the attackers 2 at a time quietly. Attacking the evildoer's pressure points causing them to explode to ashes!
</p>
 

<?php } else {  ?>
<p>
<b><?= htmlentities($noun); ?></b> laughed at the evildoers and with one flex of our hero's muscle bound body caused the <b><?= htmlentities($number2); ?></b> attackers to run off screaming in fear of our hero.
</p>

<?php } ?>

<p>
The woman was so relieved that she asked our hero <b><?= htmlentities($noun); ?></b>, if there was anything she could do to repay our hero for saving her life. Our hero said "As long as your safe." and with that our hero went <b><?= htmlentities($verb); ?></b> off into the darkness becoming legends of stories. 

<?php } ?>

</p>
</body>

</html>