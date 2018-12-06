
             <?php
                      include ("../../cone/conexion.php");

                      $id_alumno = $_REQUEST['id_alumno'];

                     $modif = "SELECT * FROM alumno WHERE id_alumno='$id_alumno'";
                      $resultado = $conDB->query($modif);
                      $row = $resultado->fetch_assoc();

                 ?>


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






<div id="modal-wrapper" class="modal">
    
    <form class="form-registro modal-content animate" 
          action="modificar_public.php?id_publicacion=<?php echo $row['id_publicacion']; ?>" method="POST">
        
        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
        
	 	<h2 class="form-titulo">Modificar Estudiante</h2>
	 	<div class="contenedor-inputs">

        <div class="controls controls-row">
	 	     <input type="text" name="nombre" placeholder="nombre" class="">
     
	 	     <input type="text" name="apellido" placeholder="Apellidos" class="">
        </div>

	 	<input type="text" name="cedula" placeholder="Cedula" class="">

	 	

	 	    <select name="sexo" class="">
	 	        <option value="x">SEXO</option>
           	<option value="HOMBRE">Hombre</option>
            <option value="MUJER">Mujer</option>
            
         </select>

	 	<input type="date" name="fecha_n" placeholder=""  class="">

	 	<input type="text" name="edad" placeholder="Edad" class="">


	 	<input type="text" name="direccion" placeholder="direccion" class="">

	 	 <select name="id_grado" class="">
           	<option value="x">GRADO</option>
                         <?php
                          //incluimos conexion
                          require_once '../../cone/conexion.php';
      
                          $sql = "SELECT * FROM grado";
      
                          $resultado = mysqli_query($conDB, $sql);
      
                          if (mysqli_num_rows($resultado) > 0) {
      
                            while ($row = mysqli_fetch_assoc($resultado)) {
                              $grado = $row['grado'];
                              echo "<option value='$grado'>" . $row['grado'] ."</option>";
                            
                              }
                            }
      
      
                          ?>
                  
           	<option value="1">Primero</option>
            <option value="2">Segundo</option>
            <option value="3">Tercero</option>
         </select>

         <select name="id_seccion" class="">
           	<option value="x">SECCION</option>
           	<option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
            <option value="4">D</option>
         </select>

         <br>
	 	<input class="btn-guardar" type="submit" name="guardar" placeholder="Registrar Usuario">
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