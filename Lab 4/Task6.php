<?php
$numbers = [10, 20, 30, 40, 50];
$searchElement = 30;

$found = false;

foreach ($numbers as $number) {
    if ($number == $searchElement) {
        echo "Element found in the array.";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "Element not found in the array.";
}
?>
