<?php 
function fibonacchi($first, $second,$limit){
    for($i=0;$i<$limit;$i++){
        $fib = $first +$second;
        $first = $second;
        $second = $fib;
        echo $fib . " ";
    }
}
fibonacchi(0,1,15);