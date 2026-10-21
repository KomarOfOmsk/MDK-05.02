<h1>Практическая № 7 по теме: Массивы</h1>
<h2>Задание 1</h2>
<?php
$unorNums = [1, 45 , 12, 100 , 2];
$max = $unorNums[0];
$min = $unorNums[0];
foreach ($unorNums as $key => $value) {
    if ($value < $min){
        $min = $value;
    }
    if ($value > $max){
        $max = $value;
    }
};
echo "[1, 45 , 12, 100 , 2] <br>Максимум - $max, минимум - $min";
?>
<h2>Задание 2</h2>
<?php
$nums = [1,6,90,4];
$sum = 0;
$mult = 1;
foreach($nums as $key => $value){
    $sum += $value;
    $mult *= $value;
}
echo "[1,6,90,4] <br> Сумма - $sum, Произведение - $mult"
?>
<h2>Задание 3</h2>
<?php
$nums = [1,5,50,42];
$sum = 0;
$count = 1;
foreach($nums as $key => $value){
    $sum += $value;
    $count ++;
}
$arif = $sum / $count;
echo "[1,5,50,42] <br> Среднее арифметичеcкое - $arif"
?>
<h2>Задание 4</h2>
<?php
$nums = [1,5,4,3];
echo "[1,5,4,3] <br>";
foreach($nums as $key => $value){  
    if($value % 2 == 0){
        echo $value**2, ' ';
    }
    else{
        if ($value > 0){
            echo $value, ' ';
        }
        else{
            echo $value*-1, ' ';
        }
    }
}
?>
<h2>Задание 5</h2>
<?php
$nums = [0,1,2,6,7,8,9,11,12,16];
echo "[0,1,2,6,7,8,9,11,12,16] <br>";
foreach($nums as $key => $value){
    if($value % 2 == 0){
        echo $value, ' ';
    }
}
?>
<h2>Задание 6</h2>
<?php
$nums = [12,16,6,7,8,9,11];
for ($i = 0; $i < count($nums); $i++){
    if ($i+1 < count($nums) &&  $nums[$i+1] > $nums[$i]){
        echo $nums[$i+1], ' ';
    }
}
?>
<h2>Задание 7</h2>
<?php

?>
<h2>Задание 8</h2>
<?php

?>
<h2>Задание 9</h2>
<?php

?>