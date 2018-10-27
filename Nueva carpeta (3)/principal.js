
function index(){
	$.post('index.html',{},
	function(datos){
		$("#contenido").show("slow");
		$("#contenido").html(datos);
		
	});
}
function blog(){
	$.post('blog.html',{},
	function(datos){
		$("#contenido").show("slow");
		$("#contenido").html(datos);
		
	});
}