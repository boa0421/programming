<?php
function num($n) {
    
  return $n*5;
}

$test = num(2);
echo $test;
$numbers = [1,2,3,4,5];

function num($array) {
  $sum = 0;
  foreach($array as $number){
      $sum = $sum + $number;
  }
  return $sum;
}
$test = num($numbers);
echo $test;

// 要素数

$numbers = [1,2,3,4,5];

function array_num($array) {
  $num = 0;
  foreach($array as $number){
      $num = $num + 1;
  }
  return $num;
}
$test = array_num($numbers);
echo $test;

// max関数

$numbers = [1,2,3,4,5];

function array_max($array) {
  $max = $array[0]; #仮の最大値とする
  foreach($array as $number) {
      if($max<$number){
          $max = $number;
      }
  }
  return $max;
}
$test = array_max($numbers);
echo $test;

// 最小値

$numbers = [1,2,3,4,5,-1,59,0];

function array_min($array) {
  $min = $array[0]; #仮の最大値とする
  foreach($array as $number) {
      if($min>$number){
          $min = $number;
      }
  }
  return $min;
}
$test = array_min($numbers);
echo $test;

// array_search関数

// 配列
$queue = [ "a", "b", "c", "a", "b", "c" ] ;

// 実行
$result = array_search( "b", $queue ) ;

// 返り値
var_dump( $result ) ;

$letters = [ "a", "b", "c", "a", "b", "c" ] ;

function array_search2($n,$array) {
  $i = 0;
  foreach($array as $letter){
      if($letter == $n){
          return $i;
      }
      $i += 1;
  }
  return false;
}
$test = array_search2("z",$letters);
echo $test;
var_dump($test);


// 例外処理
// ２つの引数の合計値を返却する
function sum($num1, $num2) {
  // 引数が数値かを判定する
  if (is_numeric($num1) && is_numeric($num2)) {
      return $num1 + $num2;
  }

  // いずれかの引数が数値以外の場合
  throw new InvalidArgumentException('引数には数値以外を設定しないでください');
}

// 引数がどちらも正常なので 1+2 の結果である3が表示されます
echo sum(1, 2).PHP_EOL;

// 引数に数値以外を指定すると例外が発生するので、それをキャッチしてエラーメッセージを表示します
try {
  sum('ABC', 2).PHP_EOL;
} catch (InvalidArgumentException $e) {
  echo $e->getMessage().PHP_EOL;
}

// 例外処理
function func($arg) {
  echo "func start"."\n";
  try {
      // $argが0だったら例外を投げる
      if ($arg == 0) {
          throw new Exception();
      }

      // $argの値を表示
      echo "arg=".$arg;
      echo "\n";
  } catch(Exception $e) {
      echo "catch Exception"."\n";
  }
  echo "func end"."\n";
}

func(10); // 引数10でfunc関数を実行
echo "\n";
func(0); // 引数0でfunc関数を実行

$test = num($numbers);
echo $test;
// Your code here!
#関数の定義
function hello($name){
  // echo "hello".$name;
  return "hello".$name;
}
#関数の実行
$test = hello("小林");
echo $test;

?>