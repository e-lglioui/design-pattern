<?php
include "Connection.php";
$instance = Connection::cretinsobjet();
//var_dump($instance);
$conn = $instance->getConnection();
var_dump($conn);

$instance = Connection::cretinsobjet();
$conn = $instance->getConnection();
var_dump($conn);

$instance = Connection::cretinsobjet();
$conn = $instance->getConnection();
var_dump($conn);