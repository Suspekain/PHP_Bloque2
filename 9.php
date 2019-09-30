<?php
$lados = array(3, 27, 17, -5, 11);

foreach ($lados as $lado) {
  try {
    if ($lado >= 0) {
      echo pow($lado, 2);
    } else {
      throw new \Exception("La distancia no puede ser negativa", 1);

    }
  } catch (\Exception $e) {
    echo $e->getMessage(),  "\n";
  }
  echo "<br>";
}
?>
