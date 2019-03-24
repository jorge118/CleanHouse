<!DOCTYPE html>
<html lang="mx" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Solicitud Servicio</title>
      <link rel="stylesheet" href="../Estilo/solicitud.css">
      <style type="text/css">
      /*estilo del MENU*/
      .menu-wrapper ul{
        list-style: none;
        text-align: right;
        position: static;
            }

      #menu >li{
        display: block;
        position:relative;
          padding: 25px;
      }

      li ul a{
        display: block;
      }
      .menu-wrapper{
        color:#EFF5FB;
        transition: 0.3s;
        font-size: 20px;
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

    <!--ESTE ES EL MENU PRINCIPAL-->
      <div class="menu-wrapper">
        <ul id="menu">
          <li style=display:inline-block;float:right; padding:10px;> <a href="../Vista/perfil.php"> <b>Perfil</b>  </a> </li>
          <li style=display:inline-block;float:right; padding:10px;> <a href="../Vista/historial.php">  <b>Historial</b> </a></li>
          <li  style=display:inline-block;float:right; padding:0px;> <a href="../Vista/catalogoServicio.php"> <b>
            Catalogo Servicios</b> </a></li>
            </ul>
          </li></div>
    <div class="solicitudBox">
      <h2>Solicitar Servicio</h2>
      <form>
        <div class="contenedor-input">
        <p>Direccion</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14888.841601467462!2d-101.61008935000001!3d21.10417635!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1550980138580" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        <p>Cambiar Direccion</p>
     <input type="submit" name="btn_cambiar"  class="input-40" value="Cambiar" required>

     <p>Tipo Servicio y Metodo de Pago</p>
     <select class="select-40">
       <option selected> Limpieza Recamaras </option>
       <option selected> Limpieza Oficina </option>
       <option selected> Limpieza Baños </option>
       <option selected> Limpieza Cocina </option>
       <option selected> Limpieza Sala </option>
     </select>

       <select class="select-40">
         <option selected> Paypal </option>
         <option selected> Efectivo </option>
   </select>


      <input type="submit" name="btn_registrar" value="Solicitar Servicio" <a href="#"></a>
      </div>
      </form>
        </div>

  </body>
</html>
