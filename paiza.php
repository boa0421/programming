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

?>