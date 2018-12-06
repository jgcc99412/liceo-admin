<?php
 
    require_once '../../cone/conexion.php';



    $id_alumno = $_REQUEST['id_alumno'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $sexo = $_POST['sexo'];
    $fecha_n = $_POST['fecha_n'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $lugar_n = $_POST['lugar_n'];
    $escuela_proc = $_POST['escuela_proc'];
    $repitiente = $_POST['repitiente'];
    $alergia_a = $_POST['alergia_a'];
    $vive_con = $_POST['vive_con'];
    $atendido_c = $_POST['atendido_c'];
    $id_grado = $_POST['id_grado'];
    $id_seccion = $_POST['id_seccion'];
    $nombre_t = $_POST['nombre_t'];
    $apellido_t = $_POST['apellido_t'];
    $cedula_t = $_POST['cedula_t'];
    $tc_t = $_POST['tc_t'];
    $tl_t = $_POST['tl_t'];
    $sexo_t = $_POST['sexo_t'];
    $direccion_t = $_POST['direccion_t'];
    $ocupacion_t = $_POST['ocupacion_t'];


     $modif = "UPDATE alumno SET id_alumno='$id_alumno',nombre='$nombre',apellido='$apellido',cedula='$cedula',sexo='$sexo',fecha_n='$fecha_n',edad='$edad',direccion='$direccion',lugar_n='$lugar_n',escuela_proc='$escuela_proc',repitiente='$repitiente',alergia_a='$alergia_a',vive_con='$vive_con',atendido_c='$atendido_c',id_grado='$id_grado',id_seccion='$id_seccion',nombre_t='$nombre_t',apellido_t='$apellido_t',cedula_t='$cedula_t',tc_t='$tc_t',tl_t='$tl_t',sexo_t='$sexo_t',direccion_t='$direccion_t',ocupacion_t='$ocupacion_t' WHERE id_alumno='$id_alumno' ";

   
    $resultado = $conDB->query($modif);

    if ($resultado) {

        
        echo '<script>alert("La modificacion fue realizada  con Exito")</script>';
        echo "<script>location.href='../alumno/estudiantes.php'</script>";

    } else{
        echo '<script>alert("No se pudo modificar!!.")</script>';
        echo "<script>location.href='../alumno/estudiantes.php'</script>";
        
    }




?>
