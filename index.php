<?php
require_once 'conf/confApp.php';
require_once 'conf/confDBPDO.php';

session_start();

if (!isset($_SESSION['paginaEnCurso'])) {
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
}

require_once $aControladores[$_SESSION['paginaEnCurso']];
?>

