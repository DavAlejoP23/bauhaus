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

document.getElementById("search").addEventListener("input", function (e) {
  var searchValue = e.target.value.toLowerCase();
  var artists = document.querySelectorAll(".container__artists--card");

  artists.forEach(function (artist) {
    var name = artist.querySelector("h3").textContent.toLowerCase();
    if (name.indexOf(searchValue) > -1) {
      artist.style.display = "";
    } else {
      artist.style.display = "none";
    }
  });
});
