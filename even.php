<?php

function checkevenorodd($number) {
    if ($number % 2 == 0) {
        echo $number . " is even.";
    } else {
        echo $number . " is odd.";
    }
}

Example usage:
$testNumber = 3;
checkevenorodd($testNumber);

?>