<?php
class Deportista extends Persona
{
  protected $edad;

  public function __construct($nombre = null, $edad = 0)
  {
    if($edad === 0 ){
      $this->constructorDefault();
    }else{
      $this->constructorConParametros($nombre, $edad);
    }
  }

  private function constructorDefault(){
    parent::__construct();
    $this->edad = 0;
    echo "<br>Construyendo objeto Deportista - default";
  }

  
  private function constructorConParametros($nombre, $edad){
    parent::__construct($nombre);
    $this->edad = $edad;
    echo "<br>Construyendo objeto Deportista - con parametros";
  }

  public function getEdad(){
    return $this->edad;
  }

  public function setEdad($edad){
    $this->edad = $edad;
  }
}