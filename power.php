<?php include 'includes/templates/header.php' ?>
    <main class="contenedor">

        <div class="titulo-planes m-24">
            <h2>Power Bands</h2>
        </div>

        <div class="contenido-power">
            <div class="power-box">
                <div class="imagen-power">
                    <img src="img/band1.jpeg" alt="band1" />
                </div>

                <div class="cuerpo-power">
                    <h3>
                        ¿Qué incluye?
                    </h3>

                    <ul>
                        <li>3 Rutinas de pierna y gluteo en casa con videos (principiante, intermedio y avanzado) </li>
                        <li>3 Rutinas de activación para gluteo en gym con videos.</li>
                        <li> 3 Bandas de resistencia (3 Resistencias diferentes)</li>
                        <li>Bolsa portatil de malla</li>
                    </ul>
                </div>
            </div>

            <hr class="linea-gris">  

            <div class="power-box">
                <div class="cuerpo-power">
                    <h3>
                        Caracerísticas Principales
                    </h3>

                    <ul>
                        <li>Antideslizantes</li>
                        <li>Inodora</li>
                        <li>Gruesa y duradera</li>
                        <li>Anti-pellizco</li>
                        <li>3 Niveles de fuerza (Depende del color)</li>
                        <li>Elastico</li>
                        <li>Bolsa Portatil</li>
                        <li>Multifuncional: Ejercicio aerobico, funcional o de fuerza</li>
                    </ul>
                </div>

                <div class="imagen-power">
                    <img src="img/band2.jpeg" alt="band2" />
                </div>
            </div>

            <hr class="linea-gris">  

            <div class="power-box">
                <div class="imagen-power">
                    <img src="img/band3.jpeg" alt="band3"/>
                </div>

                <div class="cuerpo-power">
                    <h3>
                        Cuidados a considerar
                    </h3>

                    <ul>
                        <li>Lavar a mano con agua</li>
                        <li>No usar suavizante de telas</li>
                        <li>Enjuagar bien y secar</li>
                        <li>Antes de guardar limpia y seca por completo</li>
                        <li>Doblar cuidadosamente</li>
                        <li>Guardar en un lugar seco con buena ventilación</li>
                    </ul>
                </div>
            </div>
            
        </div>

        <div class="tipos-planes contenedor">

            <a class="card-planes btnModal soft-blue" id="power1" >
                <div>
                    <h2>01</h2>
                </div>

                <div>
                    <h3>Power Bands</h3>
                    <p>Envío estandar</p>
                </div>
            </a>

            <a class="card-planes btnModal mid-violet" id="power2" >
                <div>
                    <h2>02</h2>
                </div>

                <div>
                    <h3>Power Bands</h3>
                    <p>Envío express</p>
                </div>
            </a>

        </div>

        <div class='callout'>
            <h4>Nota</h4>
            <p>Una vez que hayas realizado el pago debes mandar una captura o foto del pago a mi mail <b>dhamcontacto@dhamcastell.com</b> con tu nombre completo y tu numero de whatsapp para recibir tu formulario para el envío.</p>
        </div>

        <div id="tvesModal" class="modalContainer">

        <div class="modal-content">

            <div class="confirmar-plan">

                <h2>Confirmar Pedido</h2>

                <span class="close">X</span>

            </div>

            <hr class="divider" />

            <p>$<span id="precio">600</span></p>

            <div id="paypal"></div>

            <h3 class="paga-oxxo">
            ¿No cuentas con PayPal? ¡Paga en Oxxo!
            </h3>

            <div class='pago-deposito'>
                <div>
                    <h4>Envío estandar</h4>
                    <h5>$500 Power-Bands</h5>
                    <h5>$60 envío estandar</h5>
                    <h5>$560 en Total!</h5>
                </div>
                <div>
                    <h4>Envío express</h4>
                    <h5>$500 Power-Bands</h5>
                    <h5>$180 envío express</h5>
                    <h5>$680 en Total!</h5>
                </div>
            </div>

            <div class="oxxo">

                <img src="https://logos-download.com/wp-content/uploads/2016/07/OXXO_logo.png" />
                <br />

                <p><b>BBVA para Bandas:</b></p>
                <p>4152 3138 5802 0782</p>

            </div>
        </div>
    </div>
        
    </main>

    <script src="https://www.paypal.com/sdk/js?client-id=Af-KUSXfxVRWwy50ZM-L7xrzM1qV-zLdhey_JW3hEPzylJbfWC1eBwvfhkHKZl42qfBZcOooh-qjBUef&disable-funding=card" data-namespace="paypal_sdk"></script>
    <script src='./js/bands.js'></script>
    <script src="./js/navbar.js"></script>
<?php include 'includes/templates/footer.php' ?>
    </body>
</html>
