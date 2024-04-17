<?php
$username = "root";
$password = "";
$db = "xclone";

$conn = mysqli_connect("localhost", $username, $password, $db);

if (!$conn) {
    die("Connection Failed " . mysqli_connect_errno());
}

$userTable = "CREATE TABLE IF NOT EXISTS users(
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(100) NOT NULL UNIQUE,
            username VARCHAR(100) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            isVerified BOOLEAN DEFAULT false,
            isActive BOOLEAN DEFAULT false,
            isOnline BOOLEAN DEFAULT false,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        );";
$res = mysqli_query($conn, $userTable);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    function signup($conn){
        $email = $_POST['email'];
        $username = $_POST["username"];
        $password = $_POST["password"];


        $user_data = "INSERT INTO users(email, username, password) VALUES(?, ?, ?)";
        $sqli = mysqli_prepare($conn, $user_data);
        mysqli_stmt_bind_param($sqli, "sss", $email, $username, $password);

        if (mysqli_stmt_execute($sqli)){
            echo "<div><h2>Account created Successfully!</h2></div>";
            header("refresh:2; url=/x-clone/auth/login.php");
        }
    }
}
if (isset($_POST['signup'])){
    signup($conn);
}
if (isset($_POST['login'])){
    // login($conn)
    echo "you have not finsished the code";
}
?>;