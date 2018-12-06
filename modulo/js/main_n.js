jQuery(document).on('#guardar', '#insertar_n', function(event){
        event.preventDefault();
        jQuery.ajax({
        url: './valid/valid_nota.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),

})
        .done(function(respuesta){
	console.log(respuesta);
	if (!respuesta.error) {

		alert('Los Datos fueron Ingresados con exito');


	}else {
		alert('error al insertar los datos');
	}
})
.fail(function(resp){
	console.log(resp.responseText);
})
.always(function(){
	console.log("complete");
})
});

