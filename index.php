<?php
 session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Liceo Andres R.R..</title>
   <!--
     <meta name="viewport" content="width=divice-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">    -->
    
  <link rel="stylesheet" href="css/stylo.css"> 
    
    <style>

  /**  #tit{
      padding: 30px;
      background-color: white;

      width: 600px;
      height: 90px;
      float: center;
      margin-left: 380px;
      margin-top: 00px;
      opacity: 0.9;
       border-radius: 15px 15px 15px 15px;
    box-shadow: 0px 0px 20px #666 inset;

          }
           **/
     .btn-index{

      
      border-radius: 15px 15px 15px 15px;
    box-shadow: 0px 0px 20px #666 inset;
     }
       
    </style>
    
    <?php require_once 'cone/conexion.php';?>
</head>
    <body>

      
        <div class="transp">
          <img src="">

          <div id="tit">
        <!-- <CENTER><h1 class="titulo">Registro y Control Estudiantil  del Liceo</h1></CENTER>-->

      </div>
        
        <ul class="text-animation hidden">
            <li>A</li>
            <li>N</li>
            <li>D</li>
            <li>R</li>
            <li>E</li>
            <li>S</li>
            <li></li>
            <li>R.</li>
            <li></li>
            <li>R.</li>
        </ul>
        
        

<button class=" btn-index btn-inicio" onclick="document.getElementById('modal-wrapper').style.display='block'" >
Inicio de Sesion</button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method="POST" action="valid/validar_login.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="img/1.png" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Liceo Andres R.R.</h1>
    </div>

    <div class="container">
      <input class="up" type="text" placeholder="Nombre de Ususario" name="correo">
      <input class="up" type="password" placeholder="Ingrese su Clave" name="password">        
      <button type="submit" name="login">Iniciar Sesion</button>
      <input type="checkbox" style="margin:26px 30px;">Recordarme      
      
    </div>
    
  </form>
  
</div>

<script>

    
    //efecto de login

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
        
  <!--ext -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/app.min.js"></script>
 <script src="js/arch/main.js"></script>
        
        <!--efecto de movimiento de letras-->
        
        <script type="text/javascript">
           $(function() {
               setTimeout(function() {
                   $('.text-animation').removeClass('hidden');
               }, 500);
           })();
        </script>
        
   </div>
    </body>

</html>