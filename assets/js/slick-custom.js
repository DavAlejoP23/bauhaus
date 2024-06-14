function slickArtists() {
  console.log("slickArtists function is running");
  $(".slick--artists").slick({
    centerMode: false,
    centerPadding: "60px",
    slidesToShow: 3,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          centerPadding: "40px",
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });
}

$(function () {
  slickArtists();
});
