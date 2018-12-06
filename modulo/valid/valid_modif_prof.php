<?php
 
    require_once '../../cone/conexion.php';



    $id_profesor = $_REQUEST['id_profesor'];
    $nombre_p = $_POST['nombre_p'];
    $apellido_p = $_POST['apellido_p'];
    $cedula_p = $_POST['cedula_p'];
    $sexo = $_POST['sexo'];
    $fecha_n = $_POST['fecha_n'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $id_asignatura = $_POST['id_asignatura'];


     $modif = "UPDATE profesor SET id_profesor='$id_profesor',nombre_p='$nombre_p',apellido_p='$apellido_p',cedula_p='$cedula_p',sexo='$sexo',fecha_n='$fecha_n',edad='$edad',correo='$correo',direccion='$direccion',telefono='$telefono',id_asignatura='$id_asignatura' WHERE id_profesor='$id_profesor' ";

   
    $resultado = $conDB->query($modif);

    if ($resultado) {

        
        echo '<script>alert("La modificacion fue realizada  con Exito")</script>';
        echo "<script>location.href='../profesor/profesores.php'</script>";

    } else{
        echo '<script>alert("No se pudo modificar!!.")</script>';
       // echo "<script>location.href='../profesor/profesores.php'</script>";
        
    }




?>
