<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | X</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/x-clone/styles/auth.css">
</head>

<body>
    <main class="main">
        <section class="logo-container">
            <i class="fa-brands fa-x-twitter auth-logo"></i>
        </section>
        <section class="form-container">
            <form action="./handleauth.php" method="POST" class="auth-form">
                <h2>Happening now</h2>
                <h3>Welcome back!</h3>
                <fieldset>
                    <input type="text" name="username" placeholder="Email/Username">
                </fieldset>
                <fieldset>
                    <input type="password" name="password" id="password" placeholder="Password">
                </fieldset>
                <fieldset class="s-btn">
                    <input type="submit" value="Login" name="login">
                </fieldset>
                <p>Don't have an account? <a href="/x-clone/auth/signup.php">Sign Up</a></p>
            </form>
        </section>
    </main>
</body>

</html>