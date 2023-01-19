<?php

require_once 'conf/confDBPDO.php';

class DBPDO implements DB {

    public static function ejecutarConsulta($entradaSQL, $parametros = null) {
        try {
            $oPDO = new PDO(DSN, USER, PASSWORD);
            $consulta = $oPDO->prepare($entradaSQL);
            $consulta->execute();
            return $consulta;
        } catch (PDOException $exc) {
            echo 'Error: ' . $excepcion->getMessage() . "<br>";
            echo 'Código de error: ' . $excepcion->getCode() . "<br>";
            header("Location: index.php");
        } finally {
            unset($oPDO);
        }
    }

}

?>