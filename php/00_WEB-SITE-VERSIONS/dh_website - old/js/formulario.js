//Formulario
const cita = {
    nombre: '',
    apellido: '',
    email: '',
    telefono: '',
    empresa: '',
    puesto: '',
    lugar: '',
    asunto: '',
    mensaje: ''
}

document.addEventListener('DOMContentLoaded', function () {
    iniciarApp();
});

function iniciarApp() {
    nombreForm();
    apellidoForm();
    emailForm();
    telefonoForm();
    empresaForm();
    puestoForm();
    lugarForm();
    asuntoForm();
    mensajeForm();
    
}

function nombreForm() {
    const nombreInput = document.querySelector('#nombre');

    nombreInput.addEventListener('input', e => {
        const nombreTexto = e.target.value.trim();

        if (nombreTexto === '' || nombreTexto.includes('=') || nombreTexto.includes('<') || nombreTexto.includes('>') || nombreTexto.includes('/') 
        || nombreTexto.includes('{') || nombreTexto.includes('}') || nombreTexto.includes('[') || nombreTexto.includes(']') 
        || nombreTexto.includes(';') || nombreTexto.includes('*') || nombreTexto.includes("'") || nombreTexto.includes('"')
        || nombreTexto.includes(0) || nombreTexto.includes(1) || nombreTexto.includes(2) || nombreTexto.includes(3) || nombreTexto.includes(4) 
        || nombreTexto.includes(5) || nombreTexto.includes(6) || nombreTexto.includes(7) || nombreTexto.includes(8) || nombreTexto.includes(9) 
        || nombreTexto.includes('.') || nombreTexto.length > 49
        ) {
            mostrarAlerta('Nombre no valido, evite números, caracteres "=, <, >, /, etc." y debe ser menor a 50 caracteres');
            nombreInput.value = "";
            return;
            

        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
            }
            cita.nombre = nombreTexto;
        }

    });

}
function apellidoForm() {
    const apellidoInput = document.querySelector('#apellido');

    apellidoInput.addEventListener('input', e => {
        const apellidoTexto = e.target.value.trim();

        if (apellidoTexto === '' || apellidoTexto.includes('=') || apellidoTexto.includes('<') || apellidoTexto.includes('>') || apellidoTexto.includes('/')
        || apellidoTexto.includes('{') || apellidoTexto.includes('}') || apellidoTexto.includes('[') || apellidoTexto.includes(']')
        || apellidoTexto.includes(';') || apellidoTexto.includes('*') || apellidoTexto.includes("'") || apellidoTexto.includes('"')
        || apellidoTexto.includes(0) || apellidoTexto.includes(1) || apellidoTexto.includes(2) || apellidoTexto.includes(3) || apellidoTexto.includes(4)
        || apellidoTexto.includes(5) || apellidoTexto.includes(6) || apellidoTexto.includes(7) || apellidoTexto.includes(8) || apellidoTexto.includes(9)
        || apellidoTexto.includes('.') || apellidoTexto.length > 49
        ) {
            mostrarAlerta('Apellido no valido, evite números, caracteres "=, <, >, /, etc." y debe ser menor a 50 caracteres');
            apellidoInput.value = "";

        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
            }
            cita.apellido = apellidoTexto;
        }

    });

}

function emailForm() {
    const emailInput = document.querySelector('#email');

    emailInput.addEventListener('input', e => {
        const emailTexto = e.target.value.trim();

        if (emailTexto === ''  ||  emailTexto.includes('=') || emailTexto.includes('<') || emailTexto.includes('>') || emailTexto.includes('/')) {
            mostrarAlerta('Ingrese correo valido evite caracteres "=, <, >, /, etc." ');
            emailInput.value = "";

        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
            }
            cita.email = emailTexto;
        }

    });

}

function telefonoForm() {
    const telefonoInput = document.querySelector('#telefono');

    telefonoInput.addEventListener('input', e => {
        const telefonoTexto = e.target.value.trim();

        if (telefonoTexto === '' || telefonoTexto.includes('=') || telefonoTexto.includes('<') || telefonoTexto.includes('>') || telefonoTexto.includes('/') 
        || telefonoTexto.includes('a') || telefonoTexto.includes('b') || telefonoTexto.includes('c') || telefonoTexto.includes('d') || telefonoTexto.includes('e') 
        || telefonoTexto.includes('f') || telefonoTexto.includes('g') || telefonoTexto.includes('h') || telefonoTexto.includes('i') || telefonoTexto.includes('j') 
        || telefonoTexto.includes('k') || telefonoTexto.includes('l') || telefonoTexto.includes('m') || telefonoTexto.includes('n') || telefonoTexto.includes('ñ') 
        || telefonoTexto.includes('o') || telefonoTexto.includes('p') || telefonoTexto.includes('q') || telefonoTexto.includes('r') || telefonoTexto.includes('s') 
        || telefonoTexto.includes('t') || telefonoTexto.includes('u') || telefonoTexto.includes('v') || telefonoTexto.includes('w') || telefonoTexto.includes('x') 
        || telefonoTexto.includes('y') || telefonoTexto.includes('z') 
        || telefonoTexto.includes('A') || telefonoTexto.includes('B') || telefonoTexto.includes('C') || telefonoTexto.includes('D') || telefonoTexto.includes('E') 
        || telefonoTexto.includes('F') || telefonoTexto.includes('G') || telefonoTexto.includes('H') || telefonoTexto.includes('I') || telefonoTexto.includes('J') 
        || telefonoTexto.includes('K') || telefonoTexto.includes('L') || telefonoTexto.includes('M') || telefonoTexto.includes('N') || telefonoTexto.includes('Ñ') 
        || telefonoTexto.includes('O') || telefonoTexto.includes('P') || telefonoTexto.includes('Q') || telefonoTexto.includes('R') || telefonoTexto.includes('S') 
        || telefonoTexto.includes('T') || telefonoTexto.includes('U') || telefonoTexto.includes('V') || telefonoTexto.includes('W') || telefonoTexto.includes('X') 
        || telefonoTexto.includes('Y') || telefonoTexto.includes('Z') || telefonoTexto.length > 13
        || telefonoTexto.includes('.') 
        ) {
            mostrarAlerta('Ingrese un número telefónico valido a 10 dígitos');
            telefonoInput.value = "";

        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
            }
            cita.telefono = telefonoTexto;
        }

    });

}

function empresaForm() {
    const empresaInput = document.querySelector('#empresa');

    empresaInput.addEventListener('input', e => {
        const empresaTexto = e.target.value.trim();

        if (empresaTexto === '' || empresaTexto.includes('=') || empresaTexto.includes('<') || empresaTexto.includes('>') || empresaTexto.includes('/') || empresaTexto.includes('.') 
        || empresaTexto.includes('{') || empresaTexto.includes('}') || empresaTexto.includes(';') || empresaTexto.includes('"') || empresaTexto.includes("'") 
        || empresaTexto.includes('[') || empresaTexto.includes("]")
        ) {
            mostrarAlerta('Texto no valido evite caracteres "=, <, >, /, etc." ');
            empresaInput.value = "";

        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
            }
            cita.empresa = empresaTexto;
        }

    });

}

function puestoForm() {
    const puestoInput = document.querySelector('#puesto');

    puestoInput.addEventListener('input', e => {
        const puestoTexto = e.target.value.trim();

        if (puestoTexto === '' || puestoTexto.includes('=') || puestoTexto.includes('<') || puestoTexto.includes('>') || puestoTexto.includes('/') 
        || puestoTexto.includes(0) || puestoTexto.includes(1) || puestoTexto.includes(2) || puestoTexto.includes(3) || puestoTexto.includes(4) 
        || puestoTexto.includes(5) || puestoTexto.includes(6) || puestoTexto.includes(7) || puestoTexto.includes(8) || puestoTexto.includes(9) 
        || puestoTexto.includes('{') || puestoTexto.includes('}') || puestoTexto.includes(';') || puestoTexto.includes('"') || puestoTexto.includes("'") 
        || puestoTexto.includes('[') || puestoTexto.includes("]") || puestoTexto.includes('.')
        ) {
            mostrarAlerta('Texto no valido evite números y caracteres "=, <, >, /, etc."');
            puestoInput.value = "";

        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
            }
            cita.puesto = puestoTexto;
        }

    });

}


function lugarForm() {
    const lugarInput = document.querySelector('#lugar');

    lugarInput.addEventListener('input', e => {
        const lugarTexto = e.target.value.trim();

        if (lugarTexto === '' || lugarTexto.includes('=') || lugarTexto.includes('<') || lugarTexto.includes('>') || lugarTexto.includes('/') 
        || lugarTexto.includes(0) || lugarTexto.includes(1) || lugarTexto.includes(2) || lugarTexto.includes(3) || lugarTexto.includes(4) 
        || lugarTexto.includes(5) || lugarTexto.includes(6) || lugarTexto.includes(7) || lugarTexto.includes(8) || lugarTexto.includes(9) 
        || lugarTexto.includes('{') || lugarTexto.includes('}') || lugarTexto.includes(';') || lugarTexto.includes('"') || lugarTexto.includes("'") 
        || lugarTexto.includes('[') || lugarTexto.includes("]") || lugarTexto.includes('.')
        ) {
            mostrarAlerta('Texto no valido evite números y caracteres "=, <, >, /, etc."');
            lugarInput.value = "";

        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
            }
            cita.lugar = lugarTexto;
        }

    });

}

function asuntoForm() {
    const asuntoInput = document.querySelector('#asunto');

    asuntoInput.addEventListener('input', e => {
        const asuntoTexto = e.target.value.trim();

        if (asuntoTexto === '' || asuntoTexto.includes('=') || asuntoTexto.includes('<') || asuntoTexto.includes('>') || asuntoTexto.includes('/') || asuntoTexto.includes('.') 
        || asuntoTexto.includes('{') || asuntoTexto.includes('}') || asuntoTexto.includes(';') || asuntoTexto.includes('"') || asuntoTexto.includes("'") 
        || asuntoTexto.includes('[') || asuntoTexto.includes("]")
        ) {
            mostrarAlerta('Texto no valido evite números y caracteres "=, <, >, /, etc."');
            asuntoInput.value = "";

        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
            }
            cita.asunto = asuntoTexto;
        }

    });

}

function mensajeForm() {
    const mensajeInput = document.querySelector('#mensaje');

    mensajeInput.addEventListener('input', e => {
        const mensajeTexto = e.target.value.trim();

        if (mensajeTexto === '' || mensajeTexto.includes('=') || mensajeTexto.includes('<') || mensajeTexto.includes('>') || mensajeTexto.includes('/') || mensajeTexto.includes('.') 
        || mensajeTexto.includes('{') || mensajeTexto.includes('}') || mensajeTexto.includes(';') || mensajeTexto.includes('"') || mensajeTexto.includes("'") 
        || mensajeTexto.includes('[') || mensajeTexto.includes("]")
        ) {
            mostrarAlerta('Texto no valido evite números y caracteres "=, <, >, /, etc."');
            mensajeInput.value = "";

        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
            }
            cita.mensaje = mensajeTexto;
        }

    });

}

function mostrarAlerta(mensaje, tipo) {

    //Si hay una alerta previa, entonces no crear otra
    const alertaPrevia = document.querySelector('.alerta');
    if (alertaPrevia) {
        return;
    }

    const alerta = document.createElement('DIV');
    alerta.textContent = mensaje;
    alerta.classList.add('alerta');

    if (tipo === 'error') {
        alerta.classList.add('error');
    }

    //Insertar en el HTML
    const formulario = document.querySelector('.section-title');
    formulario.appendChild(alerta);

    //Eliminar la alerta después de 3 segundos

    setTimeout(() => {
        alerta.remove();
    }, 4000);
}
