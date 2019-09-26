<?php
$numeros = array(20);
$suma = 0;
//crear array ( de 20 numeros) de numeros aleatorios de 0 a 100
for ($i=0; $i < 20; $i++) {
  $numeros[$i] = random_int(0, 100);
}
//ordenar lista
sort($numeros);

//listar array de numeros
for ($i=0; $i < 20; $i++) {
  //dar color al primero y ultimo
  if ($i == 0) {
    echo "<p style='color: blue'>";
  } elseif ($i == 19) {
    echo "<p style='color: green'>";
  }
  //echo principal
  echo $numeros[$i] . " ";
  $suma = $suma + $numeros[$i];

  if ($i == 0 || $i == 19) {
    echo "</p>";
  }
}

echo "Suma de los numeros: " . $suma . " Media: " . $suma/20;

?>
