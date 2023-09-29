<?php

include('db.php');

if (isset($_POST['save'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $estado_civil = $_POST['estado_civil'];
  $sexo = $_POST['sexo'];
  $sueldo = $_POST['sueldo'];
  $edad = $_POST['edad'];

  $query = "INSERT INTO empleados(nombre, apellido, estado_civil, sexo, sueldo, edad) VALUES ('$nombre', '$apellido', '$estado_civil', '$sexo', '$sueldo', '$edad')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Empleado registrado exitosamente ';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
