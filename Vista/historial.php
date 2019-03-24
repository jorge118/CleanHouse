<!DOCTYPE html>
<html lang="mx">
  <head>
    <meta charset="utf-8">
    <title>Historial de Servicios</title>
    <link rel="stylesheet" href="../Estilo/estilo_tablahistorial.css">
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
      position:relative;
      top: 5px;
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
     }

.menu-wrapper .contenedor-menu {
  position: absolute;
  right: 0;

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
        <div class="contenedor-menu">
        <ul id="menu" >
          <li style=display:inline-block;float:right; padding:10px;> <a href="../Vista/perfil.php"> <b>Perfil</b>  </a> </li>
          <li  style=display:inline-block;float:right; padding:10px;> <a href="../Vista/solicitud.php"> <b>
            Solicitud de Servicios</b> </a></li>
            </ul>
          </div>
        </div>

<div class="tablahisto">
    <table class="tabla_equipos">
      <tr>
        <thead>
        <td>ServicioSolicitado</td>
        <td>FechaServicio</td>
        <td>CostoServicio</td>
        <td>MetodoPago</td>
      </tr>
        </thead>
      <tr>
        <td>Limpieza Oficina</td>
        <td>14-03-2019</td>
        <td>$250</td>
        <td>Efectivo</td>
      </tr>
      <tr>
        <td>Limpieza Recamara</td>
        <td>13-03-2019</td>
        <td>$320</td>
        <td>Efectivo</td>
      </tr>
      <tr>
        <td>Limpieza de Baño</td>
        <td>10-03-2019</td>
        <td>$290</td>
        <td>Efectivo</td>
      </tr>
    </table>
</div>
  </body>
</html>
