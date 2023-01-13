<?php

class DBPDO implements DB {

    public function ejecutarConsulta($sentenciaSQL, $parametros = null) {
        try {
            $oMiDB = new PDO(DSN, USER, PASSWORD);
            
            
        } catch (PDOException $excepcion) {
            echo 'Error: ' . $excepcion->getMessage() . "<br>";
            echo 'Código de error: ' . $excepcion->getCode() . "<br>";
        }
    }

}
?>

