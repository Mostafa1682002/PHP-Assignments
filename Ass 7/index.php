<?php
//===============================111111===================
echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("1", 10);
echo str_repeat("#", 10);
echo "<br>";
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here
$str[$num_one] = $let_one;
$str[(int)$num_two] = $let_two;
echo $str; // Elzero



//===============================222222===================
echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("2", 10);
echo str_repeat("#", 10);
echo "<br>";
$str = "Orezle";

// Elzero
echo ucfirst(strtolower(strrev($str)));


//===============================333333===================
echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("3", 10);
echo str_repeat("#", 10);
echo "<br>";

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo str_repeat(strtolower(substr_replace($str, $char, 4, 0)), $num);
// aaa_aaa_aaa_


//===============================444444===================
echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("4", 10);
echo str_repeat("#", 10);
echo "<br>";

$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, '<b>');
// <b>Elzero</b>



//===============================555555===================
echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("5", 10);
echo str_repeat("#", 10);
echo "<br>";

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr($str, $four) . "<br>";
echo substr_count(substr($str, $four), $e, $four) . "<br>";
echo substr_count(substr($str, $four), strtolower($o), $four) . "<br>";
// 1
// 2


//===============================666666===================
echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("6", 10);
echo str_repeat("#", 10);
echo "<br>";

$chars = ["E", "l", "z", "e", "r", "o"];

echo implode("", $chars);
// Output
// "Elzero"


echo "<br>";
echo "<br>";
echo str_repeat("#", 30);
echo "<br>";
// Output
echo implode($chars);
"Elzero";


echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("7", 10);
echo str_repeat("#", 10);
echo "<br>";
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

// Output
echo ucfirst(strtolower(implode(array_map(fn ($e) => gettype($e) == 'string' ? $e : '', $chars))));
// "Elzero"