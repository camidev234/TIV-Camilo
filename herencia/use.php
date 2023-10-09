<?php

require_once('automovil.php');

$mi_automovil = new Automovil('Chevrolet', '201A', 30000000, 'SEDANT', 'KZUl');

echo "Marca automovil:".$mi_automovil->get_marca(). '<br>';

echo $mi_automovil->get_modelo(). '<br>';
echo $mi_automovil->get_precio(). '<br>';


echo 'Tipo:'.$mi_automovil->get_tipo(). '<br>';
echo 'Color: '.$mi_automovil->get_color(). '<br>';


require_once('camion.php');
$mi_camion=new camion('renault trucks','2021',100000000,14,1);

echo 'marca camion',$mi_camion->get_marca().'</br>';
echo 'modelo camion',$mi_camion->get_modelo().'</br>';
echo 'precio camion',$mi_camion->get_precio().'</br>';


