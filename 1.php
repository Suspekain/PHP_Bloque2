<?php
$naturales = array();
$factoriales = array();

//generar array de numeros naturales
for ($i=0; $i < 10; $i++) {
  $naturales[i] = i;
}

for ($i=0; $i < sizeof($naturales); $i++) {
  $factoriales[i] = gmp_fact($naturales[i]);
}

for ($i=0; $i < 10; $i++) {
  echo $naturales[i] . " " . $factoriales[i] . "<br>";
}
?>
