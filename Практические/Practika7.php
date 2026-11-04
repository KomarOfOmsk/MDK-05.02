<h1>Практическая № 7 по теме: Массивы</h1>
<h2>Обычные массивы</h2>
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
foreach($nums as $key => $value) {
    if($value % 2 == 0){
        echo $value, ' ';
    }
}
?>
<h2>Задание 6</h2>
<?php
$nums = [12,16,6,7,8,9,11];
for ($i = 0; $i < count($nums); $i++) {
    if (($i+1) < count($nums) && $nums[$i+1] > $nums[$i]){
        echo $nums[$i+1], ' ';
    }
}
?>
<h2>Задание 7</h2>
<?php
$arr = [1,2,3,4,5];
echo "[1,2,3,4,5] <br>";
$count = count($arr);
for ($i = 0; $i < $count - 1; $i += 2) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$i + 1];
    $arr[$i + 1] = $temp;
}
for ($j = 0; $j < count($arr); $j++){
    echo $arr[$j], ' ';
}
?>
<h2>Задание 8</h2>
<?php

?>
<h2>Задание 9</h2>
<?php

?>
<h2>Ассоциативные массивы</h2>
<h2>Задание 1</h2>
<?php
    $dictionary = [
    'monday'    => 'понедельник',
    'tuesday'   => 'вторник',
    'wednesday' => 'среда',
    'thursday'  => 'четверг',
    'friday'    => 'пятница',
    'saturday'  => 'суббота',
    'sunday'    => 'воскресенье',
    'apple'     => 'яблоко',
    'cat'       => 'кот',
    'dog'       => 'собака'
    ];

    foreach ($dictionary as $eng => $rus) {
        echo "$eng - $rus<br>\n";
    }
?>
<h2>Задание 2</h2>
<?php
    $dictionary = [
    'monday'    => 'понедельник',
    'tuesday'   => 'вторник',
    'wednesday' => 'среда',
    'thursday'  => 'четверг',
    'friday'    => 'пятница',
    'saturday'  => 'суббота',
    'sunday'    => 'воскресенье',
    'apple'     => 'яблоко',
    'cat'       => 'кот',
    'dog'       => 'собака'
    ];
    $searchWord = 'пятница';
    $engKey = array_search($searchWord, $dictionary);
    if ($engKey !== false) {
        echo "$searchWord - $engKey";
    } else {
        echo "$searchWord - В словаре нет такого слова";
    }   
?>
<h2>Задание 3</h2>
<?php
    $dictionary = [
    'monday'    => 'понедельник',
    'tuesday'   => 'вторник',
    'wednesday' => 'среда',
    'thursday'  => 'четверг',
    'friday'    => 'пятница',
    'saturday'  => 'суббота',
    'sunday'    => 'воскресенье',
    'apple'     => 'яблоко',
    'cat'       => 'кот',
    'dog'       => 'собака'
    ];
    $searchWord = 'cat'; // Можно указать 'собака', 'cat' или 'тестирование'

    if (isset($dictionary[$searchWord])) {
    // Если слово найдено в ключах (английское)
        echo "{$searchWord} - " . $dictionary[$searchWord];
    } else {
    // Иначе ищем в значениях (русское)
        $engKey = array_search($searchWord, $dictionary);
    
        if ($engKey !== false) {
            echo "{$searchWord} - {$engKey}";
        } else {
        echo "{$searchWord} - В словаре нет такого слова";
        }
    }
?>
<h2>Задание 4</h2>
<?php

?>
<h2>Задание 5</h2>
<?php
    $string = "banana";
    $charCount = [];

    // Разбиваем строку на массив символов (работает и с UTF-8/кириллицей)
    $chars = mb_str_split($string);

    foreach ($chars as $char) {
        if (isset($charCount[$char])) {
            $charCount[$char]++; // Если символ уже есть, увеличиваем счетчик
        } else {
            $charCount[$char] = 1; // Если символа нет, инициализируем единицей
        }
    }

    // Вывод результата в требуемом формате
    foreach ($charCount as $char => $count) {
        echo "'{$char}' => {$count}<br>\n";
    }
?>
<h2>Задание 6</h2>
<?php
    $dictionary = [
    'monday'    => 'понедельник',
    'tuesday'   => 'вторник',
    'wednesday' => 'среда',
    'thursday'  => 'четверг',
    'friday'    => 'пятница',
    'saturday'  => 'суббота',
    'sunday'    => 'воскресенье',
    'apple'     => 'яблоко',
    'cat'       => 'кот',
    'dog'       => 'собака'
    ];
    $flippedDictionary = array_flip($dictionary);

// Выводим измененный массив
    print_r($flippedDictionary);
?>
<h2>Задание 7</h2>
<?php
    $words = ['кот', 'дом', 'слон', 'лес', 'мышь', 'дерево', 'окно'];
    $groupedWords = [];

    foreach ($words as $word) {
        // Определяем длину слова
        $length = mb_strlen($word);
    
        if (isset($groupedWords[$length])) {
            // Если ключ-длина уже существует, добавляем слово через пробел
            $groupedWords[$length] .= ' ' . $word;
        } else {
            // Если такого ключа еще нет, создаем его
            $groupedWords[$length] = $word;
        }
    }

    // Выводим полученный ассоциативный массив
    print_r($groupedWords);
?>
<h2>Многомерные массивы</h2>