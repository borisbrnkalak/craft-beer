"use strict";

const form = document.querySelector(".modal__form.log");
const email = document.querySelector(".modal__form.log .username");
const errContainer = document.querySelector(".err.log");
const error = document.querySelector(".err.log p");

form.addEventListener("submit", function (event) {
  if (email.value.indexOf("@") == -1) {
    error.textContent = "Not valid email!";
    email.style.outlineColor = "red";
    errContainer.style.display = "block";
    event.preventDefault();
  } else {
    errContainer.style.display = "none";
    error.textContent = "";
  }
});
