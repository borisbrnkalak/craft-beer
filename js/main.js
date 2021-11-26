"use strict";

function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  if (this.scrollY >= 200) scrollUp.classList.add("show-scroll");
  else scrollUp.classList.remove("show-scroll");
}

window.addEventListener("scroll", scrollUp);

function scrollMenu() {
  const scrollMenu = document.getElementById("white-menu");
  if (this.scrollY >= 200) scrollMenu.classList.add("show-menu");
  else scrollMenu.classList.remove("show-menu");
}

window.addEventListener("scroll", scrollMenu);

function image_effect() {
  const mov_image = document.getElementById("mov-img");
  if (this.scrollY > 1305) scrollMenu.classList.add("show-image");
  else scrollMenu.classList.remove("show-image");
}

const path = window.location.pathname;
const page = path.split("/").pop().split(".").at(0);

const covers = document.querySelectorAll(".all-products .movable-products");
const leftArrow = document.querySelector(".left-arrow a");
const rightArrow = document.querySelector(".right-arrow a");

if (page === "index" || page === "overview") {
  new Slider(covers, leftArrow, rightArrow);
}

if (page === "index") {
  new Map();
}
