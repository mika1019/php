<?php
function sum($max){
    
    return $max*2;
}
echo sum(100);
echo "\n";

function f($a, $b){
    return $a+$b;
}


function max2($arr){
    $sum = 1;
    foreach($arr as $a){
        $sum *= $a;
    }
    return $sum;
}
$test=[1, 3, 5 ,7, 9];
echo max2($test);
echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number=$a;
        }
    }
    return $max_number;
}
$number_list = [1, 3, 2, 9, 7, 5];
$number = max_array($number_list);

echo $number;
echo "\n";

$sample="<b>sample</b>";
echo strip_tags($sample);
echo "\n";

$fruits=["apple","orange"];
array_push($fruits,"banana");
print_r($fruits);
echo "\n";

$array1=[1,2];
$array2=[10,11];
$array3=[100,101];
$array=array_merge($array1,$array2,$array3);
print_r($array);
echo "\n";

echo time();
//２日後のタイムスタンプ
$time=time()+(2*24*60*60);
echo $time;
echo "\n";

$timestamp = mktime(0, 0, 0, 10, 1, 2012);
echo $timestamp;
echo "\n";

echo date('Y/m/d');
echo date('Y-m-d H:i:s');
echo date('Y-m-d H:i:s', 1000);



?>