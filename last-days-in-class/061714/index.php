<?php
//get contents
$contents = file_get_contents("sample.txt");

/*$add = "Some more text to add to the sample.txt file!";
$file = file_put_contents("sample.txt", $add);

echo $file;*/

//(na)+ group like AND single character
//[na]+ any of the letters contained
//"." any character
//"*" previous character 
//"+" previous character one time
// d\ digit
// D\ not digit
// \s space
// \S not space
// \w letters and _ (underscore)
// \W not letters, numbers, and _ (underscore)

//for more info go to http://www.regular-expressions.info/

$replace =  preg_replace("#ba[na]+#i", //find all s characters
"S", //replace with S 
$contents // inside this string
);

$replace = preg_replace(
"#page [0-9,]+\s*\n#",
"",
$replace
);

echo nl2br($replace);

$json = file_get_contents("config.json");

$decode = json_decode($json, true);
print_r($decode["hello"]);