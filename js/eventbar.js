var player = document.querySelector("#playerChar");
var comp1 = document.querySelector("#companionOneObject");
var comp2 = document.querySelector("#companionTwoObject");
var btn = document.querySelector(".theButton");
var bgImageDiv = document.querySelector(".gridEvent-background");
btn.addEventListener("click", () => {
  animate();
});

pauseBg();

function animate() {
    pauseBg();
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
