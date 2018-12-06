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
    <link rel="stylesheet" href="../../css/stylo_reg_est.css"> 

<style>
body{
  background-color:  #E4E7F8;
}
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
.reg{
  color: black;
  background-color: #E4E7F8;
  width: 100%;
  padding: 30px;
  padding-top: 0px;
}
#tit{
  color: black;
}
hr{
  color: black;
  background-color: black;

}
#s1{
  padding: 15px;
}

.form-ins{
  background-color: red;

}
body{
  background-color: red;
}

#cancelar{
  margin-top: 8px;
}
.sex{
  margin-top: 10px;
}
#s4{
  margin-top: 9px;
  height: 47px;
}
    
</style>

</head>
<body class="hold-transition skin-red sidebar-mini">

  <div class="">



              <?php
                      require_once '../../cone/conexion.php';

                      $asignatura = $_REQUEST['id_asignatura'];

                     $modif = "SELECT * FROM asignatura WHERE id_asignatura='$asignatura'";
                      $resultado = $conDB->query($modif);
                      $row = $resultado->fetch_assoc();

                 ?>


      
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
         
<div id="fond">

          
        <!-- fin del menu superior-->
<form class="form-ins"  action="../valid/valid_modif_materia.php?id_asignatura=<?php echo $row['id_asignatura']; ?>" method="POST">

     <div class="reg">
        <div class="container">
            <div class="row">   




 <!--......................Ver los datos de los estudiantes en el form..................-->
                   <?php // visualizar prof
                       require_once '../../cone/conexion.php';


                 $sql = "SELECT * FROM asignatura WHERE id_asignatura='$asignatura' ORDER BY id_asignatura";

                             $resultado = mysqli_query($conDB, $sql);
                              if (mysqli_num_rows($resultado) > 0 ) {
                                 
                                 
                             while ($row = mysqli_fetch_assoc($resultado)) {
                                
                       ?>






                        <center><h1 id="tit">Modificar Asignatura</h1></center>

                          <h2>Asignatura:</h2>
                          <hr>

                          <div id="s1" class="col-md-3">
                          </div>


                         <div id="s1" class="col-md-6">
                               <label>NOMBRE:</label>
                               <input type="text" name="asignatura" id="caja_busqueda" 
                                              placeholder="Nombre" value="<?php echo $row['asignatura']?>" >
                         
                          
                   
          <?php
                  }
                         } 
                 else{ echo "0 Asignaturas Registradas.<br />";
                   }
            ?>

 
  <!--___________________________________________________________________________________-->

                     <div class="col-md-6">
                          <button class="btn btn-primary btn-block active" name="guardar">MODIFICAR</button>
                      </div>

                     <div id="cancelar" class="col-md-6">
                         <a class="btn btn-danger btn-block active"  href="../materias/materias.php">CANCELAR</a>
                      </div>
  



             </div>
         </div>
       </div>
  </form>
     
</div> 
<!--Fin del formulario de registro estudiantes -->

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