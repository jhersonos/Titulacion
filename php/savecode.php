<?php
 require('../lib/pclzip.lib.php'); 
 $path=(isset($_POST["source"])?$_POST["source"]:"");
    $zipname = 'filename.zip';
    $zip = new ZipArchive;
    $zip->open($zipname, ZipArchive::CREATE);
    foreach ($path as $file) {
      $zip->addFile($file);
    }
    $zip->close();
    header('Content-Type: application/zip');
    header('Content-disposition: attachment; filename=filename.zip');
    header('Content-Length: ' . filesize($zipfilename));
    readfile($zipname);
?>
<a href="/Titulacion/phpviews/registro.php">Regresar</a>