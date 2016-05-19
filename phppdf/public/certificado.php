<?php
  include("../vendor/autoload.php");
  use APP\Template\Vista as AP;

  //APP\Saludo::saludar();
  $contenido = AP\Template::render();

  $pdf = new APP\Crearpdf();
  $pdf->render('diplom', $contenido);
?>
