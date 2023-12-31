<?php

if ($_SESSION['name'] == '') {
    echo '';
}

?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Katter?</title>

    <link rel="stylesheet" href="../css/GridLayout.css" type="text/css" />
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
    <link rel="stylesheet" href="../css/menu.css" type="text/css" />
    <link rel="stylesheet" href="../css/animate.css" type="text/css" />
    <link rel="stylesheet" href="../css/event.css" type="text/css" />
</head>

<body class="gridContainer">
    <header class="gridTop">
        <nav class="navbar">
            <a href="#" class="nav-logo">Projekt Guru</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Start</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Updates</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <div class="gridLeft"></div>

    <main class="gridMain">
        <p>Some info will be shown here as well as the login button</p>
        <form action="html/inside.html">
            <input type="submit" value="testa animationer" />
        </form>
        <div>
            <h3>Logga in</h3>
        </div>

        <form class="form-group" action="backlogic/login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form-control" />
            <label>Password</label>
            <input type="password" name="password" class="form-control" />
            <button class="btn btn-block btn-success mt-2" name="login">
                Login
            </button>
            <p class="mt-2 text-center">
                Already registered? <a href="index.php">Click here</a> to Create
                Account
            </p>
        </form>
        <h1>Register</h1>
        <form action="backlogic/register.php" method="post" autocomplete="off">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required />
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required />
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="Email" id="email" required />
            <input type="submit" value="Register" />
        </form>
    </main>

    <div class="gridRight"></div>

    <footer class="gridBot"></footer>

    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }

        function getPosition(element) {
            var rect = element.getBoundingClientRect();
            return {
                x: rect.left,
                y: rect.top,
            };
        }
    </script>
</body>

</html>