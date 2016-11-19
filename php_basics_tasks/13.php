<?php
$t = 2; //hour
$s = 250; //km

$t_sec = $t * 60 * 60;
$s_m = $s * 1000;
$v_h = $s/$t; //speed km/h
$v_m = $s_m/$t_sec; //speed m/s

echo 'speed km/h: '.$v_h.'<br/>';
echo 'speed m/s: '.$v_m;
 ?>
