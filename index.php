<?php
header("content-type: text/plain");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: "origin, x-requested-with, content-type"');
header('Access-Control-Allow-Methods "GET, POST, OPTIONS"');

$name = (isset($_POST['username'])) ? $_POST['username'] : 'no name';
$computedString = "Hi, " . $name . "!";
$array = ['username' => $name, 'computedString' => $computedString];
echo json_encode($array);

?>