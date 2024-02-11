<?php
function calculateArea($length, $width) {
    return $length * $width;
}

function calculatePerimeter($length, $width) {
    return 2 * ($length + $width);
}

$length = 5;
$width = 8;

$area = calculateArea($length, $width);
$perimeter = calculatePerimeter($length, $width);

echo "Length: $length units\n";
echo "Width: $width units\n";
echo "Area: $area square units\n";
echo "Perimeter: $perimeter units\n";
?>
