<?php
$username = "root";
$password = "";
$db = "xclone";

$conn = mysqli_connect("localhost", $username, $password, $db);

if (!$conn) {
    die("Connection Failed " . mysqli_connect_errno());
}
?>