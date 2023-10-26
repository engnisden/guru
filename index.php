<?php

if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
  session_start();
} else {
  //We got an error message?
  if ($_SESSION['ErrorMessage'] > 0) {
    //display message
  }
  //is user logged in?
  if ($_SESSION['LoggedIn']) {
    header('Location: inside/index.php');
  }
}

switch ($_GET['page']) {
  case 'start':
    /*
    require 'inc/news.php'; // your news functions
    include 'tpl/news.tpl.php'; // your news template
    */
    echo 'Hej världen';
    break;
  default:
    if ($_GET['filename'] == '') {
      include 'tpl/home.tpl.php';
    } else {
      header('HTTP/1.0 404 Not Foundd');
      include 'tpl/page_not_found.tpl.php';
    }
    break;
}



?>

<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Katter</title>

  <link rel="stylesheet" href="css/GridLayout.css" type="text/css" />
  <link rel="stylesheet" href="css/main.css" type="text/css" />
  <link rel="stylesheet" href="css/menu.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
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
  switch ($_GET['page']) {
    case 'start':

      require 'maincontent.php'; // your news functions
      echo 'Hej världen';
      break;
  }

  ?>

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