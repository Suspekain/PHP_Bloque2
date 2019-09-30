<?php
//CLASE PERSONA
class Persona {
public $dni;
public $nombre;
public $apellido;

function __construct() {}
//Getters - setters
public function getDni() {
  echo $this->dni;
}
public function setDni($dni) {
  $this->dni = $dni;
}

public function getNombre() {
  echo $this->nombre;
}
public function setNombre($nombre) {
  $this->nombre = $nombre;
}

public function getApellido() {
  echo $this->apellido;
}
public function setApellido($apellido) {
  $this->apellido = $apellido;
}
//mostrar nombre completo
public function NombreCompleto() {
  echo "Persona: " . mostrarNombre() . " " . mostrarApellido();
}
}
//fin clase persona

//CLASE USER
class User extends Persona {
  $puntos;

  function __construct() {}
  public function getPuntos() {
    echo $this->puntos;
  }
  public function setPuntos($puntos) {
    $this->puntos = $puntos;
  }
  public function cantidadPuntos() {
    if ($this->puntos < 100) {
      echo "Tiene menos de 100 puntos";
    }
  }
}

$persona = new Persona();
$persona->setDni(12345678);
echo $persona->getDni();
?>
