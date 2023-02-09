<?php
//==========================
echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
echo '<br>';
echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer
echo '<br>';

//====================================
var_dump(100);
echo '<br>';
echo  gettype(100);
echo '<br>';

//==========================
echo " Hello \"Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"";
echo '<br>';

//==========================
echo nl2br("We \n Love \n Elzero \n Web \n School");
echo '<br>';

//==========================
echo nl2br(
  <<<'Now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
Now
);
echo '<br>';

//==========================
$something = "Programming";
echo <<<"code"
Hello \PHP\
We Love $something
code;
echo '<br>';

//==========================
echo 1 + (int)"Hello PHP";
echo '<br>';
echo gettype(1 + (int)"Hello PHP");
echo '<br>';

//==========================
echo "<pre>";
print_r([
  "FrontEnd" => [
    "HTML",
    "CSS",
    "JS" => [
      "Vuejs" => [
        2 => "v2",
        3 => "v3"
      ],
      "Reactjs",
      "Svelte"
    ]
  ],
  "BackEnd" => [
    "PHP",
    "MySQL",
    "Security"
  ],
  "Git",
  "Github",
  "Testing" => [
    "Unit Testing",
    "End To End",
    "Integration"
  ]
]);
echo "</pre>";
