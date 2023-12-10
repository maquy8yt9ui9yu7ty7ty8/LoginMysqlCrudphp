<?php

include('db.php');
?>
<?php include('includes/header.php'); ?>
<div class="col-md-8">
    <h1>Reporte de facultades y programas</h1>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>IdFacultad</th>
            <th>NombreFacultad</th>
            <th>Abreviatura</th>
            <th>IdArea</th>
            <th>ProgramaId</th>
            <th>FacultadPrograma</th>
            <th>NombrePrograma</th>
            <th>CodigoPrograma</th>
            <th>TipoPrograma</th>

          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM vista_facultades_programas";
          $result_facultades = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_facultades)) { ?>
          <tr>
            <td><?php echo $row['FacultadId']; ?></td>
            <td><?php echo $row['NombreFacultad']; ?></td>
            <td><?php echo $row['AbreviaturaFacultad']; ?></td>
            <td><?php echo $row['IdAreaFacultad']; ?></td>
            <td><?php echo $row['ProgramaId']; ?></td>
            <td><?php echo $row['FacultadPrograma']; ?></td>
            <td><?php echo $row['NombrePrograma']; ?></td>
            <td><?php echo $row['CodigoPrograma']; ?></td>
            <td><?php echo $row['TipoPrograma']; ?></td>

          </tr>
          <?php } ?>
        </tbody>
      </table>
      <h1>Reporte de facultades y programas</h1>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>IdFacultad</th>
            <th>NombreFacultad</th>
            <th>NombrePrograma</th>
            <th>CodigoPrograma</th>

          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM vista_fac_prog";
          $result_facultades = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_facultades)) { ?>
          <tr>
            <td><?php echo $row['FacultadId']; ?></td>
            <td><?php echo $row['NombreFacultad']; ?></td>
            <td><?php echo $row['NombrePrograma']; ?></td>
            <td><?php echo $row['CodigoPrograma']; ?></td>

          </tr>
          <?php } ?>
        </tbody>
      </table>

      
  </div>