<?php

date_default_timezone_set('America/Bogota');

class Farm{
    private string$name;
    private string $location;
    private int $capacity;

    public function __construct(string $name, string $location, int $capacity) {
        $this->name = $name;
        $this->location = $location;
        $this->capacity = $capacity;
    }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getLocation() {
        return $this->location;
    }

    public function setLocation(string $location) {
        $this->location = $location;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function setCapacity(int $capacity) {
        $this->capacity = $capacity;
    }

    public function getCurrentDate() {
        return date('Y-m-d H:i:s');
    }
}