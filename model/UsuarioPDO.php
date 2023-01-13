<?php
class UsuarioPDO implements UsuarioDB{
    
    public function validarUsuario($codUsuario, $password) {
        $aSelect = <<<QUERY
            select * from T01_Usuario
            where T01_CodUsuario='{$codUsuario}' and
            T01_Password=SHA2{"{$codUsuario}{$password}",256};
        QUERY;
        $oResultado = DBPDO::ejecutarConsulta($aSelect);
        
    }

}
?>

