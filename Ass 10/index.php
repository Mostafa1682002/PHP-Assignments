<?php

echo str_repeat("=", 10);
echo str_repeat("1", 10);
echo str_repeat("=", 10);
echo "<br>";

echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte";
echo "<br>";
echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte";
echo "<br>";



echo str_repeat("=", 10);
echo str_repeat("2", 10);
echo str_repeat("=", 10);
echo "<br>";

echo "Size In Megabyte Is " . filesize("D:\افلام\[CimaClub.Com]-Bekia.2018.WEB.720p.mkv") / 1024 / 1024;
echo "<br>";
echo "Size In Kilobyte Is " . filesize("D:\افلام\[CimaClub.Com]-Bekia.2018.WEB.720p.mkv") / 1024;
echo "<br>";



echo str_repeat("=", 10);
echo str_repeat("3", 10);
echo str_repeat("=", 10);
echo "<br>";

$file = "Programming\PHP";
if (file_exists($file)) {
    rmdir("Programming\PHP");
    rmdir("Programming");
    echo "Directory Programming/PHP Removed <br>";
    echo "Directory Programming Removed <br>";
} else {
    mkdir($file, true, 0711);
}



echo str_repeat("=", 10);
echo str_repeat("4", 10);
echo str_repeat("=", 10);
echo "<br>";


function change_permissions($prameter)
{
    if (!is_dir($prameter)) {
        if (pathinfo($prameter, PATHINFO_EXTENSION) == "txt") {
            chmod($prameter, 0700);
            echo "Permissions Changed";
        } else {
            echo "File Extension Is Not Txt";
        }
    } else {
        echo "This Is Directory And Only Files Allowed";
    }
}
echo change_permissions("most.txt");
echo "<br>";


echo str_repeat("=", 10);
echo str_repeat("5", 10);
echo str_repeat("=", 10);
echo "<br>";

echo basename(__FILE__) . "<br>"; //1
echo pathinfo(__FILE__, PATHINFO_BASENAME) . "<br>"; //2
$in = new SplFileInfo(__FILE__);
echo $in->getFilename() . "<br>"; //3
$dir = dirname(__FILE__) . "\\";
$real = realpath(__FILE__);
echo str_replace($dir, "", $real) . "<br>"; //4


echo str_repeat("=", 10);
echo str_repeat("6", 10);
echo str_repeat("=", 10);
echo "<br>";

$fileopen = fopen('most.txt', 'r');
$arr = file('most.txt');
for ($i = 0; $i < count($arr) - 1; $i++) {
    echo $arr[$i];
}
echo "<br>"; ///////1111111

for ($i = 0; $i < count($arr) - 1; $i++) {
    echo fgets($fileopen);
}
echo "<br>"; ///////222222


rewind($fileopen);
echo fread($fileopen, 24);
fclose($fileopen);
echo "<br>"; //33333

echo file_get_contents('most.txt', true, null, 0, 24);
echo "<br>"; //444444

echo str_repeat("=", 10);
echo str_repeat("7", 10);
echo str_repeat("=", 10);
echo "<br>";

file_put_contents('elzero.txt', "Hello Elzero Web\nSchool");
