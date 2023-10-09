<?php

include_once 'Computer.php';

class Desktop extends Computador{
    private bool $ups;

    public function __construct($fabricante,
    $capMemoria, 
    $tipoMemoria, 
    $tipoAlmacenamiento,
    $capAlmacenamiento,
    $sistemaOperativo,
    $suiteOficina,
    $procesador,
    $numPuertosUSB,
    bool $ups){
        parent::__construct(
        $fabricante,
        $capMemoria, 
        $tipoMemoria, 
        $tipoAlmacenamiento,
        $capAlmacenamiento,
        $sistemaOperativo,
        $suiteOficina,
        $procesador,
        $numPuertosUSB);
        $this->ups = $ups;
    }

    public function getUPS(){
        return $this->ups;
    }   
    
    public function setUPS(bool $ups){
        $this->ups = $ups;
    }   
}