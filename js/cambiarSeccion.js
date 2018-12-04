$("document").ready(inicio);

function inicio(){
	$("#pro").click(productos);
}

function productos() {
	$("seccionRecargar").html("productos.html");
}
