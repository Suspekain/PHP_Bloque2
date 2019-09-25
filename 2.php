<form name="formulario" method="get" action="2.php">
  Columnas: <input type="text" name="columnas" value="">
  Lineas: <input type="text" name="lineas" value="">
  <input type="submit"/>
</form>

<?php
 $columnas = $_GET["columnas"];
 $lineas = $_GET["lineas"];

 echo "<table border='1'>";
 for ($i=1; $i<=$lineas ; $i++) {
   echo "<tr>";
   for ($j=1; $j <= $columnas ; $j++) {
     echo "<td>";
     echo "a";
     echo "</td>";
   }
   echo "</tr>";
 }
 echo "</table>";
?>
