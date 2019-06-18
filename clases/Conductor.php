<?php

class Conductor {

    protected $Dni;
    protected $Nombre;
    protected $Licencia;
    protected $Sexo;
    
    function getDni() {
        return $this->Dni;
    }

    function getNombre() {
        return $this->Nombre;
    }

    function getLicencia() {
        return $this->Licencia;
    }

    function getSexo() {
        return $this->Sexo;
    }

    function setDni($Dni) {
        $this->Dni = $Dni;
    }

    function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    function setLicencia($Licencia) {
        $this->Licencia = $Licencia;
    }

    function setSexo($Sexo) {
        $this->Sexo = $Sexo;
    }


}
