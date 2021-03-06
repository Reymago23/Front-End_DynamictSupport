<html>
<body>
  <?php
  include_once('settings.php');
   ?>
  <div id="navbar-full">
      <div id="navbar">
          <nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">

            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <?php
                echo '<a class="navbar-brand navbar-brand-logo" href="'.$dirFrontEnd.'/index.php">';
                 ?>
                      <div class="logo">
                        <?php
                        echo '<img src= '. $dirImg."DTS-logo.png ".'/>';
                         ?>
                      </div>
                      <div class="brand"> Dynamict Tech Support </div>
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a href="javascript:void(0);" data-toggle="search" class="hidden-xs">
                              <i class="fa fa-search" style="font-size: 35px;" ></i>
                              <p>Search</p>
                          </a>
                      </li>
                       <li>
                         <?php
                         echo '<a href="'.$dirFrontEnd.'/dispositivos.php">';
                          ?>
                              <i class="fa fa-power-off" style="font-size: 30px;" aria-hidden="true"></i>
                              <p>Dispositivos</p>
                          </a>
                      </li>

                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-handshake-o" style="font-size: 35px;" aria-hidden="true"></i>
                                  <p>Servicios <b class="caret"></b></p>
                              </a>
                            <ul class="dropdown-menu">
                              <li>
                                <?php
                                echo '<a href="'.$dirServicios.'mantenimiento.php">';
                                 ?>
                              <i class="fa fa-medkit" aria-hidden="true"></i>&nbsp; Mantenimiento
                              </a>
                              </li>
                              <li>
                                <?php
                                echo '<a href="'.$dirServicios.'instalacion.php">';
                                 ?>
                              <i class="fa fa-download" aria-hidden="true"></i>&nbsp; Instalación
                              </a>
                              </li>
                              <li>
                                <?php
                                echo '<a href="'.$dirServicios.'configuracion.php">';
                                 ?>
                              <i class="fa fa-gear" aria-hidden="true"></i>&nbsp; Configuración
                              </a>
                              </li>
                              <li>
                                <?php
                                echo '<a href="'.$dirServicios.'diagnostico.php">';
                                 ?>
                              <i class="fa fa-area-chart" aria-hidden="true"></i>&nbsp; Diagnóstico
                              </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                <?php
                                echo '<a href="'.$dirServicios.'preguntas.php">';
                                 ?>
                               <i class="fa fa-area-chart" aria-hidden="true"></i>&nbsp;Preguntas frecuentes</a>
  							               </li>
                            </ul>
                      </li>

                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-info" style="font-size: 30px;" aria-hidden="true"></i>
                              <p>Acerca de <b class="caret"></b></p>
                          </a>
                          <ul class="dropdown-menu">
                              <li>
                                <?php
                                echo '<a href="'.$dirFrontEnd.'/nosotros.php">';
                                 ?>
                              <i class="fa fa-users" aria-hidden="true"></i>&nbsp; Nosotros
                              </a>
                              </li>
                              <li>
                                <?php
                                echo '<a href="'.$dirFrontEnd.'/opinion.php">';
                                 ?>
                              <i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp; Comentarios
                              </a>
                              </li>
                            </ul>
                      </li>
                      <li class="dropdown" >
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-user-o" style="font-size: 30px;" aria-hidden="true"></i>
                              <p>Cuenta <b class="caret"></b></p>
                          </a>
                          <ul class="dropdown-menu">
                              <li>
                              <a href="#" data-toggle="modal" data-target="#loginModal">
                              <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Iniciar sesión
                              </a>
                              </li>
                              <li>
                              <a href="#" data-toggle="modal" data-target="#signinModal">
                              <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; Registrarse
                              </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                <?php
                                echo '<a href="'.$dirFrontEnd.'/recuperarcontrasenia.php">';
                                 ?>Olvidé la contraseña</a>
  							              </li>
                            </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-database" style="font-size: 30px;" aria-hidden="true"></i>
                              <p>Administrar<b class="caret"></b></p>
                          </a>
                          <ul class="dropdown-menu">
                              <li>
                                <?php
                                echo '<a href="'.$dirAdmin.'empleado.php">';
                                 ?>
                              <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; Empleados
                              </a>
                              </li>
                              <li>
                                <?php
                                echo '<a href="'.$dirAdmin.'cliente.php">';
                                 ?>
                              <i class="fa fa-users" aria-hidden="true"></i>&nbsp; Clientes
                              </a>
                              <?php
                              echo '<a href="'.$dirAdmin.'pregunta.php">';
                               ?>
                              <i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp; Preguntas frecuentes
                              </a>
                              </li>
                            </ul>
                      </li>

                </ul>
                <form class="navbar-form navbar-right navbar-search-form" role="search">
                   <div class="form-group">
                        <input type="text" value="" class="form-control" placeholder="Buscar...">
                   </div>
                </form>
              </div>
            </div>
          </nav>
         <div class="blurred-container">

           <?php
           echo '<div class="img-src" style="background-image: url('.$dirImg.'servicio-soporte-virtual.jpg)">';
            ?>
              <div style="width: 80%">
             	<p class="bienvenida" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">Bienvenido a la nueva era en la nube</p>
             	</div>
              </div>
         </div>
    </div>
  </div>
<body>
</html>
