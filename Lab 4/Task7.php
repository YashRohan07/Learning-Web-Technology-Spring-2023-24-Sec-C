<?php
$rows = 3;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br/>";
}

 

echo"<hr/>";
$rows = 3;

for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br/>";
}
echo"<hr/>"; 

$arr=array('A','B','C','D','E');

for ($i = 0; $i <= $count($arr); $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $arr[$j];
    }
    echo "<br/>";
}






?>