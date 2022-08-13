<?php
$arr1 = array(
 array(5, 4, 1),
 array(13, 10, 3),
 array(5, 9, 10),
);
$arr2 = array(
 array(2, 3, 0),
 array(4, -2, 6),
 array(8, 7, 4),
);

echo "Matrix A (3 x 3): <br>";
for($i=0; $i<3; $i++)
{
 for($j=0; $j<3; $j++)
  echo $arr1[$i][$j] . " ";
 echo "<br>";
}

echo "<br>Matrix B (3 x 3): <br>";
for($i=0; $i<3; $i++)
{
 for($j=0; $j<3; $j++)
  echo $arr2[$i][$j] . " ";
 echo "<br>";
}

echo "<br>Matrix Additon (A + B): <br>";
for($i=0; $i<3; $i++)
{
 for($j=0; $j<3; $j++)
 {
  $arr3[$i][$j] = $arr1[$i][$j] + $arr2[$i][$j];
  echo $arr3[$i][$j] . " ";
 }
 echo "<br>";
}

echo "<br>Matrix Subtraction (A - B): <br>";
for($i=0; $i<3; $i++)
{
 for($j=0; $j<3; $j++)
 {
  $arr3[$i][$j] = $arr1[$i][$j] - $arr2[$i][$j];
  echo $arr3[$i][$j] . " ";
 }
 echo "<br>";
}

echo "<br>Matrix Multiplication (A * B): <br>";
for($i=0; $i<3; $i++)
{
 for($j=0; $j<3; $j++)
 {
  $arr3[$i][$j] = $arr1[$i][$j] * $arr2[$i][$j];
  echo $arr3[$i][$j] . " ";
 }
 echo "<br>";
}
?>