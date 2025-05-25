<?php

include 'connection.php';
session_start();

$username = $_POST['username'];
$password = $_POST['pass'];
$name = $_POST['name'];
$type = $_POST['type'];
$status = "A";      