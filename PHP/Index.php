<?php

require_once('Car.php');
require_once('UberX.php');
require_once('UberVan.php');
require_once('UberPool.php');
require_once('Account.php');


/* -------------------------------------------------------------------------- */
/*                          Instancias Tipos de Uber                          */
/* -------------------------------------------------------------------------- */

$uberX = new UberX("CVB123", new Account("Eduardo", "AND456"), "Chevrolet", "Spark");
$uberX->printDataCar();
$uberX->setPassenger(4);
echo"/*=====================*/<br>";
$uberPool = new UberPool("CVB456", new Account("Luis", "AND456"), "Dodge", "Attitude");
$uberPool->printDataCar();
$uberPool->setPassenger(4);
echo"/*=====================*/<br>";

$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();
echo"/*=====================*/<br>";

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();
echo"/*=====================*/<br>";

