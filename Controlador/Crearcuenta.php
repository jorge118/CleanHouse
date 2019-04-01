<?php
  include '../Controlador/Conexion.php';




$direccion = $_POST['direccion_Calle'] . $_POST['direccion_Colonia'] . $_POST['direccion_Numero'] ;

$nombreUsuario =   $_POST['user'];
$nombreUsuario = trim(stripslashes(str_replace("'", "''", $nombreUsuario)));
$apellidos =   $_POST['ApePat'] + $_POST['ApeMat'];
$apellidos = trim(stripslashes(str_replace("'", "''", $apellidos)));
$email= $_POST['correo'];

$tipoUser = "cliente";

$password = $_POST['contrasena'];

$usuario = $_POST['usuario'];


$estatus = 1;


$sql = "{call SP_AltaCliente (?,?,? ,?, ? ,?, ?,?)}";
//Pasamos los parametros a un arreglo 
      $myparams['nombre'] = $nombreUsuario;
      $myparams['apellidos'] = $apellidos;
      $myparams['domicilio'] = $direccion;
      $myparams['usuario'] = $usuario;
      $myparams['correo'] =$email;
      $myparams['contrasena'] = $password;
      $myparams['tipoUsuario'] = "cliente";
      $myparams['estatus'] = $estatus;
    



$params = array(   
  array(&$myparams['nombre'], SQLSRV_PARAM_IN),  
  array(&$myparams['apellidos'], SQLSRV_PARAM_IN),
  array(&$myparams['domicilio'], SQLSRV_PARAM_IN),
  array(&$myparams['usuario'], SQLSRV_PARAM_IN),
  array(&$myparams['correo'], SQLSRV_PARAM_IN),
  array(&$myparams['contrasena'], SQLSRV_PARAM_IN),
  array(&$myparams['tipoUsuario'], SQLSRV_PARAM_IN),
  array(&$myparams['estatus'], SQLSRV_PARAM_IN)
);  


  


  //$stmt= sqlsrv_prepare( $conn, $sql, $params);  

  if (!$conn) {
    die( print_r( sqlsrv_errors(), true));
 }
 //sqlsrv_execute($stmt);

 
    // $conn = get_sqlsrv_connect();
     if ($conn === false) {
         die(print_r(sqlsrv_errors(), true));
     }
     $stmt = sqlsrv_query($conn, $sql, $params);
     if ($stmt === false) {
         die(print_r(sqlsrv_errors(), true));
     }
     //
     $rss = array();
     do {
         $rs = array();
         while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
             array_push($rs, $row);
         }
         array_push($rss, $rs);
     } while (sqlsrv_next_result($stmt));
     sqlsrv_free_stmt($stmt);
     //free_sqlsrv_conn($conn);
     echo '<script> alert("Cliente registrado exitosamente")</script>';
echo '<script> window.location="../Vista/index.php"; </script>';
     return $rss;
     echo '<script> alert("Cliente registrado exitosamente")</script>';
     echo '<script> window.location="../Vista/index.php"; </script>';
     



  if( $stmt == false )  
{  
     echo "Error in executing statement 3.\n";  
     die( print_r( sqlsrv_errors(), true)); 
     echo "Se ha producido un error revise los datos ingresados";
      echo '<script> window.location="../Vista/VCliente.php"; </script>'; 
}  





/*if(sqlsrv_execute($stmt)){

  while($res = sqlsrv_next_result($stmt)){
    // make sure all result sets are stepped through, since the output params may not be set until this happens
  }
  // Output params are now set,
  print_r($myparams);
  print_r($params);
  
  
    


}else{
  die( print_r( sqlsrv_errors(), true));
}
*/
//echo "$params\n";
//sqlsrv_free_stmt( $stmt);  

echo '<script> alert("Cliente registrado exitosamente")</script>';
echo '<script> window.location="../Vista/index.php"; </script>';

      
sqlsrv_close( $conn); 

echo '<script> alert("Cliente registrado exitosamente")</script>';
echo '<script> window.location="../Vista/index.php"; </script>';
   
  	

    
?>
