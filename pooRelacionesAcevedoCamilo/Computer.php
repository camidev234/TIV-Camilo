<?php

class Computador {
    // Atributos
    private $fabricante;
    private $capMemoria;
    private $tipoMemoria;
    private $tipoAlmacenamiento;
    private $capAlmacenamiento;
    private $sistemaOperativo;
    private $suiteOficina;
    private $procesador;
    private $numPuertosUSB;
    
    private static $contadorObjetos = 0;

   
    public function __construct($fabricante,
        $capMemoria, 
        $tipoMemoria, 
        $tipoAlmacenamiento,
        $capAlmacenamiento,
        $sistemaOperativo,
        $suiteOficina,
        $procesador,
        $numPuertosUSB) {
        $this->fabricante = $fabricante;
        $this->capMemoria = $capMemoria;
        $this->tipoMemoria = $tipoMemoria;
        $this->tipoAlmacenamiento = $tipoAlmacenamiento;
        $this->capAlmacenamiento = $capAlmacenamiento;
        $this->sistemaOperativo = $sistemaOperativo;
        $this->suiteOficina = $suiteOficina;
        $this->procesador = $procesador;
        $this->numPuertosUSB = $numPuertosUSB;
        
        self::$contadorObjetos++;
    }

    public static function obtenerFechaHoy() {
        return date('d/m/Y');
    }

    public static function obtenerContadorObjetos() {
        return self::$contadorObjetos;
    }

    // getters

    public function getContadorObjetos() {
        return self::$contadorObjetos;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function getCapMemoria() {
        return $this->capMemoria;
    }
    
    public function getTipoMemoria() {
        return $this->tipoMemoria;
    }
    
    public function getTipoAlmacenamiento() {
        return $this->tipoAlmacenamiento;
    }

    public function getCapacidadAlm(){
        return $this->capAlmacenamiento;
    }

    public function getSistemaOperativo() {
        return $this->sistemaOperativo;
    }
    
    public function getSuiteOficina() {
        return $this->suiteOficina;
    }

    public function getProcesador() {
        return $this->procesador;
    }

    public function getNumPuertosUSB() {
        return $this->numPuertosUSB;
    }
}