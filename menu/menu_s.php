          <a href="../user/inicio.php" class="logo">

             <span class="logo-mini"><b>SL</b>A.</span>
             <span class="logo-lg"><b>SL AndresRR</b></span>
           </a>

           
        <nav class="navbar navbar-static-top" role="navigation">
          
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!--  -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <div class="nombre-u">
                        <small class="bg-blue">Online</small>
                        <strong><?php echo $_SESSION['nombre'];?></strong>
                        <img src="../img/1.png" alt="Avatar" class="avatar">
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <!-- ventana de cerrar sesion-->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">

                      <a  class="btn btn-primary btn-lg btn-block fa fa-sign-out pull-right"  
                      href="../cone/desconectar.php" action="desconectar.php">Cerrar Sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
           </div>

        </nav>