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
    <div class="edit-header">
        <div><a href="/x-clone?page=profile" style="color: unset; text-decoration: none;"><i class="fa-solid fa-xmark"></i></a> <span>Edit profile</span></div>
        <button form="editprofile">Save</button>
    </div>
    <form action="pages/handleEdit.php" method="POST" id="editprofile" enctype="multipart/form-data">
        <figure class="banner edit-banner">
            <img src="<?php echo $row['banner_img']?>" alt="user profile banner">
            <label for="banner" class="fac"><i class="fa-solid fa-camera"></i></label>
            <input type="file" name="banner" id="banner" class="hide-input">
        </figure>
        <div style="padding: 0 20px;">
            <div class="edit-dp edit-banner">
                <figure class="avi">
                    <img src=<?php echo  "/x-clone/assets/image/$row[avatar]"?> alt="user profile image">
                    <label for="avi" class="fac"><i class="fa-solid fa-camera"></i></label>
                    <input type="file" name="avatar" id="avi" class="hide-input">
                </figure>
            </div>
            <div class="edit-info">
                <fieldset>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?php echo $row['name']?>">
                </fieldset>
                <fieldset>
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" cols="50" rows="3"  value="<?php echo $row['bio']?>"></textarea>
                </fieldset>
                <fieldset>
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location"  value="<?php echo $row['location']?>">
                </fieldset>
                <fieldset>
                    <label for="website">Website</label>
                    <input type="text" name="website" id="website"  value="<?php echo $row['website']?>">
                </fieldset>
                <div>
                    <label for="dob">Birth Date</label>
                    <input type="date" name="dob" id="dob"  value="<?php echo $row['dob']?>">
                </div>
            </div>
        </div>
    </form>
</section>