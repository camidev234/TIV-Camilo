<?php
class Pared{
    private string $materiales;
    public function __construct($materiales){
        $this->materiales= $materiales;
        echo 'Soy el Constructor. Se ejecuta automáticamente';
    }
    public function get_materiales(){
        return $this->materiales;
    }
    public function set_materiales($materiales){
        $this->materiales = $materiales;
    }
    public function saludar(){
        echo '<br>'.'Invocando un método PHP. ';
    }
}
//Declarar un objeto 
$pared_sala = new Pared('Bloque número 5, 20x20 cm');

$paredDos = new Pared('Pared que tiene oidos', '40 x 40 m');
