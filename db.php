<?php

$host = "sql210.infinityfree.com";
$user = "if0_42420506";
$password = "ahmdWaleed2132";
$database = "if0_42420506_webtask";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>