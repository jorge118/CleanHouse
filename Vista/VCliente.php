<!DOCTYPE html>
<html lang="mx" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Crear Cuenta Cliente</title>
    <link rel="stylesheet" href="../Estilo/cuentaC.css">
  </head>
  <body>
  <div class="loginBox">
    <img src="../Imagenes/logo.jpeg" class="logo">
    <h2>Crear Cuenta</h2>
    <form method="post" action="../Controlador/Crearcuenta.php">
      <div class="contenedor-input">
      <p>Nombre</p>
      <input type="text"  name="user"  class="input-100" placeholder="Nombre" required  pattern="[A-a-Z-z]{1,15}" title="Este campo acepta caracteres: letras incluyendo espacio para el nombre">
      <p>Apellidos</p>
      <input type="text" name="ApePat"  class="input-40"placeholder="Apellido Paterno" required pattern="[A-a-Z-z]{1,15}" >
      <input type="text" name="ApeMat" class="input-40" placeholder="Apellido Materno" required pattern="[A-a-Z-z]{1,15}" >
      <p>Correo Electronico</p>
   <input type="email" name="correo"  class="input-100" placeholder="Correo" required>
   <p>Usuario y Contraseña</p>
   <input type="text"  name="usuario"  class="input-40" placeholder="Usuario" required required pattern="[A-Za-z0-9]{5,5}" title="Este campo requiere 5 caracteres: letras y numeros">
   <input type="password"  name="contrasena"  class="input-40"placeholder="Contraseña"  required pattern="[A-Za-z0-9]{5,5}" title="Este campo requiere 5 caracteres: letras y numeros">
     <p>Direccion</p>
       <input type="text" name="direccion_Calle"  class="input-30" placeholder="Calle" required pattern="[A-a-Z-z]{1,15}">
       <input type="text" name="direccion_Colonia"   class="input-30" placeholder="Colonia" required pattern="[A-a-Z-z]{1,15}">
       <input type="number" name="direccion_Numero"    class="input-30" placeholder="Numero" required>

    <input type="submit" name="btn_registrar" value="Registarse"  >
    </div>
    </form>
      </div>





  </body>
</html>
