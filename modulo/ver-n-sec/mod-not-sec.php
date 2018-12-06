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

 {
      background-color: red;
      border-radius: 5px;
      margin: 50px auto;
      width: 320px;
      -webki-border-radius: 5px;
      -noz-border-radius: 5px;
    }

    .12{
      margin-left: 600px;
    }

</style>

<?php

$not_alum = $_GET['id_alum'];

?>

<!-- ...........................................................   -->

<div class="title_left">
              <h3> <i class="fa fa-users"></i> Estudiante</h3>
            </div>

              <?php // visualizar estudiantes
                             require_once '../../cone/conexion.php';


                            $sql = "SELECT * FROM notas INNER JOIN alumno  ON notas.alumno=alumno.id_alumno   INNER JOIN asignatura  ON notas.materia=asignatura.id_asignatura  INNER JOIN lapso  ON notas.lapso=lapso.id_lapso   WHERE id_alumno='$not_alum'   GROUP BY alumno.cedula ORDER BY alumno asc" ;

                                    $resultado = mysqli_query($conDB, $sql);
                                     if (mysqli_num_rows($resultado) > 0 ) {
                                 
                                 $id=0;
                              while ($row = mysqli_fetch_assoc($resultado)) {
                                $id= $id+1;
                              ?>

           

            <div class="title_right"> 
                  <div class="btn-inline">  


                  <div class="container">
                    <div class="row">   
                         <div class="col-md-3">
                              Nombre: <h2><?php echo $row['nombre']?> <?php echo $row['apellido']?></h2> 
                          
                         </div>
                         <div class="col-md-2">
                            Cedula: <h2><?php echo $row['cedula']?></h2> 
                          
                         </div>
                          <div class="col-md-2">
                            Lapso: <h2><?php echo $row['lapso']?></h2> 
                          
                         </div>


                         
                      </div>
                  </div>
              </div>
            </div>
                       <?php
                             }
                                     } 
                             else{ echo "0 Estudiantes Registrados.<br />";
                               }
                        ?>

<!--...............................................................................................-->


                    <div class="clearfix"></div>

          <div class="col-md-12 col-sm-12 col-xs-12">
                        
           <div class="x_panel">
              <div class="x_title">
                <center><h2> Notas </h2></center>
                <div class="clearfix"></div>
              </div> 
              <div  id="result_busqueda" class="x_content">

              <table class="table-responsive">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                     
                      <th>ID</th>
                      <th>Asignatura</th>
                      <th>Nota 1</th>
                      <th>Nota 2</th>
                      <th>Nota 3</th>
                      <th>Nota 4</th>
                      <th>Nota 5</th>
                      <th>Def</th>
                      
                      
                    </tr>
                  </thead>


                  <tbody>
                    <?php // visualizar estudiantes
                             require_once '../../cone/conexion.php';


                            $sql = "SELECT * FROM notas INNER JOIN alumno  ON notas.alumno=alumno.id_alumno   INNER JOIN asignatura  ON notas.materia=asignatura.id_asignatura  INNER JOIN lapso  ON notas.lapso=lapso.id_lapso  WHERE id_alumno='$not_alum'  ORDER BY alumno asc" ;

                                    $resultado = mysqli_query($conDB, $sql);
                                     if (mysqli_num_rows($resultado) > 0 ) {
                                 
                                 $id=0;
                              while ($row = mysqli_fetch_assoc($resultado)) {
                                $id= $id+1;
                              ?>

                    <tr>
                       <td class="hidden"></td>
                       <td><?php echo $id;?></td>
                       <td><?php echo $row['asignatura']?></td> 
                       <td><?php echo $row['nota']?></td> 
                       <td><?php echo $row['nota2']?></td> 
                       <td><?php echo $row['nota3']?></td> 
                       <td><?php echo $row['nota4']?></td> 
                       <td><?php echo $row['nota5']?></td> 
                       <td></td>   
                      </td>
                      
                    </tr>

                    <?php
                             }
                                     } 
                             else{ echo "0 Estudiantes Registrados.<br />";
                               }
                        ?>

                      </tbody>
                  </table>
                </table>
              </div>
            </div>
        </div>

        




        
<script>

    
    //efecto de login

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script src="../../js/jquery-3.2.1.min.js"></script>
 <script src="../../js/bootstrap.min.js"></script>
 <script src="../../js/app.min.js"></script>
 <script src="../../js/main.js"></script>