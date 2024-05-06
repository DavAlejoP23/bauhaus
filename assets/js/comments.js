$(document).ready(function () {
  $("#commentForm").submit(function (e) {
    e.preventDefault();

    $.ajax({
      url: "submit_comment.php", // Ruta a tu archivo PHP que procesa el formulario
      type: "post",
      data: $(this).serialize(), // Serializa los datos del formulario para enviarlos
      success: function () {
        // Una vez que el comentario se ha enviado con éxito, obtén y muestra todos los comentarios
        $.ajax({
          url: "get_comments.php", // Ruta a tu archivo PHP que obtiene los comentarios
          success: function (response) {
            // Muestra los comentarios
            $(".container__comments--comment").html(response);
          },
        });
      },
    });
  });

  // Obtén y muestra los comentarios cuando se carga la página
  $.ajax({
    url: "get_comments.php", // Ruta a tu archivo PHP que obtiene los comentarios
    success: function (response) {
      // Muestra los comentarios
      $(".container__comments--comment").html(response);
    },
  });
});
