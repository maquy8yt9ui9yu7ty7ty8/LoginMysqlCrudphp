<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
  <form action="save_faculty.php" method="POST">
  <div 
  class="form-group hidden"
  style="display:none;"
  >
      <input name="id" class="form-control" placeholder="Nombre de la Facultad" autofocus>
    </div> 
  <div class="form-group">
      <input type="text" name="nombre" class="form-control" placeholder="Nombre de la Facultad" autofocus>
    </div>
    <div class="form-group">
      <input type="text" name="abrev" class="form-control" placeholder="Abreviatura" autofocus>
    </div>
    <div class="form-group">
      <select name="id_area" class="form-control">
        <option value="1">Área 1</option>
        <option value="2">Área 2</option>
        <option value="3">Área 3</option>
        <!-- Puedes ajustar las opciones según los valores y nombres de tus áreas -->
      </select>
    </div>
    <input type="submit" name="save_faculty" class="btn btn-success btn-block" value="Guardar Facultad">
  </form>
</div>
      <!-- LA OTRA TABLA  -->
      <div class="card card-body">
  <form action="save_programa.php" method="POST">
    <div class="form-group">
      <select name="id_facultad" class="form-control">
        <option value="1">Facultad 1</option>
        <option value="2">Facultad 2</option>
        <option value="3">Facultad 3</option>
        <!-- Reemplaza los valores y nombres de las facultades según tu base de datos -->
      </select>
    </div>
    <div class="form-group">
      <input type="text" name="nombre" class="form-control" placeholder="Nombre del Programa" autofocus>
    </div>
    <div class="form-group">
      <input type="text" name="cod_programa" class="form-control" placeholder="Código del Programa" autofocus>
    </div>
    <div class="form-group">
      <label>Tipo:</label>
      <select name="tipo" class="form-control">
        <option value="1">Maestría</option>
        <option value="2">Doctorado</option>
        <!-- Puedes ajustar las opciones según los valores reales de tu base de datos -->
      </select>
    </div>
    <input type="submit" name="save_programa" class="btn btn-success btn-block" value="Guardar Programa">
  </form>
  <br>
  <form action="reporte.php" method="POST"> 
  <div class="form-group">
    <input type="submit" name="reporte" class="btn btn-success btn-block" value="Generar Reporte">
      </div>
  </form>
</div>
<!-- CIERRE -->

    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Facultad</th>
            <th>Abreviatura</th>
            <th>Área</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM dicfacultades";
          $result_facultades = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_facultades)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Abrev']; ?></td>
            <td><?php echo $row['IdArea']; ?></td>
            <td>
              <a href="edit_faculty.php?id=<?php echo $row['Id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_faculty.php?id=<?php echo $row['Id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Facultad</th>
            <th>Programa</th>
            <th>Código</th>
            <th>Tipo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM dicprogramas";
          $result_programas = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_programas)) { ?>
          <tr>
            <td><?php echo $row['IdFacultad']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['CodPrograma']; ?></td>
            <td><?php echo $row['Tipo']; ?></td>
            <td>
              <a href="edit_programa.php?id=<?php echo $row['Id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>

              <a href="delete_programa.php?id=<?php echo $row['Id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</main>

<?php include('includes/footer.php'); ?>


