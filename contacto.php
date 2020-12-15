<?php include 'includes/templates/header.php' ?>

        <section class="sessions contenedor ">
            <h2 class="contact_title">Contacto</h2>
            <div class="contact_container">
                <div class="contact_img">
                    <img src="./img/contact.png" alt="ImagenContacto">
                </div>
                <div class="container_contact_form"> 
                    <form class="contact_form">
                        <div class="form">
                            <div class="form_group">
                                <label>Nombre</label>
                                <input type="text">
                            </div>
                            <div class="form_group">
                                <label>Apellidos</label>
                                <input type="text">
                            </div>
                            <div class="form_group">
                                <label>Email</label>
                                <input type="text">
                            </div>
                            <div class="form_group">
                                <label>Asunto</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="form_group">
                            <label>Mensaje</label>
                            <textarea></textarea>
                        </div>
                        <div class="btn-submit">
                            <input type="submit" class="btn-black">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <?php include 'includes/templates/footer.php' ?>
    </body>
</html>
