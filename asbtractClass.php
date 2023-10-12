<?php

abstract class Figure{
    private $nLados;
    private $name;
    
    public function __construct(int $nLados, string $name) {
        $this->nLados = $nLados;
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName(string $name) {
        $this->name = $name;
    }

    public function getNLados() {
        return $this->nLados;
    }
    
    public function setNLados(int $nLados) {
        $this->nLados = $nLados;
    }
    
    
    
}




