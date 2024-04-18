<header class="header">
    <div>
        <i class="fa-brands fa-x-twitter logo"></i>
    </div>
    <div class="auth">
        <a href="/x-clone/auth/login.php" class=<?php echo isset($_SESSION['userid']) ? "auth-hide" : "" ?>><button class="a-btn login">Login</button></a>
        <a href="/x-clone/auth/signup.php" class=<?php echo isset($_SESSION['userid']) ? "auth-hide" : "" ?>><button class="a-btn signup">Sign Up</button></a>
    </div>
</header>