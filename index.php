<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | X</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./styling/index.css">
    <link rel="stylesheet" href="./styling/components.css">
</head>

<body>
    <div class="container">
        <?php
        include "./components/header.php";
        ?>
        <main class="main">
            <aside class="left-side">
                <nav class="main-nav">
                    <div>
                        <i class="bi bi-house"></i>
                        <p>Home</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <p>Search</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-bell"></i>
                        <p>Notifications</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-envelope"></i>
                        <p>Messages</p>
                    </div>
                    <div>
                        <i class="fa-brands fa-x-twitter"></i>
                        <p>Premium</p>
                    </div>
                    <div>
                        <i class="fa-regular fa-user"></i>
                        <p>Profile</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-ellipsis"></i>
                        <p>More</p>
                    </div>
                </nav>
            </aside>
            <div class="container">
                <section class="posts">
                    <div class="post">
                        <figure></figure>
                        <div></div>
                    </div>
                </section>
                <aside class="right-side trends"></aside>
            </div>
        </main>
        <!-- <?php
                include "./components/footer.php";
                ?> -->
    </div>
</body>

</html>