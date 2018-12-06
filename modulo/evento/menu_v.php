         <div class="row">
            <div class="col-xs-12 col-sm-12 ">

<!--.......................................................-->

     <form class="form-ins"  action="../../valid/validar_reg_evento.php" method="POST">
            
               <div class="title_left">
                  <center><h1> <i class="fa fa-"></i>Nuevo Evento</h1></center>

               </div><br></HR>

                 <div id="s1" class="col-md-5">
                     <label><h3>Titulo:</h3></label>
                     <input type="text" name="titulo" id="caja_busqueda" placeholder="Titulo de Evento">
                 </div>

                  <div id="s2" class="col-md-4">
                       <label><h3>Fecha del Evento:</h3></label><br>
                       <center><input type="date" name="fecha" id="caja_busqueda" ></center>
                  </div>

                   <div id="s3" class="col-md-3">
                       <label><h3>Hora del evento:</h3></label><br>
                       <center><input type="time" name="hora" id="caja_busqueda" ></center>
                  </div>
                 
                 <div id="s1" class="col-md-12">
                     <label><h3>Detalles de Evento:</h3></label>
                     <input type="text" name="detalle" id="caja_busqueda" placeholder="Informacion sobre el Evento">
                 </div>


                      <div id="s2" class="col-md-2">
                      </div>

                     <div class="col-md-4">
                          <button class="btn btn-primary btn-block active" name="guardar">GUARDAR</button>
                      </div>

                     <div id="cancelar" class="col-md-4">
                         <a class="btn btn-danger btn-block active"  href="../../user/inicio.php">CANCELAR</a>
                      </div>

                      <div id="s2" class="col-md-2">
                     </div>

    
    </form>          

            </div><!-- /.col -->
          </div><!-- /.row -->


