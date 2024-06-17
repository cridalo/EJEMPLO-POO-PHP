<?php
class Futbolista extends Deportista
{
  protected $numero;

  public function __construct($nombre = null, $edad = 0, $numero = 1)
  {
    if($numero===1){
      $this->constructorDefault();
    }else{
      $this->constructorConParametros($nombre, $edad, $numero);
    }
  }

  private function constructorDefault(){
    parent::__construct();
    $this->numero = 1;
    echo "<br>Construyendo objeto Futbolista - default";
  }


  private function constructorConParametros($nombre, $edad, $numero){
    parent::__construct($nombre, $edad);
    $this->numero = $numero;
    echo "<br>Construyendo objeto Futbolista - con parametros";
  }

  public function getNumero(){
    return $this->numero;
  }

  public function setNumero($numero){
    $this->numero = $numero;
  }
}