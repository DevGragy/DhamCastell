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
    console.log('Adentro');
    let nombre = document.querySelector('#nombre').value,
        apellido = document.querySelector('#apellido').value,
        asunto = document.querySelector('#asunto').value,
        correo = document.querySelector('#email').value,
        mensaje = document.querySelector('#mensaje').value;

    let datos = new FormData();
    datos.append('nombre',nombre);
    datos.append('apellido',apellido);
    datos.append('email',correo);
    datos.append('asunto',asunto)
    datos.append('mensaje',mensaje);

    fetch('http://dhamcastell.com/includes/models/email.php',{
        method: 'POST',
        body: datos
    }).then(response => {
        if(response.ok){
            console.log(response.text());
        }else{
            throw "Error en la llamada";
        }
    }).then(json => console.log(json))
    .catch(error=> console.log(error));
}