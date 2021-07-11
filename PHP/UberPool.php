<?php
include_once('Car.php');
class UberPool extends Car
{
    //Variables
    public $brand;
    public $model;

/* -------------------------------------------------------------------------- */
/*                                 Constructor                                */
/* -------------------------------------------------------------------------- */
    public function __construct($license, $driver, $brand, $model) 
    {
        //Hereda los atributos de car
        parent::__construct($license, $driver);
      $this->brand = $brand;
      $this->model = $model;
    }


}