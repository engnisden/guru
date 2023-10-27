<?php
include('../backlogic/playercheck.php');
session_start();

if (array_key_exists('page', $_GET)) {
  $page = $_GET['page'];
}
if (!checkForPlayer()) {
  $page = 'newchar.php';
} else {

}
?>

<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Guru</title>

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
          <a href="?page=logout" class="nav-link">Contact</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>
  <script>
    <?php
    include 'hamburger.js';
    ?>
  </script>

  <div class="gridLeft"></div>

  <?php

  switch ($page) {
    case 'start':
      require 'start.php';
      break;
    case 'newchar':
      require 'newchar.php';
      break;
    case 'newchar':
      require 'lougout.php';
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
    <?php

    if (true) {
      include('../js/eventbar.js');
    }

    ?>
  </script>

</body>

</html>