<?php
 session_start();
 require_once '../../cone/conexion.php';

       $salida = "";
       $query = "SELECT * FROM alumno ORDER BY id_alumno";

       if (isset($_POST['consulta'])) {
       	     
       	     $q = $conDB->real_escape_string($_POST['consulta']);
       	     $query = "SELECT id_alumno, nombre, apellido, cedula, sexo, fecha_n, grado, seccion 
                                      FROM alumno INNER JOIN grado  ON alumno.id_grado=grado.id_grado 
                                     INNER JOIN seccion  ON alumno.id_seccion=seccion.id_seccion WHERE nombre LIKE '%".$q."%' OR apellido LIKE '%".$q."%' OR cedula LIKE '%".$q."%'";
       }

       $resultado = $conDB->query($query);

       if ($resultado->num_rows > 0) {
       	     

           $salida.= " <table class='table-responsive'>
								<table id='datatable-buttons' class='table table-striped table-bordered'>
									<thead>
										<tr>
											<th class='hidden'>ID</th>
											<th>ID</th>
											<th>Nombre</th>
											<th>Apellido</th>
											<th>Cedula</th>
											<th>Sexo</th>
                                            <th>Fecha de N.</th>
											<th>Grado</th>
											<th>Seccion</th>
											
											
										</tr>
									</thead>


									<tbody>";

					while ($fila = $resultado->fetch_assoc()) {
						$salida.="<tr>
						               <td>".$fila['id_alumno']."</td>
						               <td>".$fila['nombre']."</td>
						               <td>".$fila['apellido']."</td>
						               <td>".$fila['cedula']."</td>
						               <td>".$fila['sexo']."</td>
						               <td>".$fila['fecha_n']."</td>
						               <td>".$fila['grado']."</td>
						               <td>".$fila['seccion']."</td>

											


						           </tr>";
					}

					$salida.="</tbody></table>";

       }else {

       	  $salida.="No hay ningun alumno Registrado con estos datos!!.";


       }
       echo $salida;

       $conDB->close();


 ?>