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
.b1{
  margin-left: 100px;
  padding: 10px;
  padding-left: 30px;
  padding-right: 30px;
}

</style>

<!--_____________________________________________________________________________-->
               <div class="title_left">
							<h3> <i class="fa fa-users"></i> Profesores</h3>
						</div>
						<div class="title_right">				
							
							<!--	<button class="btn btn-primary " onclick="document.getElementById('modal-wrapper').style.display='block'" > Agregar Nuevo Profesor</button>    modal par registro-->
							  <a class="btn b1 btn-primary  active" href="../reg-est/r-prof.php">REGISTRAR PROFESOR</a>
						</div>

                    <div class="clearfix"></div>
					<div class="col-md-12 col-sm-12 col-xs-12">
                        
                      <div class="x_panel">
							<div class="x_title">
								<center><h2> Listado de Profesores</h2></center>
								<div class="clearfix"></div>
							</div> 
							
							<div class="x_content">
                              <table class="table-responsive">
								<table id="datatable-buttons" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th class="hidden">ID</th>
											<th>ID</th>
											<th>Cedula</th>
											<th>Nombre</th>
                      <th>Apellido</th>
											<th>Telefono</th>
											<th>Edad</th>
											<th>Correp</th>
											<th>Asignatura</th>
											
										</tr>
									</thead>


									<tbody>
										              <?php // visualizar profesor
                                          require_once '../../cone/conexion.php';


                                           $sql = "SELECT id_profesor, nombre_p, apellido_p, cedula_p, telefono, sexo, fecha_n, edad, correo, asignatura FROM `profesor` 
                                                       INNER JOIN asignatura  ON profesor.id_asignatura=asignatura.id_asignatura ORDER BY cedula_p";
                                           $resultado = mysqli_query($conDB, $sql);
                                           if (mysqli_num_rows($resultado) > 0 ) {
                                           

                                            $id=0;
                                            while ($row = mysqli_fetch_assoc($resultado)) {
                                            $id= $id+1;
                                    ?>

										<tr>
											<td class="hidden"></td>
											<td><?php echo $id;?></td>
											<td><?php echo $row['cedula_p'] ?></td>
											<td><?php echo $row['nombre_p']?></td>
                      <td><?php echo $row['apellido_p']?></td>
											<td><?php echo $row['telefono']?></td>
											<td><?php echo $row['edad']?></td>
											<td><?php echo $row['correo']?></td>
											<td><?php echo $row['asignatura']?></td>

											<td><a href="../reg-est/modif_prof.php?id_profesor=<?php echo $row['id_profesor']; ?> " name="modificar">
                        <small class="label pull-right bg-green" style="paddin: 10px">Editar</small></a></td>

											<td><a href="../confi/eliminar_prof.php?id_profesor=<?php echo $row['id_profesor']; ?>"><small class="label pull-right bg-red" style="paddin: 10px">Elim</small></a></td>
											<td class = "center" style = "text-align:center;">

											<td class = "center" style = "text-align:center;">
												
											</td>
											
										</tr><?php
                                                     }} // fin del while comenario
                                                    else{ echo "No hay ningun profesor registrado.<br />";
                                                      }
                                                ?>
									</tbody>
								</table>
                              </table>
							</div>
						</div>
                    </div>






<!--...................panel de registro profesor por ventana modal.............................-->
<!--registro profesor 
<div id="modal-wrapper" class="modal">
    
    <form class="form-registro modal-content animate" action="../../valid/validar_reg_prof.php" method="POST">
        
        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
        
	 	<h2 class="form-titulo">Registrar Profesor</h2>
	 	<div class="contenedor-inputs">

	 	<input type="text" name="nombre_p" placeholder="Nombre" class="form-control">
            
         <input type="text" name="apellido_p" placeholder="Apellido" class="form-control">

	 	<input type="text" name="cedula_p" placeholder="Cedula" class="form-control">

	 	<input type="text" name="telefono" placeholder="Telefono" class="form-control">
        
        
         <div class="container">
          <div class="row">
            <div class="col-md-6">
                <select name="sexo" class="form-control">
                    <option value="x">SEXO</option>
                    <option value="HOMBRE">Hombre</option>
                    <option value="MUJER">Mujer</option>
                 </select>
             </div>

            <div class="col-md-6">
                  <input type="date" name="fecha_n" placeholder="FECHA N." class="form-control">
            </div>
          </div>
        </div>

        <input type="text" name="edad" placeholder="Ingresar su Edad" class="form-control">

	 	<input type="text" name="correo" placeholder="Correo" class="form-control">
       
	 	<input type="text" name="direccion" placeholder="Direccion" class="form-control">

	 	
         <div class="container">
          <div class="row">
            <div class="col-md-12">
            	<center><select name="asignatura" class="form-control">
                   	<option value="">Asignatura</option>
                   	<option value="1">INGLES</option>
                    <option value="2">CASTELLANO</option>
                    <option value="3">MATEMATICA</option>
                    <option value="4">EDU.FISICA</option>
                    <option value="5">C. NATURALES</option>
                    <option value="6">BIOLOGIA</option>
                    <option value="7">FISICA</option>
                    <option value="8">QUIMICA</option>
            
                </select></center>
                
             </div>

            <div class="col-md-12">
            	<input class="btn btn-primary btn-md btn-block active" type="submit" name="guardar" placeholder="Registrar Profesor">
            </div>
          </div>
        </div>

         <br>
	 	
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

-->