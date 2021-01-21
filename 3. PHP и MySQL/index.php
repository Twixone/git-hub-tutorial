<?php
require_once "configs.php"; // подключение файла

$mysqli = false;
function connectDB()	{
    global $mysqli;
    $mysqli = new mysqli (HOST, HOST_NAME, PASS, HOST_NAME);
    $mysqli->query("SET NAMES utf8");
}

function getFields($query) {
    global $mysqli;
    connectDB();
    $result_set = $mysqli->query($query);
    closeDB();
    return resultSetToArray($result_set);
}

function resultSetToArray($result_set)	{
    $array = array();
    while (($row = $result_set->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}