

function verTable($nombreTabla) {
	var tabla = document.getElementById("table"+$nombreTabla);
	var iconDown = document.getElementById("btnverinfo"+$nombreTabla);
    tabla.classList.toggle('on');
    iconDown.classList.toggle('rotate-icon');
}