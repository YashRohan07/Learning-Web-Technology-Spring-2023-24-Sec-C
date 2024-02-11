<?php
function checkOddEven($number) {
    if ($number % 2 == 0) {
        echo "$number is even.";
    } else {
        echo "$number is odd.";
    }
}

$number = 15;
checkOddEven($number);
?>
