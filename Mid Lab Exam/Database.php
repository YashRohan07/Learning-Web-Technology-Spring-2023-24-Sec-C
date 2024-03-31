<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "database";

function dbConnect(){
     global $dbname;
     global $dbpass;

    $con = mysqli_connect($GLOBALS['host'], $GLOBALS['dbuser'], $dbpass, $dbname);
    return $con;
}


?>