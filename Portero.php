<?php
class Portero extends Futbolista
{
  protected $goles;

  public function __construct($nombre = null, $edad = 0, $numero = 1, $goles = 0)
  {
    if($goles === 0){
      $this->constructorDefault();
    }else{
      $this->constructorConParametros($nombre, $edad, $numero, $goles);
    }
  }

  private function constructorDefault(){
    parent::__construct();
    $this->goles = 0;
    echo "<br>Construyendo objeto Portero - default";
  }

  private function constructorConParametros($nombre, $edad, $numero, $goles){
    parent::__construct($nombre, $edad, $numero);
    $this->goles = $goles;
    echo "<br>Construyendo objeto Portero - con parametros";
  }

  public function getGoles(){
    return $this->goles;
  }

  public function setGoles($goles){
    $this->goles = $goles;
  }
}