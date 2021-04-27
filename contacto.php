<?php include 'includes/templates/header.php' ?>

        <section class="sessions ">
            <h2 class="contact_title">Contacto</h2>
            <div class="contact_container">
                <div class="contact_img">
                    <img src="./img/contacto.png" alt="ImagenContacto">
                </div>
                <div class="container_contact_form"> 
                    <form class="contact_form" id="contact_form" method="POST">
                        <div class="form">
                            <div class="form_group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre">
                            </div>
                            <div class="form_group">
                                <label for="apellido">Apellidos</label>
                                <input type="text" name="apellido" id="apellido">
                            </div>
                            <div class="form_group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="form_group">
                                <label for="asunto">Asunto</label>
                                <input type="text" name="asunto" id="asunto">
                            </div>
                        </div>
                        <div class="form_group">
                            <label for="mensaje">Mensaje</label>
                            <textarea id="mensaje"></textarea>
                        </div>
                        <div class="btn-submit">
                            <input type="submit" class="btn-black" id="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script src ="js/contacto.js"></script>
        <script src="js/navbar.js"></script>
    <?php include 'includes/templates/footer.php' ?>
    </body>
</html>
