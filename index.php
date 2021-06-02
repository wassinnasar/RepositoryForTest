<?php

function arrayRound($inputArray){

$result = [];
$innerArray = [];
$innerInteger = 0;


$i = 0;
do{
    $arr = [];
   
    $arr[$i] = $inputArray;
   $innerArray = [];
  for($j = 0;count($inputArray)> $j;$j++){
    echo $inputArray[$j].' ';
    if($j % 2 == 0){
       $temp1 = $inputArray[$j];
    } else {
       $temp2 = $inputArray[$j];
       if($temp1 >= $temp2){
         $innerArray[$innerInteger] = $temp1;
       } else {
         $innerArray[$innerInteger] = $temp2;
       }
       $innerInteger++;
    }
  }
  if(count($inputArray)% 2 == 1 && count($inputArray) >= 2) {
    $inputArray = $innerArray;
    array_unshift($inputArray, $temp1);
  } else {
    $inputArray = $innerArray;
  }
  $innerInteger = 0;
  echo '<br>';
   
   if(count($arr) > 0) {
         $result[$i] = $arr;
   }
   $i++;
}
while(count($inputArray) > 0);{
return $result;
}
}


$arrayLength = rand(1,10);
$inputArray = [];
for($i = 0;$i<$arrayLength;$i++){
  $inputArray[$i] = rand(1,10);
}
  var_dump(arrayRound($inputArray));
?>