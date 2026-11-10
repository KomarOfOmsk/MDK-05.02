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
    $isfound = false;

    foreach ($dictionary as $eng => $rus) {
        if ($rus == $searchWord){
            echo "$searchWord - $eng";
            $isfound = true;
            break;
        }
    }
    if (!$isfound){
        echo "$searchWord - В словаре нет такого слова";
    }
?>
<h2>Задание 3</h2>

<form action="" method="POST">
    <input type="text" name="searchWord" placeholder="Введите слово" required>
    <button type="submit">Перевести</button>
</form>

<?php
    if (isset($_POST['searchWord'])) {
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

        $searchWord = $_POST['searchWord']; 
        $isfound = false;

        foreach ($dictionary as $eng => $rus){
            if ($rus == $searchWord){
                echo "$searchWord - $eng";
                $isfound = true;
            }
            else if ($eng == $searchWord){
                echo "$searchWord - $rus";
                $isfound = true;
            }
        }
        if (!$isfound){
            echo "$searchWord - В словаре нет такого слова";
        }
    }
?>
<h2>Задание 4</h2>
<?php

?>
<h2>Задание 5</h2>
<?php
    $string = "banana";
    echo "$string <br>";
    $result = [];

    for ($i = 0; isset($string[$i]); $i++) {
    $char = $string[$i];

    if (isset($result[$char])) {
        $result[$char]++;
    } else {
        $result[$char] = 1;
    }
    }
    print_r($result);
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
    echo "
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
    <br>";
    $flip = [];

    foreach ($dictionary as $eng => $rus){
        $flip[$rus] = $eng;
    }

    print_r($flip);
?>
<h2>Задание 7</h2>
<?php
    $words = ['кот', 'дом', 'слон', 'лес', 'мышь', 'дерево', 'окно'];
    $result = [];

    foreach ($words as $word) {
    
    $length = 0;
    for ($i = 0; isset($word[$i]); $i++) {
        $length++;
    }
    $length /= 2;
    
    if ($length === 0) {
        continue;
    }

    if (isset($result[$length])) {
        $result[$length] .= ' ' . $word;
    } else {
        $result[$length] = $word;
    }
    }


    print_r($result);
?>
<h2>Многомерные массивы</h2>
<h2>Задание 1</h2>
<?php
$twoDim = [[1,2,3,4],[5,6,7,8],[9,10,11,12]];
for ($i = 0; $i < 3; $i++){
    for($j = 0; $j < 4; $j++){
        echo $twoDim[$i][$j] , " ";
    }
    echo "<br>";
}
?>
<h2>Задание 2</h2>
<?php
    $matrix = [];
    $currentNumber = 10;
    $rows = 9;
    $cols = 10;

    for ($i = 0; $i < $rows; $i++) {
        $row = [];
        for ($j = 0; $j < $cols; $j++) {
            $row[] = $currentNumber * $currentNumber;
            $currentNumber++;
        }
        $matrix[] = $row;
    }

    foreach ($matrix as $row) {
        foreach ($row as $value) {
            echo $value , " ";
        }
        echo "<br>"; 
    } 

?>
<h2>Задание 3</h2>
<?php
$multDim = [[1,5,7,9],[11,0,4,2],[77,1,3,8],[9,5,2,6],[4,9,1,3]];
$max = $multDim[0][0];
$min = $multDim[0][0];
for ($i=0; $i < 5; $i++){
    for ($j=0; $j < 4; $j++){
        if ($multDim[$i][$j] > $max){
            $max = $multDim[$i][$j];
        }
        else if ($multDim[$i][$j] < $min){
            $min = $multDim[$i][$j];
        }
    }
}
echo "Max - $max и Min - $min";
?>
<h2>Задание 4</h2>
<?php
$matrix = [];
$n = 2;

for ($i = 0; $i < $n; $i++) {
    $row = [];
    $currentNumber = 0;
    for ($j = 0; $j < $n; $j++) {
        $row[] = $currentNumber;
        if ($currentNumber < $n){
            $currentNumber++;
        }
    }
    $matrix[] = $row;
}
foreach ($matrix as $row) {
        foreach ($row as $value) {
            echo $value , " ";
        }
        echo "<br>"; 
    }
?>
<h2>Задание 5</h2>
<?php
$sportsStore = [
    "Зимний спорт" => [
        "Fisher" => "Беговые лыжи LS Combo",
        "Burton" => "Сноуборд Instigator",
        "Bauer" => "Хоккейные коньки Vapor"
    ],
    "Фитнес и йога" => [
        "Torneo" => "Коврик для фитнеса",
        "Рельеф" => "Набор фитнес-резинок"
    ],
    "Единоборства" => [
        "Everlast" => "Боксёрские перчатки Pro Style"
    ],
    "Водный спорт" => []
];

foreach ($sportsStore as $category => $products) {
    echo "Категория: $category <br>";
    
    if (!$products) {
        echo "  Здесь пока нет товаров <br>" ;
    } else {
        foreach ($products as $brand => $productName) {
            echo "  - $brand: $productName <br>";
        }
    }
}
    
?>
<h2>Задание 6</h2>
<?php
$sportsStore = [
    "Зимний спорт" => [
        "Fisher" => "Беговые лыжи LS Combo",
        "Burton" => "Сноуборд Instigator",
        "Bauer" => "Хоккейные коньки Vapor"
    ],
    "Фитнес и йога" => [
        "Torneo" => "Коврик для фитнеса",
        "Рельеф" => "Набор фитнес-резинок"
    ],
    "Единоборства" => [
        "Everlast" => "Боксёрские перчатки Pro Style"
    ],
    "Водный спорт" => [] 
];

$newCategory = "Тренажерные веса";
echo "Добавить новую категорию - $newCategory <br><br>";
$sportsStore[$newCategory] = [];

foreach ($sportsStore as $category => $products) {
    echo "Категория: $category <br>";
    
    if (!$products) {
        echo "  Здесь пока нет товаров <br>" ;
    } else {
        foreach ($products as $brand => $productName) {
            echo "  - $brand: $productName <br>";
        }
    }
}
?>
<h2>Задание 7</h2>
<?php
$sportsStore = [
    "Зимний спорт" => [
        "Fisher" => "Беговые лыжи LS Combo",
        "Burton" => "Сноуборд Instigator",
        "Bauer" => "Хоккейные коньки Vapor"
    ],
    "Фитнес и йога" => [
        "Torneo" => "Коврик для фитнеса",
        "Рельеф" => "Набор фитнес-резинок"
    ],
    "Единоборства" => [
        "Everlast" => "Боксёрские перчатки Pro Style"
    ],
    "Водный спорт" => [],
    "Тренажерные веса" => []
];

$products = ["MB Barbell" => "Олимпийский гриф 20 кг"];
$sportsStore["Тренажерные веса"] = $products;

foreach ($sportsStore as $category => $products) {
    echo "Категория: $category <br>";
    
    if (!$products) {
        echo "  Здесь пока нет товаров <br>" ;
    } else {
        foreach ($products as $brand => $productName) {
            echo "  - $brand: $productName <br>";
        }
    }
}
?>
<h2>Задание 8</h2>
<?php
$sportsStore = [
    "Зимний спорт" => [
        "Fisher" => "Беговые лыжи LS Combo",
        "Burton" => "Сноуборд Instigator",
        "Bauer" => "Хоккейные коньки Vapor"
    ],
    "Фитнес и йога" => [
        "Torneo" => "Коврик для фитнеса",
        "Рельеф" => "Набор фитнес-резинок"
    ],
    "Единоборства" => [
        "Everlast" => "Боксёрские перчатки Pro Style"
    ],
    "Водный спорт" => [],
    "Тренажерные веса" => [
        "MB Barbell" => "Олимпийский гриф 20 кг"
    ]
];
$category = "Водный спорт";
$products = ["Stern" => "ласты"];
if (isset($sportsStore[$category])){
    $sportsStore[$category] += $products;
}
else{
    $sportsStore[$category] = $products;
}

foreach ($sportsStore as $category => $products) {
    echo "Категория: $category <br>";
    
    if (!$products) {
        echo "  Здесь пока нет товаров <br>" ;
    } else {
        foreach ($products as $brand => $productName) {
            echo "  - $brand: $productName <br>";
        }
    }
}
?>