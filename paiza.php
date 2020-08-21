<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    // c015
    $input_line = trim(fgets(STDIN));
    for($i=0;$i<$input_line;$i++) {
        $input = trim(fgets(STDIN));
        $receipt = explode(" ", $input);

        $day1 = floor($receipt[1]*0.01);
        $day3 = floor($receipt[1]*0.03);
        $day5 = floor($receipt[1]*0.05);
        
        if(strpos($receipt[0],"3") !== false){
            $point = $point + $day3;
        }elseif(strpos($receipt[0],"5") !== false){
            $point = $point + $day5;
        }else{
            $point = $point + $day1;
        }
    }
    
    echo $point;

    // c32

    $num = trim(fgets(STDIN));
    $sum0 = 0;
    $sum1 = 0;
    $sum2 = 0;
    $sum3 = 0;
    $sum_point = 0;
    for($i=0; $i<$num; $i++) {
        $input = trim(fgets(STDIN));
        $price = 0;
        $shopping = explode(" ", $input);
        if($shopping[0]=="0"){
            $sum0 = $sum0 + $shopping[1];
        }elseif($shopping[0]=="1"){
            $sum1 = $sum1 + $shopping[1];
        }elseif($shopping[0]=="2"){
            $sum2 = $sum2 + $shopping[1];
        }else{
            $sum3 = $sum3 + $shopping[1];
        }
       
    }
     $point0 = (floor($sum0/100)*100)*0.05;
     $point1 = (floor($sum1/100)*100)*0.03;
     $point2 = (floor($sum2/100)*100)*0.02;
     $point3 = (floor($sum3/100)*100)*0.01;
     
     echo $point0+$point1+$point2+$point3;

    //  c049

    $input = trim(fgets(STDIN));
    $array = [];
    for($i=0; $i<$input; $i++){
        $floor = trim(fgets(STDIN));
        array_push($array,$floor);
    }
    $num = 0;
    $sum = $array[0]-1;
    for($i=0; $i<$input-1; $i++){
        $num = abs($array[$i]-$array[$i+1]);
        $sum = $sum+$num;
    }
    echo $sum;

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