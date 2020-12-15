<?php include 'includes/templates/header.php' ?>
        <section class="contenedor sessions">
            <div class="planes_info">
                <h2>Sesiones de Entrenamiento</h2>
                <p>
                    week muscle evolution (asesoria personalizada) es un
                    programa de entrenamiento en linea totalmente personalizado.
                </p>
            </div>

            <div class="planes_details d-flex">
                <div class="planes_details_image">
                    <img
                        src="./img/john-arano-h4i9G-de7Po-unsplash.jpg"
                        alt="FotoPlan"
                    />
                </div>
                <div class="planes_details_info">
                    <h3>Programa 1</h3>
                    <div class="info">
                        <h4>Incluye:</h4>
                        <ul>
                            <li>Encuesta Inicial</li>
                            <li>Plan de alimentacion personalizado</li>
                            <li>Ajustes en el plan de alimentacion cada 15 días</li>
                            <li>Lista de marcas recomendadas</li>
                            <li>Rutina de entrenamiento personalizada en base a tus objetivo (En Casa o Gym)</li>
                            <li>Seguimiento individual</li>
                            <li>Duracion de 4 Semanas</li>
                        </ul>
                        <p class="costo">Costo: <span class="precio">$650 MX</span> </p>
                    </div>
                    <hr>
                    <div id="paypal"></div>
                </div>
            </div>

            <div class="planes_details d-flex">
                <div class="planes_details_image">
                    <img
                        src="./img/meghan-holmes-wy_L8W0zcpI-unsplash.jpg"
                        alt="FotoPlan"
                    />
                </div>
                <div class="planes_details_info">
                    <h3>Programa 2</h3>
                    <div class="info">
                        <h4>Incluye:</h4>
                        <ul>
                            <li>Encuesta Inicial</li>
                            <li>Plan de alimentacion personalizado</li>
                            <li>Ajustes en el plan de alimentacion cada 15 días</li>
                            <li>Lista de marcas recomendadas</li>
                            <li>Rutina de entrenamiento personalizada en base a tus objetivo (En Casa o Gym)</li>
                            <li>Seguimiento individual</li>
                            <li>Duracion de 8 Semanas</li>
                        </ul>
                        <p class="costo">Costo: <span class="precio" id=="precio">$1200 MX</span></p>
                    </div>
                    <hr>
                    <div id="paypal"></div>
                </div>
            </div>

            <div class="planes_details d-flex">
                <div class="planes_details_image">
                    <img
                        src="./img/meghan-holmes-wy_L8W0zcpI-unsplash.jpg"
                        alt="FotoPlan"
                    />
                </div>
                <div class="planes_details_info">
                    <h3>Programa 3</h3>
                    <div class="info">
                        <h4>Incluye:</h4>
                        <ul >
                            <li>Encuesta Inicial</li>
                            <li>Plan de alimentacion personalizado</li>
                            <li>Ajustes en el plan de alimentacion cada 15 días</li>
                            <li>Lista de marcas recomendadas</li>
                            <li>Rutina de entrenamiento personalizada en base a tus objetivo (En Casa o Gym)</li>
                            <li>Seguimiento individual</li>
                            <li>Duracion de 12 Semanas</li>
                        </ul>
                        <p class="costo">Costo: <span class="precio">$1800 MX</span> </p>
                    </div>
                    <hr>
                    <div id="paypal"></div>
                </div>
            </div>
        </section>
        <script src="https://www.paypal.com/sdk/js?client-id=AVsk7OJVshUFDaGLMefknzWEsg4NnNCD3OOFsg_ExumUDs2fTuCWdhJtKwMeL2RrL7YqqJSMvx4h3boa&disable-funding=card" data-namespace="paypal_sdk"></script>
        <script>paypal_sdk.Buttons({
            style: {
                color: 'black',
                size: 'responsive',
            },
            createOrder: function(data,actions){
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            currency: 'MXN',
                            value: '32.69'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name);
            });
            }
        }).render('#paypal');
        </script>
        <?php include 'includes/templates/footer.php' ?>
    </body>
</html>
