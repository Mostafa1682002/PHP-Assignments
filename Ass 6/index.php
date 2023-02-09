<?php
// ==================== 43 to 52 ================
echo "<br>";
echo "======================11111111111111111====================";
echo "<br>";

// Write Function Content Here
function greeting($name, $kind = '')
{
    if ($kind == "Male") {
        return "Hello Mr $name <br>";
    } elseif ($kind == "Female") {
        return "Hello Miss $name <br>";
    } else {
        return "Hello  $name <br>";
    }
}

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh




//==========================================22222222222222222222222222
// Write Function Content Here
echo "<br>";
echo "======================2222222222222222222222222====================";
echo "<br>";


// function get_arguments()
// {
//     echo "<br>";
//     $all = '';
//     foreach (func_get_args() as $arg) {
//         $all .= "$arg ";
//     }
//     return $all;
// }
function get_arguments(...$words)
{
    echo "<br>";
    $all = '';
    foreach ($words as $arg) {
        $all .= "$arg ";
    }
    return $all;
}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP


//==========================================3333333333333333333333
echo "<br>";
echo "======================333333333333333333333333333====================";
echo "<br>";

// Write Function Content Here
function sum_all()
{
    echo "<br>";
    $result = 0;
    foreach (func_get_args() as $num) :
        if ($num == 5) {
            continue;
        } elseif ($num == 10) {
            $num = 20;
        }
        $result += $num;
    endforeach;
    return $result;
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40



//==========================================44444444444
echo "<br>";
echo "======================4444444444444444444444====================";
echo "<br>";

// Write Function Content Here
function multiply()
{
    echo "<br>";
    $mults = 1;
    foreach (func_get_args() as $ele) {
        if (gettype($ele) == "string") {
            continue;
        } elseif (gettype($ele) == "double") {
            $ele = (int)$ele;
        }
        $mults *= $ele;
    }
    return $mults;
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000



//==========================================555555555555555555
echo "<br>";
echo "======================555555555555555555====================";
echo "<br>";

function check_status($a, $b, $c)
{
    // Function Code Here
    echo "<br>";
    $name = '';
    $age = 0;
    $status = false;
    for ($i = 0; $i < func_num_args(); $i++) {
        if (gettype(func_get_arg($i)) == "string") {
            $name = func_get_arg($i);
        } elseif (gettype(func_get_arg($i)) == "boolean") {
            if (func_get_arg($i)) {
                $status = "Available";
            } else {
                $status = "Not Available";
            }
        } else {
            $age = func_get_arg($i);
        }
    }
    return "Hello $name, Your Age Is $age, You Are  $status For Hire";
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"



//==========================================6666666666666
echo "<br>";
echo "======================666666666666666666====================";
echo "<br>";

// Write Function Content Here
function calculate($n1, $n2, $in = 'a')
{
    echo "<br>";
    // $pro = '+';
    if ($in == "a" or $in == "addition") {
        return $n1 + $n2;
    } elseif ($in == "subtract" or $in == "s") {
        return $n1 - $n2;
    } elseif ($in == "multiply" or $in == "m") {
        return $n1 * $n2;
    }
}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200



//==========================================777777777777
echo "<br>";
echo "======================7777777777777777777777777====================";
echo "<br>";

function calculatee(int $num_one, int $num_two): float
{
    return $num_one + $num_two;
}
echo "<br>";
echo calculatee(20, 10); // 30
echo "<br>";
echo gettype(calculatee(20, 10)); // Double


//==========================================888888888888888
echo "<br>";
echo "======================88888888888888888888888888====================";
echo "<br>";

// $message = "Hello";
// // Write Your Code Here
// function $message(){
//     return $message;
// }

// echo $Hello("Osama"); // Hello Osama



//==========================================9999999999
echo "<br>";
echo "======================999999999999999999====================";
echo "<br>";

// Write Function Content Here
$greet = function () {
    return "Greetings";
};
$greet = fn () => "Greetings";

// Needed Output
echo $greet("Osama"); // Greetings