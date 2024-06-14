document
  .querySelector(".container__form--signup--structure")
  .addEventListener("submit", function (event) {
    var isValid = true;
    var fname = document.querySelector('input[name="fname"]');
    var lname = document.querySelector('input[name="lname"]');
    var mailuid = document.querySelector('input[name="mailuid"]');
    var pwd = document.querySelector('input[name="pwd"]');
    var pwdRepeat = document.querySelector('input[name="pwd-repeat"]');

    // Validación del nombre
    if (!/^[a-zA-Z]+$/.test(fname.value)) {
      isValid = false;
      fname.nextElementSibling.textContent =
        "El nombre solo debe contener letras.";
    } else {
      fname.nextElementSibling.textContent = "";
    }

    // Validación del apellido
    if (!/^[a-zA-Z]+$/.test(lname.value)) {
      isValid = false;
      lname.nextElementSibling.textContent =
        "El apellido solo debe contener letras.";
    } else {
      lname.nextElementSibling.textContent = "";
    }

    // Validación del correo electrónico
    if (!/^\S+@\S+\.\S+$/.test(mailuid.value)) {
      isValid = false;
      mailuid.nextElementSibling.textContent =
        "Por favor, introduce un correo electrónico válido.";
    } else {
      mailuid.nextElementSibling.textContent = "";
    }

    // Validación de la contraseña
    if (!/[A-Z]/.test(pwd.value) || !/[\W]/.test(pwd.value)) {
      isValid = false;
      pwd.nextElementSibling.textContent =
        "La contraseña debe contener al menos una letra mayúscula y un símbolo.";
    } else {
      pwd.nextElementSibling.textContent = "";
    }

    // Validación de la repetición de la contraseña
    if (pwd.value !== pwdRepeat.value) {
      isValid = false;
      pwdRepeat.nextElementSibling.textContent =
        "Las contraseñas no coinciden.";
    } else {
      pwdRepeat.nextElementSibling.textContent = "";
    }

    if (!isValid) {
      event.preventDefault();
    }
  });
