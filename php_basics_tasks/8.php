<?php
$age = "age";

if (is_int($age) && $age > 0){
  if ($age >= 18 && $age <= 59) {
  echo 'Вам еще работать и работать!';
  die;
  }
  elseif ($age > 59) {
  echo 'Вам пора на пенсию';
  die;
  }
  elseif ($age <= 17 && $age > 0) {
  echo 'Вам еще рано работать';
  die;
  }
}
echo 'Неизвестный возраст';
 ?>
