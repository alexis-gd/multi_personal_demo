<?php
// $variable =$_POST['nombre'];
echo $variable = filter_var( $_POST['nombre'] , FILTER_SANITIZE_STRING); // -> not a tag
?>