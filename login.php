<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h2>LOGIN</h2>
      <form  action="registro.php" method="post">
        Usuario<br>
        <input type="text" name="usuario" id="usuario" value=""><br>
        <br>Contraseña<br>
        <input type="password" name="contraseña" id="contraseña" value="">
        <br><br>
        <input type="submit" name="" value="LOGIN" onclick="return comprobar();">
      </form>
        <script type="text/javascript" src="comprobarLogin.js"></script>
  </body>
</html>
