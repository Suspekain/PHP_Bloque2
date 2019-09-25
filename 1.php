<?php
$naturales = array(10);
$factoriales = array(10);
$factorial = 1;

//generar array de numeros naturales
for ($i=0; $i < 10; $i++) {
  $naturales[$i] = $i;
}

for ($i=0; $i < sizeof($naturales); $i++) {
  for ($j=$i; $j>=1; $j--) {
    $factorial = $factorial*$j;
  }
  $factoriales[$i] = $factorial;
  $factorial = 1;
}
for ($i=0; $i < 10; $i++) {
  echo "!" . $naturales[$i] . " = " . $factoriales[$i] . "<br>";
}
?>
