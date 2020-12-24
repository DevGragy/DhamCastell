//Variables
let precio1 = '32.69'
        
paypal_sdk.Buttons({
    style: {
        color: 'black',
        size: 'responsive',
    },
    createOrder: function(data,actions){
        return actions.order.create({
            purchase_units: [{
                amount: {
                    currency: 'MXN',
                    value: precio1
                }
            }]
        });
    },
    onApprove: function(data, actions) {
    return actions.order.capture().then(function(details) {
        if(details.status === "COMPLETED"){
            let email = details.payer.email_address;
            let datos = new FormData();
            datos.append("email",email);
            fetch('https://dhamcastell.com/includes/models/paypal.php',{
                method: 'POST',
                body: datos
            }).then(response => response.json())
            .then(data => {
                if(data.respuesta === "correcto"){
                    Swal.fire(
                        'Compra exitosa!',
                        'Verifique su correo!',
                        'success'
                    );
                }
            })
            .catch(error => console.log(error))
        }
    });
    }
}).render('#paypal');