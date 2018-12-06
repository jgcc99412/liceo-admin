

<center><h2>TERCERO "A"</h></center>

<style>
   .contenedor{
    
    padding: 10px 30px;
    display: flex;
    flex-wrap: wrap;
}

.input-45{
    width: 48%;
}
.input-sm{
    width: 100%;
}

</style>

<!--  .......................................... -->
<?php 
 require_once '../../cone/conexion.php';

  $asignatura = $conDB->query("SELECT * FROM asignatura WHERE id_asignatura  ORDER BY id_asignatura");

  $rowAsi = $asignatura->num_rows;




?>

  
<!--  .......................................... -->
                      
            
            <div class="clearfix"></div>

            <div class="row">
              
                  <div class="col-lg-12" style="margin-top:2px;">
                   
                   <form method="post" id="insertar_n">
                    
<!--............................. panel de matteria y lapso......................................-->

          <div class="col-md-12 col-sm-12 col-xs-12">
                        
             <div class="x_panel">
              <div class="col-md-3 col-sm-3 col-xs-3">
                  <div class="x_title">
                    <h3> <i class="fa fa-users"></i> Estudiantes</h3>
                    <div class="clearfix"></div>
                  </div>
              </div>
               
            <div class="col-md-3 col-sm-3 col-xs-3">
                     <h4> Asignatura: 
                      <select name="asignatura" id="asignatura" class="">
                          <option value="x"></option>
                          <?php 
                              if ($rowAsi > 0) {
                                  while ($row = $asignatura->fetch_assoc()) {
                                      echo '<option value="'.$row['id_asignatura'].'">'.$row['asignatura'].'</option>';
                                 }

                                }else {
                                echo '<option value="">asignatura No es valida</option>';
                                }

                           ?>
  
                      </select></h4> 
                   </div>

                   <div class="col-md-3 col-sm-3 col-xs-3">
                       <h4> Lapso: <select name="lapso" class="">
                                 <option value="x"></option>
                                 <option value="1">1ro</option>
                                 <option value="2">2do</option>
                                 <option value="3">3ro</option>
                              </select></h4> 
                   </div>

                   <div class="col-md-3 col-sm-3 col-xs-3">

                     <input class="btn btn-primary btn-lg btn-block active"  role="button" type="submit" name="guardar" placeholder="Registrar Usuario">
                        
                  </div>
               

<!--...................................................................-->
              <div class="x_content">
                              <table class="table-responsive">

                <table id="datatable-buttons" class="table table-striped table-bordered ">
                  <thead>
                    <tr>
                      <th class="hidden">ID</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Cedula</th>
                      <th>Act. 1</th>
                      <th>Act. 2</th>
                      <th>Act. 3</th>
                      <th>Act. 4</th>
                      <th>Act. 5</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>

                   <tbody>
                    <?php // visualizar estudiantes
                             require_once '../../cone/conexion.php';


                             $sql = "SELECT * FROM alumno  WHERE id_grado=3 AND id_seccion=1";

                                  $resultado = mysqli_query($conDB, $sql);
                                  if (mysqli_num_rows($resultado) > 0 ) {

                                  while ($row = mysqli_fetch_assoc($resultado)) {
                                   ?>
                     <tr>
                  
                      <td><?php echo $row['nombre']?></td>
                      <td><?php echo $row['apellido']?></td>
                      <td><?php echo $row['cedula']?></td>
                      <td><input type="text" class="form-control input-sm"></td>
                      <td><input type="text" class="form-control input-sm"></td>
                      <td><input type="text" class="form-control input-sm"></td>
                      <td><input type="text" class="form-control input-sm"></td>
                      <td><input type="text" class="form-control input-sm"></td>
                      <td><h4> 18</h4></td>

                      
                      <td class = "center" style = "text-align:center;">
                      
                      </td>

                      
                    </tr><?php
                                 }
                                        } 
                                else{ echo "0 Estudiantes Registrados en esta Seccion.<br />";
                                  }
                            ?>
                  </tbody>
                </table>
               </table>

              </div>
            </div>
          </div>

        </form>

       </div>

    </div>


        
<!--...................................................................-->

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
      
       <!--  menu superior-->
       <header class="main-header">
              
          <?php include_once ("../../menu/menu_s.php"); ?>

       </header>
         
        <!-- fin del menu superior-->

       
         <!--menu lateral-->
      
      <aside class="main-sidebar ">
        <section class="sidebar ">
          <ul class="sidebar-menu">
              
             <?php include_once ("../../menu/menu_l.php"); ?>
                        
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