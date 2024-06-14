<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    // Verifica si el nombre y apellido solo contienen letras
    if (!preg_match('/^[a-zA-Z]+$/', $fname) || !preg_match('/^[a-zA-Z]+$/', $lname)) {
        $_SESSION['error'] = "El nombre y apellido solo deben contener letras.";
        header('Location: ../signup.php');
        exit();
    }
    // Verifica si el correo electrónico es válido
    else if (!filter_var($mailuid, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Por favor, introduce un correo electrónico válido.";
        header('Location: ../signup.php');
        exit();
    }
    // Verifica si la contraseña tiene al menos una letra mayúscula y un símbolo
    else if (!preg_match('/[A-Z]/', $password) || !preg_match('/[\W]/', $password)) {
        $_SESSION['error'] = "La contraseña debe contener al menos una letra mayúscula y un símbolo.";
        header('Location: ../signup.php');
        exit();
    } elseif ($password != $passwordRepeat) {
        $_SESSION['error'] = "Las contraseñas no coinciden.";
        header('Location: ../signup.php');
        exit();
    } else {
        // Los datos cumplen con los requisitos
        // Aquí puedes continuar con el procesamiento de los datos

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Aquí puedes insertar los datos en la base de datos
        // Asegúrate de usar $hashedPassword en lugar de $password

        // Conexión a la base de datos
        $db = new mysqli('localhost', 'root', '', 'bauhaus');

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        // Consulta SQL para insertar los datos
        $sql = "INSERT INTO users (fname, lname, mailuid, pwd) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssss", $fname, $lname, $mailuid, $hashedPassword);

        if ($stmt->execute()) {
            // Redirige al usuario a la raíz del dominio después de un registro exitoso
            header('Location: /');
            exit();
        } else {
            $_SESSION['error'] = "Error: " . $stmt->error;
            header('Location: ../signup.php');
            exit();
        }
    }
}
?>