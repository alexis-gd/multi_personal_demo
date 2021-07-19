<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrados</title>
  <link rel="shortcut icon" href="img/logo_v.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/grid.min.css">
  <link rel="stylesheet" href="css/registrados.css">
</head>
<body>
  <?php
  $url = $_SERVER['REQUEST_URI'];
  $array = explode("/", $url);
  $path = $array[1];
  if ($path == "multi_personal") {
    $table = "datos_trabajador";
  }else if ($path == "multi_personal_demo") {
    $table = "datos_trabajador_demo";
  }

  include_once 'funciones/conexion.php';
  $conexion = conectar();
  $conexion->set_charset('utf8');
  $select = "SELECT id_trabajador, ap_paterno, ap_materno, nombre, celular, curp, g_academico, estatus FROM $table";
  $ejecutarSelect = mysqli_query($conexion, $select);


  ?>
  <div class="container pt-3">
    <div class="row">
        <div class="col-md-3 align-self-center">
          <a href="./" class="btn btn-primary" >Nuevo Registro <i class="fas fa-user-plus"></i></a>          
        </div>
        <div class="col-md-9 align-self-center">
          <h1 class="text-left">Trabajadores registrados</h1>
        </div>
    </div>
  </div>
  <div class="container table-responsive">
    <table class="table table-bordered table-hover table-sm table-striped w-100">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Archivos</th>
          <th scope="col">Apellido paterno</th>
          <th scope="col">Apellido materno</th>
          <th scope="col">Nombre(s)</th>
          <th scope="col">Celular</th>
          <th scope="col">Estudios</th>
          <th scope="col">Grado académico</th>
          <th scope="col">Estatus</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($fila = mysqli_fetch_array($ejecutarSelect)){            
        ?>
        <tr>
          <th scope="row"><?php echo $fila['id_trabajador']; ?></th>
          <th><a href="ver_archivos.php?id_trabajador=<?php echo $fila['id_trabajador']; ?>" class="btn btn-primary btn-sm">Ver</a> </th>
          <td><?php echo $fila['ap_paterno']; ?></td>
          <td><?php echo $fila['ap_materno']; ?></td>
          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['celular']; ?></td>
          <td><?php echo $fila['curp']; ?></td>
          <td><?php echo $fila['g_academico']; ?></td>
          <td><?php echo $fila['estatus']; ?></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://kit.fontawesome.com/3334950929.js" crossorigin="anonymous"></script>
</body>
</html>