<?php

include('db.php');

// verificar contraseña
if (isset($_GET['inicio_sesion'])) {
    $email = $_GET['email'];
    $contraseña = $_GET['contraseña'];

    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed.");
    }

    $row = mysqli_fetch_array($result);
    $contraseña_hasheada = $row['contraseña'];

    if (password_verify($contraseña, $contraseña_hasheada)) {
        $_SESSION['message'] = 'Inicio de sesión exitoso';
        $_SESSION['message_type'] = 'success';
        header('Location: index.php');
    } else {
        $_SESSION['message'] = 'Contraseña incorrecta';
        $_SESSION['message_type'] = 'danger';
        header('Location: login.php');
    }
}

?>
<?php include('includes/header.php'); ?>