<?php

include('db.php');

if (isset($_POST['save_programa'])) {
  $id_facultad = $_POST['id_facultad'];
  $nombre = $_POST['nombre'];
  $cod_programa = $_POST['cod_programa'];
  $tipo = $_POST['tipo'];
  $query = "INSERT INTO dicprogramas(IdFacultad, Nombre, CodPrograma, Tipo) VALUES ('$id_facultad', '$nombre', '$cod_programa', '$tipo')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Programa guardado exitosamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}