function confirmarBaja(){
	var mensaje = 'Si pulsa el  boton "Aceptar" se eliminará el producto seleccionado';
	if (confirm(mensaje)) {
		return true;
	}
	//redirección
	window.location = 'adminProductos.php'
	return false;

}