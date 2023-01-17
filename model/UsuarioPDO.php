<?php

class UsuarioPDO implements UsuarioDB {

    public static function validarUsuario($codUsuario, $password) {
        $entradaOk=true;
        $aSelect = 'select * from T01_Usuario where T01_codUsuario=$codUsuario AND T01_Password=sha2("{$codUsuario}{$password}",256);';
        $oResultado = DBPDO::ejecutarConsulta($aSelect);
        if ($oResultado->T01_codUsuario!=$codUsuario||$oResultado->T01_Password!=hash('sha256', ($codUsuario . $password))) {
            $entradaOk = false;
        }
        return $entradaOk;
    }

    public static function altaUsuario() {
        
    }

    public static function modificarUsuario() {
        
    }

    public static function borrarUsuario() {
        
    }

    public static function validarCodNoExiste() {
        
    }

}
?>

