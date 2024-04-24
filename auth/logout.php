<?php
session_start();

if (isset($_SESSION['userid'])){
    session_destroy();
    echo "Logout Successful";
    header("refresh:1; url=/x-clone");
} else {
    echo "Forbidden";
    header("refresh:1; url=/x-clone/auth/login.php");
}

?>