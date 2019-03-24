<!DOCTYPE html>
<html lang="mx" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil Cliente</title>
    <link rel="stylesheet" href="../Estilo/perfil.css">
    <style type="text/css">
    /*estilo del MENU*/
    .menu-wrapper ul{
      list-style: none;
      text-align: right;
          }

    #menu >li{
      display: block;
      position:relative;

        padding: 5px;
    }

    li ul a{
      display: block;

    }

    .menu-wrapper{
      color:#EFF5FB;
      transition: 0.3s;
      font-size: 20px;
      position:fixed;
      top: 5px;
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      z-index: 1;
     }

.menu-wrapper .contenedor-menu {
  position: absolute;
  right: 0;
  z-index: 1;
      }
    #menu li a:hover{
      padding: .3em;
      background: transparent;
      border-bottom-style: none;
      text-align: center;
      text-decoration:none;
     border-top:  0px solid #FDFEFE;
      border-right: 0px solid #FDFEFE ;

    }
    </style>
  </head>
  <body>
<!-- Menu-->
    <div class="menu-wrapper">
    <div class="contenedor-menu">
      <ul id="menu">
        <li style=display:inline-block;float:right; padding:10px;> <a href="../Vista/historial.php">  <b>Historial</b> </a></li>
        <li  style=display:inline-block;float:right; padding:10px;> <a href="../Vista/solicitud.php"> <b>
          Solicitud de Servicios</b> </a></li>
        <li style=display:inline-block;float:right; padding:10px;> <a href="../Vista/catalogoServicio.php"><b> Catalogo Servicios</b></a></li>
          </ul>
      </div>
    </div>
  <div class="loginBox">
    <img src="../Imagenes/logo.jpeg" class="logo">
    <h2>Modificar Cuenta</h2>
      <div class="contenedor-input">
      <p>Nombre</p>
      <input type="text"  name="user"  class="input-100"placeholder="Nombre" required>
      <p>Apellidos</p>
      <input type="text" name="ApePat"  class="input-40"placeholder="Apellido Paterno" required>
      <input type="text" name="ApeMat" class="input-40" placeholder="Apellido Materno" required>
      <p>Correo Electronico</p>
   <input type="email" name="correo"  class="input-100" placeholder="Correo" required>
   <p>Usuario y Contraseña</p>
   <input type="text"  name="usuario"  class="input-40" placeholder="Usuario" required required pattern="[A-Za-z0-9]{5,5}" title="Este campo requiere 5 caracteres: letras y numeros">
   <input type="password"  name="contrasena"  class="input-40"placeholder="Contraseña"  required pattern="[A-Za-z0-9]{5,5}" title="Este campo requiere 5 caracteres: letras y numeros">
     <p>Direccion</p>
       <input type="text" name="direccion_Calle"  class="input-30" placeholder="Calle" required>
       <input type="text" name="direccion_Colonia"   class="input-30" placeholder="Colonia" required>
       <input type="number" name="direccion_Numero"    class="input-30" placeholder="Numero" required>

    <input type="submit" name="btn_registrar" value="Modificar">
    </div>
    </form>
      </div>





  </body>
</html>
