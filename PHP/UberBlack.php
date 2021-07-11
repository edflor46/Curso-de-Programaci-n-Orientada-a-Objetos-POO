<?php
include_once('Car.php');
class UberBlack extends Car
{
    //VAriables
    public $typeCarAccepted;
    public $seatMaterial;
    

    /* -------------------------------------------------------------------------- */
    /*                                 Constructor                                */
    /* -------------------------------------------------------------------------- */

    public function __construct($license, $driver, $typeCarAccepted, $seatMaterial) 
    {
        //Hereda los atributos de car
        parent::__construct($license, $driver);
      $this->typeCarAccepted = $typeCarAccepted;
      $this->$seatMaterial = $seatMaterial;
    }

}