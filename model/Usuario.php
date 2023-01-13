<?php
class Usuario{
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numAccesos;
    private $fechaHoraUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $perfil;
    private $imagenUsuario;
    
    function __construct($codUsuario,$password,$descUsuario,$numAccesos,$fechaHoraUltimaConexion,$fechaHoraUltimaConexionAnterior,$perfil,$imagenUsuario) {
        $this->codUsuario=$codUsuario;
        $this->password=$password;
        $this->descUsuario=$codUsuario;
        $this->numAccesos=$numAccesos;
        $this->fechaHoraUltimaConexion=$fechaHoraUltimaConexion;
        $this->fechaHoraUltimaConexionAnterior=$fechaHoraUltimaConexionAnterior;
        $this->perfil=$perfil;
        $this->imagenUsuario=$imagenUsuario;
    }
    
}
?>

