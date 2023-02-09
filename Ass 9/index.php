<?php
echo str_repeat("#", 10);
echo str_repeat("1", 10);
echo str_repeat("#", 10);
echo "<br>";
echo rand(11, 19);
echo "<br>";


echo str_repeat("#", 10);
echo str_repeat("2", 10);
echo str_repeat("#", 10);
echo "<br>";

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[rand(0, count($friends) - 1)];
echo "<br>";
// Example
// Ibrahim
// Ahmed


echo str_repeat("#", 10);
echo str_repeat("3", 10);
echo str_repeat("#", 10);
echo "<br>";

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7
echo round($num1, 0, PHP_ROUND_HALF_DOWN);
echo "<br>";
echo round($num2, 1, PHP_ROUND_HALF_DOWN);
echo "<br>";
echo round($num3, 0, PHP_ROUND_HALF_DOWN);
echo "<br>";


echo str_repeat("#", 10);
echo str_repeat("4", 10);
echo str_repeat("#", 10);
echo "<br>";

$arr = [];
foreach (filter_list() as $value) {
    array_push($arr, filter_id($value));
}
echo "<pre>";
print_r(array_combine($arr, filter_list()));
echo "</pre>";

// Array
// (
//   [257] => int
//   [258] => boolean
//   [259] => float
//   [272] => validate_regexp
//   [277] => validate_domain
//   [273] => validate_url
//   [274] => validate_email
//   [275] => validate_ip
//   [276] => validate_mac
//   [513] => stripped
//   [514] => encoded
//   [515] => special_chars
//   [522] => full_special_chars
//   [516] => unsafe_raw
//   [517] => email
//   [518] => url
//   [519] => number_int
//   [520] => number_float
//   [523] => add_slashes
//   [1024] => callback
// )

echo str_repeat("#", 10);
echo str_repeat("5", 10);
echo str_repeat("#", 10);
echo "<br>";

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

function check($x)
{
    if (filter_var($x, FILTER_VALIDATE_URL)) {
        echo "A Valid URL <br>";
    } else {
        echo "Not A Valid URL <br>";
    }
}

check($url1);
check($url2);
check($url3);
check($url4);
// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"


echo str_repeat("#", 10);
echo str_repeat("6", 10);
echo str_repeat("#", 10);
echo "<br>";


$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";
function getURL($url)
{
    echo filter_var($url, FILTER_SANITIZE_URL) . "<br>";
}

getURL($url1);
getURL($url2);
getURL($url3);
getURL($url4);

// Output
// http: //www.elzero.org
// http: //elzero.org
// https: //elzero.org
// https: //elzero.org