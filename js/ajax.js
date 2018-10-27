function FuncSaveDocuRFC(){
	$.post('formulario.php',{},function(datos){
		$("#div").html(datos);
	});
}