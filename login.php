<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
  </head>
  <body>
      <h2>LOGIN</h2>
      <form  action="resultado.php" method="post">
        Usuario<br>
        <input type="text" name="usuario" id="usuario" value=""><br>
        <br>Contraseña<br>
        <input type="password" name="contra" id="contraseña" value="">
        <br><br>
        <input type="submit" name="" value="LOGIN" onclick="return comprobar();">
      </form>
        <script type="text/javascript" src="comprobarLogin.js"></script>
  </body>
</html>
