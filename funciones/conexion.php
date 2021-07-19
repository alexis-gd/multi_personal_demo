<?php
function conectar(){
  $host_db = "localhost";
  $user_db = "nodosmxc_user_multi";
  $pass_db = "Multi.2021+";
  $db_name = "nodosmxc_multi";

  $con= new mysqli($host_db, $user_db, $pass_db, $db_name); 
  if ($con->connect_errno) {
          printf("Connect failed: %s\n", $mysqli->connect_error);
          exit();
  } else {
      return $con;
  }
}