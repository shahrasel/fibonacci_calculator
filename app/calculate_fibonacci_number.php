<?php
include_once "FibonacciClass.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$fibonacci = new FibonacciClass();

try { // if the parameter is a number
    $value = $fibonacci->getNumber($_GET['number']);
    http_response_code(200);
    $arr['message'] = "successful";
    $arr['fibonacci_number'] = $value;
    echo json_encode($arr);
}
catch (TypeError $e) { // if the parameter is not a number
    http_response_code(500);
    $arr['message'] = "Error! Parameter must be an integer";
    echo json_encode($arr);
}

