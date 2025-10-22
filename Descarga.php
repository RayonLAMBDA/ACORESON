<?php
//include_once 'index.php';
/*
if (!isset($_GET['WorkCore.apk']) || empty($_GET['WorkCore.apk'])) {
 exit();
}*/
$root = "Descargas/";
$file = basename($_GET['WorkCore.apk']);
$path = $root.$file;
$type = 'application/octet-stream';
echo '<p>Hola</p>';
if (is_file($path)) {
 $size = filesize($path);
 if (function_exists('mime_content_type')) {
 $type = mime_content_type($path);
 } else if (function_exists('finfo_file')) {
 $info = finfo_open(FILEINFO_MIME);
 $type = finfo_file($info, $path);
 finfo_close($info);
 }
 if ($type == 'application/octet-stream') {
 $type = "application/force-download";
 }
 // Define los headers
 header("Content-Type: $type");
 header("Content-Disposition: attachment; filename=$file");
 header("Content-Transfer-Encoding: binary");
 header("Content-Length: " . $size);
 // Descargar el archivo
 readfile($path);
} else {
 die("El archivo no existe.");
}
include_once 'index.php';
/*
if(!empty($_GET['WorkCore.apk'])){
    $fileName = basename($_GET['WorkCore.apk']);
    $filePath = 'Descargas/'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
    }else{
        echo 'The file does not exist.';
    }
}*/
?>