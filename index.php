<?php

if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
  session_start();
} else {
  //We got an error message?
  if ($_SESSION['ErrorMessage'] > 0) {
    //display message
  }
  //is user logged in?

}

if ($_SESSION['loggedIn']) {
  header('Location: view/');
}

?>

<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Guru</title>

  <link rel="stylesheet" href="css/GridLayout.css" type="text/css" />
  <link rel="stylesheet" href="css/main.css" type="text/css" />
  <link rel="stylesheet" href="css/menu.css" type="text/css" />
  <link rel="stylesheet" href="css/event.css" type="text/css" />
</head>

<body class="gridContainer">
  <header class="gridTop">
    <nav class="navbar">
      <a href="#" class="nav-logo">Projekt Guru</a>
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="index.php?page=start" class="nav-link">Start</a>
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

  <?php
  require 'maincontent.php';
  ?>

  <div class="gridRight"></div>

  <footer class="gridBot"></footer>

  <script>
    <?php
    require 'js/hamburger.js';
    ?>
  </script>
</body>

</html>