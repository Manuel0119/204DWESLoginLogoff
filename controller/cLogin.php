<?php
require_once 'core/221024ValidacionFormularios.php';
require_once $aVistas[$_SESSION['paginaEnCurso']];

if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
}
if (isset($_REQUEST['registrarse'])) {
    $_SESSION['paginaAnterior'] = 'inicioPublico';
    $_SESSION['paginaEnCurso'] = 'registro';
    header('Location: index.php');
    exit();
}
if (isset($_REQUEST['iniciarSesion'])) {
    $aErrores = [
        'usuario' => null,
        'password' => null
    ];
    $entradaOk = true;
    $SQLUsuarioPorCodigo = <<< sq2
        select * from T01_Usuario where T01_CodUsuario=:codigoUsuario;
    sq2;
    $SQLActualizacionConexionesUsuario = <<< sq3
        update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now() where T01_CodUsuario=:codigoUsuario;
    sq3;
//VALIDACIÓN DE ENTRADA
    $miDB = new PDO(DSN, USER, PASSWORD);
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 4, 1);
    $aErrores['password'] = validacionFormularios::comprobarAlfabetico($_REQUEST['password'], 255, 4, 1);
    foreach ($aErrores as $mensajeError) {
        if ($mensajeError != null) {
            $entradaOk = false;
        }
    };
    $queryConsultaPorCodigo = $miDB->prepare($SQLUsuarioPorCodigo);
    $queryConsultaPorCodigo->bindParam(':codigoUsuario', $_REQUEST['usuario']);
    $queryConsultaPorCodigo->execute();
    $oConsultaPorCodigo = $queryConsultaPorCodigo->fetchObject();
//Comprobación de usuario correcto
    if (UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password'])) {
        $entradaOk = false;
    }
} else {
    $entradaOk = false;
}
if ($entradaOk) {
    $miDB = new PDO(DSN, USER, PASSWORD);
    $_SESSION['fechaHoraUltimaConexionAnterior'] = $oConsultaPorCodigo->T01_FechaHoraUltimaConexion;
//Actualización del número de conexiones
    $miDB = new PDO(DSN, USER, PASSWORD);
    $queryActualizacionNumConexiones = $miDB->prepare($SQLActualizacionConexionesUsuario);
    $queryActualizacionNumConexiones->bindParam(':codigoUsuario', $_REQUEST['usuario']);
    $queryActualizacionNumConexiones->execute();
    $queryConsultaPorCodigo = $miDB->prepare($SQLUsuarioPorCodigo);
    $queryConsultaPorCodigo->bindParam(':codigoUsuario', $_REQUEST['usuario']);
    $queryConsultaPorCodigo->execute();
    $oConsultaPorCodigo = $queryConsultaPorCodigo->fetchObject();
//Introducimos el usuario en la sesion
    $_SESSION['User204DWESLoginLogoff'] = $oConsultaPorCodigo;
    $_SESSION['paginaEnCurso'] = 'inicioPrivado';
    header("Location: index.php");
}
require_once $aVistas['layout'];
?>

