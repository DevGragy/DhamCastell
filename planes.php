<?php include 'includes/templates/header.php' ?>
        
<main>
            <div class="section-planes">
                <div class="titulo-planes">
                    <h2>Planes</h2>
                </div>

                <div class="contenido-planes">
                    <div class="cuerpo-planes">
                        <h3>
                            ¡Escoge tu tiempo de entranamiento y aprovecha todos
                            los beneficios!
                        </h3>
                        <ul>
                            <li>Encuesta inicial</li>
                            <li>Plan de alimentación personalizado</li>
                            <li>
                                Ajustes en el plan de alimentación cada 15 días
                            </li>
                            <li>Lista de marcas recomendadas</li>
                            <li>Seguimiento individual</li>
                            <li>
                                Rutina de entramiento personalizada en base a
                                tus objetivos (En Casa o Gym)
                            </li>
                        </ul>
                    </div>
                    <div class="imagen-planes">
                        <img src="img/dham-top.png" alt="" />
                    </div>
                </div>

                <div class="tipos-planes">
                    <div class="card-planes btnModal" id="btnModal1">
                            <div>
                                <h2>4</h2>
                            </div>
                            <div>
                                <h3>Semanas</h3>
                                <p>Costo: $650 MX</p>
                            </div>
                    </div>

                    <div class="card-planes btnModal" id="btnModal2">
                        <div>
                            <h2>8</h2>
                        </div>
                        <div>
                            <h3>Semanas</h3>
                            <p>Costo: $1200 MX</p>
                        </div>
                    </div>

                    <div class="card-planes btnModal" id="btnModal3">
                        <div>
                            <h2>12</h2>
                        </div>
                        <div>
                            <h3>Semanas</h3>
                            <p>Costo: $1800 MX</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tvesModal" class="modalContainer">
                <div class="modal-content">
                    <span class="close">X</span>
                    <h2>Confirmar Pedido</h2>
                    <p>$<span id="precio">650</span></p>
                    <div id="paypal"></div>
                </div>
            </div>

        </main>
        

        <script src="https://www.paypal.com/sdk/js?client-id=AVsk7OJVshUFDaGLMefknzWEsg4NnNCD3OOFsg_ExumUDs2fTuCWdhJtKwMeL2RrL7YqqJSMvx4h3boa&disable-funding=card" data-namespace="paypal_sdk"></script>
        <script src="js/main.js"></script>
        <script src="js/navbar.js"></script>

        <?php include 'includes/templates/footer.php' ?>


    </body>
</html>
