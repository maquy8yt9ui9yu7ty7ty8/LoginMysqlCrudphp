<?php

include('db.php');
// Actualizar facultad
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM dicfacultades WHERE Id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['Nombre'];
    $abrev = $row['Abrev'];
    $idarea = $row['IdArea'];
  }
}

if (isset($_POST['update_faculty'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $abrev = $_POST['abrev'];
  $idarea = $_POST['idarea'];

  $query = "UPDATE dicfacultades set Nombre = '$nombre', Abrev = '$abrev', IdArea = '$idarea' WHERE Id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Facultad actualizada exitosamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">

        <form action="edit_faculty.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">
            <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualizar nombre">
          </div>
          <div class="form-group">
            <input name="abrev" type="text" class="form-control" value="<?php echo $abrev; ?>" placeholder="Actualizar abreviatura">
          </div>
          <div class="form-group">
            <input name="idarea" type="text" class="form-control" value="<?php echo $idarea; ?>" placeholder="Actualizar idarea">
          </div>
          <button class="btn-success" name="update_faculty">
            Actualizar
          </button>
        </form>

      </div>
    </div>
  </div>