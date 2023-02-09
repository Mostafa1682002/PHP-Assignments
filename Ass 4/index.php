<?php
// Replace ? With Arithmetic Operators
echo (10 * 20 * 15 / 3 + 190 + 10) % 400; // 0
echo '<br>';


// ==================================
echo '=================================================';
echo '<br>';
$a = "10";
// Needed Ouput
echo +$a;
echo '<br>';
echo gettype(+$a);
echo '<br>';
echo $a + 0;
echo '<br>';
echo gettype($a + 0);
echo '<br>';
echo (int)$a;
echo '<br>';
echo gettype((int)$a);
echo '<br>';
echo intval($a);
echo '<br>';
echo gettype(intval($a));
echo '<br>';

// ==================================
echo '=================================================';
echo '<br>';
$a1 = 10;
$b1 = 20;
echo $a1 <=> $b1;
echo '<br>';

// ==================================
echo '=================================================';
echo '<br>';
$a2 = 10;
$b2 = 20;
$c2 = 15;

var_dump($a2 < $b2); // True
echo '<br>';
var_dump($c2 > $a2); // True
echo '<br>';
var_dump($a2 != $b2); // True
echo '<br>';
var_dump($a2 !== $b2); // True
echo '<br>';
var_dump($a2 && $c2); // True
echo '<br>';
var_dump($a2 || $c2); // True
echo '<br>';
var_dump(gettype($a2) === gettype($b2)); // True
echo '<br>';
var_dump(gettype($a2) == gettype($b2)); // True
echo '<br>';
var_dump(gettype((float) $a2) <> gettype($b2)); // True
echo '<br>';

// ==================================
echo '=================================================';
echo '<br>';
$points = 10;
$points++;
$points++;
$points++;
echo $points; // 13
echo '<br>';

$points2 = 10;
$points2--;
$points2--;
echo $points2; // 8;
echo '<br>';

// ==================================
echo '=================================================';
echo '<br>';
$a3 = "Elzero";
$b3 = "Web";
$c3 = "School";

// Method One
$d3 = "$a3 $b3 $c3 ";
echo $d3;
echo '<br>';

// Method Two
$d3 = "${a3} ${b3} ${c3}";
echo $d3;
echo '<br>';

// Method Three
$d3 = $a3 . ' ' . $b3 . ' ' . $c3;
echo $d3;
echo '<br>';

// Method Four
$d3 = $a3 . ' ';
$d3 .= $b3;
$d3 .= ' ' . $c3;
echo $d3;
echo '<br>';


// ==================================
echo '=================================================';
echo '<br>';
$a4 = 10;
$b4 = 20;

echo (($a4 + $b4) * ($a4 + $b4) + ($a4 * $a4)) * $a4; // 10000
echo '<br>';


// ==================================
echo '=================================================';
echo '<br>';
// Code 1
$a = @$b or die('Custom Error');
echo '<br>';
// Code 2
$f = @file("Not_A_File") or die('Custom Error');
echo '<br>';

// Code 3
@(include("Not_A_File")) or die('Custom Error');
echo '<br>';
