<?php

include('db.php');

if (isset($_GET ['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM dicprogramas WHERE Id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Programa eliminado exitosamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>