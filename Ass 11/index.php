<?php
echo str_repeat("#", 10);
echo str_repeat("1", 10);
echo str_repeat("#", 10);
echo "<br>";

date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() . "<br>";
$d = date_create('now');
echo date_format($d, "D, d M y - h:i:s A") . "<br>";
echo date_format($d, "l, d F Y - h:i:s A") . "<br>";





echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("2", 10);
echo str_repeat("#", 10);
echo "<br>";

date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . "<br>";

$date = "2005-10-02";
$date = date_create($date);
date_add($date, date_interval_create_from_date_string("+15 hours 15 minutes 15 seconds"));
echo date_format($date, "Y, F, l 'dS' H:i:s ") . "<br>";
// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:10"


echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("3", 10);
echo str_repeat("#", 10);
echo "<br>";

$date1 = strtotime("1970-01-01");
$date2 = strtotime("1990-10-01");
$days = number_format(abs($date1 - $date2) / 60 / 60 / 24, 2);
$years = number_format(abs($date1 - $date2) / 60 / 60 / 24 / 365, 1);
echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years <br>";




echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("4", 10);
echo str_repeat("#", 10);
echo "<br>";


$date1 = date_create("1970-01-01");
$date2 = date_create("1990-10-01");
$diff = date_diff($date1, $date2);
$days = $diff->days;
$years = $diff->y;
echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years <br>";




echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("5", 10);
echo str_repeat("#", 10);
echo "<br>";

echo time() . "<br>";

$d = getdate();
echo end($d) . "<br>";

$d1 = strtotime("1970-01-01");
$d2 = strtotime('now');
echo  abs($d1 - $d2) . "<br>";