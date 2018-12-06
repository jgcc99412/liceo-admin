

<center><h2>PRIMERO  "B"</h></center>

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


                             $sql = "SELECT * FROM alumno  WHERE id_grado=1 AND id_seccion=2";

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

