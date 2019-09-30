<?php
try {
  if (!file_exists("config.php")) {
    throw new \Exception("No se encuentra el archivo config.php", 1);
  }
} catch (\Exception $e) {
  echo $e->getMessage(),  "\n";
}

?>
