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
      <a href="inside.html" class="nav-logo">Projekt Guru</a>
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="#" class="nav-link">Services</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Blog</a>
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
    <div class="mgLeft">Sub menu</div>
    <div class="mgHeader">Title</div>
    <div class="mgMain">
      <div class="createPlayerCont">
        <h3>Welcome $namn</h3>
        <p>Name your character</p>
        <form class="createPlayerForm" action="../backlogic/createPlayer.php" method="post" autocomplete="off">
          <label for="charname">
            <i class="fas fa-user"></i>
          </label>
          <input type="text" name="charname" placeholder="Character name" id="charname" required />
          <p>Please choose your avatar:</p>
          <div class="radioMainCont">
            <div class="radioCont">
              <div class="radioImage" id="radio1"></div>
              <input type="radio" id="char_2" name="avatar" value="char_2" />
            </div>
            <div class="radioCont">
              <div class="radioImage" id="radio2"></div>
              <input type="radio" id="char_3" name="avatar" value="char_3" />
            </div>
            <div class="radioCont">
              <div class="radioImage" id="radio3"></div>
              <input type="radio" id="char_4" name="avatar" value="char_4" />
            </div>
          </div>
          <div></div>
          <div class="countryCont">
            <select name="country" id="country">
              <option value="1">north</option>
              <option value="2">east</option>
              <option value="3">west</option>
            </select>
          </div>
          <br /><br />
          <input type="submit" value="Skapa" />
        </form>
      </div>
    </div>
    <div class="mgMenu">
      <div class="mgmProfile">
        <div class="mgmProfileName">
          <h6>$name</h6>
        </div>
        <div class="mgmProfileImg"></div>
      </div>
      <div class="mgmStats1"></div>
      <div class="mgmStats2"></div>
      <!--<div class="mgmAir"></div>-->
      <div class="mgmLinks">
        <a href="../backlogic/someotherfile.php">
          <div class="mgmLinksTitle">Start</div>
        </a>
        <div class="mgmLinksContent">
          <a href="../backlogic/someotherfile.php">
            <div class="menuLinkBox">Activities</div>
          </a>
          <a href="../backlogic/someotherfile.php">
            <div class="menuLinkBox">Character</div>
          </a>
          <a href="../backlogic/someotherfile.php">
            <div class="menuLinkBox">Clan</div>
          </a>
          <a href="../backlogic/someotherfile.php">
            <div class="menuLinkBox">Country</div>
          </a>
          <a href="../backlogic/someotherfile.php">
            <div class="menuLinkBox">Town</div>
          </a>
          <a href="../backlogic/testarea.php">
            <div class="menuLinkBox">Test</div>
          </a>
          <a href="../backlogic/start.php">
            <div class="menuLinkBox">Test2</div>
          </a>
        </div>
      </div>
      <div class="mgmFoot"></div>
    </div>
    <div class="mgFoot">
      <div>
        <p>
          <button onclick="animate()" class="theButton">
            Starta animationer
          </button>
        </p>
      </div>
    </div>
  </main>

  <div class="gridRight"></div>

  <div class="gridEvent-Main">
    <div class="gridEvent-background">
      <div class="gridEvent-content">
        <div class="eventTop"></div>
        <div class="eventLeft">
          <div class="debug-text">left</div>
        </div>
        <div class="eventMid">
          <div class="debug-text">mid</div>
          <div class="characterObject">
            <div class="characterSub" id="companionTwoObject"></div>
          </div>
          <div class="characterObject">
            <div class="characterSub" id="companionOneObject"></div>
          </div>
          <div class="characterObject">
            <div class="characterSub" id="playerChar"></div>
          </div>
          <div class="characterObject">
            <div class="spacer"></div>
          </div>
          <div class="characterObject">
            <div class="characterSub" id="enemyChar"></div>
          </div>
        </div>

        <div class="eventRight">
          <div class="debug-text">right</div>
        </div>
      </div>
      <div class="eventBottom"></div>
    </div>
  </div>

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