<?php

$numberOnePost = $_POST['numberOne'];
$numberTwoPost = $_POST['numberTwo'];
$operationPost = $_POST['operation'];



class Calculator{

    // declare html inputs

    private int $numberOne;
    private int $numberTwo;

    public function __construct($numberOne, $numberTwo) {
        $this->numberOne = $numberOne;
        $this->numberTwo = $numberTwo;
    }

    public function validate() {
        $errors = [];

        if (empty($this->numberOne)) {
            array_push($errors, "El número 1 es requerido");
        }

        if (empty($this->numberTwo)) {
            array_push($errors, "El número 2 es requerido");
        }

        return empty($errors);
    }

    public function add(){
        $validate = $this->validate();

        if ($validate){
            return $this->numberOne + $this->numberTwo;
        } else{
            return false;
        }
    }

    public function subtract(){
        $validate = $this->validate();

        if ($validate){
            return $this->numberOne - $this->numberTwo;
        } else{
            return false;
        }
    }

    public function multiply(){
        $validate = $this->validate();
        
        if ($validate){
            return $this->numberOne * $this->numberTwo;
        }else {
            return false;
        }
    }

    public function divide(){
        $validate = $this->validate();

        if ($validate){
            return $this->numberOne / $this->numberTwo;
        } else{
            return false;
        }
    }

    

}

function calculate(){
    global $numberOnePost, $numberTwoPost;
    $c1 = new Calculator($numberOnePost, $numberTwoPost);
    global $operationPost;
    if ($operationPost === 'op1'){
        return $c1->add();
    }
    if ($operationPost === 'op2'){
        return $c1->subtract();
    }
    if ($operationPost === 'op3'){
        return $c1->multiply();
    }
    if ($operationPost === 'op4'){
        return $c1->divide();
    }
    
}

echo calculate();
?>