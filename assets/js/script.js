var hamburgerButton = document.querySelector(".hamburger");
var sideMenu = document.querySelector(".side-menu");
var background_video = document.querySelector(".background_video");
var logo_section = document.querySelector(".logo_section");
var dark_theme_option = document.querySelector(".option");
var body_ele = document.querySelector("body");

function openMenu(event) {
  hamburgerButton.classList.toggle("active");
  sideMenu.classList.toggle("active");
  background_video.classList.toggle("active");
  logo_section.classList.toggle("active");

  event.preventDefault();
  event.stopImmediatePropagation();
}

function closeMenu(event) {
  if (hamburgerButton.classList.contains("active")) {
    hamburgerButton.classList.remove("active");
    sideMenu.classList.remove("active");
    background_video.classList.remove("active");
    logo_section.classList.remove("active");
  }
}

function dark_theme_toggle(event) {
  var option_val = dark_theme_option.querySelector(".option_val");

  if (dark_theme_option.classList.contains("active")) {
    dark_theme_option.classList.remove("active");
    hamburgerButton.classList.remove("dark");
    sideMenu.classList.remove("dark");
    body_ele.classList.remove("dark");
    option_val.innerHTML = "Off";
  } else {
    dark_theme_option.classList.toggle("active");
    hamburgerButton.classList.toggle("dark");
    sideMenu.classList.toggle("dark");
    body_ele.classList.toggle("dark");
    option_val.innerHTML = "On";
  }
}

hamburgerButton.addEventListener("click", openMenu, false);
dark_theme_option.addEventListener("click", dark_theme_toggle, false);
var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = "";
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName("typewrite");
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute("data-type");
    var period = elements[i].getAttribute("data-period");
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
  document.body.appendChild(css);
};
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});
