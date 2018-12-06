<?php
   
 require_once '../../cone/conexion.php';

     if (isset($_POST["id_asignatura"]) && !empty($_POST['id_asignatura'])) {
     	$query = $conDB->query("SELECT * FROM grado WHERE id_asignatura = ".$_POST['id_asignatura']."AND asignatura = 1 ORDER BY id_grado ASC");
     }






?>