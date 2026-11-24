<h1>Строки</h1>
<h2>Задание 1</h2>
<?php
$str = "Hello (world) from PHP! <br>";
echo $str;
$inside = false;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == ')') {
        $inside = false;
    }
    if ($inside) {
        echo $str[$i];
    }
    if ($str[$i] == '(') {
        $inside = true;
    }
}
?>
<h2>Задание 2</h2>
<?php
$str = "This is a simple test string.";
echo "$str<br>";
$words = 0;

for ($i = 0; $i < strlen($str); $i++) {
    // Если текущий символ — не пробел и не точка,
    // а следующий за ним — пробел или точка, значит слово закончилось
    if ($str[$i] != ' ' && $str[$i] != '.') {
        if ($str[$i + 1] == ' ' || $str[$i + 1] == '.') {
            $words++;
        }
    }
}
echo "Количество слов: " . $words;
?>
<h2>Задание 3</h2>
<?php
$str = "anna went to see civic radar level stats";
$word = "";
echo "$str<br>";

// Добавляем пробел в конец, чтобы последнее слово тоже обработалось в цикле
$str = $str . " ";

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] != ' ') {
        $word .= $str[$i];
    } else {
        if ($word != "") {
            $len = strlen($word);
            if ($word[0] == $word[$len - 1]) {
                echo $word . "<br>";
            }
            $word = ""; // Очищаем для следующего слова
        }
    }
}
?>
<h2>Задание 4</h2>
<?php
$str = "abracadabra";
$unique = "";
echo "$str<br>";

for ($i = 0; $i < strlen($str); $i++) {
    $found = false;
    
    // Проверяем, встречался ли уже этот символ
    for ($j = 0; $j < strlen($unique); $j++) {
        if ($str[$i] == $unique[$j]) {
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        $unique .= $str[$i];
    }
}

echo "Различные символы: " . $unique . "\n";
echo "Количество: " . strlen($unique);
?>
<h2>Задание 5</h2>
<?php
$str = "rocket track kite";
echo "$str<br>";
$r = 0;
$k = 0;
$t = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == 'r') {
        $r++;
    } elseif ($str[$i] == 'k') {
        $k++;
    } elseif ($str[$i] == 't') {
        $t++;
    }
}

echo "r: $r, k: $k, t: $t";
?>
<h2>Задание 6</h2>
<?php
function cleanSpaces($str) {
    $len = strlen($str);
    $start = 0;
    $end = $len - 1;

    // Ищем индекс первого не-пробела
    while ($start < $len && $str[$start] == ' ') {
        $start++;
    }

    // Ищем индекс последнего не-пробела
    while ($end >= 0 && $str[$end] == ' ') {
        $end--;
    }

    $result = "";
    for ($i = $start; $i <= $end; $i++) {
        // Если текущий символ пробел и предыдущий тоже был пробел — пропускаем
        if ($str[$i] == ' ' && $str[$i - 1] == ' ') {
            continue;
        }
        $result .= $str[$i];
    }

    return $result;
}

$text = "   Hello    world   from   PHP!   ";
echo "'" . cleanSpaces($text) . "'";
?>
<h2>Задание 7</h2>
<?php
$str = "PHP is a popular scripting language";
$str .= " "; // Добавляем пробел в конец для обработки последнего слова
echo "$str<br>";

$minLen = 999999; // Заведомо большое число
$maxLen = 0;
$currentLen = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] != ' ') {
        $currentLen++;
    } else {
        if ($currentLen > 0) {
            if ($currentLen < $minLen) {
                $minLen = $currentLen;
            }
            if ($currentLen > $maxLen) {
                $maxLen = $currentLen;
            }
            $currentLen = 0;
        }
    }
}

echo "Самое короткое слово: $minLen<br>";
echo "Самое длинное слово: $maxLen";
?>
<h2>Задание 8</h2>
<?php
$str = "baaabaaaaabaa";
echo "$str<br>";
$max = 0;
$current = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == 'a') {
        $current++;
        if ($current > $max) {
            $max = $current;
        }
    } else {
        $current = 0;
    }
}

echo "Максимум букв 'a' подряд: " . $max;
?>
<h2>Задание 9</h2>
<?php
?>
<h2>Задание 10</h2>
<?php
?>