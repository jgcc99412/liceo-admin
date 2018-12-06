<?php
 session_start();
 require_once '../../cone/conexion.php';
 ?>

 <?php 

   if (isset($_SESSION['id_usuarios'])) { ?>

<html>
<head>
  <title> Modificar Estudiante</title>
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
    
</style>

</head>
<body class="hold-transition skin-red sidebar-mini">

  <div class="">


               <?php
                      require_once '../../cone/conexion.php';

                      $alumno = $_REQUEST['id_alumno'];

                     $modif = "SELECT * FROM alumno WHERE id_alumno='$alumno'";
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





<!--......................Ver los datos de los estudiantes en el form................................-->



          
        
<form class="form-ins"  action="../valid/valid_modif_est.php?id_alumno=<?php echo $row['id_alumno']; ?>" method="POST">

     <div class="reg">
        <div class="container">
            <div class="row">   
    <!--......................Ver los datos de los estudiantes en el form................................-->
                   <?php // visualizar estudiantes
                       require_once '../../cone/conexion.php';


                       $sql = "SELECT * FROM alumno INNER JOIN grado  ON alumno.id_grado=grado.id_grado 
                         INNER JOIN seccion  ON alumno.id_seccion=seccion.id_seccion WHERE id_alumno='$alumno' ";

                             $resultado = mysqli_query($conDB, $sql);
                              if (mysqli_num_rows($resultado) > 0 ) {
                                 
                                 
                             while ($row = mysqli_fetch_assoc($resultado)) {
                                
                       ?>




                        <center><h1 id="tit">Registro Estudiantes</h1></center>

                          <h2>Estudiante:</h2>
                          <hr>
                         <div id="s1" class="col-md-6">
                               <label>NOMBRE:</label>
                               <input type="text" name="nombre" id="caja_busqueda" 
                                              placeholder="Nombre" value="<?php echo $row['nombre']?>">
                         </div>
                         <div id="s1" class="col-md-6">
                               <label>APELLIDO:</label>
                               <input type="text" name="apellido" id="caja_busqueda" 
                                              placeholder="APELLIDO" value="<?php echo $row['apellido']?>">
                         </div><br><br>

                         <div id="s1" class="col-md-4">
                               <label>CEDULA:</label>
                               <input type="text" name="cedula" id="caja_busqueda" 
                                              placeholder="CEDULA" value="<?php echo $row['cedula']?>">
                         </div>

                         <div id="s1" class="col-md-2">
                          <label>SEXO:</label><br></br>
                               <center>
                                <select name="sexo" class="form-control" >
                                    <option value="<?php echo $row['sexo']?>"><?php echo $row['sexo']?></option>
                                    <option value="HOMBRE">Hombre</option>
                                    <option value="MUJER">Mujer</option>
                                 </select>
                               </center>
                         </div>

                         <div id="s1" class="col-md-3">
                               <label>FECHA NACIMIENTO:</label><br>
                               <center><input type="date" name="fecha_n" id="" 
                                              placeholder="Fecha N" value="<?php echo $row['fecha_n']?>"></center>
                         </div>
                          <div id="s1" class="col-md-2">
                               <label>EDAD:</label>
                               <input type="text" name="edad" id="" 
                                              placeholder="EDAD" value="<?php echo $row['edad']?>">
                         </div>

                         <div id="s1" class="col-md-6">
                               <label>LUGAR DE NACIMIENTO:</label>
                               <input type="text" name="lugar_n" id="" 
                                              placeholder="LUGAR DE NACIMIENTO" value="<?php echo $row['lugar_n']?>">
                         </div>
                         <div id="s1" class="col-md-6">
                               <label>DIRECCION ACTUAL:</label>
                               <input type="text" id="" name="direccion"
                                              placeholder="MUNICIPIO, SECTOR......" value="<?php echo $row['direccion']?>">
                         </div><br><br>


                          <div id="s1" class="col-md-6">
                               <label>ESCUELA DE PROCENDENCIA:</label>
                               <input type="text" name="escuela_proc" id="" 
                                              placeholder="ESCUELA DE PROCENDENCIA" value="<?php echo $row['escuela_proc']?>">
                         </div>
                       <hr></hr>
                       
                          <div id="s1" class="col-md-6">
                               <label>REPITE EL ESTUDIANTE:</label>
                               <input type="text" name="repitiente" id="" 
                                              placeholder="Es Repitiente el Estudiante" value="<?php echo $row['repitiente']?>">
                         </div>

                          <div id="s1" class="col-md-4">
                               <label> EL ALUMNO ES ALERGICO A? :</label>
                               <input type="text" name="alergia_a" id="" 
                                              placeholder="Alguna Alergia" value="<?php echo $row['alergia_a']?>">
                         </div>

                          <div id="s1" class="col-md-4">
                               <label> EL ALUMNO CONVIVE CON? :</label>
                               <input type="text" name="vive_con" id="" 
                                              placeholder="Convive con??" value="<?php echo $row['vive_con']?>">
                         </div>

                          <div id="s1" class="col-md-4">
                               <label> Es Atentido por CDOESDF o cualquier otra Org. ?:</label>
                               <input type="text" name="atendido_c" id="" 
                                              placeholder="El estudiante es atendido por arguna I.M." value="<?php echo $row['atendido_c']?>">
                         </div><br>

                         <div id="s1" class="col-md-6">
                          <label> GRADO:</label>
                             <select name="id_grado" class="form-control">
                              <option value="<?php echo $row['id_grado']?>"><?php echo $row['grado']?></option>
                                <option value="1">Primero</option>
                                <option value="2">Segundo</option>
                                <option value="3">Tercero</option>                   
                             </select>
                          </div>

                          <div id="s1" class="col-md-6">
                            <label> SECCION:</label>
                               <select name="id_seccion" class="form-control">
                                   <option value="<?php echo $row['id_seccion']?>"><?php echo $row['seccion']?></option>
                                    <option value="1">A</option>
                                   <option value="2">B</option>
                                   <option value="3">C</option>
                                   <option value="4">D</option>
                               </select>
                          </div>

                     <div id="s1" class="col-md-12"><center><h2> Datos del Tutor:</h2></center><hr> </div>

                         <div id="s1" class="col-md-6">
                               <label>NOMBRE:</label>
                               <input type="text" name="nombre_t" id="caja_busqueda" 
                                              placeholder="NOMBRE DEL TUTOR" value="<?php echo $row['nombre_t']?>">
                         </div>
                         <div id="s1" class="col-md-6">
                               <label>APELLIDO:</label>
                               <input type="text" name="apellido_t" id="caja_busqueda" 
                                              placeholder="APELLIDO DEL TUTOR" value="<?php echo $row['apellido_t']?>">
                         </div><br><br>

                         <div id="s1" class="col-md-4">
                               <label>CEDULA:</label>
                               <input type="text" name="cedula_t" id="caja_busqueda" 
                                              placeholder="CEDULA" value="<?php echo $row['cedula_t']?>">
                         </div>

                          <div id="s1" class="col-md-4">
                               <label>TELEFONO CELULAR:</label>
                               <input type="text" name="tc_t" id="caja_busqueda" 
                                              placeholder="TELEFONO CELULAR" value="<?php echo $row['tc_t']?>">
                         </div>

                          <div id="s1" class="col-md-4">
                               <label>TELEFONO LOCAL:</label>
                               <input type="text" name="tl_t" id="caja_busqueda" 
                                              placeholder="TELEFONO LOCAL" value="<?php echo $row['tl_t']?>">
                         </div>

                          <div id="s1" class=" col-md-2">
                          <label>SEXO:</label>
                                <select name="sexo_t" class="sex form-control">
                                    <option value="<?php echo $row['sexo_t']?>"><?php echo $row['sexo_t']?></option>
                                    <option value="HOMBRE">Hombre</option>
                                    <option value="MUJER">Mujer</option>
                                 </select>
                             
                         </div> 
                         <div id="s1" class="col-md-5">
                               <label>DIRECCION DE CASA:</label>
                               <input type="text" name="direccion_t" id="caja_busqueda" 
                                              placeholder="DIRECCION CASA" value="<?php echo $row['direccion_t']?>">
                         </div>
                         <div id="s1" class="col-md-5">
                               <label>OCUPACION:</label>
                               <input type="text" name="ocupacion_t" id="caja_busqueda" 
                                              placeholder="OCUPACION" value="<?php echo $row['ocupacion_t']?>">
                         </div>


          <?php
                  }
                         } 
                 else{ echo "0 Estudiantes Registrados.<br />";
                   }
            ?>

  <!--___________________________________________________________________________________-->

                     <div class="col-md-6">
                          <button class="btn btn-primary btn-block active" name="guardar">MODIFICAR</button>
                      </div>

                     <div id="cancelar" class="col-md-6">
                         <a class="btn btn-danger btn-block active"  href="../alumno/estudiantes.php">CANCELAR</a>
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