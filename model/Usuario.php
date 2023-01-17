<?php
class Usuario{
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaHoraUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $perfil;
    private $imagenUsuario;
    
    function __construct($codUsuario,$password,$descUsuario,$numConexiones,$fechaHoraUltimaConexion,$fechaHoraUltimaConexionAnterior,$perfil,$imagenUsuario) {
        $this->codUsuario=$codUsuario;
        $this->password=$password;
        $this->descUsuario=$codUsuario;
        $this->numConexiones=$numConexiones;
        $this->fechaHoraUltimaConexion=new DateTime("now");
        $this->fechaHoraUltimaConexionAnterior=$fechaHoraUltimaConexionAnterior;
        $this->perfil=$perfil;
        $this->imagenUsuario=$imagenUsuario;
    }
    function getCodUsuario(){
        return $this->codUsuario;
    }
    function getPassword() {
        return $this->password;
    }
    function getdescUsuario(){
        return $this->descUsuario;
    }
    function getNumConexiones() {
        return $this->numConexiones;
    }
    function getFechaHoraUltimaConexion(){
        return $this->fechaHoraUltimaConexion;
    }
    function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }
    function getPerfil() {
        return $this->perfil;
    }
    function setCodUsuario(){
        return $this->codUsuario;
    }
    function setPassword() {
        return $this->password;
    }
    function setdescUsuario(){
        return $this->descUsuario;
    }
    function setNumConexiones() {
        return $this->numConexiones;
    }
    function setFechaHoraUltimaConexion(){
        return $this->fechaHoraUltimaConexion;
    }
    function setFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }
    function setPerfil() {
        return $this->perfil;
    }
}
?>

