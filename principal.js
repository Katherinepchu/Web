function verformulario (ruta) {
    $("#contenido").show("slow");
}
/*formularios de galeria*/
function galeria(){
alert("sfafafafafadf");
    $.post('galeria.php',{},
           function (datos){
        $("#contenido").show("slow");
        $("#contenido").html(datos);
    });
}
/*formulario de organizadora*/
function organizadora(){
alert("sdf");
    $.post('organizadora.php',{},
           function (datos){
        $("#contenido").show("slow");
        $("#contenido").html(datos);
    });
}
/*formulario de reservas*/
function reservas(){
alert("sdf");
    $.post('reservas.php',{},
           function (datos){
        $("#contenido").show("slow");
        $("#contenido").html(datos);
    });
}
/* formulario de contacto*/
function contacto(){
alert("sdf");
    $.post('contacto.php',{},
           function (datos){
        $("#contenido").show("slow");
        $("#contenido").html(datos);
    });
}
/* formulario de trabaja con nosotros*/
function laboral(){
alert("sdf");
    $.post('laboral.php',{},
           function (datos){
        $("#contenido").show("slow");
        $("#contenido").html(datos);
    });
}