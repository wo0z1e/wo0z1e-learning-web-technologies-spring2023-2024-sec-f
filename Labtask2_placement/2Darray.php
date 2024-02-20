<?php
$tables = array(
  array("1", "2", "3", "A"),
  array("1", "2", "B", "C"),
  array("1", "D", "E", "F"),

);


for ($i = 0; $i < 3; $i++) {
  for ($j = 0; $j < 4; $j++) {

    echo $tables[$i][$j];
  }

  echo "<br>";
}

for ($i = 3; $i >= 1; $i--) {
  for ($j = $i; $j >= 1; $j--) {
    echo $j . " ";
    if ($j == 1) {
      echo " ";
      echo "<br />";
    }
  }
}
echo "<br />";

 
 
 
  $alpha = range('A', 'Z');
  for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
      echo $alpha[$j];
    }
    echo "<br>";
  }
  ?> 