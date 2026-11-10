<h1>Вложенные циклы</h1>
<h2>Задание 1</h2>
<?php
for ($c = 2; $c <= 9; $c++){
    for($r = 1; $r <= 9; $r++){
        $mult = $c * $r;
        echo "$c * $r = $mult <br>";
    }
    echo "<br>";
}
?>
<h2>Задание 2</h2>
<?php
for($colomn = 1; $colomn <= 4; $colomn++){
    for($row = 1; $row <= 10; $row++){
        echo "Х";
    }
    echo "<br>";
}
?>
<h2>Задание 3</h2>
<table border="1">
    <?php
    for ($c = 2; $c <= 9; $c++){
    echo "<tr>";
        for($r = 1; $r <= 9; $r++){
            $mult = $c * $r;
            echo "<td>$c * $r = $mult</td>";
        }
    echo "</tr>";
}
    ?>
</table>
<h2>Задание 4</h2>
<table border="1">
    <!-- Заголовок таблицы: единицы (0-9) -->
    <tr>
        <th>Д \ Е</th>
        <?php for ($e = 0; $e <= 9; $e++) { echo "<th>$e</th>"; } ?>
    </tr>

    <!-- Строки: десятки (1-9) и сами квадраты -->
    <?php for ($d = 1; $d <= 9; $d++) { ?>
        <tr>
            <td><b><?php echo $d; ?></b></td> <!-- Показываем десяток -->
            
            <?php for ($e = 0; $e <= 9; $e++) { 
                $num = ($d * 10) + $e; // Собираем число
                echo "<td>" . ($num * $num) . "</td>"; // Выводим квадрат
            } ?>
        </tr>
    <?php } ?>
</table>
<h2>Задание 5</h2>
<?php
$a = 15;
$b = 7;  


$border = "."; 
$fill   = "/"; 


for ($y = 1; $y <= $b; $y++) {     
    for ($x = 1; $x <= $a; $x++) {   
        if ($y == 1 || $y == $b || $x == 1 || $x == $a) {
            echo $border; 
        } else {
            echo $fill;   
        }
        
    }
    echo "<br>"; 
}
?>
<h2>Задание 6</h2>
<?php
$n = 10;
for ($i = 1; $i <= $n; $i++) {
        if ($n % $i === 0) {
            echo "$i ";
        }
    }
?>
<h2>Задание 7</h2>
<?php
?>
