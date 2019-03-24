<?php
session_start();
?>

<!DOCTYPE html>
<html lang="mx">
<head>
<meta charset="utf-8">
<title>Validando...</title>
</head>
<body>
  <?php
  include '../Controlador/Conexion.php';
  if (isset($_POST['btn_enviar'])) {
    $correo2 = $_POST['email'];
    $contrasena = $_POST['pass'];

    $query = ("SELECT * FROM Usuario WHERE correo = '$correo2' AND contrasena = '$contrasena'");
    $result = sqlsrv_query($conn, $query); 
    
    #checks if the search was made
if($result === false){
  die( print_r( sqlsrv_errors(), true));
 }
 
 if(sqlsrv_has_rows($result) != 1){
  echo "User/password not found";
  echo '<script> alert("Usuario y/o contraseña incorrectos, intentelo de nuevo")</script>';
echo '<script> window.location="../Vista/index.php"; </script>';
 }
 else{


  //$resultado=sqlsrv_query($conn, $consulta);
	  //$numf=sqlsrv_has_rows($resultado);
      //var_dump($numf);
      
        if($row = sqlsrv_fetch_array($result)){
        $row2 = sqlsrv_fetch_array($result);
        $_SESSION["email"] = $row2['correo'];
        echo '<script> alert("Usuario correcto bienvenido")</script>';
        echo '<script> window.location="../Vista/MenuAcceso.php"; </script>';
      }
      
    

 }
    
}
  ?>

</body>
</html>
