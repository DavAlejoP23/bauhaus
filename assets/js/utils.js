function toggleHamburger() {
  var hamburger = document.querySelector(".hamburger");
  var menu = document.querySelector(".container__nav--menu");
  hamburger.classList.toggle("active");
  menu.classList.toggle("open");
}

document
  .querySelectorAll(".structure__input--field--label")
  .forEach((input) => {
    input.addEventListener("change", (event) => {
      if (event.target.value) {
        event.target.classList.add("has-text");
      } else {
        event.target.classList.remove("has-text");
      }
    });
  });
