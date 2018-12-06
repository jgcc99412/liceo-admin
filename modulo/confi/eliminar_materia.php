<?php
     
    include ("../../cone/conexion.php");

    	$asignatura = $_REQUEST['id_asignatura'];

    	$sql="DELETE FROM asignatura WHERE id_asignatura='$asignatura' order by id_asignatura ";

    	$resultado = $conDB->query($sql);
        if ($resultado) {
        	//echo "datos eliminados con exito.";
            echo '<script>alert("Esta Seguro que quiere eliminar el Evento??.")</script>';
            echo "<script>location.href='../materias/materias.php'</script>";
        }else{
            echo '<script>alert("No se a podido eliminar el Evento!.")</script>';
            echo "<script>location.href='../materias/materias.php'</script>";
        }
    

?>