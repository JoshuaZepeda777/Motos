<!DOCTYPE html>
<html>
<head>
  <title>Lista de Motos</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>
<body>
  <h1>Lista de Motos</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Año</th> 
        <th>Precio</th>
        <th>Modificar</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($data); $i++) { 
        print "<tr>";
        print "<td>" . htmlspecialchars($data[$i]["id"]) . "</td>";
        print "<td>" . htmlspecialchars($data[$i]["marca"]) . "</td>";
        print "<td>" . htmlspecialchars($data[$i]["modelo"]) . "</td>"; // Agregado el punto y coma
        print "<td>" . htmlspecialchars($data[$i]["año"]) . "</td>"; 
        print "<td>" . htmlspecialchars($data[$i]["precio"]) . "</td>";
        print "<td><a href='" . RUTA_APP . "motos/modificar/" . htmlspecialchars($data[$i]["id"]) . "'>Modificar</a></td>";
        print "<td><a href='" . RUTA_APP . "motos/borrar/" . htmlspecialchars($data[$i]["id"]) . "'>Borrar</a></td>";
        print "</tr>";
      }
      ?>
    </tbody>
  </table>
  <br>
  <a href='<?php print RUTA_APP . "motos/alta/"; ?>'>Dar de alta una moto</a>
</body>
</html>
