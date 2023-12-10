<?php

include('db.php');

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Hasheamos la contraseña usando la función password_hash()
    $contraseña_hasheada = password_hash($contraseña, PASSWORD_DEFAULT);

    // Insertamos la contraseña hasheada en la base de datos
    $query = "INSERT INTO usuarios(nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña_hasheada')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'Usuario guardado exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}


?>