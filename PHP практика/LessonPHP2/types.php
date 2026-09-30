<h1>Типы данных в PHP</h1>
<h2>Целые числа - int</h2>
<?php 
$number = 100;
$number2 = 0b1100110110;
$number16 = 0x354F2C;
echo $number , " ";
echo $number2, " ";
echo $number16;
?>
<h2>Числа с плавающей точкой - float</h2>
<?php
$a = 42.5;
$b = 1.5e5;
$c = 2.4e-3;
echo $a , " ", $b, " ", $c;
?>
<h2>Строки - string</h2>
<?php
$str1 = "Переменная a = $a";
$str2 = 'Переменная a = $a';
$str3 = "'WWW'";
echo $str1, '<br>', $str2, '<br>', $str3;
?>
<h2>Логическое значение - bool</h2>
<?php
$t = true;
$f = false;
echo "t = $t и f = ( $f)";
?>
<h2>Специальное значение null</h2>
<?php
$n = null;
echo "n = ( $n)"
?>