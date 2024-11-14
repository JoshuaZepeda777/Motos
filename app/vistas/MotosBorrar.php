<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta una moto</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."motos/borrar/"; ?>' method="POST">
    <table>
      <tr><td><label for="marca">marca:</label></td>
        <td><input type="text" name="marca" disabled="disabled" value="<?php print $data["marca"]; ?>"></td>
      </tr>
      <tr><td><label for="modelo">modelo:</label></td>
        <td><input type="text" name="modelo" disabled="disabled" value="<?php print $data["modelo"]; ?>"></td>
      </tr>
      <tr><td><label for="año">año:</label></td>
        <td><input type="int" name="año" disabled="disabled" value="<?php print $data["año"]; ?>"></td>
      </tr>
      <tr><td><label for="precio">Precio:</label></td>
        <td><input type="int" name="precio" disabled="disabled" value="<?php print $data["precio"]; ?>"></td>
      </Precio
      <tr><td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
    <p>ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar.</p>
  </form>
  <a href='<?php print RUTA_APP."motos/"; ?>'>Regresar</a>
</body>
</html>