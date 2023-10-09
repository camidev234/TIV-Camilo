<?php

include_once 'Computer.php';

class Laptop extends Computador{
    private bool $tactil;
    private string $potBateria;

    public function __construct($fabricante,
    $capMemoria,
    $tipoMemoria,
    $tipoAlmacenamiento,
    $capAlmacenamiento, 
    $sistemaOperativo,
    $suiteOficina,
    $procesador,
    $numPuertosUSB,
    bool $tactil,
    string $potBateria){
        parent::__construct($fabricante,
        $capMemoria,
        $tipoMemoria,
        $tipoAlmacenamiento,
        $capAlmacenamiento,
        $sistemaOperativo, 
        $suiteOficina,
        $procesador,
        $numPuertosUSB
    );
        $this->tactil = $tactil;
        $this->potBateria = $potBateria;
    }

    public function getTactil(){
        return $this->tactil;
    }

    public function getPotBateria(){
        return $this->potBateria;
    }

    public function setTactil(bool $tactil){
        $this->tactil = $tactil;
    }

    public function setPotBateria(string $potBateria){
        $this->potBateria = $potBateria;
    }
    

} 