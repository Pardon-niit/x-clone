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
    <a href=''><div>
        <i class='fa-regular fa-bell'></i>
        <p>Notifications</p>
    </div></a>
    <a href=''><div>
        <i class='fa-regular fa-envelope'></i>
        <p>Messages</p>
    </div></a>
    <a href=''><div>
        <i class='fa-brands fa-x-twitter'></i>
        <p>Premium</p>
    </div></a>
    <a href='/x-clone?page=profile'><div>
        <i class='fa-regular fa-user'></i>
        <p>Profile</p>
    </div></a>
    <a href=''><div>
        <i class='fa-solid fa-ellipsis'></i>
        <p>More</p>
    </div></a> " : "" ?>
    <a style="text-decoration: none;" href="<?php echo isset($_SESSION['userid']) ? "" : "/x-clone/auth/signup.php" ?>"><button class="new-post-btn">Post</button></a>
</nav>
<?php echo isset($_SESSION['userid']) ? "
<div class='profile-nav'>
    <div class='avi-name'>
        <figure><img src='/x-clone/assets/image/user-icon-placeholder-1.png' alt='user avatar'></figure>
        <div>
            <h3>Twitter User</h3>
            <p>@twitteruser</p>
        </div>
    </div>
    <div>
        <i class='fa-solid fa-ellipsis'></i>
    </div>
</div>" : "" ?>