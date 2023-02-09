<?php $username = "Elzero"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $username; ?> Courses">
    <title>Welcome To <?php echo $username; ?> Courses</title>
</head>

<body>
    <h1><?php echo $username; ?> Courses</h1>
    <p>Here In <?php echo $username; ?> Courses We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username; ?> Courses Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $username; ?> Courses</footer>
</body>

</html>

<!-- ============================================== -->
<?php
$name = "elzero";
$$name = "Web";
echo $elzero;
echo '<br>';
echo $$name;
echo '<br>';
echo "$elzero";
echo '<br>';
echo "${$name}";
echo '<br>';
echo "${$name}";
echo '<br>';
?>

<!-- ============================================== -->
<?php
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
echo '<br>';
?>

<!-- ============================================== -->
<?php
echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['SystemRoot'];
echo '<br>';
echo $_SERVER['OPENSSL_CONF'];
echo '<br>';
/*
break
clone
die
final
or
include
function
switch
use
endswitch
yield from
*/
?>

<!-- ============================================== -->
<?php
echo __LINE__;
echo '<br>';
echo __DIR__;
echo '<br>';
echo __file__;
echo '<br>';
?>