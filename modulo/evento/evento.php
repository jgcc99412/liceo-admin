<?php
 session_start();
 require_once '../../cone/conexion.php';
 ?>

 <?php  if (isset($_SESSION['id_usuarios'])) { ?>

<html>
<head>
  <title>Sistema Liceo AndresRR</title>
      <meta charset="utf-8">
        
         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../../css/font-awesome.css">
    
    <link rel="stylesheet" href="../../css/AdminLTE.min.css">
    
    <link rel="stylesheet" href="../../css/stylo_slider.css">
    
    <link rel="stylesheet" href="../../css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../../img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../img/si.png">

<style>
.avatar {
    width: 30px;
  height:30px;
    border-radius: 10%;
    margin-left: 10px;
    float: right;
    
    
    
}   
    .grafica{
        width: 400px;
        height: 200px;
    }

    
    .nombre-u{
     width: 170px; height: 25px;
    }
    
    #s1{
  padding: 15px;
}

#s2 input{
  width: 250px;
  height: 50px;
  margin-top: 24px;
  text-align: center;
}

#s3 input{
  width: 200px;
  height: 50px;
  margin-top: 24px;
  text-align: center;
}

#cancelar{
  margin-top: 8px;
}
.btn{
  height: 40px;
}
    
</style>

</head>
<body class="hold-transition skin-red sidebar-mini">

  <div class="wrapper">
      
       <!--  menu superior-->
       <header class="main-header">
              
          <?php include_once ("menu_s.php"); ?>

       </header>
         
        <!-- fin del menu superior-->

       
         <!--menu lateral-->
      
      <aside class="main-sidebar ">
        <section class="sidebar ">
          <ul class="sidebar-menu">
              
             <?php include_once ("menu_l.php"); ?>
                        
          </ul>
        </section>  
      </aside>
      
      <!-- fin de panel lateral -->

      
       <!-------------------------------------------Contenido------------------------------------------>
      <div class="content-wrapper ">
          <section class="content">
            
            <?php include_once ("menu_v.php"); ?>
                   
          </section>
      </div>
      <!--Fin-Contenido-->
      

  </div>
 <link rel="stylesheet" href="../../css/stylo_ini.css"> 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="../../js/jquery-3.2.1.min.js"></script>
 <script src="../../js/bootstrap.min.js"></script>
 <script src="../../js/app.min.js"></script>
 <script src="../../js/.main.js"></script>

</body>
</html>

  <?php
    
   }else{
    echo '<script> window.location="../../index.php"</script>';

   }
   
?>