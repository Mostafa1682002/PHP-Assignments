<?php

######################## 30 To 36 #####################
#===================================================
$a1 = 100;
$b1 = 200;
$c1 = 100;

if ($b1 > $c1 && $a1 == $c1 && $b1 == $a1 + $c1) :
    echo "Yes";
endif;
echo '<br>';

#===================================================
$a2 = 200;
$b2 = 200;
$c2 = 100;
if ($a2 > $b2) :
    echo "A Is Larger Than B";
elseif ($a2 > $c2) :
    echo 'A Is Larger Than c';
else :
    echo "A Is Not Larger Than B Or C";
endif;
echo '<br>';

#===================================================
$admins = ["Osama", "Ahmed", "Sayed"];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST['user'];
    echo "The Request Method Is Post And Username Is $user";
    echo '<br>';
    foreach ($admins as $admin) {
        if ($user == $admin) {
            echo "This Username $user Is Admin";
            echo '<br>';
        }
    }
}


echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>
</body>

</html>

<?php
#===================================================
$a3 = 30;
$b3 = 20;
$c3 = 10;

if ($a3 + $b3 === $c3) {

    echo "A + B = C";
} elseif ($a3 + $c3 === $b3) {

    echo "A + C = B";
} elseif ($b3 + $c3 === $a3) {

    echo "B + C = A";
} else {

    echo "The End";
}
echo '<br>';

echo ($a3 + $b3 === $c3) ? "A + B = C" : (($a3 + $c3 === $b3) ? "A + C = B" : (($b3 + $c3 === $a3) ? "B + C = A" : "The End"));
echo '<br>';
// Output
// "B + C = A"


#===================================================
$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) {
    echo "The Age Is Good To Go<br>";
    if (gettype($name) === "string") {
        echo "The Name Is Good To Go<br>";
        if ($country === "Egypt") {
            echo "The Country Is Good To Go<br>";
        }
    }
}
echo '<br>';

#===================================================
$genre = "Hack And Slash";
switch ($genre) {
    case "RPG":
        echo "I Recommend Ys Games";
        break;
    case  "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case "FPS":
        echo "I Recommend Uncharted Games";
        break;
    case "Platform":
        echo "I Recommend Megaman Games";
        break;
    case "Puzzle":
        echo "I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
echo '<br>';
if ($genre === "RPG") {
    echo "I Recommend Ys Games";
} elseif ($genre === "Hack And Slash") {
    echo "I Recommend Castlevania Games";
} elseif ($genre === "FPS") {
    echo "I Recommend Uncharted Games";
} elseif ($genre === "Platform") {
    echo "I Recommend Megaman Games";
} elseif ($genre === "Puzzle") {
    echo "I Recommend Megaman Games";
} else {
    echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
echo '<br>';


#===================================================
$num_one = 23;
$num_two = 5;
$op = "/";
switch ($op) {
    case "+":
        echo $num_one + $num_two;
        break;
    case "-":
        echo $num_one - $num_two;
        break;
    case "/":
        echo (int)($num_one / $num_two) . "<br>";
        echo ($num_one % $num_two) . "<br>";
        break;
    case "*":
        echo $num_one * $num_two;
        break;
    default:
        echo "Unknown Operation";
}
echo "<br>";



#===================================================
$day = "Sat";
switch ($day) {
    case "Sat":
    case "Sun":
    case "Mon":
        echo "We Are Open All The Day";
        break;
    case "Tue":
    case "Wed":
        echo "We Are Open From 08:12";
        break;
    case "Thu":
    case "Fri":
        echo "We Are Closed";
        break;
    default:
        echo "Unknown Day";
}
echo "<br>";
if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
    echo "We Are Open All The Day";
} elseif ($day == "Tue" || $day == "Wed") {
    echo "We Are Open From 08:12";
} elseif ($day == "Thu" || $day == "Fri") {
    echo "We Are Closed";
} else {
    echo "Unknown Day";
}
echo "<br>";


######################## 37 To 42 #####################
#===================================================
$index = 10;
for ($i = $index; $i > 0; $i--) {
    echo $i . '<br>';
}
// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1

#===================================================
//For Loop
$index = 0;
for ($i = $index; $i <= 20; $i += 2) {
    echo $i . '<br>';
}
//Do While Loop
$i = $index;
do {
    $i += 2;
    echo $i . '<br>';
} while ($i <= 20);
//While Loop
$ii = $index;
while ($ii <= 20) {
    $ii += 2;
    echo $ii . '<br>';
}
// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20


#===================================================
echo '##################################### <br>';
$num = 2;
// 1+3(2^num–1)
while ($num < 520) {
    // Your Code Her
    echo 1 + 3 * (2 ** $num - 1) . "<br>";
    $num++;
}
echo '##################################### <br>';

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382


#===================================================
$start = 10;
$end = 0;
$stop = 3;

for ($x = $start; $x >= $stop; $x--) :
    echo $x < 10 ? "0$x" : $x;
    echo '<br>';
endfor;
// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03

#===================================================
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for ($i = 0; $i < count($mix); $i++) :
    if ($i > 0 && gettype($mix[$i]) == 'integer') {
        echo  $mix[$i] . '<br>';
    }
endfor;
// Output
// 2
// 3
// 4


#===================================================
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $name => $pound) :
    echo "The Name Is $name And I Need $pound Pound From Him <br>";
endforeach;
// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"

#===================================================
$mix = [1, 2, "A", "B", "C", 3, 4];
$n_number = 0;
$n_letter = 0;
for ($r = 0; $r < count($mix); $r++) {
    if (gettype($mix[$r]) == 'integer') {
        echo $mix[$r] . '<br>';
        $n_number++;
    } else {
        $n_letter++;
    }
}
echo "$n_number Numbers Printed <br>";
echo "$n_letter Letters Ignored <br>";
// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"

#===================================================
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach ($nums as $num) {
    if ($num % 2 == 0) {
        echo $num / 2 . "<br>";
    }
}
// Output
// 6
// 10
// 15

#===================================================
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for ($c = $nums[$help_num]; $c < $help_num; $c++) {
    echo $names[$c] . '<br>';
}
// Output
// "Sayed"
// "Osama"


#===================================================
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
foreach ($nums as $num) {
    echo $num + $nums[$help_num--] . '<br>';
}

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"
echo "<br>";
?>