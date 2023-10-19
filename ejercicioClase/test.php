<?php

// desarrollo (INSTRUCCIONES PARA QUE EL PROGRAMA REPORTE TODOS LOS ERRORES)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Importamos la clase al archivo php
require 'subeArchivos.php';
    
$bfm = new SubeArchivos();

/*if ($bfm->set('file', $_POST['folder'])) {
    
    echo 'ok';
} else {
    echo 'Error suprimo';
*/

$result = $bfm->set('head', 'head');
$result = $bfm->set('header', 'head');
$result = $bfm->set('main', 'head');
$result = $bfm->set('footer', 'head');
header('Location: resultado.php?result='.$result);