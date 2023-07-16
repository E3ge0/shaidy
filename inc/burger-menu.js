var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");
var burgerIcon = document.getElementById("burgerIcon");
var menu = document.getElementById("mySidenav");
var burgerLines = burgerIcon.getElementsByClassName("burger-line");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
  sidenav.classList.add("active");
  burgerIcon.classList.add("active");
}

function closeNav() {
  sidenav.classList.remove("active");
  burgerIcon.classList.remove("active");
}

burgerIcon.addEventListener("click", function () {
  this.classList.toggle("active");
  if (sidenav.classList.contains("active")) {
    sidenav.classList.remove("active");
  } else {
    sidenav.classList.add("active");
  }
});

for (var i = 0; i < burgerLines.length; i++) {
  burgerLines[i].addEventListener("click", function () {
    burgerIcon.classList.remove("active");
    sidenav.classList.remove("active");
  });
}

document.addEventListener("click", function (event) {
  var targetElement = event.target;
  if (
    targetElement !== burgerIcon &&
    !burgerIcon.contains(targetElement) &&
    targetElement !== menu &&
    !menu.contains(targetElement)
  ) {
    burgerIcon.classList.remove("active");
    sidenav.classList.remove("active");
  }
});
