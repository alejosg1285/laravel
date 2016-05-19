<?php
  namespace APP\Template\Vista;

  class Template
  {
    public static function render()
    {
      $datos = ['nombre'=>'Alejandro Saa', 'fecha'=>date('Y-m-d')];
      extract($datos);

      ob_start();
      include("../resources/vista.php");
      return ob_get_clean();
    }
  }
?>
