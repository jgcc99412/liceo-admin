<?php
        //incluimos conexion
        require_once '../../../../../cone/conexion.php';

        if(isset($_POST['insertar']))

          {

            //----------------------insertando los datos en una variables-----------------------------
            $items1 = ($_POST['materia']);
            $items2 = ($_POST['lapso']);
            $items3 = ($_POST['alumno']);
            $items4 = ($_POST['nota']);
            $items5 = ($_POST['nota2']);
            $items6 = ($_POST['nota3']);
            $items7 = ($_POST['nota4']);
            $items8 = ($_POST['nota5']);


            while(true){


         //------------------llamado a los variables  que contienen los datos --------------------------------
            $item1 = current($items1);
            $item2 = current($items2);
            $item3 = current($items3);
            $item4 = current($items4);
            $item5 = current($items5);
            $item6 = current($items6);
            $item7 = current($items7);
            $item8 = current($items8);

            $mater= (( $item1 !== false) ? $item1 : ", &nbsp;");
            $laps= (( $item2 !== false) ? $item2 : ", &nbsp;");
            $alumn= (( $item3 !== false) ? $item3 : ", &nbsp;");
            $not1= (( $item4 !== false) ? $item4 : ", &nbsp;");
            $not2= (( $item5 !== false) ? $item5 : ", &nbsp;");
            $not3= (( $item6 !== false) ? $item6 : ", &nbsp;");
            $not4= (( $item7 !== false) ? $item7 : ", &nbsp;");
            $not5= (( $item8 !== false) ? $item8 : ", &nbsp;");


             $sql2 = "SELECT * FROM notas WHERE  alumno='$alumn' and  materia='$mater' and  lapso='$laps'";
          $existencia = mysqli_query($conDB,$sql2);


            if ($existe = mysqli_fetch_object($existencia)) {
            echo '<script>alert("El estudiante tiene Estas notas registradas")</script>';
             
              echo "<script>location.href='../../../../notas/notas.php'</script>";
          }
          else 

              //----------- concatenacion de los datos -------------------
            $valores='('.$mater.',"'.$laps.'","'.$alumn.'","'.$not1.'","'.$not2.'","'.$not3.'","'.$not4.'","'.$not5.'"),';


             //------------ borrar la coma al final de la concatenacion d elos valores------------------------

            $valoresQ= substr($valores, 0, -1);

            $sql = "INSERT INTO notas(materia, lapso, alumno, nota, nota2, nota3, nota4, nota5) VALUES $valoresQ";

            $sqlRes = $conDB->query($sql) or mysql_error();

            $item1 = next($items1);
            $item2 = next($items2);
            $item3 = next($items3);
            $item4 = next($items4);
            $item5 = next($items5);
            $item6 = next($items6);
            $item7 = next($items7);
            $item8 = next($items8);

            if($item1 === false && $item2 === false && $item3 === false && $item4 === false && $item5 === false && $item6 === false && $item7 === false && $item8 === false) break;
             
              echo '<script>alert("Registro de Notas Exitos")</script>';
              echo "<script>location.href='../../../../notas/notas.php'</script>";


           //fin del while
          }//fin del if

      }// fin del else if

?>