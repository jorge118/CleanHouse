<!DOCTYPE html>
<html lang="mx" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Catalogo Servicios</title>
      <link rel="stylesheet" href="../Estilo/catalogo.css">
      <style type="text/css">
      /*estilo del MENU*/
      .menu-wrapper ul{
        list-style: none;
        text-align: right;
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
        <li  style=display:inline-block;float:right; padding:10px;> <a href="../Vista/solicitud.php"> <b>
          Solicitud de Servicios</b> </a></li>
          </ul>
        </li></div>
  <!--ESTE ES LA GALERIA CON LAS IMAGENES-->
<div class="galeria">
  <h1> Catalogo Servicios
  </h1>
  <div class="linea"></div>
    <div class="contenedor-imagenes">
      <div class="imagen"><img src="../Imagenes/cocina.jpg" alt="">
      <div class="overlay">
      <h5>informacion del servicio</h5>
     </div>
      </div>
      <div class="imagen"><img src="../Imagenes/baño.jpg" alt="">
        <div class="overlay">
        <h5>informacion del servicio</h5>
       </div>
      </div>
      <div class="imagen"><img src="../Imagenes/sala.jpg" alt="">
        <div class="overlay">
        <h5>informacion del servicio</h5>
       </div>
     </div>
      <div class="imagen"><img src="../Imagenes/recamara.jpg" alt="">
        <div class="overlay">
        <h5>informacion del servicio</h5>
       </div>
      </div>
      <div class="imagen"><img src="../Imagenes/oficina.jpg" alt="">
        <div class="overlay">
        <h5>informacion del servicio</h5>
       </div>
     </div>
    </div>


</div>

  </body>
</html>
