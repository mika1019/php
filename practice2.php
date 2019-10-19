<?php
$name="mika";
if ($name=="mika"){
    echo "私は mika です";
}else{
    echo " mika ではありません";
}

$total=0;
for ($i=0;$i<=10000;$i++){
    $total+=$i;
}
echo $total;

$fruits=array("apple","orange","grape","banana","cherry");
foreach($fruits as $fruits){
    echo "要素は" .$fruits;
    "\n";
}

$start = 1;
$end = 100;
for($i=$start; $i<=$end; $i++){
    if($i%5==0){
        echo $i;
    }
}