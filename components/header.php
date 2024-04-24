<header class="header">
    <div>
        <i class="fa-brands fa-x-twitter logo"></i>
    </div>
    <div class="auth">
        <a href="/x-clone/auth/login.php" class="<?php echo isset($_SESSION['userid']) ? "auth-hide" : "" ?>"><button class="a-btn login">Login</button></a>
        <a href="/x-clone/auth/signup.php" class="<?php echo isset($_SESSION['userid']) ? "auth-hide" : "" ?>"><button class="a-btn signup">Sign Up</button></a>
        <?php echo isset($_SESSION['userid']) ? "<a href='/x-clone/auth/logout.php' class=''><button class='a-btn logout'>Logout</button></a>" : ""?>
    </div>
</header>