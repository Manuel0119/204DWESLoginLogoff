<?php
if (isset($_REQUEST['login'])) {
    $_SESSION['paginaEnCurso'] = 'login';
    header('Location: index.php');
    exit;
}
//if (isset($_REQUEST['registrarse'])) {
//    $_SESSION['paginaAnterior'] = 'inicioPublico';
//    $_SESSION['paginaEnCurso'] = 'registro';
//    header('Location: index.php');
//    exit();
//}
//if (isset($_REQUEST['salir'])) {
//    header('Location: ../204DWESProyectoDWES/indexProyectoDWES.php');
//    exit();
//}
require_once $aVistas['layout'];
?>

