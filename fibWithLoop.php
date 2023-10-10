<?php
$first = 0;
$second = 1;


for ($i = 0; $i < 10; $i++) {
    if ($i <= 10) {
        $fib = $first + $second;
        $first = $second;
        $second = $fib;
    }elseif ($fib > 100) {
        break; // Break out of the loop when Fibonacci number exceeds 100
    }
    echo $fib . " ";

}
