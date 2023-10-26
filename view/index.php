<?php
session_start();

if (array_key_exists('page', $_GET)) {
  $page = $_GET['page'];
}
echo $page;
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
  <link rel="stylesheet" href="../css/event.css" type="text/css" />
  <link rel="stylesheet" href="../css/maincontent.css" type="text/css" />
</head>

<body class="gridContainer">
  <header class="gridTop">
    <nav class="navbar">
      <a href="../" class="nav-logo">Projekt Guru</a>
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="?page=start" class="nav-link">start</a>
        </li>
        <li class="nav-item">
          <a href="?page=newchar" class="nav-link">newchar</a>
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
  switch ($page) {
    case 'start':
      require 'start.php';
      break;
    case 'newchar':
      require 'newchar.php';
      break;
    default:

      break;

  }
  ?>


  <div class="gridRight"></div>

  <?php
  if (true) {
    require('eventbar.php');
  }

  ?>

  <footer class="gridBot"></footer>

  <script>
    var player = document.querySelector("#playerChar");
    var comp1 = document.querySelector("#companionOneObject");
    var comp2 = document.querySelector("#companionTwoObject");
    var btn = document.querySelector(".theButton");
    var bgImageDiv = document.querySelector(".gridEvent-background");
    btn.addEventListener("click", () => {
      animate();
    });

    function animate() {
      setTimeout(function () {
        player.style.transform = "translateX(35px)";
        player.style.transition = "transform 0.1s ease-in-out";
        player.style.backgroundImage = "url(../assets/char_2/w1.png)";
      }, 10);

      setTimeout(function () {
        comp1.style.transform = "translateX(35px)";
        comp1.style.transition = "transform 0.1s ease-in-out";
      }, 100);

      setTimeout(function () {
        comp2.style.transform = "translateX(35px)";
        comp2.style.transition = "transform 0.1s ease-in-out";
      }, 200);

      setTimeout(function () {
        player.style.transform = "translateX(0px)";
        player.style.backgroundImage = "url(../assets/char_2/anim_walk.gif)";
      }, 100);

      setTimeout(function () {
        comp1.style.transform = "translateX(0px)";
      }, 200);

      setTimeout(function () {
        comp2.style.transform = "translateX(0px)";
      }, 300);
      pauseBg();
    }

    function pauseBg() {
      if (bgImageDiv.style.animationPlayState == "running") {
        bgImageDiv.style.animationPlayState = "paused";
      } else {
        bgImageDiv.style.animationPlayState = "running";
      }
    }

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