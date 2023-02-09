<?php
echo str_repeat("#", 10);
echo str_repeat("1", 10);
echo str_repeat("#", 10);
echo "<br>";

$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];

echo "<pre>";
print_r(array_chunk(array_change_key_case($friends), 2, true));
echo "</pre>";

// Output
//   Array
//   (
//     [0] => Array
//       (
//         [ag] => Ahmed Gamal
//         [om] => Osama Mohamed
//       )
//     [1] => Array
//       (
//         [mg] => Mahmoud Gamal
//         [as] => Ahmed Samy
//       )
//     [2] => Array
//       (
//         [fa] => Farid Ahmed
//         [sm] => Sayed Mohamed
//       )
//   )


echo str_repeat("#", 10);
echo str_repeat("2", 10);
echo str_repeat("#", 10);
echo "<br>";


$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo "<pre>";
print_r(array_change_key_case(array_combine($codes, $means)));
echo "</pre>";
// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )




echo str_repeat("#", 10);
echo str_repeat("3", 10);
echo str_repeat("#", 10);
echo "<br>";


$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];
echo "<pre>";
print_r(array_change_key_case(array_flip($friends)));
echo "</pre>";

// Output
//   Array
//   (
//     [as] => Ahmed Samy
//     [mg] => Mahmoud Gamal
//     [om] => Osama Mohamed
//     [ag] => Ahmed Gamal
//   )


echo str_repeat("#", 10);
echo str_repeat("4", 10);
echo str_repeat("#", 10);
echo "<br>";

$nums = [10, 20, 30];
echo array_sum($nums) . "<br>";
echo array_reduce($nums, function ($e, $r) {
    return $e += $r;
}) . "<br>";
// Output
// 60
// 60

echo str_repeat("#", 10);
echo str_repeat("5", 10);
echo str_repeat("#", 10);
echo "<br>";
$nums = [5, 10, 20, 5, 30, 40];
echo array_reduce($nums, function ($e, $r) {
    if ($r == 5) {
    } else {
        $e += $r;
    }
    return $e;
});
// Output
// 100


echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("6", 10);
echo str_repeat("#", 10);
echo "<br>";


$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo "<pre>";
print_r(array_pad($chars, count($chars) * strlen($char), $char[$zero]));
echo "</pre>";
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )




echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("7", 10);
echo str_repeat("#", 10);
echo "<br>";
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];
// Write Line Here
next($names);
// Write Line Here
next($names);
echo current($names) . "<br>"; // "Sayed"

// Write Line Here
end($names);
echo current($names) . "<br>"; // "Ali"

// Write Line Here
reset($names);
echo current($names) . "<br>"; // "Osama"

// Write Line Here
end($names);
// Write Line Here
prev($names);
echo current($names) . "<br>"; // "Mahmoud"




echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("8", 10);
echo str_repeat("#", 10);
echo "<br>";
$chars = ["A", "B", "C"];
// $chars[] = "D";//1
// $chars[3] = "D"; //2
// array_push($chars, "D"); //3
echo "<pre>";
// print_r($chars); //1,2,3
// print_r(array_merge($chars, ["D"]));//4
print_r(array_replace($chars, [3 => "D"])); //5
echo "</pre>";
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )





echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("9", 10);
echo str_repeat("#", 10);
echo "<br>";
$nums = [1, 2, 3, 4, 5, 6];
echo "<pre>";
print_r($nums);
print_r(array_slice($nums, -5, -2));
echo "</pre>";
// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )



echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("10", 10);
echo str_repeat("#", 10);
echo "<br>";
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];
// Write Your Code Here
$mix = str_replace(["A", "B", "C"], $nums, $mix);
echo "<pre>";
print_r($mix);
echo "</pre>";

// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )





echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("11", 10);
echo str_repeat("#", 10);
echo "<br>";
$arr = ["A", "B", "C", "D", "E"];
$numbers = 0;
foreach ($arr as $n) :
    $numbers += 1;
endforeach;
echo "Number Of Element In Array is : $numbers";
// Output
// 5



echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("12", 10);
echo str_repeat("#", 10);
echo "<br>";
$nums = [11, 2, 10, 7, 20, 50];
$sum = 0;
foreach ($nums as $n) :
    $sum += $n;
endforeach;
echo "$sum ";
// Output
// 100





echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("13", 10);
echo str_repeat("#", 10);
echo "<br>";
$nums = [10, 100, -20, 50, 30];
echo array_reduce($nums, fn ($a, $c) => $a > $c ? $a : $c);
// Output
// 100



echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("14", 10);
echo str_repeat("#", 10);
echo "<br>";
$nums = [10, 100, -20, 50, 30];
echo array_reduce($nums, fn ($p, $c) => $p > $c ? $c : $p, $nums[0]);
// Output
// -20


echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("15", 10);
echo str_repeat("#", 10);
echo "<br>";
$chars = ["o", "r", "e", "z", "l", "E"];
$re = '';
$n = 0;
foreach ($chars as $char) {
    $n++;
}
for ($i = --$n; $i >= 0; $i--) {
    echo $chars[$i];
}
echo "<br>";
echo "$n <br> ";
echo "<br>";
// Output
// "Elzero"



echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("16", 10);
echo str_repeat("#", 10);
echo "<br>";
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$onlyODDNumbers = array_filter($mix, fn ($ele) => gettype($ele) != 'string' ? $ele % 2 != 0 ? $ele : '' : '');
sort($onlyODDNumbers);
echo "<pre>";
print_r($onlyODDNumbers);
echo "</pre>";

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )



echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("17", 10);
echo str_repeat("#", 10);
echo "<br>";
$nums = [1, 2, 3, 4, 5, 6];

function shuff($arr)
{
    $lengthArray = count($arr);
    $temp = '';
    while ($lengthArray > 0) {
        $random = rand(0, $lengthArray - 1);
        $lengthArray--;
        $temp = $arr[$lengthArray];
        $arr[$lengthArray] = $arr[$random];
        $arr[$random] = $temp;
    }
    return $arr;
}

echo "<pre>";
print_r(shuff($nums));
echo "</pre>";
// Output
// Every Time The Array Elements Will Be Shuffled
// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )







echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("18", 10);
echo str_repeat("#", 10);
echo "<br>";
$title = "E&z\$r0 W\$b Sch00&";

echo str_replace(['&', '$', 0], ['l', 'e', 'o'], $title, $count);
echo "<br>";
echo $count;
echo "<br>";
// Output
// "Elzero Web School"
// 7