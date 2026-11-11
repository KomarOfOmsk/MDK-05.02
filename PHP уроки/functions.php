<h1>Функции</h1>
<h2></h2>
<?php

?>
<h2></h2>
<?php

?>
<h2></h2>
<?php

?>
<h2>Возращаемое значение</h2>
<?php
function getUserInfo($fName, $lName , $role = 'user'){
    return "$fName $lName , роль - $role";
}
$info = getUserInfo('Маша', 'Иванова');
echo $info;
function squareRect($l, $w){
    return $l * $w;
}
echo '<p> Площадь - ' , squareRect(20, 5) , '</p>';
?>