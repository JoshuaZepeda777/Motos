<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta una Moto</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>
<body>
   <h1>Dar de alta una Moto</h1>
  <fieldset>
   
  <form action='<?php print RUTA_APP."Motos/alta/"; ?>' method="POST">
    <table>
      <tr><td ><label for="marca">marca:</label></td>
        <td class="cien"><input type="text" name="marca"></td>
      </tr>
      <tr><td><label for="modelo">modelo:</label></td>
        <td class="cien"><input type="text" name="modelo"></td>
      </tr>
      <tr><td><label for="año">año:</label></td>
        <td class="cien"><input type="int" name="año"></td>
      </tr>
      <tr><td><label for="precio">precio:</label></td>
        <td class="cien"><input type="int" name="precio"></td>
      </tr>
      <tr><td>&nbsp;</td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  </fieldset>
  <a href='<?php print RUTA_APP."motos/"; ?>'>Regresar</a>
</body>
</html>