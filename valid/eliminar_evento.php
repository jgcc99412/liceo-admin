<?php
     
    include ("../cone/conexion.php");

    	$eventos = $_REQUEST['id_eventos'];

    	$sql="DELETE FROM eventos WHERE id_eventos='$eventos' order by id_eventos ";

    	$resultado = $conDB->query($sql);
        if ($resultado) {
        	//echo "datos eliminados con exito.";
            echo '<script>alert("Esta Seguro que quiere eliminar el Evento??.")</script>';
            echo "<script>location.href='../user/inicio.php'</script>";
        }else{
            echo '<script>alert("No se a podido eliminar el Evento!.")</script>';
            echo "<script>location.href='../user/inicio.php'</script>";
        }
    

?>