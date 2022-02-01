

function verTable($nombreTabla) {
	var tabla = document.getElementById("table"+$nombreTabla);
	var iconOn = document.getElementById("btnoninfo"+$nombreTabla);
	var iconOff = document.getElementById("btnoffinfo"+$nombreTabla);

	var iconEye = document.getElementById("btnInfo"+$nombreTabla);

    tabla.classList.toggle('on');

    iconOn.classList.toggle('eye-off');
    iconOff.classList.toggle('eye-off');

    iconEye.classList.add("fa-eye-slash");
    iconEye.classList.remove("fa-eye-slash");
}	

function verMasInfoTema($idTema) {
	alert('quieres ver la info del tema con id = '+$idTema);
}