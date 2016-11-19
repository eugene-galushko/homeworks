<?php
$a ='10';
$b ='5';
$operator ='/';
if (is_numeric($a) && is_numeric($b)) {
  switch ($operator) {
    case '+':
      echo $a + $b;
      break;
    case '-':
      echo $a - $b;
      break;
    case '*':
      echo $a * $b;
      break;
    case '/':
      if ($a == 0 or $b == 0){
        echo 'unacceptable! "/0"';
        break;
      }
      echo $a / $b;
      break;
    case '%':
      if ($a == 0 or $b == 0){
        echo 'unacceptable! "%0"';
        break;
      }
      echo $a % $b;
      break;
    default:
      echo 'unknown operator';
      break;
  }
}
#echo 'hello';
 ?>
