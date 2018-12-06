<?php
     
    include ("../../cone/conexion.php");

    	$id_alumno = $_REQUEST['id_alumno'];

    	$sql="DELETE FROM alumno WHERE id_alumno='$id_alumno' ";

    	$resultado = $conDB->query($sql);
        if ($resultado) {
        	//echo "datos eliminados con exito.";
            header("location: ../../modulo/alumno/estudiantes.php");
        }else{
            echo "no se elimino comentario";
        }
    

?>