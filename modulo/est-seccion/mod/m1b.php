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
                      <center><h1>1ro "B"</h1></center> 


<!--...............................................................................................-->


                    <div class="clearfix"></div>

          <div class="col-md-12 col-sm-12 col-xs-12">
                        
           <div class="x_panel">
              <div class="x_title">

                    <div class="col-md-7">
                           <h2> <i class="fa fa-users"></i>Lista de Estudiantes</h2>
                   </div>

                        <div class="col-md-4">
                               <input type="text" name="busqueda" id="busqueda" 
                                              placeholder="Buscar Estudiante. Cedula o Nombre">
                         </div>
                <div class="clearfix"></div>
              </div> 
              <div  id="result_busqueda" class="x_content">

              <table class="table-responsive">
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                     
                      <th>ID</th>
                      <th>Cedula</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Sexo</th>
                      <th>Edad</th>
                      <th></th>
                      <th></th>
                      
                    </tr>
                  </thead>


                  <tbody>
                    <?php // visualizar estudiantes
                             require_once '../../cone/conexion.php';


                            $sql = "SELECT * FROM alumno  WHERE id_grado=1 AND id_seccion=2 ORDER BY cedula";

                                    $resultado = mysqli_query($conDB, $sql);
                                     if (mysqli_num_rows($resultado) > 0 ) {
                                 
                                 $id=0;
                              while ($row = mysqli_fetch_assoc($resultado)) {
                                $id= $id+1;
                              ?>

                    <tr>
                      <td class="hidden"></td>
                      <td><?php echo $id;?></td>
                      <td><?php echo $row['cedula']?></td>
                      <td><?php echo $row['nombre']?></td>
                      <td><?php echo $row['apellido']?></td>
                      <td><?php echo $row['sexo']?></td>
                      <td><?php echo $row['edad']?></td>

                      <td>

                        <a href="../reg-est/modif_est.php?id_alumno=<?php echo $row['id_alumno']; ?> " name="modificar">
                        <small class="label pull-right bg-green" style="paddin: 10px">Edit</small></a></td>

                      <td><a href="../confi/eliminar_alum.php?id_alumno=<?php echo $row['id_alumno']; ?>"><small class="label pull-right bg-red" style="paddin: 10px">Elim</small></a></td>
                      <td class = "center" style = "text-align:center;">
                        
                      </td>
                      
                    </tr><?php
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