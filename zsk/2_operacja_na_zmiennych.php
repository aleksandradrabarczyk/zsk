<?php
//wersja php 7.3.10
  echo PHP_VERSION, '<br>';
// echo phpinfo();

//interpolacja
echo 'a', 'b', 'c'; //wyświetla abc
echo 'a'.'b'.'c';//dodaje a+b+c i wyświetla abc

$pow = 2**10;
echo "$pow<br>";

//operatory bitowe
$bin=0b1010;
echo $bin;//10
echo"<br>";
$bin=$bin<<2;//101000
echo $bin;//40
echo"<br>";
$bin=$bin>>3;//101
echo $bin;//5
 ?>
