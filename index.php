<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | X</title>
    <link rel="stylesheet" href="./styling/components.css">
</head>

<body>
    <?php
        include "./components/header.php";
    ?>
    <main class="main">
        <aside class="left-side">
            <nav class="main-nav">
                <div>
                    <p>Home</p>
                </div>
                <div>
                    <p>Search</p>
                </div>
                <div>
                    <p>Settings</p>
                </div>
                <div>
                    <p>Profile</p>
                </div>
                <div>
                    <p>Twitter Blue</p>
                </div>
            </nav>
        </aside>
        <div class="container">
            <section class="posts"></section>
            <aside class="right-side trends"></aside>
        </div>
    </main>
    <?php
        include "./components/footer.php";
    ?>
</body>

</html>