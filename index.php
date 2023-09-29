
<?php include("db.php"); ?>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">


      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <div class="card card-body">
        <h1>Empleados</h1>
        <form action="save.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
            <input type="text" name="estado_civil" class="form-control" placeholder="Estado Civil">
            <input type="text" name="sexo" class="form-control" placeholder="Sexo">
            <input type="text" name="sueldo" class="form-control" placeholder="Sueldo">
            <input type="text" name="edad" class="form-control" placeholder="Edad">
          </div>
          <input type="submit" name="save" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Estado Civil</th>
            <th>Sexo</th>
            <th>Sueldo</th>
            <th>Edad</th>
          </tr>
        </thead>
        <tbody>
          <h1>Empleados Femeninos</h1>
        <?php
          $query = "SELECT * FROM empleados WHERE sexo = 'F'";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['estado_civil']; ?></td>
            <td><?php echo $row['sexo']; ?></td>
            <td><?php echo $row['sueldo']; ?></td>
            <td><?php echo $row['edad']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Estado Civil</th>
            <th>Sexo</th>
            <th>Sueldo</th>
            <th>Edad</th>
          </tr>
        </thead>
        <tbody>
          <h1>Hombres casados que ganan mas de 2500</h1>
        <?php
          $query = "SELECT * FROM empleados WHERE sexo = 'M' AND estado_civil = 'Casado' AND sueldo > 2500";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['estado_civil']; ?></td>
            <td><?php echo $row['sexo']; ?></td>
            <td><?php echo $row['sueldo']; ?></td>
            <td><?php echo $row['edad']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Estado Civil</th>
            <th>Sexo</th>
            <th>Sueldo</th>
            <th>Edad</th>
          </tr>
        </thead>
        <tbody>
          <h1>Mujeres viudas que ganan mas de 1000</h1>
        <?php
          $query = "SELECT * FROM empleados WHERE sexo = 'F' AND estado_civil = 'Viudo' AND sueldo > 1000";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['estado_civil']; ?></td>
            <td><?php echo $row['sexo']; ?></td>
            <td><?php echo $row['sueldo']; ?></td>
            <td><?php echo $row['edad']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Edad promedio</th>
          </tr>
        </thead>
        <tbody>
          <h1>Edad promedio de los hombre</h1>
        <?php
          $query = "SELECT AVG(edad) as edad FROM empleados WHERE sexo = 'M'";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['edad']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>
</main>

