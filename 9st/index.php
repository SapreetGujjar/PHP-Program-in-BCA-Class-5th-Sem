<?php
function primenumber($MyNum) {
  $n = 0;

  for($i = 2; $i < ($MyNum/2+1); $i++) {
    if($MyNum % $i == 0){
      $n++;
      break;
    }
  }

  if ($n == 0){
    echo $MyNum." ";
  } 
}

$x = 10;
$y = 50;
echo "<br> <br> <br> Prime numbers between <br> ".$x." and ".$y." are: \n";
for($i = $x; $i < $y + 1; $i++) {
  primenumber($i);
}
?>