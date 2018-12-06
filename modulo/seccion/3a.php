<?php
 session_start();
 require_once '../../cone/conexion.php';
 ?>

 <?php 

   if (isset($_SESSION['id_usuarios'])) { ?>

<html>
<head>
  <title>ESTUDIANTES</title>
      <meta charset="utf-8">
        
         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../../css/font-awesome.css">
    
    <link rel="stylesheet" href="../../css/AdminLTE.min.css">
    
    <link rel="stylesheet" href="../../css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../../img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../img/si.png">
    
    <link rel="stylesheet" href="css/stylo_reg_est.css"> 

<style>
.avatar {
    width: 30px;
  height:30px;
    border-radius: 10%;
    margin-left: 10px;
    
    
    
}   
    .grafica{
        width: 400px;
        height: 200px;
    }


    
</style>

</head>
<body class="hold-transition skin-red sidebar-mini">

  <div class="wrapper">
      
       <!-- .................................... menu superior................................-->
       <header class="main-header">
              
         <a href="../../user/inicio.php" class="logo">

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
                  <small class="bg-blue">Online</small>
                  <strong><?php echo $_SESSION['nombre'];?></strong>
                  <img src="../../img/1.png" alt="Avatar" class="avatar">
                </a>
                <ul class="dropdown-menu">
                  <!-- ventana de cerrar sesion-->
                  <li class="user-header">
                      
                      
                    
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">

                      <a  class="btn btn-success  btn-block fa fa-sign-out pull-right"  
                      href="../../cone/desconectar.php" action="desconectar.php">Cerrar Sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
           </div>

        </nav>

       </header>
         
        <!-- fin del menu superior-->

       
         <!--.........................menu lateral..................................-->
      
      <aside class="main-sidebar ">
        <section class="sidebar ">
          <ul class="sidebar-menu">
              
                    <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Alumnos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../alumno/estudiantes.php"><i class="fa fa-circle-o"></i>Estudiantes</a></li>
                <li><a href="../otro"><i class="fa fa-circle-o"></i>Lista Seccion</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Areas de Formacion</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../materias/materias.php"><i class="fa fa-circle-o"></i>Materias</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Profesores</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../profesor/profesores.php"><i class="fa fa-circle-o"></i>Listado de Profesores</a></li>
               
                
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pencil-square-o"></i> <span>Notas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../notas/notas.php"><i class="fa fa-circle-o"></i>Cargar Notas</a></li>
                <li><a href="3a.php"><i class="fa fa-circle-o"></i>Notas por Seccion</a></li>
                <li><a href="../certificadas"><i class="fa fa-circle-o"></i>Notas Certifacadas</a></li>
              
                
              </ul>
            </li>
              
                           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Horarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../h_seccion"><i class="fa fa-circle-o"></i>Horarios por Seccion</a></li>
                <li><a href="../h_profe"><i class="fa fa-circle-o"></i>Horario Profesor</a></li>
                
              </ul>
            </li>
              
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Eventos</span>
                <small class="label pull-right bg-blue">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">LARR</small>
              </a>
            </li>
                        
          </ul>
        </section>  
      </aside>
      
      <!-- fin de panel lateral -->

      
       <!-------------------------------------------Contenido------------------------------------------>
     <div class="content-wrapper ">
          <section class="content">
            
            <?php include_once ("mod/m3a.php"); ?>
                   
          </section>
      </div>
      
      
      
      <!--Fin-Contenido-->
      

  </div>
    
  <link href="../../css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/stylo_ini.css"> 
  <link rel="stylesheet" href="../../css/stylo_form_l.css"> 
    

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="../../js/jquery-3.2.1.min.js"></script>
 <script src="../../js/bootstrap.min.js"></script>
 <script src="../../js/app.min.js"></script>
 <script src="../../js/arch/main.js"></script>

</body>
</html>

  <?php
    
   }else{
    echo '<script> window.location="../../index.php"</script>';

   }
   
?>