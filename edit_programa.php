<?php

include('db.php');
// Actualizar programa
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM dicprogramas WHERE Id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $id_facultad = $row['IdFacultad'];
    $nombre = $row['Nombre'];
    $cod_programa = $row['CodPrograma'];
    $tipo = $row['Tipo'];
  }
}

if (isset($_POST['update_programa'])) {
  $id = $_GET['id'];
  $id_facultad = $_POST['id_facultad'];
  $nombre = $_POST['nombre'];
  $cod_programa = $_POST['cod_programa'];
  $tipo = $_POST['tipo'];

  $query = "UPDATE dicprogramas set IdFacultad = '$id_facultad', Nombre = '$nombre', CodPrograma = '$cod_programa', Tipo = '$tipo' WHERE Id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Programa actualizado exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
    <div class="container p-4">
    <div class="row">
    <div class="col-md-4 mx-auto">
    <div class="card card-body">
    <form action="edit_programa.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <div class="form-group">
    <input name="id_facultad" type="text" class="form-control" value="<?php echo $id_facultad; ?>" placeholder="Actualizar id_facultad">
    </div>
    <div class="form-group">
    <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre">
    </div>
    <div class="form-group">
    <input name="cod_programa" type="text" class="form-control" value="<?php echo $cod_programa; ?>" placeholder="Actualizar cod_programa">
    </div>
    <div class="form-group">
    <input name="tipo" type="text" class="form-control" value="<?php echo $tipo; ?>" placeholder="Actualizar tipo">
    </div>
    <button class="btn-success" name="update_programa">
    Actualizar
    </button>
    </form>
    </div>
    </div>
    </div>
    </div>

