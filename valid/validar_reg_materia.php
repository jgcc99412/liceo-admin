<?php

if (isset($_POST['guardar'])) {
        //incluimos coneion
        require_once '../cone/conexion.php';

        $asignatura = mysqli_real_escape_string($conDB, $_POST['asignatura']);
        
        


    // echo $correo.' '.$password.' '.$nombre.' '.$apellido.' '.$sexo.' '.$n_cedula.' '.$cedula.' '.$nacionalidad.' '.$estado.' '.$telefono;
  
     $sql = "SELECT * FROM asignatura WHERE  asignatura='$asignatura'";
          $existencia = mysqli_query($conDB,$sql);

          if ($existe = mysqli_fetch_object($existencia)) {
            echo '<script>alert("Este evento ya fue Registrado. Favor Verifique los datos.")</script>';
              echo "<script>location.href='../modulo/evento/evento.php'</script>";

          } else if ($asignatura ) {
            $sql ="INSERT INTO asignatura (asignatura)
            VALUES('$asignatura')";

            mysqli_query($conDB, $sql);
            echo '<script>alert("Asignatura guardado con Exito")</script>';
             echo "<script>location.href='../modulo/materias/materias.php'</script>";

            mysqli_close($conDB);
          }else 
           echo '<script>alert("Debes rellenar todos los campos vacios para insertar.")</script>';
              echo "<script>location.href='../modulo/reg-est/reg_materia.php'</script>";
    
       
  }




?>