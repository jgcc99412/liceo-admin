<?php

if (isset($_POST['guardar'])) {
        //incluimos coneion
        require_once '../cone/conexion.php';

        $titulo = mysqli_real_escape_string($conDB, $_POST['titulo']);
        $detalles = mysqli_real_escape_string($conDB, $_POST['detalle']);
        $fecha_ev = mysqli_real_escape_string($conDB, $_POST['fecha']);
        $hora_ev = mysqli_real_escape_string($conDB, $_POST['hora']);
        


    // echo $correo.' '.$password.' '.$nombre.' '.$apellido.' '.$sexo.' '.$n_cedula.' '.$cedula.' '.$nacionalidad.' '.$estado.' '.$telefono;
  
     $sql = "SELECT * FROM eventos WHERE  titulo='$titulo'";
          $existencia = mysqli_query($conDB,$sql);

          if ($existe = mysqli_fetch_object($existencia)) {
            echo '<script>alert("Este evento ya fue Registrado. Favor Verifique los datos.")</script>';
              echo "<script>location.href='../modulo/evento/evento.php'</script>";

          } else if ($titulo && $detalles && $fecha_ev && $hora_ev ) {
            $sql ="INSERT INTO eventos(titulo, detalles, fecha_ev, hora_ev)
            VALUES('$titulo', '$detalles', '$fecha_ev','$hora_ev')";

            mysqli_query($conDB, $sql);
            echo '<script>alert("Evento guardado con Exito")</script>';
             echo "<script>location.href='../user/inicio.php'</script>";

            mysqli_close($conDB);
          }else 
           echo '<script>alert("Debes rellenar todos los campos vacios para insertar.")</script>';
              echo "<script>location.href='../modulo/evento/evento.php'</script>";
    
       
  }




?>