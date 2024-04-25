<section class="posts">
    <section class="new-post">
        <figure>
            <img src="<?php echo $_SESSION['user']['avatar'] == 'placeholder.png' ? '/x-clone/assets/image/' . $_SESSION['user']['avatar'] : '/x-clone/assets/uploads/' . $_SESSION['user']['avatar'] ?>" alt="user profile avatar">
        </figure>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <textarea name="content" id="" cols="30" rows="10" placeholder="What is happening?!"></textarea>
            </div>
            <div class="icon-post">
                <div><i class="bi bi-card-image"></i><i class="bi bi-sliders"></i></div>
                <div><button name="submit" class="postbtn">Post</button></div>
            </div>
        </form>

        <?php
        include "./utils/dbconfig.php";
        include "./utils/moment.php";

        if (isset($_POST["submit"])) {
            $postTable = "CREATE TABLE IF NOT EXISTS posts(
                id INT AUTO_INCREMENT PRIMARY KEY,
                content VARCHAR(255),
                user_id INT NOT NULL,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES users(id)
                );";
            $res = mysqli_query($conn, $postTable);
            
                //get form data
                $content = $_POST['content'];

            $post_data = "INSERT INTO posts(content, user_id) VALUES(?, ?);";
            $stmt = mysqli_prepare($conn, $post_data);
            mysqli_stmt_bind_param($stmt, "si", $content, $_SESSION['userid']);

            if (mysqli_stmt_execute($stmt)){
                header("refresh:2;");

            }
        }
        
        ?>
        
        

    </section>
    <?php
    $qur2 = "SELECT 
    posts.content, 
    posts.created_at, 
    user_info.name, 
    users.username, 
    user_info.avatar 
    FROM 
        posts 
    JOIN 
        users ON posts.user_id = users.id 
    JOIN 
        user_info ON users.id = user_info.user_id
    ORDER BY 
        posts.created_at DESC";
    $stmt = mysqli_prepare($conn, $qur2);
    
    if ($stmt){
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($stmt, $content, $created, $name, $username, $avatar);
            While(mysqli_stmt_fetch($stmt)){

                echo "<div class='post'>
                    <a href=''>
                    <figure class='dp'><img src='./assets/uploads/$avatar' alt='user dp'></figure>
                    </a>
                    <div class='p-body'>
                        <div class='post-top'>
                            <div class='l-top'>
                                <a href=''>
                                    <h3>$name</h3>
                                </a>
                                <a href=''>
                                    <p>@$username</p>
                                </a>
                                <span> &bull; " . moment($created); echo "</span>
                            </div>
                            <div class='r-top'>
                                <i class='fa-solid fa-ellipsis'></i>
                            </div>
                        </div>
                        <div class='content'>
                            <p>$content</p>
                        </div>
                        <div class='reaction'>
                            <div>
                                <i class='bi bi-chat'></i>
                                <span>13</span>
                            </div>
                            <div>
                                <i class='fa-solid fa-retweet'></i>
                                <span>5</span>
                            </div>
                            <div>
                                <i class='fa-regular fa-heart'></i>
                                <span>27</span>
                            </div>
                            <div>
                                <i class='fa-solid fa-chart-simple'></i>
                                <span>2.5k</span>
                            </div>
                            <div>
                                <i class='fa-regular fa-bookmark'></i>
                                <i class='fa-solid fa-arrow-up-from-bracket'></i>
                            </div>
                        </div>
                        </div>
                    </div>";
            }
        }
    }
    ?>
        
</section>