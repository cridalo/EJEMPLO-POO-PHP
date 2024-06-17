<?php
class Persona
{
  protected $nombre;
  public function __construct($nombre = null)
  {
    if ($nombre===null){
      $this->constructorDefault();
    }else{
      $this->constructorConParametros($nombre);
    }
  }

  private function constructorDefault(){
    $this->nombre = "Anonimo";
    echo "<br>Construyendo objeto Persona - default ";
  }

  private function constructorConParametros($nombre){
    $this->nombre = $nombre;
    echo "<br>Construyendo objeto Persona - con parametros";
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
}
