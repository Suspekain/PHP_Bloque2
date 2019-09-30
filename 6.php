

<?php
$meses = (
  $enero = array(),
  $febrero = array(),
  $marzo = array(),
  $abril = array(),
  $mayo = array(),
  $junio = array(),
  $julio = array(),
  $agosto = array(),
  $septiembre = array(),
  $octubre = array(),
  $noviembre = array(),
  $diciembre = array()
);

function InsertarPersona($nombre, $mes)
{
  switch ($mes) {
    case 1:
    $enero[] = $nombre;
    break;
    case 2:
    $febrero[] = $nombre;
    break;
    case 3:
    $marzo[] = $nombre;
    break;
    case 4:
    $abril[] = $nombre;
    break;
    case 5:
    $mayo[] = $nombre;
    break;
    case 6:
    $junio[] = $nombre;
    break;
    case 7:
    $julio[] = $nombre;
    break;
    case 8:
    $agosto[] = $nombre;
    break;
    case 9:
    $septiembre[] = $nombre;
    break;
    case 10:
    $octubre[] = $nombre;
    break;
    case 11:
    $noviembre[] = $nombre;
    break;
    case 12:
    $diciembre[] = $nombre;
    break;

    default:
    break;
  }
}
?>

<html>
<form name="formulario" method="get" action="6.php">
  Nombre: <input type="text" name="nombre" value="">
  Mes: <input type="text" name="mes" value="">
  <input type="submit"/>
</form>
</html>

<?php
$nombre = $_GET["nombre"];
$mes = $_GET["mes"];
InsertarPersona($nombre, $mes);

foreach ($meses as $mes) {
  echo $mes;
  foreach ($mes as $persona) {
    echo $persona;
  }
  echo "<hr>";
}
?>
