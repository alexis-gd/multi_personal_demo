<?php
include_once 'conexion.php';
function insertData(){
  $conexion = conectar();
  $conexion->set_charset('utf8');
    $value_1 = filter_var($_POST['ap_paterno'], FILTER_SANITIZE_STRING);
    $value_2 = filter_var($_POST['ap_materno'], FILTER_SANITIZE_STRING);
    $value_3 = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $value_4 = filter_var($_POST['f_nacimiento'], FILTER_SANITIZE_STRING);
    $value_5 = filter_var($_POST['curp'], FILTER_SANITIZE_STRING);
    $value_6 = filter_var($_POST['e_civil'], FILTER_SANITIZE_STRING);
    $value_7 = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
    $value_8 = filter_var($_POST['correo'], FILTER_SANITIZE_STRING);
    $value_9 = filter_var($_POST['sexo'], FILTER_SANITIZE_STRING);
    $value_10 = filter_var($_POST['a_estudios'], FILTER_SANITIZE_STRING);
    $value_11 = filter_var($_POST['profesion'], FILTER_SANITIZE_STRING);
    $value_12 = filter_var($_POST['g_academico'], FILTER_SANITIZE_STRING);
    $value_13 = filter_var($_POST['idioma'], FILTER_SANITIZE_STRING);
    $value_14 = filter_var($_POST['ofimatica'], FILTER_SANITIZE_STRING);
    $value_15 = filter_var($_POST['enfermedad'], FILTER_SANITIZE_STRING);
    $value_16 = filter_var($_POST['alergias'], FILTER_SANITIZE_STRING);
    $value_17 = filter_var($_POST['deporte'], FILTER_SANITIZE_STRING);
    $value_18 = filter_var($_POST['fumador'], FILTER_SANITIZE_STRING);
    $value_19 = filter_var($_POST['pasatiempo'], FILTER_SANITIZE_STRING);
    $value_20 = 'activo';

    $dir_subida = '../documentos/ine/';
    if (!is_dir($dir_subida)) {
      mkdir($dir_subida, 0755, true);
    }
    $ruta = $dir_subida ."ine_". $value_5;
    $ruta_temporal = $_FILES['ine']['tmp_name'];
    $type = $_FILES['ine']['type'];
    $type = strpbrk($type, '/');
    $type = substr($type, 1);
    $ruta_final1 = $ruta.".".$type;
    $resultado1 = move_uploaded_file($ruta_temporal, $ruta_final1);
    
    $dir_subida = '../documentos/curp/';
    if (!is_dir($dir_subida)) {
      mkdir($dir_subida, 0755, true);
    }
    $ruta = $dir_subida ."curp_". $value_5;
    $ruta_temporal = $_FILES['curp']['tmp_name'];
    $type = $_FILES['curp']['type'];
    $type = strpbrk($type, '/');
    $type = substr($type, 1);
    $ruta_final2 = $ruta.".".$type;
    $resultado2 = move_uploaded_file($ruta_temporal, $ruta_final2);
    
    $dir_subida = '../documentos/recibo/';
    if (!is_dir($dir_subida)) {
      mkdir($dir_subida, 0755, true);
    }
    $ruta = $dir_subida ."recibo_".$value_5;
    $ruta_temporal = $_FILES['recibo']['tmp_name'];
    $type = $_FILES['recibo']['type'];
    $type = strpbrk($type, '/');
    $type = substr($type, 1);
    $ruta_final3 = $ruta.".".$type;
    $resultado3 = move_uploaded_file($ruta_temporal, $ruta_final3);

    $dir_subida = '../documentos/imagen/';
    if (!is_dir($dir_subida)) {
      mkdir($dir_subida, 0755, true);
    }
    $ruta = $dir_subida ."imagen_".$value_5;
    $ruta_temporal = $_FILES['imagen']['tmp_name'];
    $type = $_FILES['imagen']['type'];
    $type = strpbrk($type, '/');
    $type = substr($type, 1);
    $ruta_final4 = $ruta.".".$type;
    $resultado4 = move_uploaded_file($ruta_temporal, $ruta_final4);

    $url = $_SERVER['REQUEST_URI'];
    $array = explode("/", $url);
    $path = $array[1];
    if ($path == "multi_personal") {
      $table = "datos_trabajador";
    }else if ($path == "multi_personal_demo") {
      $table = "datos_trabajador_demo";
    }

    $insert = "INSERT INTO $table ( ap_paterno, ap_materno, nombre, f_nacimiento, curp, 
      e_civil, celular, correo, sexo, a_estudios, profesion, g_academico, idioma, ofimatica, enfermedad, 
      alergias, deporte, fumador, pasatiempo, ine_url, curp_url, recibo_url,imagen_url, estatus) 
      VALUES ('$value_1','$value_2','$value_3','$value_4','$value_5','$value_6','$value_7','$value_8',
      '$value_9','$value_10','$value_11','$value_12','$value_13','$value_14','$value_15','$value_16',
      '$value_17','$value_18','$value_19','$ruta_final1','$ruta_final2','$ruta_final3','$ruta_final4','$value_20')";
      $resultado5 = mysqli_query($conexion,$insert)
      or die ("ERRORS" . mysqli_error($conexion));

    if ($resultado1 && $resultado2 && $resultado3 && $resultado4 && $resultado5) {
      $respuesta = 1;
    }else {
      $respuesta = 0;
    }
    // $data = array("$value_1","$value_2", "$value_3", "$value_3", "$value_4");
    echo json_encode($respuesta);
    
    mysqli_close($conexion);
  }
  echo insertData();
?>