<?php
function Suma($n1, $n2)
{
  return $n1 + $n2;
}
function Resta($n1, $n2)
{
  return $n1 - $n2;
}
function Multiplicacion($n1, $n2)
{
  return $n1 * $n2;
}
function Division($n1, $n2)
{
  return $n1 / $n2;
}

function Calculadora($n1, $n2, $operacion) {
  if ($operacion == "suma") {
    Suma($n1, $n2);
  } else if ($operacion == "resta") {
    Resta($n1, $n2);
  } else if ($operacion == "multiplicacion") {
    Multiplicacion($n1, $n2);
  } else if ($operacion == "division") {
    Division($n1, $n2);
  }
}

Calculadora( 1, 1, "suma");
?>
