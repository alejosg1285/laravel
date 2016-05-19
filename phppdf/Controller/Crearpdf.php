<?php
  namespace APP;

  use Dompdf\Dompdf;

  class Crearpdf
  {
    public function configuration()
    {
      include("../vendor/dompdf/dompdf/autoload.inc.php");
    }

    public function render($file, $contenido)
    {
      $this->configuration();

      $dompdf = new Dompdf();

      $dompdf->loadHtml($contenido);

      $dompdf->setPaper('A4', 'landscape');

      $dompdf->render();

      $dompdf->stream($file);
    }
  }
?>
