<!DOCTYPE html>
<html lang="mx" dir="ltr">
<?php
session_start();
include '../Controlador/Validar.php';
include '../Controlador/Conexion.php';


$user_correo = $_SESSION['email'];
//$user_pass = $_SESSION['pass'];


$sqlSelect = "SELECT dbo.Persona.nombre, dbo.Persona.apellidos, dbo.Persona.domicilio, 
dbo.Usuario.correo, dbo.Usuario.usuario, dbo.Usuario.contrasena
FROM    dbo.Cliente INNER JOIN
dbo.Persona ON dbo.Cliente.idPersona = dbo.Persona.idPersona INNER JOIN
dbo.Usuario ON dbo.Cliente.idUsuario = dbo.Usuario.idUsuario AND 
dbo.Persona.idPersona = dbo.Usuario.idPersona WHERE dbo.Usuario.correo = '$user_correo' 
";

$sqlDatos = "SELECT nombre, apellidos,
correo , usuario,contrasena,domicilio 
FROM vistaCliente WHERE correo = '$user_correo' and contrasena = '$user_pass' ";



$res= sqlsrv_query($conn, $sqlSelect);
$row = sqlsrv_num_rows($res);
if( $res === false )
{
     echo "Error in statement preparation/execution.\n";
     die( print_r( sqlsrv_errors(), true));
}



while($row = sqlsrv_fetch_Array($res,SQLSRV_FETCH_ASSOC)){
    
 


    $nameUs = $row['nombre'];
  $userLastName= $row['apellidos'];
  $userAddress = $row['domicilio'];
  $user_correo= $row['correo'];
  $userName= $row['usuario'];
  $user_pass  = $row['contrasena'];


    $_SESSION['user'] = $nameUs;
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['ApePa'] = $userLastName;
    $_SESSION['ApePa'] = $_POST['ApePa'];
    $_SESSION['correo'] = $user_correo;
    $_SESSION['correo'] = $_POST['correo'];
    $_SESSION['usuario'] = $userName;
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contrasena'] = $user_pass;
    $_SESSION['contrasena'] = $_POST['contrasena'];
    $_SESSION['direccionCalle'] = $userAddress;
    $_SESSION['direccionCalle'] = $_POST['direccionCalle'];
  

  

}







/*
$nameUs = $row['nombre'];
  $userLastName= $row['apellidos'];
  $userAddress = $row['domicilio'];
  $userEmail= $row['correo'];
  $userName= $row['usuario'];
  $userAddress = $row['contrasena'];
  */      
    


sqlsrv_free_stmt( $res);


?>

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
    <form action = "../Controlador/MostrarDatos.php" >
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
      <input type="text" id="user" name="user" value = "<?php echo $nameUs;?>" class="input-100"placeholder="Nombre" required>
      <p>Apellidos</p>
      <input type="text" id="ApePat" name="ApePat"  value="<?php echo $userLastName;?>" class="input-60"placeholder="Apellidos" required>
      
      <p>Correo Electronico</p>
   <input type="email" name="correo" value="<?php print $user_correo;?>" class="input-100" placeholder="Correo" required>
   <p>Usuario y Contraseña</p>
   <input type="text"  name="usuario" value="<?php print $userName;?>" class="input-40" placeholder="Usuario" required required pattern="[A-Za-z0-9]{5,5}" title="Este campo requiere 5 caracteres: letras y numeros">
   <input type="password"  name="contrasena" value="<?php print $user_pass;?>" class="input-40"placeholder="Contraseña"  required pattern="[A-Za-z0-9]{5,5}" title="Este campo requiere 5 caracteres: letras y numeros">
     <p>Direccion</p>
       <input type="text" name="direccionCalle"  value="<?php print $userAddress;?>" class="input-60" placeholder="Calle" required>
      

    <input type="submit" name="btn_registrar" value="Modificar">
    </div>
    </form>
      </div>





  </body>
</html>
