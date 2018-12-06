<?php
 session_start();
 require("../cone/conexion.php");

  $usuario=$_POST['correo'];
    $passw=$_POST['password'];
          
   
   $conDB =mysql_connect('localhost', 'root', '');
      mysql_select_db('sistemaliceo');

     $sql=mysql_query("SELECT id_usuarios, correo, password, nombre FROM usuarios WHERE correo='$usuario'");
     if ($f=mysql_fetch_array($sql)){
      if ($passw==$f['password']){
        
        $_SESSION['id_usuarios']=$f['id_usuarios'];
        $_SESSION['nombre']=$f['nombre'];
        header("Location: ../user/inicio.php");
       }else {
        echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';

        echo "<script>location.href='../index.php'</script>";
       }
     }else {

        echo '<script>alert("ESTE USUARIO NO EXISTE!. FAVOR DE UN USUARIO VALIDO")</script>';

        echo "<script>location.href='../index.php'</script>";
     }

 ?>