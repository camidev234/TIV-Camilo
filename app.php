<?php

include_once 'farm.php';

$farm_one = new Farm('Granja el roble', 'Zipaquira', 70);
echo $farm_one->getName(). '---'. $farm_one->getLocation(). '---'. $farm_one->getCapacity();
echo '</br>';
$farm_two = new Farm('Granja la esperanza', 'Anolaima', 33);
echo $farm_two->getName(). '---'. $farm_two->getLocation(). '---'. $farm_two->getCapacity();
echo '</br>';
$farm_three = new Farm('La pradera', 'Villeta', 90);
echo $farm_three->getName(). '---'. $farm_three->getLocation(). '---'. $farm_three->getCapacity();
echo '</br>';
$farm_fourth = new Farm('El sol naciente', 'Vergara', 50);
echo $farm_fourth->getName(). '---'. $farm_fourth->getLocation(). '---'. $farm_fourth->getCapacity();
echo '</br>';
$farm_five = new Farm('Los pajaros', 'Paipa', 130);
echo $farm_five->getName(). '---'. $farm_five->getLocation(). '---'. $farm_five->getCapacity();
echo '</br>';

echo $farm_one->getCurrentDate();
echo '</br>';
include_once 'ranch.php';

echo '-----------------------------------------------------------------------------------------';

echo '</br>';

$Ranch_one = new Ranch('Napoles', 3000, 'Gonzalo');
echo $Ranch_one->getName(). '---'. $Ranch_one->getSize(). '---'. $Ranch_one->getOwnerName();
echo '</br>';
$Ranch_two = new Ranch('El paraiso', 2320, 'Juan Gonzales');
echo $Ranch_two->getName(). '---'. $Ranch_two->getSize(). '---'. $Ranch_two->getOwnerName();
echo '</br>';
$Ranch_three = new Ranch('San antonio', 1333, 'Miryam Beltran');
echo $Ranch_three->getName(). '---'. $Ranch_three->getSize(). '---'. $Ranch_three->getOwnerName();
echo '</br>';
$Ranch_fourth = new Ranch('Los laureles', 5300, 'Camilito');
echo $Ranch_fourth->getName(). '---'. $Ranch_fourth->getSize(). '---'. $Ranch_fourth->getOwnerName();
echo '</br>';
$Ranch_five = new Ranch('Villa Hermosa', 9000, 'Andres Beltran');
echo $Ranch_five->getName(). '---'. $Ranch_five->getSize(). '---'. $Ranch_five->getOwnerName();
echo '</br>';

echo $Ranch_one->getCurrentDate();