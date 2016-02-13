<?php

$arr1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
$arr2 = array('one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5,  'six'=> 6, 'seven' => 7, 'eight' => 8, 'nine'=>9, 'ten'=>10);
$i = 0;
$new_arr = array();

foreach($arr2 as $key=>$val){
    $new_arr[] = 'first_array_key: ' . $arr1[$i] .
        '; second_array_key: ' . $val;
    $i++;
}

foreach ($new_arr as $key => $value) {
    echo $value . '<br>';
}