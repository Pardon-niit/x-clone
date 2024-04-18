<nav class="main-nav">
    <div>
        <i class="bi bi-house"></i>
        <p>Home</p>
    </div>
    <div>
        <i class="fa-solid fa-magnifying-glass"></i>
        <p>Search</p>
    </div>
    <?php echo isset($_SESSION['userid']) ? "
    <div>
        <i class='fa-regular fa-bell'></i>
        <p>Notifications</p>
    </div>
    <div>
        <i class='fa-regular fa-envelope'></i>
        <p>Messages</p>
    </div>
    <div>
        <i class='fa-brands fa-x-twitter'></i>
        <p>Premium</p>
    </div>
    <div>
        <i class='fa-regular fa-user'></i>
        <p>Profile</p>
    </div>
    <div>
        <i class='fa-solid fa-ellipsis'></i>
        <p>More</p>
    </div> " : ""?>
    <a style="text-decoration: none;" href="<?php echo isset($_SESSION['userid']) ? "" : "/x-clone/auth/signup.php" ?>"><button class="new-post-btn">Post</button></a>
</nav>