<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: "origin, x-requested-with, content-type"');
header('Access-Control-Allow-Methods "GET, POST, OPTIONS"');

$text = $_POST['text']
if (isset($text) && !empty($text) ) {
    echo "<script> alert('Hello!') </script>";
} else {
    echo "<script> alert('Nope!') </script>";
}

?>