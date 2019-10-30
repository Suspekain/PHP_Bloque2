<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Agenda</title>
</head>
<body>
  <form method="post" action="#">
    *Nombre: <input type="text" name="nombre">
    <br><br>
    Correo: <input type="email" name="correo">
    <br><br>
    <input type="submit" value="Guardar" name="enviar">
  </form>
  <hr>
</body>
</html>

<?php
session_start();
if (isset($_SESSION['agenda'])) {
  $agenda = $_SESSION['agenda'];
} else {
  $agenda = array();
}

//recojemos la persona nueva en un array
if ($_POST["enviar"]) {
  if (trim($_POST["nombre"]) != "" && trim($_POST["correo"]) != "") {
    $persona_nueva = [
      "nombre" => $_POST["nombre"],
      "correo" => $_POST["correo"]
    ];

    $existe = false;
    for ($i=0; $i < count($agenda) ; $i++) {
      if ($agenda[$i]["nombre"] == $persona_nueva["nombre"]) {
        $existe = true;
        $agenda[$i]["correo"] = $persona_nueva["correo"];
      }
    }

    if (!$existe) {
      array_push($agenda, $persona_nueva);
    }
  } else if (trim($_POST["nombre"]) != "") {
    for ($i=0; $i < count($agenda) ; $i++) {
      if ($agenda[$i]["nombre"] == $_POST["nombre"]) {
        unset($agenda[$i]);
      }
    }
  } else {
    echo "El nombre es obligatorio";
  }
}

//bloque de accion: añadir en array, publicar el array, y asignar al session
foreach ($agenda as $persona) {
  echo "Nombre: " . $persona["nombre"] . "<br>Correo: " . $persona["correo"] . "<hr>";
}
$_SESSION["agenda"] = $agenda;
//bloque de accion
?>
