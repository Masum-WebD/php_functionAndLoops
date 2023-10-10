<?php


// $numbers=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

function isEven($number){
    for($i=1; $i<=$number; $i++){
        if($i % 2 == 0){
            echo $i . PHP_EOL;
        }   
    }
    
}
isEven(20);
// $getEvenNumber= array_filter($numbers , 'isEven',);
// print_r($getEvenNumber);
echo "========================================" . PHP_EOL;

//Get even number use while  loops

$number = 1;
while($number <=20){
    if($number%2 == 0){
        echo $number . PHP_EOL;
    }   
    $number ++; 
    
}
//Get even number use do..while loops
echo "========================================" . PHP_EOL;
$num = 1;
do{
    if($num%2 == 0){
        echo $num . PHP_EOL;
    }
    $num++;
}while($num <=20);