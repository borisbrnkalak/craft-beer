"use strict";

const burger = document.querySelector(".hamburger");
const burger_white = document.querySelector(".hamburger-white");
const header = document.querySelector(".paralax .header");
const header_white = document.querySelector(".header-white");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
  header.classList.toggle("expand");
});

burger_white.addEventListener("click", function () {
  header_white.classList.toggle("expand");
});
