<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver archivos</title>
  <link rel="shortcut icon" href="img/logo_v.png" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.min.css">
</head>
<body>
  <?php
    $url = $_SERVER['REQUEST_URI'];
    $array = explode("/", $url);
    $path = $array[1];
    if ($path == "multi_personal") {
      $table = "datos_trabajador";
      $path = "";
    }else if ($path == "multi_personal_demo") {
      $table = "datos_trabajador_demo";
      $path = "_demo";
    }

  include_once 'funciones/conexion.php';
  $conexion = conectar();
  $conexion->set_charset('utf8');
  $id = mysqli_real_escape_string($conexion, $_GET['id_trabajador']);
  $id = filter_var($id, FILTER_SANITIZE_STRING);
  $select = "SELECT ap_paterno, ap_materno, nombre, ine_url, curp_url, recibo_url, imagen_url FROM $table WHERE id_trabajador = '$id'";
  $resultado = mysqli_query($conexion, $select);
  $array = mysqli_fetch_array($resultado);
    $ap1 = $array['ap_paterno'];
    $ap2 = $array['ap_materno'];
    $nombre = $array['nombre'];
    $ruta1 = $array['ine_url'];
    $ruta2 = $array['curp_url'];
    $ruta3 = $array['recibo_url'];
    $ruta4 = $array['imagen_url'];
  ?>
  <div class="container p-3">
  <div class="row">
        <div class="col-md-3 align-self-center">
          <a href="./registrados.php" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Volver</a>          
        </div>
        <div class="col-md-9 align-self-center">
          <h1 class="text-left"><?php echo $nombre. " " .$ap1. " " .$ap2; ?></h1>
        </div>
    </div>  
  </div>
  <div class="container">    
    <div class="row">
      <div class="col-md-6 p-3">
        <h3>Ine</h3>
        <embed src="https://nodosmx.com/multi_personal<?php echo $path; ?>/<?php echo substr($ruta1, 3); ?>" type="application/pdf"
          width="350" height="350">
      </div>
      <div class="col-md-6 p-3">
        <h3>Curp</h3>
        <embed src="https://nodosmx.com/multi_personal<?php echo $path; ?>/<?php echo substr($ruta2, 3); ?>" type="application/pdf"
          width="350" height="350">
      </div>
      <div class="col-md-6 p-3">
        <h3>Recibo</h3>
        <embed src="https://nodosmx.com/multi_personal<?php echo $path; ?>/<?php echo substr($ruta3, 3); ?>" type="application/pdf"
          width="350" height="350">
      </div>
      <div class="col-md-6 p-3">
        <h3>Imagen</h3>
        <img src="https://nodosmx.com/multi_personal<?php echo $path; ?>/<?php echo substr($ruta4, 3); ?>" alt=""  width="350" >
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/3334950929.js" crossorigin="anonymous"></script>
</body>
</html>