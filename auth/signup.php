<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | X</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/auth.css">
</head>

<body>
    <main class="main">
        <section class="logo-container">
            <i class="fa-brands fa-x-twitter auth-logo"></i>
        </section>
        <section class="form-container">
            <form action="./handleauth.php" class="auth-form" method="POST">
                <h2>Happening now</h2>
                <h3>Join today.</h3>
                <fieldset>
                    <input type="text" name="username" placeholder="Username">
                </fieldset>
                <fieldset>
                    <input type="text" name="email" placeholder="Email">
                </fieldset>
                <fieldset>
                    <input type="password" name="password" id="password" placeholder="Password">
                </fieldset>
                <div>
                    <input type="checkbox" id="terms">
                    <label for="terms">By signing up, you agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>, including <a href="">Cookie</a> Use. </label>
                </div>
                <fieldset class="s-btn">
                    <input type="submit" value="Login" name="signup">
                </fieldset>
                <p>Already have an account? <a href="/x-clone/auth/login.php">Login</a></p>
            </form>
        </section>
    </main>
</body>

</html>