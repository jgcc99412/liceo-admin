<div class="row">
     
   
           
    <!--.......................visulaizar eventos ................................-->

            <div class="col-xs-12 col-sm-12 ">
                  <center><h1>Eventos</h1></center>

              <?php // visualizar evento
                             require_once '../cone/conexion.php';


                            $sql = "SELECT id_eventos, titulo, detalles, fecha_ev, hora_ev 
                                      FROM eventos  WHERE 1 ORDER BY id_eventos";

                                    $resultado = mysqli_query($conDB, $sql);
                                     if (mysqli_num_rows($resultado) > 0 ) {
                                 
                                
                              while ($row = mysqli_fetch_assoc($resultado)) {
                               
                              ?>

                          <div class="col-xs-12 col-sm-6 ">
                            
                              <div class="box bg-blue">
                                <div class="box-header with-border">
                                  <h3 class="titulo box-title"><?php echo $row['titulo']?></h3> 
                                    
                                    <div class="box-tools pull-right">
                                      <a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a>
                                    
                                      <a href="../valid/eliminar_evento.php?id_eventos=<?php echo $row['id_eventos']; ?>"><small class="label pull-right bg-red" style="paddin: 10px; font-size: 14px;">X</small></a>
                                    </div>
                                </div>
                                      <!-- /.box-header -->
                                      <div class="box-body">
                                        <h4 class="box-title" style="float:left;">FECHA: <?php echo $row['fecha_ev']?></h4>
                                    <h4 class="box-title" style="float: right;">HORA: <?php echo $row['hora_ev']?></h4>
                                        <div class="row">
                                         <div class="col-md-12">
                                              <h3><?php echo $row['detalles']?></h3>
                                              
                                           </div>
                                        </div>
                                        
                                       </div>
                                </div><!-- /.row -->
                             </div><!-- /.box-body -->


                              <?php
                             }//fin del while 
                                     } //fin del if
                             else{ echo "<h3>No hay eventos Registrados.</h3><br />"; }
                        ?>


            </div>

<!--........................fin de evento ...............................-->
            
            
    </div>
            
            
          
          <div class="row">

            
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Colectivo de Profesores              18-01-2018</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i> </button>
                    </div>
                </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="row">
                         <div class="col-md-12">
                              <!--Contenido-->
                              <h3>Reunion de profesores en sala de lecturas- aula 3</h3>
                              <!--Fin Contenido-->
                           </div>
                        </div>
                        
                       </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              

        
            
              

        

              </div><!-- row -->           
            
            <!-- segundo panel eventos -->
            
            
            
            
             
              <div class="row">
                    <div class="col-xs-3 col-sm-3 imgGm">
                       <img src="../img/me.png">
                    </div>
                        
                    <div class="col-xs-3 col-sm-3 imgGm">
                       <img src="">
                    </div>
                
                    <div class="col-xs-2 col-sm-2 imgGm">
                       <img src="">
                    </div>
                        
                    <div class="col-xs-3 col-sm-3 imgGm">
                       <img src="../img/me.png">
                    </div>
                </div>
        
    
            

            </div><!-- /.col -->
          </div><!-- /.row -->


