<?php
     
    include ("../../cone/conexion.php");

    	$id_profesor = $_REQUEST['id_profesor'];

    	$sql="DELETE FROM profesor WHERE id_profesor='$id_profesor' ";

    	$resultado = $conDB->query($sql);
        if ($resultado) {
        	//echo "datos eliminados con exito.";
            header("location: ../../modulo/profesor/profesores.php");
        }else{
            echo "no se elimino comentario";
        }
    

?>