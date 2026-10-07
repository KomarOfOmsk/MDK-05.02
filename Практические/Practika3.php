<h2>Практическая № 3 по теме: Циклы</h2>
<h3>Задача 1</h3>
<?php
$startNumber = 2;
$multiplier = 3;
$quantity = 5;
echo "Начальное число: $startNumber<br> Множитель: $multiplier <br> Кол-во числ: $quantity <br>";
while($quantity > 0){
    $startNumber *= $multiplier;
    echo "$startNumber <br>";
    $quantity--;
}
?>
<h3>Задача 2</h3>
<?php
$lastNumber = 15;
$sum = 0;
echo "От 1 до $lastNumber <br>";
for ($i = 1; $i <= $lastNumber; $i++){
    $sum += $i;
}
echo "Сумма: $sum"
?>
<h3>Задача 3</h3>
<?php
$lastNumber = 10;
$multiplicationResult = 1;
echo "От 1 до $lastNumber <br>";
for ($i = 1; $i <= $lastNumber; $i++){
    if (($i % 2) == 0){
        $multiplicationResult *= $i;
    }
}
echo " Произведение всех четных чисел: $multiplicationResult";
?>
<h3>Задача 4</h3>
<?php
$firstRange = 10;
$days = 5;
$totalRange = 0;
echo "Первый день : $firstRange км <br> Увеличение пути в день на 10% от предыдущего<br>";
for($i = 1; $i < $days; $i++){
    $firstRange += ($firstRange / 100) * 10;
    $totalRange += $firstRange;
}
echo "Сумарный путь через $days дней: $totalRange км";
?>
<h3>Задача 5</h3>
<?php
$total = 64;
$bunny = 4;
$goose = 2;
$bunCount = 16;
$goosecount = 0;
while ($bunCount > 1){
    if (($bunCount * $bunny) + ($goosecount * $goose) == 64){
        echo "Кроликов: $bunCount Гусей: $goosecount <br>";
    }
    $bunCount--;
    $goosecount++;
}
?>