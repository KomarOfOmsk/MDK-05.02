<h1>Стандартные функции для строк</h1>
<h2>Получение длины - strlen</h2>
<?php
$str = 'Hello, world';
$strR = 'Привет, мир';
echo "$str <br>";
echo "$strR <br>";
echo 'Длина str ' . strlen($str) . ' символов.' , '<br>';
echo 'Длина strR ' . mb_strlen($strR) . ' символов.' , '<br>';
?>
<h2>Поиск подстроки - strpos</h2>
<?php
$pos = strpos($str, 'world');
echo "Позиция 'world' - $pos <br>";
$pos = mb_strpos($strR, 'мир');
echo "Позиция 'мир' - $pos <br>";
?>
<h2>Изменение регистра - strtolower</h2>
<?php
$strLow = strtolower($str);
echo "Строка в нижнем регистре - $strLow <br>"
?>
<h2>Перевод строки в массив - explode</h2>
<?php
$str1 = 'Работа со строками';
echo "$str1<br>";
$words = explode(' ', $str1);
print_r($words);
?>
<h2>Перевод массива в строку - implode</h2>
<?php
$str2 = implode(',', $words);
echo $str2;
?>