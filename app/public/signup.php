<?php
include '../php/db.php';
include '../php/functions.php';
if (isset($_POST['submit'])) {
    createUser();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <title>Thapp signup</title>
</head>

<body class="signup-body">
    <main class="signup-main">
        <section class="container">
            <nav class="nav">
                <div class="logo-wrapper nav-left">
                    <a href="index.php"><img class="logo" src="./images/thapp-logo.svg" alt=""></a>
                </div>
                <div id="hamburger" class="hamburger">
                    <span class="hamburger__lines"></span>
                </div>
                <div class="navigation nav-right">

                    <ul class="nav-items">
                        <li class="nav-item"><a class="nav-item__links" href="index.php">Thapp</a></li>
                        <li class="nav-item"><a class="nav-item__links" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-item__links active" href="signup.php">Signup</a></li>
                    </ul>
                </div>
            </nav>
            <section class="main-dashboard">
                <img class="dashboard-img" src="./images/thapp-logo.svg" alt="Thapp logo">
                <h1 class="signup-heading">Thapp</h1>
                <h2 class="signup-sub-heading">Create a new account</h2>
                <p><?php
                    if (isset($_SESSION['message'])) {

                        echo $_SESSION['message'];
                        $_SESSION['message'] = "";
                    }

                    ?></p>
                <form action="" class="signup-form" method="POST">
                    <label for="fullName">Full name</label>
                    <input id="fullName" name="fullName" type="text" required>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" required>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" required>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" required>
                    <input id="signup-btn" type="submit" name="submit" value="Sign up!">
                </form>
                <p class="login-direct">Or click here to <a href="login.php">log in</a></p>
            </section>
        </section>
    </main>
    <footer>
        <img src="./images/thapp-logo.svg" alt="Thapp logo">
        <p>&copy; Copyright Thapp Inc. 2022 </p>
    </footer>
    <script src="js/index.js" defer></script>
</body>

</html>