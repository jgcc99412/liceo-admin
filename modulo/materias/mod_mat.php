
<style type="text/css">

 h1.sec h3{

  background-color: black;

  

 }

 .cajas{

   border-radius: 15px 15px 15px 15px;
    box-shadow: 0px 0px 20px #666 inset;

 }
 .modif{
  margin-right: 0px;
   border-radius: 15px 15px 15px 15px;
    box-shadow: 0px 0px 5px #fff inset;
 }
 .modif2{
  margin-top: 35px;
  border-radius: 15px 15px 15px 15px;
    box-shadow: 0px 0px 5px #fff inset;
 }
 .let{
  font-size: 30px;
 }


</style>

<center><h1>Areas de Formacion</h1></center><br>

<div class="row">
    <!--.............................VER MATERIAS................................aaa -->

    <?php // visualizar MATERIA
                             require_once '../../cone/conexion.php';


                            $sql = "SELECT  * FROM asignatura  WHERE 1 ORDER BY id_asignatura";

                                    $resultado = mysqli_query($conDB, $sql);
                                     if (mysqli_num_rows($resultado) > 0 ) {
                                 
                                
                              while ($row = mysqli_fetch_assoc($resultado)) {
                               
                              ?>



           <div class="col-xs-12 col-sm-6 col-md-6 ">
                <a href="../seccion/1b.php">
                  <div class="box bg-blue cajas">
                        <div class="box-header with-border">
                      
                            <div class="box-tools pull-right">
                              <a href="../reg-est/modif_materia.php?id_asignatura=<?php echo $row['id_asignatura']; ?> " class="btn btn-box-tool " ><small class="label pull-right bg-green modif" style="paddin: 10px;  font-size: 18px;"><i class="fa fa-pencil">Modif</i></small> </a>
                            </div>
                            <div class="box-tools pull-right">
                             <!-- <a  href="../confi/eliminar_materia.php?id_asignatura=<?php //echo $row['id_asignatura']; ?>" class="btn btn-box-tool " ><small class="label pull-right bg-red modif2" style="paddin: 10px;  font-size: 18px;"><i class="fa fa-times"> Elimi</i></small> </a>
                            -->
                            </div>

                           <h1 class="sec let" style="color: white;"><?php echo $row['asignatura']?></h1>

                        </div>
                          
                          
                    </div>
                </a>
                    
             </div>

                       <?php
                             }//fin del while 
                                     } //fin del if
                             else{ echo "<h3>No hay eventos Registrados.</h3><br />"; }
                        ?>

   <!--..................................................................................aaa -->


             


</div>