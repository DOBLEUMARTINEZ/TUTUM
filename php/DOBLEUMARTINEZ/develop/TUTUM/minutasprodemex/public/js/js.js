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

function verUser(){
	$( "#sesion-user" ).toggle('fast');
}

$( "#tema_p_acuerdos_0" ).click(function() {
	 $( "#tema-normal" ).toggle();
});


// SELECT BLOQUE DE MINUTA
$(document).on('change', '#tema_seccion', function(event) {
    
    var seleccion = $(this).children("option:selected").val();

    if( seleccion == 1 || seleccion == 3 ) {

        if (seleccion == 1) {
            document.getElementById("tema_titulo").value = "Principales acuerdos de la reunión";
        }else{
            document.getElementById("tema_titulo").value = "";
        }

        $( "#tema-normal" ).css('display','none');

    }else{
        $( "#tema-normal" ).css('display','block');
        document.getElementById("tema_titulo").value = "";
    }

});

// SELECT CATEGORIA
$(document).on('change', '#tema_id_estatus', function(event) {
    
    var seleccion = $(this).children("option:selected").val();

    if (seleccion == 5) {
    	$("#tema_compromiso_fin").prop('disabled', true);
    }else{
    	$("#tema_compromiso_fin").prop('disabled', false);
    }

});






