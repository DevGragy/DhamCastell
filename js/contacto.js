//Variables
const btnSubmit = document.querySelector('#contact_form');


EventListeners();
//Listeners
function EventListeners(){
    //Boton submit de contacto
    btnSubmit.addEventListener('submit',enviarCorreo);
}


function enviarCorreo(e){
    e.preventDefault();
    let nombre = document.querySelector('#nombre').value,
        apellido = document.querySelector('#apellido').value,
        asunto = document.querySelector('#asunto').value,
        correo = document.querySelector('#email').value,
        mensaje = document.querySelector('#mensaje').value;

    if(nombre === "" || apellido === "" || asunto === "" || correo == "" || mensaje === ""){
        Swal.fire(
            'Todos los campos son obligatorios!',
            'No pudo enviarse su correo!',
            'error'
        );
    }else{
        let datos = new FormData();
        datos.append('nombre',nombre);
        datos.append('apellido',apellido);
        datos.append('email',correo);
        datos.append('asunto',asunto)
        datos.append('mensaje',mensaje);

        fetch('https://dhamcastell.com/includes/models/email.php',{
            method: 'POST',
            body: datos
        }).then(response => response.json())
        .then(data => {
            if(data.respuesta === "correcto"){
                Swal.fire(
                    'Bien!',
                    'Su correo ha sido enviado con exito!',
                    'success'
                );
            }else{
                Swal.fire(
                    'Hubo un Error!',
                    'No pudo enviarse su correo!',
                    'error'
                );
            }
        })
        .catch(error=> console.log(error));
    }
}