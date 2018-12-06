$(obtener_registro());

function obtener_registro(alumnos)
{

	$.ajax({

		url : '../modulo/alumno/consulta.php',
		type : 'POST',
		dataType : 'html',
		data : {alumnos: alumnos},
		})

		.done(function(resultado){
			$("#result_busqueda").html(resultado);
		})
	
}

$(document).on('keyup', '#busqueda', function()
  {
  	var valorBusqueda=$(this).val();
  	if(valorBusqueda!="")
  	{
  		obtener_registro(valorBusqueda);
  	}
  	else
  	{
       obtener_registro();
  	}

  });