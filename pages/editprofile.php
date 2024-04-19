<section class="posts">
    <div class="edit-header">
        <div><a href="/x-clone?page=profile" style="color: unset; text-decoration: none;"><i class="fa-solid fa-xmark"></i></a> <span>Edit profile</span></div>
        <button form="editprofile">Save</button>
    </div>
    <form action="" id="editprofile">
        <figure class="banner edit-banner">
            <img src="" alt="user profile banner">
            <label for="banner" class="fac"><i class="fa-solid fa-camera"></i></label>
            <input type="file" name="banner" id="banner" class="hide-input">
        </figure>
        <div style="padding: 0 20px;">
            <div class="edit-dp edit-banner">
                <figure class="avi">
                    <img src="/x-clone/assets/image/user-icon-placeholder-1.png" alt="user profile image">
                    <label for="avi" class="fac"><i class="fa-solid fa-camera"></i></label>
                    <input type="file" name="avi" id="avi" class="hide-input">
                </figure>
            </div>
            <div class="edit-info">
                <fieldset>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </fieldset>
                <fieldset>
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" cols="50" rows="3"></textarea>
                </fieldset>
                <fieldset>
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location">
                </fieldset>
                <fieldset>
                    <label for="website">Website</label>
                    <input type="text" name="website" id="website">
                </fieldset>
                <div>
                    <label for="dob">Birth Date</label>
                    <input type="date" name="dob" id="dob">
                </div>
            </div>
        </div>
    </form>
</section>