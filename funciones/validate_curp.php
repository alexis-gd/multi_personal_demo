<?php
include_once 'conexion.php';
function validateCURP(){
  $conexion = conectar();
  $conexion->set_charset('utf8');
    $curp = filter_var($_POST['curp'] , FILTER_SANITIZE_STRING);

    $url = $_SERVER['REQUEST_URI'];
    $array = explode("/", $url);
    $path = $array[1];
    if ($path == "multi_personal") {
      $table = "datos_trabajador";
    }else if ($path == "multi_personal_demo") {
      $table = "datos_trabajador_demo";
    }

    $insert = "SELECT curp from $table WHERE curp = '$curp'";
      $resultado = mysqli_query($conexion,$insert)
      or die ("ERRORS" . mysqli_error($conexion));
      $mostrar=mysqli_num_rows($resultado); 

    if ($mostrar > 0) {
      $respuesta = 0;
    }else {
      $respuesta = 1;
    }    
    // $data = array("$value_1","$value_2", "$value_3", "$value_3", "$value_4");
    echo json_encode($respuesta);
    
    mysqli_close($conexion);
  }
  echo validateCURP();
?>