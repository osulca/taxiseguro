<?php

class Vehiculo {

    protected $Placa;
    protected $Modelo;
    protected $Color;
    protected $Soat;
    
    function getPlaca() {
        return $this->Placa;
    }

    function getModelo() {
        return $this->Modelo;
    }

    function getColor() {
        return $this->Color;
    }

    function getSoat() {
        return $this->Soat;
    }

    function setPlaca($Placa) {
        $this->Placa = $Placa;
    }

    function setModelo($Modelo) {
        $this->Modelo = $Modelo;
    }

    function setColor($Color) {
        $this->Color = $Color;
    }

    function setSoat($Soat) {
        $this->Soat = $Soat;
    }

    function MostrarVehiculos(){
        
    }
}
