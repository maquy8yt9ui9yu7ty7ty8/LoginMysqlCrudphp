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

      <!-- LOGIN FORM -->
      <div class="card card-body">
    <h2>Iniciar Sesión</h2>
    <form action="inicio_sesion.php" method="GET">
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Correo electrónico" autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
        </div>
        <input type="submit" name="inicio_sesion" class="btn btn-primary btn-block" value="Iniciar Sesión">
    </form>
     </div>
      <!-- CIERRE -->
      <!-- FORMULARIO DE REGISTRO -->
        <div class="card card-body">
            <h2>Registrarse</h2>
            <form action="registro.php" method="POST">
            <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico" autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
            </div>
            <input type="submit" name="registro" class="btn btn-primary btn-block" value="Registrarse">
            </form>
        </div>


    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
