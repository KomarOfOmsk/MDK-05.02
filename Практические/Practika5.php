<h1>Практическая № 5 по теме: Switch оператор</h1>
<h2>Задание 1</h2>
<?php
$num = 5;
switch ($num){
    case 1:
        echo "$num - One";
        break;
    case 2:
        echo "$num - Two";
        break;
    case 3:
        echo "$num - Three";
        break;
    case 4:
        echo "$num - Four";
        break;
    case 5:
        echo "$num - Five";
        break;
    case 6:
        echo "$num - Six";
        break;
    case 7:
        echo "$num - Seven";
        break;
    case 8:
        echo "$num - Eight";
        break;
    case 9:
        echo "$num - Nine";
        break;
}
?>
<h2>Задание 2</h2>
<?php
$month = 10;
echo $month ,"<br>";
switch ($month){
    case 1:
        echo '1–6 и 8 января — Новогодние каникулы 7 января — Рождество Христово';
        break;
    case 2:
        echo '23 февраля — День защитника Отечества.';
        break;
    case 3:
        echo '8 марта — Международный женский день';
        break;
    case 4:
        echo 'День космонавтики (12 апреля), Международный день солидарности молодёжи (24 апреля)';
        break;
    case 5:
        echo '1 мая — Праздник Весны и Труда 9 мая — День Победы.';
        break;
    case 6:
        echo '-';
        break;
    case 7:
        echo '12 июня — День России';
        break;
    case 8:
        echo 'День Государственного флага Российской Федерации (22 августа), День шахтёра (30 августа)';
        break; 
    case 9:
        echo 'День знаний (1 сентября), День туризма (27 сентября), День воспитателя (27 сентября)';
        break;
    case 10:
        echo 'Международный день пожилых людей (1 октября), День учителя (5 октября), День Конституции РФ (12 декабря)';
        break;
    case 11:
        echo 'День народного единства (4 ноября), День матери (последнее воскресенье ноября)';
        break;
    case 12:
        echo '31 декабря - Новый год';
        break;   
}
?>
<h2>Задание 3</h2>
<?php
$n = 2;
echo $n ,"<br>";
switch ($n){
    case 0:
    case 1:
    case 5:
    case 6:
        echo "Ответ: $n";
        break;
    case 4:
    case 9:
        echo "Ответ: 6";
        break;
    case 2:
    case 8:
        echo "Ответ: 4";
        break;
    case 3:
    case 7:
        echo "Ответ: 9";
        break;
}
?>
<h2>Задание 4</h2>
<?php
$a = 10;
$d = $a  % 10;
$d2 =$a % 100;
echo $a;
switch (true){
    case ($d2 >= 11 && $d2 <= 14):
        echo ' лет';
        break;
    case ($d == 1):
        echo ' год';
        break;
    case ($d >= 2 && $d <= 4):
        echo ' года';
        break;
    default:
        echo ' лет';
}
?>
<h2>Задание 5</h2>
<?php
$weight = 5;
$weightType = 1;
switch ($weightType){
    case 1:
        echo "$weight кг";
        break;
    case 2:
        echo "$weight мг";
        break;
    case 3:
        echo "$weight г";
        break;
    case 4:
        echo "$weight т";
        break;
    case 5:
        echo "$weight цт";
        break;
}
?>