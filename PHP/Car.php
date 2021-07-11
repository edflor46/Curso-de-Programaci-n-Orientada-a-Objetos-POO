<?php
require_once('Account.php');
class Car
{
  /* -------------------------------------------------------------------------- */
  /*                                  Variables                                 */
  /* -------------------------------------------------------------------------- */
  public $id;
  public $license;
  public $driver;
  public $passenger;

  /* -------------------------------------------------------------------------- */
  /*                                 Constructor                                */
  /* -------------------------------------------------------------------------- */

  public function __construct($license, $driver)
  {
    $this->license = $license;
    $this->driver = $driver;
  }

  /* -------------------------------------------------------------------------- */
  /*                            Imprimir Detalles Car                           */
  /* -------------------------------------------------------------------------- */
  public function printDataCar()
  {
    echo "Licencia: $this->license<br> 
    Driver: {$this->driver->name}<br>
    Número de pasajeros: $this->passenger<br>";
  }

  /* -------------------------------------------------------------------------- */
  /*                                  SET Y GET                                 */
  /* -------------------------------------------------------------------------- */
  public function setPassenger($passenger)
  {

    //VAlidar si el numero de pasajeros es 4
    if ($passenger == 4) {
      $this->passenger = $passenger;
    } else {
      echo "Necesitas asignar 4 pasajeros";
    }
  }

  public function getPassenger()
  {
    return $this->passenger;
  }
}