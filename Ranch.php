<?php

date_default_timezone_set('America/Bogota');

class Ranch{
    private string $name;
    private float $size;
    private string $owner_name;

    public function __construct(string $name, float $size, string $owner_name) {
        $this->name = $name;
        $this->size = $size;
        $this->owner_name = $owner_name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize(float $size) {
        $this->size = $size;
    }
    
    public function getOwnerName() {
        return $this->owner_name;
    }
    
    public function setOwnerName(string $owner_name) {
        $this->owner_name = $owner_name;
    }

    public function getCurrentDate() {
        return date('Y-m-d H:i:s');
    }
}