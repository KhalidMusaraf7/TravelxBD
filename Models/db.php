<?php

function conn() {
    $serverName = "localhost";
    $userName = "root";
    $pass = "";
    $dbName = "sellerdb";
    $con = new mysqli($serverName, $userName, $pass, $dbName);
    return $con;
}

?>
