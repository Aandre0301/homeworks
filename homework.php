<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по основам PHP</title>
</head>
<body>

<?php
require_once "read_cache.php";
?>

<?php
$name ='Андрей';
$age =  34;
echo ("Меня зовут {$name}"  . "<br>");

echo ("Мне {$age} лет" . "<br>" );

if ($age<0){
    echo 'неизвесный возраст' . "<br>";
    }
elseif (!(($age<0)||($age>18))){
    echo 'еще рано работать' . "<br>";
}
elseif (($age<=18) || ($age >=59)){
    echo 'пенсия' . "<br>";
}
else
{
    echo 'работать и работать' . "<br>";
}

$day = 5;
switch($day){
    case 1: echo 'Это рабочий день'."<br>";break;
    case 2: echo 'Это рабочий день'."<br>";break;
    case 3: echo 'Это рабочий день'."<br>";break;
    case 4: echo 'Это рабочий день'."<br>";break;
    case 5: echo 'Это рабочий день'."<br>";break;
    case 6: echo '';break;
    case 7: echo '';break;
    case 8: echo '';break;
    case 9: echo '';break;
    case 10: echo '';break;
}

$s=1450;
$t=6;
echo $v=$s/$t . "<br>";
$foo = 'bar';
$bar = 10;
echo $$foo ."<br>";

$a=4;
$b=5;
$operator = '-';
switch($operator){
    case "+": echo $a+$b; break;
    case "-": echo $a-$b; break;
    case "/": echo $a/$b; break;
    case "*": echo $a*$b; break;
}

$c = '78';
$d = 78;
 if($c==$d){
     echo 'равны'. "<br>";
 }else {
     echo 'не равны'. "<br>";
 }

$c = '78';
$d = 78;
if($c===$d){
echo 'эквивалентны'. "<br>";
}else {
    echo 'не эквивалентны'. "<br>";
}
 $arr1=array('html', 'css', 'php', 'js', 'jq');
foreach($arr1 as $kay=>$val){
    echo $val."<br>";
}
$sum=0;
$arr2=array(1, 20, 15, 17, 24, 35);
foreach($arr2 as $val1){
    $sum = $val1+$val1 ;
    echo $sum;
}


?>

<?php
require_once "write_cache.php";
?>

</body>



