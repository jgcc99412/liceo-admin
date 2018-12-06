<?php

if (isset($_POST['guardar'])) {
        //incluimos coneion
        require_once '../cone/conexion.php';

        $nombre = mysqli_real_escape_string($conDB, $_POST['nombre_p']);
        $apellido = mysqli_real_escape_string($conDB, $_POST['apellido_p']);
        $cedula =  mysqli_real_escape_string($conDB, $_POST['cedula_p']);
        $telefono = mysqli_real_escape_string($conDB, $_POST['telefono']);
        $fecha = mysqli_real_escape_string($conDB, $_POST['fecha_n']);
        $sexo = mysqli_real_escape_string($conDB, $_POST['sexo']);
        $correo =  mysqli_real_escape_string($conDB, $_POST['correo']);
        $edad = mysqli_real_escape_string($conDB, $_POST['edad']);
        $direccion = mysqli_real_escape_string($conDB, $_POST['direccion']);
        $asignatura = mysqli_real_escape_string($conDB, $_POST['asignatura']);
        


    // echo $correo.' '.$password.' '.$nombre.' '.$apellido.' '.$sexo.' '.$n_cedula.' '.$cedula.' '.$nacionalidad.' '.$estado.' '.$telefono;
  
     $sql = "SELECT * FROM profesor WHERE  cedula_p='$cedula'";
          $existencia = mysqli_query($conDB,$sql);

          if ($existe = mysqli_fetch_object($existencia)) {
            echo '<script>alert("El profesor ya se encuentra registrado. Favor verificar datos")</script>';
              echo "<script>location.href='../modulo/profesor/profesores.php'</script>";

          } else if ($nombre && $apellido && $cedula && $telefono &&  $fecha && $sexo && $correo && $edad && $direccion && $asignatura ) {
            $sql ="INSERT INTO profesor(nombre_p, apellido_p, cedula_p, telefono, fecha_n, sexo, correo, edad, direccion, id_asignatura)
            VALUES('$nombre', '$apellido', '$cedula','$telefono', '$fecha', '$sexo','$correo','$edad','$direccion','$asignatura')";

            mysqli_query($conDB, $sql);
            echo '<script>alert("Registro Exitoso")</script>';
             echo "<script>location.href='../modulo/profesor/profesores.php'</script>";

            mysqli_close($conDB);
          }else echo "<div class=holder-error>Debes rellenar todos los campos vacios para insertar 'Profesor' nueva.</div> ";
    
       
  }




?>