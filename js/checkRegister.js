"use strict";

const form_reg = document.querySelector(".modal__form.reg");
const email_reg = document.querySelector(".modal__form.reg .username");
const errContainer_reg = document.querySelector(".err.reg");
const error_reg = document.querySelector(".err.reg p");

form_reg.addEventListener("submit", function (event) {
  if (email_reg.value.indexOf("@") == -1) {
    error_reg.textContent = "Not valid email!";
    email_reg.style.outlineColor = "red";
    errContainer_reg.style.display = "block";
    event.preventDefault();
  } else {
    errContainer_reg.style.display = "none";
    error_reg.textContent = "";
  }
});
