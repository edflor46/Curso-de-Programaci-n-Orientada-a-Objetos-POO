<?php
include_once('Car.php');
class UberVan extends Car
{
    //Variables
    public $typeCarAccepted;
    public $seatMaterial;


    /* -------------------------------------------------------------------------- */
    /*                                 Constructor                                */
    /* -------------------------------------------------------------------------- */
    public function __construct($license, $driver, $typeCarAccepted, $seatMaterial)
    {
        //Hereda los atributos de Car
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->$seatMaterial = $seatMaterial;
    }

    /* -------------------------------------------------------------------------- */
    /*                                  SET Y GET                                 */
    /* -------------------------------------------------------------------------- */
    public function setPassenger($passenger)
    {
        //Valida que el numero de pasajeros sean 6
        if ($passenger == 6) {
            $this->passenger = $passenger;
        } else {
            echo "Necesitas asignar 6 pasajeros";
        }
    }

}
