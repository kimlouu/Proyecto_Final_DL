<?php get_header(); ?>
<!-- SECCIÓN NOSOTROS -->
    <section class="container">
        <h2 class="color-eam">Nosotros</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <p class="quote">"Instrúyanse, porque necesitaremos de toda nuestra inteligencia; Conmuévanse, porque necesitaremos todo nuestro entusiasmo; Organícense, porque necesitaremos de toda nuestra fuerza"
                    <p class="quote-author"><strong>Antonio Gramsci</strong><br><em>L'Ordine Nuovo,</em> año I, nº 1<br>1° de mayo de 1919<p><br>
                            <p>"América en movimiento" surge como una sinergia entre distintos esfuerzos colectivos académicos, editoriales, gráficos y políticos. Su objetivo fundamental es aportar en la comunicación del pensamiento crítico desde y
                                para las organizaciones sociales de nuestro país. Comunicación con una doble finalidad: por un lado, para difundir y hacer dialogar distintas realidades de las sociedades contemporáneas; por otro, contribuir a la
                                (auto)constitución de propuestas para transformar su realidad. </p>
                            <p>La editorial adopta este espíritu porque se siente parte y es fruto de esa realidad, como proyecto nacido de organizaciones que desarrollan una mirada crítica de la sociedad. Desde nuestro quehacer en particular,
                                pretendemos entregar un grano de arena al desarrollo de una sociedad más justa, crítica y efectivamente democrática.</p>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/nosotros-press.jpg'); ?>" alt="">

            </div>
        </div>
    </section>
    <section class="staff container mt">
        <h2 class="text-center color-eam">Equipo</h3>
            <div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-4 col-md-4 col-lg-2 col-lg-offset-1 text-center ">
                <img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/isra.jpg'); ?>" alt="">
                <h4>Israel<br> Fortune</h4>
                <h5><strong>Director Administrativo</strong></h5>
                <p>Magister© en Historia, Universidad de Santiago de Chile. </p>
                <a class="" href="mailto:israelfortune@gmail.com" target="_top"><span class="fas fa-envelope contact-icon" aria-hidden="true"></span>israelfortune@gmail.com</a>
            </div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-4 col-md-4 col-lg-2 col-lg-offset-2 text-center mt-xs">
                <img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/nacho.jpg'); ?>" alt="">
                <h4>José Ignacio Ponce</h4>
                <h5><strong>Director académico</strong></h5>
                <p>Doctor© en Historia, Universidad de Santiago de Chile. Becario PCHA CONICYT.</p>
                <a class="" href="mailto:jose.ponce.lopez@gmail.com" target="_top"><span class="fas fa-envelope contact-icon" aria-hidden="true"></span>jose.ponce.lopez@gmail.com</a>
            </div>
            <div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-4 col-md-4 col-lg-2 col-lg-offset-2 text-center mt-xs">
                <img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/kim.jpg'); ?>" alt="">
                <h4>Kim López Pizarro</h4>
                <h5><strong>Director creativo</strong></h5>
                <p>Diseñador Gráfico, Pontificia Universidad Católica de Valparaíso.</p>
                <a class="" href="mailto:p.lopez.kim@gmail.com" target="_top"><span class="fas fa-envelope contact-icon" aria-hidden="true"></span><br>p.lopez.kim@gmail.com</a>
            </div>

    </section>
    <section class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 mt">
        <h2 class="text-center color-eam">Libros en Movimiento</h3>
            <p class="text-center">En nuestro aún breve devenir podemos decir que <strong>algunos de nuestros libros ya están disponibles en todas las bibliotecas públicas de nuestro páis.</strong> Esto particularmente nos llena de orgullo, pues
                nuestra intención inicial fue poder llevar a todos los rincones de nuestro país el pensamiento crítico y la posibilidad de transformar nuestra sociedad en una mejor a la que tenemos hoy, todo esto fue posible a partir del Fondo
                Nacional de Fomento del Libro y la Lectura, y su línea de <em>"Adquisición de libros de autores chilenos para su distribución en bibliotecas públicas",</em> gracias al cual podrás encontrar los siguientes libros publicados por
                América en Movimiento en tu biblioteca más cercana.</p>
    </section>
<?php include("includes/adquisicion.php"); ?>
<?php include("includes/newsletter.php"); ?>
<?php get_footer(); ?>
