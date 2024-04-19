<?php
include "./utils/dbconfig.php";

//  User Table createion 
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

// User_info Tabole creation
$userinfoTable = "CREATE TABLE IF NOT EXISTS user_info(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        banner_img VARCHAR(100),
        bio VARCHAR(255),
        avatar VARCHAR(255) DEFAULT 'placeholder.png',
        website VARCHAR(50), 
        location VARCHAR(100),
        dob DATE,
        user_id int NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    );";
$res1 = mysqli_query($conn, $userinfoTable);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function signup($conn)
    {
        $err = []; // error handling

        $name = $_POST["name"];
        $email = $_POST['email'];
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);


        $user_data = "INSERT INTO users(email, username, password) VALUES(?, ?, ?);";
        $sqli = mysqli_prepare($conn, $user_data);
        mysqli_stmt_bind_param($sqli, "sss", $email, $username, $password);

        if (mysqli_stmt_execute($sqli)) {
            $user_id = mysqli_insert_id($conn);
            $userinfo_data = "INSERT INTO user_info(name, user_id) VALUES (?, ?);";
            $sqli2 = mysqli_prepare($conn, $userinfo_data);
            
            mysqli_stmt_bind_param($sqli2, "si", $name, $user_id);

            if (mysqli_stmt_execute($sqli2)) {
                echo '<div style="height: 90vh;display: flex;justify-content: center;align-items: center;">
                        <div style="width: 600px;height: 200px;display: flex;box-shadow: 4px 4px 8px 3px rgb(167 199 171 / 30%);justify-content: center;align-items: center;">
                            <p style="color: green;font-size: 40px;">Account Created Succesfully.</p>
                        </div>
                    </div>';
                header("refresh:2; url=/x-clone/auth/login.php");
            } else {
                echo "An error occured1";
            }
        } else {
            echo "An error occured2";
        }
    }
    function login($conn)
    {
        $err = []; // error handling

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
            $user_data = "SELECT * FROM users WHERE email = ?";
        } else {
            $user_data = "SELECT * FROM users WHERE username = ?";
        }

        $stmt = mysqli_prepare($conn, $user_data);
        mysqli_stmt_bind_param($stmt, "s", $username);

        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
            
            if($row){
                if (password_verify($password, $row['password'])){
                    session_start();

                    $_SESSION['username'] = $row['username'];
                    $_SESSION['userid'] = $row['id'];

                        echo '<div style="height: 90vh;display: flex;justify-content: center;align-items: center;">
                        <div style="width: 600px;height: 200px;display: flex;box-shadow: 4px 4px 8px 3px rgb(167 199 171 / 30%);justify-content: center;align-items: center;">
                            <p style="color: green;font-size: 40px;">Login Successful</p>
                        </div>
                    </div>';
                    header("refresh:2; url=/x-clone");
                } else {
                    $err["upi"] = "Username or password incorrect";
                    header("Location: /x-clone/auth/login.php?error=" . urlencode(serialize($err)));
                }
            } else {
                 $err["nf"] = "User not found";
                 header("Location: /x-clone/auth/login.php?error=" . urlencode(serialize($err)));
             }
        } else {
            echo "An error occured";
        }
    }
}
if (isset($_POST['signup'])) {
    signup($conn);
}
if (isset($_POST['login'])) {
    login($conn);
}
?>;