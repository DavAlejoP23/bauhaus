<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    // Conexión a la base de datos
    $db = new mysqli('localhost', 'root', '', 'bauhaus');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Consulta SQL para obtener el usuario
    $sql = "SELECT * FROM users WHERE mailuid = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $mailuid);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['pwd'])) {
                // Iniciar sesión y redirigir al usuario
                session_start();
                $_SESSION['userId'] = $user['id'];
                $_SESSION['fname'] = $user['fname'];
                $_SESSION['lname'] = $user['lname'];
                $_SESSION['mailuid'] = $user['mailuid'];
                header('Location: /');
                exit();
            } else {
                $_SESSION['error'] = "Contraseña incorrecta.";
                header('Location: ../login.php');
                exit();
            }
        } else {
            $_SESSION['error'] = "Usuario no encontrado.";
            header('Location: ../login.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "Error: " . $stmt->error;
        header('Location: ../login.php');
        exit();
    }
}
?>