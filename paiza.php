<?php
    // strlen関数

$str = 'abcdef';

function str2($n){
    $sum = 0;
    $arr = str_split($n);
    foreach ($arr as $a){
        $sum = $sum + 1;
    }
    
    return $sum;
}
$test = str2($str);
echo $test;

?>