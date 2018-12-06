<?php
$conDB = mysqli_connect("localhost", "root", "", "sistemaliceo");
if(isset($_POST["materia"]))
{
	$materia = $_POST["materia"];
	$lapso = $_POST["lapso"];
	$alumno = $_POST["alumno"];
	$nota = $_POST["nota"];
	$nota2 = $_POST["nota2"];
	$nota3 = $_POST["nota3"];
	$nota4 = $_POST["nota4"];
	$nota5 = $_POST["nota5"];
	$query = '';
	for($cont = 0; $cont<cont($materia); $cont++)
	{
        $materia = mysql_real_escape_string($conDB, $materia[$cont]);
        $lapso = mysql_real_escape_string($conDB, $lapso[$cont]);
        $alumno = mysql_real_escape_string($conDB, $alumno[$cont]);
        $nota = mysql_real_escape_string($conDB, $nota[$cont]);
        $nota1 = mysql_real_escape_string($conDB, $nota1[$cont]);
        $nota2 = mysql_real_escape_string($conDB, $nota2[$cont]);
        $nota4 = mysql_real_escape_string($conDB, $nota4[$cont]);
        $nota5 = mysql_real_escape_string($conDB, $nota5[$cont]);

        if($materia !='' && $lapso !='' && $alumno !='' && $nota !='' && $nota2 !='' && $nota3 !='' && $nota4 !='' && $nota5 !='' )

        {
        	$query .= 'INSERT INTO notas ( alumno, lapso, materia, nota, nota2, nota3, nota4, nota5) 
        	    VALUES("'.$materia.'","'.$lapso.'", "'.$alumno.'", "'.$nota.'", "'.$nota2.'", "'.$nota3.'", "'.$nota4.'", "'.$nota5.'");
        	';

        }
	} if ($query != '') {
		  if (mysqli_multi_query($conDB, $query)) {

		  	echo 'Datos registrados con exito';
		  	
		  }else{
		  	 echo 'Errorrrrrrrrr';

		  }
		
	}else{
		echo 'Fallo el registro de notas';
	}
}

?>