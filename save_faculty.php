<?php

include('db.php');

if (isset($_POST['save_faculty'])) {
  $nombre = $_POST['nombre'];
  $abrev = $_POST['abrev'];
  $idarea = $_POST['idarea'];
  $query = "INSERT INTO dicfacultades(Nombre, Abrev, IdArea) VALUES ('$nombre', '$abrev', '$idarea')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }


    $_SESSION['message'] = 'Facultad guardada exitosamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
}

?>
