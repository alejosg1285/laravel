<?php
  include("../vendor/autoload.php");
  $datos = ["persona1"=>["nombre"=>"alejandro", "edad"=>31], "persona2"=>["nombre"=>"maria", "edad"=>36]];
  d($datos);
  extract($datos);
  //echo $nombre,', ',$edad;
  echo $persona2['nombre'];
?>
