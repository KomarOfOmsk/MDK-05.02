<h1>Функции</h1>
<h2>Задание 1</h2>
<?php
$r = 5;
echo "$r - радиус <br>";
function circle($radius){
    $c = 2*3.14*$radius;
    echo "Длина окружности - $c";
}
circle($r);
?>
<h2>Задание 2</h2>
<form action="" method="POST">
    <input type="number" name="sideA" placeholder="Введите длину стороны треугольника" required>
    <input type="number" name="sideB" placeholder="Введите длину стороны треугольника" required>
    <input type="number" name="sideC" placeholder="Введите длину стороны треугольника" required>
    <button type="submit">Расчет</button>
</form>
<?php
function triangleArea($sideA, $sideB, $sideC){
    if ($sideA + $sideB > $sideC && $sideB + $sideC > $sideA && $sideA + $sideC > $sideB){
        $halfP = ($sideA + $sideB + $sideC) / 2;
        return sqrt($halfP * ($halfP - $sideA) * ($halfP - $sideB) *($halfP - $sideC));
    }
    else{
        return 0;
    }
}
if (isset($_POST['sideA']) && isset($_POST['sideB']) && isset($_POST['sideC'])){
$a = $_POST['sideA'];
$b = $_POST['sideB'];
$c = $_POST['sideC'];
echo 'Площадь теругольника - ' , triangleArea($a, $b, $c);
}
?>
<h2>Задание 3</h2>
<form action="" method="POST">
    <input type="number" name="number" placeholder="Введите число" required>
    <button type="submit">Найти наибольший делитель</button>
</form>
<?php
function largestDiv($n){
    $max = 1;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i === 0 && $i > $max) {
            $max = $i;
        }
    }
    echo $max;
}
if (isset($_POST['number'])){
    largestDiv($_POST['number']);
}
?>
<h2>Задание 4</h2>
<form action="" method="POST">
    <input type="number" name="numberD" placeholder="Введите число" required>
    <button type="submit">Найти все делители</button>
</form>
<?php
function getDividers($n){
    $dividers = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i === 0) {
            $dividers[] = $i;
        }
    }
    return $dividers;
}
if (isset($_POST['numberD'])){
    $num = $_POST['numberD'];
    $divids = getDividers($num);
    foreach ($divids as $divid){
        echo $divid , " ";
    }
}
?>
<h2>Задание 5</h2>
<?php
$nums = [1, 5, 6, 10];
echo "[1, 5, 6, 10] <br>";
function sqSumm(array $numbers){
    $sum = 0;
    foreach ($numbers as $number){
        $sum += $number * $number;
    }
    echo "Сумма квадратов чисел - $sum";
}
sqSumm($nums);
?>
<h2>Задание 6</h2>
<?php
function toString(array $array){
    $string = "";
    foreach ($array as $str){
        if (is_array($str)){
            $string .= 'array';
        }
        else {
            $string .= $str;
        }
    }
    echo "<<$string>>";
}
$arr = [11,'слово',2.5, []];
toString($arr);
?>
<h2>Задание 7</h2>
<?php
function lengthSumm(){
    
}
?>
<h2>Задание 8</h2>
<?php
?>
