<?php get_header(); ?>
<!-- Seccion Contacto -->
    <section class="container mb2">
        <h2 class="color-eam">Hablemos</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 contact-form">
                <p class="col-lg-10 col-lg-offset-1 text-center mb1">Si tienes alguna duda o sugerencia, si quieres información más detallada sobre nuestro trabajo, publicar con nosotros o contratar nuestros servicios, hablemos.</p>
                <form>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="exampleInputName2">Nombre <sup>(*)</sup></label>
                        <input type="text" class="form-control validate" id="exampleInputName2" placeholder="Nombre y apellido">
                        <span id="name_error" class="error hidden">*Debes ingresar tu nombre.</span>
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="exampleInputEmail1">Email <sup>(*)</sup></label>
                        <input type="email" class="form-control validate" id="exampleInputEmail1" placeholder="nombre@mail.com">
                        <span id="mail_error" class="error hidden">*Debes ingresar un email válido</span>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                        <label for="message">Mensaje <sup>(*)</sup></label>
                        <textarea id="contactTextArea" class="form-control validate" rows="2" placeholder="Ingresa aquí tu mensaje..."></textarea>
                        <span id="message_error" class="error hidden">*Debes ingresar un mensaje.</span>
                    </div>
                    <button id="send-btn" type="button" class="btn btn-header text-uppercase contact-button">
                        Enviar
                    </button>


                </form>
            </div>
            <div class="col-md-6 col-lg-5 col-lg-offset-1 contact-data">
                <h3 class="mt0">América en Movimiento <small>Eds. SpA.</small></h3>
                <a class="a-contact" href="https://goo.gl/maps/GXyntTTvCKT2" target="_blank"><span class="fas fa-map-marker-alt contact-icon" aria-hidden="true"></span>Blanco #1065, Valparaíso, Chile</a>
                <a class="a-contact" href="tel:+56984659102"><span class="fas fa-mobile-alt contact-icon" aria-hidden="true"></span>+569 8465 9102</a>
                <a class="a-contact" href="mailto:contacto@americaenmovimiento.cl" target="_top"><span class="fas fa-envelope contact-icon" aria-hidden="true"></span>contacto@americaenmovimiento.cl</a>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.566594513251!2d-71.6266744848112!3d-33.04154708089301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e12914dc3a1d%3A0xd7a16d161e112550!2sBlanco+1065%2C+Valpara%C3%ADso%2C+Regi%C3%B3n+de+Valpara%C3%ADso!5e0!3m2!1ses-419!2scl!4v1543697557207"
                  width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>

          </div>
    </section>
    <?php get_footer(); ?>
