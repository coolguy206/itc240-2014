<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Assignment 2</title>
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
<input type="text" name="number" placeholder="number">

<button>STORY TIME</button>

</form>

<?php 

if ($_SERVER['REQUEST_METHOD']== "POST"){

$noun = $_REQUEST['noun'];
$verb = $_REQUEST['verb'];
$adjective = $_REQUEST['adjective'];
$number = $_REQUEST['number'];


?>


<p>
It's just another rainy night in Seattle, the hero of our story <b><?= htmlentities($noun); ?></b> is busy making sure our streets are safe. As <b><?= htmlentities($noun); ?></b> was <b><?= htmlentities($verb); ?></b> there was a loud womanly 
shriek! <b><?= htmlentities($noun); ?></b> jumped to action and cartwheeled to the rescue.
</p>

<p>
When <b><?= htmlentities($noun); ?></b> arrived the first thing the massively muscled hero noticed was a desperate woman screaming at the top of her lungs as

<?php if($number == 5) { ?>

 <b><?= htmlentities($number); ?></b> mutated villains that looked like the spawn of hell were attacking this woman. <b><?= htmlentities($noun); ?></b> sprang to action and rushed the <b><?= htmlentities($number); ?></b> 
villains and with one spinning heel kick, wiped out the <b><?= htmlentities($number); ?></b> attackers. 
</p>
 
<p>
The woman was so relieved that she asked our hero <b><?= htmlentities($noun); ?></b>, if there was anything she could do to repay our hero for saving her life. Our hero said "As long as your safe." and with that our hero went <b><?= htmlentities($verb); ?></b> off into the darkness becoming legends of stories. 


<?php } else if ($number > 5) { ?>

<b><?= htmlentities($number); ?></b> mutated villains that looked like the spawn of hell were attacking this woman. Our hero <b><?= htmlentities($noun); ?></b>, realizing that being greatly out numbered decided that a frontal assault would not be the best plan. Instead <b><?= htmlentities($noun); ?></b> decided to take out the attackers 2 at a time quietly. Attacking the 
villain's pressure points causing them to crumple and making them harmless.
</p>

<p>
The woman was so relieved that she asked our hero <b><?= htmlentities($noun); ?></b>, if there was anything she could do to repay our hero for saving her life. Our hero said "As long as your safe." and with that our hero went <b><?= htmlentities($verb); ?></b> off into the darkness becoming legends of stories. 

<?php } else { ?>

<b><?= htmlentities($number); ?></b> mutated villains that looked like the spawn of hell were attacking this woman. <b><?= htmlentities($noun); ?></b> laughed at the <b><?= htmlentities($number); ?></b> 
villains and with one flex of our hero's muscle bound body caused the <b><?= htmlentities($number); ?></b> 
villains to run off cowardly screaming in fear of our hero.
</p>

<p>
The woman was so relieved that she asked our hero <b><?= htmlentities($noun); ?></b>, if there was anything she could do to repay our hero for saving her life. Our hero said "As long as your safe." and with that our hero went <b><?= htmlentities($verb); ?></b> off into the darkness becoming legends of stories. 

<?php }

} ?>

</p>
</body>

</html>