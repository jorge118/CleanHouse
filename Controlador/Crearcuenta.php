<?php
  include '../Controlador/Conexion.php';

  $idUsuario = null;
  $consulta="insert into usuario values('".$idUsuario."',
  '".$_POST['user']."',
  '".$_POST['ApePat']."',
  '".$_POST['ApeMat']."',
  '".$_POST['usuario']."',
  '".$_POST['contrasena']."',
  '".$_POST['direccion_Calle']."',
  '".$_POST['direccion_Colonia']."',
  '".$_POST['direccion_Numero']."',
  '".$_POST['correo']."')";
  $resultado =mysqli_query($mysqli, $consulta);

  	if($resultado==1){
      echo '<script> alert("Cliente registrado exitosamente")</script>';
      echo '<script> window.location="../Vista/index.php"; </script>';

  	}

  	else{
  		echo "Se ha producido un error revise los datos ingresados";
      echo '<script> window.location="../Vista/VCliente.php"; </script>';
  	}


?>
