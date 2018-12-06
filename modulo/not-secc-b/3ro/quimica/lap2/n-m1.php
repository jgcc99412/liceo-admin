

<center><h2>TERCERO  "B"</h></center>

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
 require_once '../../../../../cone/conexion.php';

  $query = $conDB->query("SELECT * FROM asignatura WHERE id_asignatura > 0 ORDER BY id_asignatura");

  $rowAsi = $query->num_rows;

?>

<!--  .......................................... -->
                 
             
            
            <div class="clearfix"></div>

            <div class="row">
              
                  <div class="col-lg-12" style="margin-top:2px;">
                   
                   <form method="POST" id="" action="">
                    
<!--............................. panel de matteria y lapso......................................-->

          <div class="col-md-12 col-sm-12 col-xs-12">
                        
             <div class="x_panel">
              <div class="col-md-5 col-sm-5 col-xs-5">
                  <div class="x_title">
                    <h3> <i class="fa fa-users"></i> Estudiantes</h3>
                    <div class="clearfix"></div>
                  </div>
              </div>
  <!-- .......................   codigo anterior de seleccionar materia  ................................. -->
  
         <?php
               //    $enviado=false;
               //    $Vmateria=NULL;
               //    $Vlapso=NULL;

                //   if (isset($_POST["insertar"])) {
               //

                //      $Vmateria=$_POST["materia"];
                //      $Vlapso=$_POST["lapso"];

                  // }

            ?>   
  <!--................................................................--> 
               
       

  <!--................................................................-->
<!--
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <h4> Asignatura: 
                      <select name="materia[]" id="materia" class="" >
                           <option>&nbsp;</option></selected> 

                                  <?php 
                      //      $query_nombres = "SELECT * FROM asignatura where 1 "; 
                     //       $resultado_nombres = mysqli_query($query_nombres);  
                     //       while($reg = mysqli_fetch_array($resultado_nombres)){  
                      //      $asignatura = $reg["asignatura"]; 
                      //      if ($asignatura == $valor_a_comparar) $sel = ' selected="selected"'; 
                      //     else $sel = ''; 
                       //     echo "<option$sel>$asignatura</option>"; 
                       //     }  
                            ?> 
            
                          </select></h4> 
              </div>
-->

  <!--................................................................-->
                    <!--

                       <div class="col-md-3 col-sm-3 col-xs-3">
                           <h4> Lapso: <select name="lapso[]" required class="">
                                     <option value=""></option>
                                     <option value="1">1ro</option>
                                     <option value="2">2do</option>
                                     <option value="3">3ro</option>
                                  </select></h4> 
                       </div>


-->

<!-- ....................... fin  ...................  ................................. -->


<!-- ....................... nuevo codigo select  ...................  ................................. -->
 


<!-- ....................... fin  ...................  ................................. -->

                  <div class="col-md-3 col-sm-4 col-xs-4">


                  </div>

                   <div class="col-md-3 col-sm-3 col-xs-3">

                     <input class="btn btn-primary btn-lg btn-block active"  role="button" type="submit" id="guardar" name="insertar" value="REGISTRAR NOTAS">
                        
                  </div>
               

<!--...................................................................-->
              <div class="x_content">
                              <table class="table-responsive">

                <table id="datatable-buttons" class="table table-striped table-bordered ">
                  <thead>
                    <tr>
                      <th class="hidden">ID</th>
                      
                      <th><center>ID</center></th>
                      <th><center>Nombre</center></th>
                      <th><center>Apellido</center></th>
                      <th><center>Cedula</center></th>
                      <th><center>Act. 1</center></th>
                      <th><center>Act. 2</center></th>
                      <th><center>Act. 3</center></th>
                      <th><center>Act. 4</center></th>
                      <th><center>Act. 5</center></th>
                      <th><center>Def.</center></th>
                    </tr>
                  </thead>

                   <tbody>
                    <?php // visualizar estudiantes
                             require_once '../../../../../cone/conexion.php';

                           
                             $sql = "SELECT * FROM alumno  WHERE id_grado=3 AND id_seccion=2 ORDER by cedula";


                                  $resultado = mysqli_query($conDB, $sql);
                                  if (mysqli_num_rows($resultado) > 0 ) {

                                  while ($row = mysqli_fetch_assoc($resultado)) {
                        ?>
                     <tr>
                      <td><input type="hidden" name="alumno[]" value="<?php echo $row['id_alumno']?>" class="form-control input-sm"></td>
                      <td><?php echo $row['nombre']?></td>
                      <td><?php echo $row['apellido']?></td>
                      <td><?php echo $row['cedula']?></td>
                      <td><input type="text" required name="nota[]" class="form-control input-sm"></td>
                      <td><input type="text" required name="nota2[]" class="form-control input-sm"></td>
                      <td><input type="text" required name="nota3[]" class="form-control input-sm"></td>
                      <td><input type="text" required name="nota4[]" class="form-control input-sm"></td>
                      <td><input type="text" required name="nota5[]" class="form-control input-sm"></td>
                      <input type="hidden" required name="materia[]" value="10" class="form-control input-sm">
                      <input type="hidden" required name="lapso[]" value="2" class="form-control input-sm"> 
                      <td><center><h4> </h4></center></td>

                      
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


    
 <?php include_once ("../valid/valid_nota.php"); ?>


    

    <!--...................................................................-->


