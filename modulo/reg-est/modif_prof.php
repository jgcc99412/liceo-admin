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

                      $profesor = $_REQUEST['id_profesor'];

                     $modif = "SELECT * FROM profesor WHERE id_profesor='$profesor'";
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
<form class="form-ins"  action="../valid/valid_modif_prof.php?id_profesor=<?php echo $row['id_profesor']; ?>" method="POST">

     <div class="reg">
        <div class="container">
            <div class="row">   




 <!--......................Ver los datos de los estudiantes en el form..................-->
                   <?php // visualizar prof
                       require_once '../../cone/conexion.php';


                       $sql = "SELECT * FROM profesor 
                                                       INNER JOIN asignatura  ON profesor.id_asignatura=asignatura.id_asignatura WHERE id_profesor='$profesor' ORDER BY cedula_p";

                             $resultado = mysqli_query($conDB, $sql);
                              if (mysqli_num_rows($resultado) > 0 ) {
                                 
                                 
                             while ($row = mysqli_fetch_assoc($resultado)) {
                                
                       ?>






                        <center><h1 id="tit">Modificar Docente</h1></center>

                          <h2>Docente:</h2>
                          <hr>
                         <div id="s1" class="col-md-6">
                               <label>NOMBRE:</label>
                               <input type="text" name="nombre_p" id="caja_busqueda" 
                                              placeholder="Nombre" value="<?php echo $row['nombre_p']?>" >
                         </div>
                         <div id="s1" class="col-md-6">
                               <label>APELLIDO:</label>
                               <input type="text" name="apellido_p" id="caja_busqueda" 
                                              placeholder="APELLIDO"  value="<?php echo $row['apellido_p']?>">
                         </div><br><br>

                         <div id="s1" class="col-md-4">
                               <label>CEDULA:</label>
                               <input type="text" name="cedula_p" id="caja_busqueda" 
                                              placeholder="CEDULA" value="<?php echo $row['cedula_p']?>">
                         </div>

                         <div id="s1" class="col-md-2">
                          <label>SEXO:</label><br></br>
                               <center>
                                <select name="sexo" class="form-control">
                                    <option value="<?php echo $row['sexo']?>"><?php echo $row['sexo']?></option>
                                    <option value="HOMBRE">Hombre</option>
                                    <option value="MUJER">Mujer</option>
                                 </select>
                               </center>
                         </div>

                         <div id="s1" class="col-md-3">
                               <label>FECHA NACIMIENTO:</label><br>
                               <center><input type="date" name="fecha_n" id="" 
                                              placeholder="Fecha N"  value="<?php echo $row['fecha_n']?>"></center>
                         </div>
                          <div id="s1" class="col-md-2">
                               <label>EDAD:</label>
                               <input type="text" name="edad" id="" 
                                              placeholder="EDAD"   value="<?php echo $row['edad']?>">
                         </div>

                         <div id="s1" class="col-md-6">
                               <label>LUGAR DE NACIMIENTO:</label>
                               <input type="text" name="correo" id="" 
                                              placeholder="correo@email.com"  value="<?php echo $row['correo']?>">
                         </div>
                         <div id="s1" class="col-md-6">
                               <label>DIRECCION ACTUAL:</label>
                               <input type="text" id="" name="direccion"
                                              placeholder="MUNICIPIO, SECTOR......"  value="<?php echo $row['direccion']?>">
                         </div><br><br>

                         <div id="s1" class="col-md-6">
                               <label>TELEFONO:</label>
                               <input type="text" name="telefono" id="caja_busqueda" 
                                              placeholder="TELEFONO"  value="<?php echo $row['telefono']?>">
                         </div>
                          

                          

                         <div id="s1" class="col-md-6">
                          <label> ASIGNATURA:</label>
                             <select id="s4" name="id_asignatura" class="form-control">
                                <option value="<?php echo $row['id_asignatura']?>"><?php echo $row['asignatura']?></option>
                                <option value="1">INGLES</option>
                                <option value="2">CASTELLANO</option>
                                <option value="3">MATEMATICA</option>
                                <option value="4">EDU.FISICA</option>
                                <option value="5">C. NATURALES</option>
                                <option value="6">BIOLOGIA</option>
                                <option value="7">FISICA</option>
                                <option value="8">QUIMICA</option>                 
                             </select>
                          </div><br><br>

                          
                   
          <?php
                  }
                         } 
                 else{ echo "0 Estudiantes Registrados.<br />";
                   }
            ?>

 
  <!--___________________________________________________________________________________-->

                     <div class="col-md-6">
                          <button class="btn btn-primary btn-block active" name="guardar">REGISTRAR</button>
                      </div>

                     <div id="cancelar" class="col-md-6">
                         <a class="btn btn-danger btn-block active"  href="../../user/inicio.php">CANCELAR</a>
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