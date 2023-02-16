<?php
echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("1", 10);
echo str_repeat("#", 10);
echo "<br>";

setcookie("site[layout]", "Boxed", strtotime('+2months 5 days'));
setcookie("site[font]", "Swat", strtotime('+2months 5 days'));
setcookie("site[color]", "Blue", strtotime('+2months 5 days'));


echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("2", 10);
echo str_repeat("#", 10);
echo "<br>";

echo "<pre>";
echo  print_r($_COOKIE);
echo "</pre>";
echo "Your color Is " . $_COOKIE['site']['color'] . "And Font IS " . $_COOKIE['site']['font'];
echo "<br>";


echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("3", 10);
echo str_repeat("#", 10);
echo "<br>";

setcookie("site[layout]", "Boxed", time() - 10);



echo "<br>";
echo str_repeat("#", 10);
echo str_repeat("4", 10);
echo str_repeat("#", 10);
echo "<br>";

setcookie("site[font]", "Swat");
setcookie("site[color]", "Blue");