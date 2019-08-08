<?php
$i=3;
$newarray = array();
while((($i%3) == 0) & ($i<=100))
{
    $newarray[$i] = "Linio";
    $i=$i+3;
}

$i=5;
$newarray2 = array();
while((($i%5) == 0) & ($i<=100))
{
    $newarray2[$i] = "IT";
    $i=$i+5;
}

$checkBoth = array_keys(array_intersect_key($newarray,$newarray2));
foreach($checkBoth as $both){
    $newarray2[$both] = "Linianos";
}
$finalArray = $newarray2+$newarray;
ksort($finalArray);
foreach(range(1,100) as $number){
    $printVal = $number;
    if(isset($finalArray[$number])){
        $printVal = $finalArray[$number];
    }
    print $printVal."\n";
}
