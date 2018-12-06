<?php
if (isset($_POST['guardar'])) {
        //incluimos conexion
        require_once '../cone/conexion.php';

        $nombre = mysqli_real_escape_string($conDB, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($conDB, $_POST['apellido']);
        $cedula = mysqli_real_escape_string($conDB, $_POST['cedula']);
        $fecha_n = mysqli_real_escape_string($conDB, $_POST['fecha_n']);
        $sexo = mysqli_real_escape_string($conDB, $_POST['sexo']);
        $edad = mysqli_real_escape_string($conDB, $_POST['edad']);
        $grado = mysqli_real_escape_string($conDB, $_POST['id_grado']);
        $seccion = mysqli_real_escape_string($conDB, $_POST['id_seccion']);
        $direccion = mysqli_real_escape_string($conDB, $_POST['direccion']);

        $lugar_n = mysqli_real_escape_string($conDB, $_POST['lugar_n']);
        $esc_proc = mysqli_real_escape_string($conDB, $_POST['escuela_proc']);
        $repite = mysqli_real_escape_string($conDB, $_POST['repitiente']);
        $alergia = mysqli_real_escape_string($conDB, $_POST['alergia_a']);
        $vive = mysqli_real_escape_string($conDB, $_POST['vive_con']);
        $atendido = mysqli_real_escape_string($conDB, $_POST['atendido_c']);

        $nombre_t = mysqli_real_escape_string($conDB, $_POST['nombre_t']);
        $apellido_t = mysqli_real_escape_string($conDB, $_POST['apellido_t']);
        $cedula_t = mysqli_real_escape_string($conDB, $_POST['cedula_t']);
        $tc_t = mysqli_real_escape_string($conDB, $_POST['tc_t']);
        $tl_t = mysqli_real_escape_string($conDB, $_POST['tl_t']);
        $sexo_t = mysqli_real_escape_string($conDB, $_POST['sexo_t']);
        $direccion_t = mysqli_real_escape_string($conDB, $_POST['direccion_t']);
        $ocupacion_t = mysqli_real_escape_string($conDB, $_POST['ocupacion_t']);


     $sql = "SELECT * FROM alumno WHERE  cedula='$cedula'";
          $existencia = mysqli_query($conDB,$sql);

          if ($existe = mysqli_fetch_object($existencia)) {
            echo '<script>alert("El estudiante ya se encuentra registrado. Favor verificar datos")</script>';
              echo "<script>location.href='../modulo/alumno/estudiantes.php'</script>";

          } else if ($nombre && $apellido && $cedula  && $fecha_n && $sexo && $edad && $grado &&  $seccion &&  $direccion &&
            $lugar_n && $esc_proc && $repite && $alergia && $vive && $atendido &&
            $nombre_t && $apellido_t && $cedula_t && $tc_t && $tl_t && $sexo_t && $direccion_t && $ocupacion_t) {
            $sql ="INSERT INTO alumno(nombre, apellido, cedula, fecha_n, sexo, edad, id_grado, id_seccion, direccion, lugar_n, escuela_proc, repitiente, alergia_a, vive_con, atendido_c, nombre_t, apellido_t, cedula_t, tc_t, tl_t, sexo_t, direccion_t, ocupacion_t)
            VALUES('$nombre','$apellido', '$cedula', '$fecha_n', '$sexo', '$edad','$grado','$seccion','$direccion', '$lugar_n', '$esc_proc', '$repite', '$alergia', '$vive', '$atendido', '$nombre_t', '$apellido_t', '$cedula_t', '$tc_t', '$tl_t', '$sexo_t', '$direccion_t', '$ocupacion_t')";


           


            mysqli_query($conDB, $sql);
            echo '<script>alert("Registro Exitoso")</script>';
              echo "<script>location.href='../modulo/alumno/estudiantes.php'</script>";

            mysqli_close($conDB);
          }else  echo '<script>alert("Debes rellenar todos los campos vacios para Registrar el Estudiante.")</script>';
                 echo "<script>location.href='../modulo/reg-est/re-1.php'</script>";

  }

?>
