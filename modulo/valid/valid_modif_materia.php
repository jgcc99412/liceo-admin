<?php
 
    require_once '../../cone/conexion.php';



    $id_asignatura = $_REQUEST['id_asignatura'];
    $asignatura = $_POST['asignatura'];
    

     $modif = "UPDATE asignatura SET id_asignatura='$id_asignatura',asignatura='$asignatura' WHERE id_asignatura='$id_asignatura' ";

   
    $resultado = $conDB->query($modif);

    if ($resultado) {

        
        echo '<script>alert("La Asignatura fue modificada con Exito")</script>';
        echo "<script>location.href='../materias/materias.php'</script>";

    } else{
        echo '<script>alert("No se pudo modificar!!.")</script>';
       // echo "<script>location.href='../profesor/profesores.php'</script>";
        
    }




?>
