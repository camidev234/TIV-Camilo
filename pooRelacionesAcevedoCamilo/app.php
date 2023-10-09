<?php 
include_once 'Computer.php';
include_once 'Desktop.php';
include_once 'laptop.php';

$laptop1 = new Laptop("HP", "8GB", "DDR4", "SSD", "256GB", "Windows 10", "Microsoft Office", "Intel Core i5", 3, true, "4 horas");
$laptop2 = new Laptop("Apple Mac", "16GB", "DDR4", "HDD", "1TB", "macOS", "iWork", "AMD Ryzen 7", 4, false, "6 horas");

$desktop1 = new Desktop("Marca1", "16GB", "DDR4", "HDD", "1TB", "Windows 10", "Microsoft Office", "Intel Core i7", 5, true);
$desktop2 = new Desktop("Marca2", "32GB", "DDR4", "SSD", "512GB", "Ubuntu", "LibreOffice", "AMD Ryzen 9", 8, false);


echo "Fabricante: " . $laptop1->getFabricante() . "<br>";
echo "Capacidad de Memoria: " . $laptop1->getCapMemoria() . "<br>";
echo "Tipo de Memoria: " . $laptop1->getTipoMemoria() . "<br>";
echo "Tipo de Almacenamiento: " . $laptop1->getTipoAlmacenamiento() . "<br>";
echo "Capacidad de Almacenamiento: " . $laptop1->getCapacidadAlm() . "<br>";
echo "Sistema Operativo: " . $laptop1->getSistemaOperativo() . "<br>";
echo "Suite de Oficina: " . $laptop1->getSuiteOficina() . "<br>";
echo "Procesador: " . $laptop1->getProcesador() . "<br>";
echo "Número de Puertos USB: " . $laptop1->getNumPuertosUSB() . "<br>";
echo "Tiene UPS: ";
echo "Es Táctil: ";
if ($laptop1->getTactil()) {
    echo "Sí<br>";
} else {
    echo "No<br>";
}


echo "Fabricante: " . $desktop1->getFabricante() . "<br>";
echo "Capacidad de Memoria: " . $desktop1->getCapMemoria() . "<br>";
echo "Tipo de Memoria: " . $desktop1->getTipoMemoria() . "<br>";
echo "Tipo de Almacenamiento: " . $desktop1->getTipoAlmacenamiento() . "<br>";
echo "Capacidad de Almacenamiento: " . $desktop1->getCapacidadAlm() . "<br>";
echo "Sistema Operativo: " . $desktop1->getSistemaOperativo() . "<br>";
echo "Suite de Oficina: " . $desktop1->getSuiteOficina() . "<br>";
echo "Procesador: " . $desktop1->getProcesador() . "<br>";
echo "Número de Puertos USB: " . $desktop1->getNumPuertosUSB() . "<br>";
echo "Tiene UPS: ";
if ($desktop1->getUPS()) {
    echo "Sí<br>";
} else {
    echo "No<br>";
}

echo 'objetos instanciados: ' . Computador::obtenerContadorObjetos(). '</br>';
echo 'fecha actual:'. Computador::obtenerFechaHoy();