<!DOCTYPE html>
<html lang="mx" dir="ltr">
  <head>
    <style media="screen">

    </style>
    <meta charset="utf-8">
    <title> Login CleanHouse</title>
    <link rel="stylesheet" href="../Estilo/index.css">
  </head>
  <body>

    <div class="loginBox">
<img src="../Imagenes/usuario.png" class="user">

<h2> Iniciar Sesion</h2>
<form method="post" action="../controlador/validar.php">
  <p>Usuario</p>
  <input type="text" name="email" placeholder="Usuario" required>
  <p> Contraseña</p>
  <input type="password" name="pass" placeholder="Contraseña" required>
<input type="submit" name="btn_enviar" value="Iniciar"> <a href="../Vista/MenuAcceso.php"></a>
<p>¿No tienes Cuenta?<a href="../Vista/VCliente.php"> Registrate </a></p>
</form>
  </div>
  </body>
</html>
