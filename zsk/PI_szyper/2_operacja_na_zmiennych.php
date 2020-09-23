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
echo"<br>";
//porównanie
$x=1;
$y=1.0;

if ($x==$y) {
  echo '$x jest równa $y';
}
else {
  echo '$x nie jest równa $y';
}
echo"<br>";
echo gettype($x);//integer
echo"<br>";
echo gettype($y);//double
echo"<br>";
if ($x===$y) {
  echo '$x jest identyczna $y <br>';
}
else {
  echo '$x nie jest identyczna $y<br>';
}
$x=-100;
$y=10;

echo $x <=> $y;

echo'<hr>';

$x=1;

$x=$x++;
echo $x;//1
$x=++$x;
echo $x;//2
$y=$x++;
echo $x;//3
echo $y;//2
$y=++$x*2-1;
echo $x;//4
echo $y;//7

//operatory rzutowanie
//bool, int, float, string, array, object, date_sunset
$test1='123abc4';
$test2=0;
$test3=20;

echo '<br>Typ danych $test1: ',gettype($test1);
$test1=(int)$test1;
echo "<br>$test1<br>" ;
echo'<br> Typ danych $test1: ',gettype($test1);

echo"<br>";

echo '<br>Typ danych $test2: ',gettype($test2);
$test2=(bool)$test2;
echo "<br>$test2<br>"; //false
echo'<br> Typ danych $test2: ',gettype($test2);

echo"<br>";

echo '<br>Typ danych $test3: ',gettype($test3);
$test3=(float)$test3;
echo "<br>$test3<br>"; //20
echo'<br> Typ danych $test3: ',gettype($test3);

//rozmiar typu danych
echo PHP_INT_SIZE,'<hr>';

//kontrola typu zmiennych
//is_int(),is_float(),is_numeric(),is_string(),is_bool(),is_null()
$x=1;
$y=null;
echo is_int($x);
echo is_float($x);
echo is_numeric($x);
echo is_string($x);
echo is_bool($x);
echo is_null($y);
//$w
//echo $w //błąd

//operator ignorowania błęd @
echo @gettype($w);
 ?>
