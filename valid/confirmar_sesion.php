<?php 
   session_start();
   include('../cone/conexion.php');

     if (isset($_POST['login'])) {

     	if (empty($_POST['correo']) || empty($_POST['password'])) {

     		echo "el usuario y la contraseña no han sido ingresadas.";
     	
     	}else  {
     		$usuario_login = mysql_real_escape_string($_POST['correo']);
     		$password_login = mysql_real_escape_string($_POST['password']);
           
            
           $sql = mysql_query("SELECT id_usuarios, correo, password FROM usuarios WHERE correo='". $correo ."' AND password='". $password ."'");

            if ($row = mysql_fetch_array($sql)) {

            	$_SESSION['id_usuarios'] = $row['id_usuarios'];
            	$_SESSION['correo'] = $row['correo'];
            	header("Location: inicio.php");

            }else{
                
   ?>
                 error.<a href="../index.php">reintentar</a>
      <?php	
          }
        	}

             }else{
        	header("Location: ../index.php");
         }
      ?>