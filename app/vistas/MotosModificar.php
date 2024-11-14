<!DOCTYPE html>
<html>
<head>
  <title>Modificar una moto</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."motos/modificar/"; ?>' method="POST">
    <table>
      <tr><td><label for="marca">Marca:</label></td>
        <td><input type="text" name="marca" value="<?php print $data["marca"]; ?>"></td>
      </tr>
      <tr><td><label for="modelo">Modelo:</label></td>
        <td><input type="text" name="modelo" value="<?php print $data["modelo"]; ?>"></td>
      </tr>
      <tr><td><label for="año">Año:</label></td>
        <td><input type="int" name="año" value="<?php print $data["año"]; ?>"></td>
      </tr>
      <tr><td><label for="precio">Precio:</label></td>
        <td><input type="int" name="precio" value="<?php print $data["precio"]; ?>"></td>
      </tr>
      <tr><td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  <a href='<?php print RUTA_APP."motos/"; ?>'>Regresar</a>
</body>
</htmlñ