<?php
if (isset($_POST['modificar'])) {
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

     $sql = "SELECT * FROM alumno WHERE  cedula='$cedula'";
          $existencia = mysqli_query($conDB,$sql);

          if ($existe = mysqli_fetch_object($existencia)) {
            echo '<script>alert("El estudiante ya se encuentra registrado. Favor verificar datos")</script>';
              echo "<script>location.href='../modulo/alumno/estudiantes.php'</script>";

          } else if ($nombre && $apellido && $cedula  && $fecha_n && $sexo && $edad && $grado &&  $seccion &&  $direccion) {
            $sql ="INSERT INTO alumno(nombre, apellido, cedula, fecha_n, sexo, edad, id_grado, id_seccion, direccion)
            VALUES('$nombre','$apellido', '$cedula', '$fecha_n', '$sexo', '$edad','$grado','$seccion','$direccion')";


           


            mysqli_query($conDB, $sql);
            echo '<script>alert("Registro Exitoso")</script>';
              echo "<script>location.href='../modulo/alumno/estudiantes.php'</script>";

            mysqli_close($conDB);
          }else echo "<div class=holder-error>Debes rellenar todos los campos vacios para insertar 'alumno' nueva.</div> "; 
  }

?>
