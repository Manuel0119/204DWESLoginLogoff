<?php

require_once 'conf/confDBPDO.php';

class DBPDO implements DB {

    public static function ejecutarConsulta($entradaSQL, $parametros = null) {
        try {
            $oDBPDO = new PDO(DSN, USER, PASSWORD);
            $query = $oDBPDO->prepare($entradaSQL);
            if (!is_null($parametros)) {
                if (is_array($parametros)) {
                    foreach ($parametros as $par => $valor) {
                        $query->bindParam($par, $valor);
                    }
                }
            }
            $query->execute();
            $salida = $query->fetchObject();
            return $salida;
        } catch (PDOException $exc) {
            echo 'Error: ' . $excepcion->getMessage() . "<br>";
            echo 'Código de error: ' . $excepcion->getCode() . "<br>";
            header("Location: index.php");
        } finally {
            unset($oDBPDO);
        }
    }
}
?>

