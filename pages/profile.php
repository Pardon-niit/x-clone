<?php
include "./utils/dbconfig.php";

$qur = "SELECT * FROM user_info "
    . "JOIN users ON user_info.user_id = users.id "
    . "WHERE users.id = " . $_SESSION['userid'];

$stmt = mysqli_prepare($conn, $qur);
if ($stmt) {
    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>


<section class="posts">
    <div class="user-nav-container">
        <div class="user-nav">
            <a href="/x-clone" style="color: unset; text-decoration: none;"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="user-nav-info">
            <h3><?php echo $row['name'] ?></h3>
            <p>0 posts</p>
        </div>
    </div>
    <figure class="banner">
        <img src="" alt="user profile banner">
    </figure>
    <div class="user-nav-info-container">
        <div class="user-nav-info">
            <figure class="avi">
                <img src="/x-clone/assets/image/user-icon-placeholder-1.png" alt="user profile image">
            </figure>
            <div class="user-bio">
                <h2 class="profile-name"><?php echo $row['name'] ?></h2>
                <p class="username">@<?php echo $row['username'] ?></p>
                <div class="bio">
                    <p>
                        <?php echo $row['bio'] ?>
                    </p>
                </div>
                <div>
                    <div class="profile-icon">
                        <i></i>
                        <span></span>
                    </div>
                    <div class="profile-icon">
                        <i></i>
                        <span></span>
                    </div>
                    <div class="profile-icon">
                        <i></i>
                        <span></span>
                    </div>
                </div>
                <div class="followers">
                    <p><span><strong>0</strong></span> Following</p>
                    <p><span><strong>0</strong></span> Followers</p>
                </div>
            </div>
        </div>
        <div class="user-edit-info">
            <a href="/x-clone?page=editprofile" style="text-decoration: none; color: unsset;"><button>Edit profile</button></a>
        </div>
    </div>
    <div class="user-content">
        <nav>
            <div>
                <a href="">
                    <p>Posts</p>
                </a>
            </div>
            <div>
                <a href="">
                    <p>Likes</p>
                </a>
            </div>
        </nav>
    </div>
</section>