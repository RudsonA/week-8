<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: "origin, x-requested-with, content-type"');
header('Access-Control-Allow-Methods "GET, POST, OPTIONS"');

$r = (isset($_POST['text'])) ? $_POST['text'] : 'no r';
$computedString = "Hi, " . $r . "!";
$array = ['text' => $r, 'computedString' => $computedString];
echo json_encode($array);

?>