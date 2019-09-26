<?php
$str = "manzana pera limón sandía melón";
$palabras = explode(" ", $str);

for ($i=0; $i < count($palabras); $i++) {
  echo $palabras[$i] . strlen($palabras[$i]);
}

?>
