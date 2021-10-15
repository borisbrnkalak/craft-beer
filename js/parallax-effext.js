"use strict";

const parallaxTop = document.querySelector(".paralax");
const paralaxMiddle = document.querySelectorAll(".parallax-middle");

document.addEventListener("DOMContentLoaded", () => {
  makeParallaxEffect(parallaxTop);
  paralaxMiddle.forEach((parallax) => {
    makeParallaxEffect(parallax, true);
  });
});

const makeParallaxEffect = (element, requiresIO = false) => {
  if (requiresIO) {
    const imgObserver = new IntersectionObserver(
      (entries) => {
        const [entry] = entries;
        if (entry.isIntersecting) {
          const pos = element.getBoundingClientRect();
          setParallaxEffectToDOM(
            element,
            window.pageYOffset + pos.top - pos.height / 4,
            0.2
          );
        }
      },
      {
        root: null,
        threshold: 0.01,
      }
    );
    imgObserver.observe(element);
  } else {
    setParallaxEffectToDOM(element, 0, 0.5);
  }
};

function setParallaxEffectToDOM(element, startPosition, speed) {
  window.addEventListener("scroll", function () {
    if (startPosition > 0) {
      element.style.transform =
        "translateY( " +
        (startPosition - window.pageYOffset) * speed +
        "px) scale(" +
        window.screen.width / window.screen.height +
        ")";
      return;
    }
    element.style.backgroundPositionY =
      (startPosition + window.pageYOffset) * speed + "px";
  });
}
