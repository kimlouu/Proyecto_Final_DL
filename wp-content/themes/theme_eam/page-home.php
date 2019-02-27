<?php get_header(); ?>

<!-- CAROUSEL -->
    <div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade hidden-xs" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url('<?php echo get_theme_file_uri('assets/img/header.jpg'); ?>');">
                <!-- <div class="overlay"></div> -->
                <div class="carousel-caption col-sm-6 col-md-6 col-lg-6">
                    <span class="label">Lo más nuevo</span>
                    <h1>Transiciones <br><small>Perspectivas historiográficas sobre&nbsp;la&nbsp;postdictadura chilena</small></h1>
                    <p>José Ignacio Ponce | Aníbal Pérez | Nicolás Acevedo</p>
                    <a class="btn btn-header btn-lg text-uppercase" href="" role="button">Cuéntame más</a>
                </div>
            </div>
            <div class="item" style="background-image: url('<?php echo get_theme_file_uri('assets/img/header2.jpg'); ?>');">
                <!-- <div class="overlay"></div> -->
                <div class="carousel-caption col-sm-6 col-md-6 col-lg-6">
                    <span class="label">Lo más nuevo</span>
                    <h1>América Latina<br><small>Violencias en la Historia</small></h1>
                    <p>Igor Goicovic | Jaqueline Vassallo</p>
                    <a class="btn btn-header btn-lg text-uppercase" href="" role="button">Cuéntame más</a>
                </div>
            </div>
            <div class="item" style="background-image: url('<?php echo get_theme_file_uri('assets/img/header3.jpg'); ?>');">
                <!-- <div class="overlay"></div> -->
                <div class="carousel-caption col-sm-6 col-md-6 col-lg-4">
                    <span class="label">Lo más nuevo</span>
                    <h1>Clotario Blest en la Cut <br><small>Por la democracia de los trabajadores</small></h1>
                    <p>Paula Orellana Valenzuela</p>
                    <a class="btn btn-header btn-lg text-uppercase" href="" role="button">Cuéntame más</a>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
            <span class="fas fa-angle-left slide-arrow" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="derecha carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
            <span class="fas fa-angle-right slide-arrow" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <a class="down-icon anchorLink" href="#catalogo"><i class="fas fa-angle-double-down"></i></a>
    </div>

    <!--HEADER XAS-->
    <header class="header-xs visible-xs">
        <img src="<?php echo get_theme_file_uri('assets/img/header.jpg'); ?>" class="img-responsive header-xs" alt="">

        <div class="container">
            <span class="label">Lo más nuevo</span>
            <div class="col-sm-6 col-md-7 col-lg-7">
                <h1>Transiciones <br><small>Perspectivas historiográficas sobre la postdictadura chilena</small></h1>
                <p>José Ignacio Ponce<br>Aníbal Pérez<br>Nicolás Acevedo</p>
                <a class="btn btn-header btn-lg text-uppercase" href="" role="button">Cuéntame más</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>

    <!--Catálogo-->
    <section id="catalogo">
        <h2>Libros en Movimiento</h2>
        <div class="row">
            <div class="container-fluid">
                <div class="book-thumbail col-sm-12 col-md-6 col-lg-6">
                    <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro1.jpg'); ?>" alt=""></a>
                    <div class="book-caption">
                        <div class="big-book-caption-text">
                            <h3>Clotario Blest en la Cut <br><small>Por la democracia de los trabajadores</small></h3>
                            <p>Paola Orellana Valenzuela</p>
                        </div>
                    </div>
                </div>
                <div class="book-thumbail col-sm-12 col-md-6 col-lg-6">
                    <div class="book-thumbail col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro2.jpg'); ?>" alt=""></a>
                        <div class="book-caption">
                            <div class="small-book-caption-text">
                                <h3>América Latina<br><small>Violencias en la historia</small></h3>
                                <p>Igor Goicovic<br>Jaqueline Vassallo</p>
                            </div>
                        </div>
                    </div>
                    <div class="book-thumbail col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro8.jpg'); ?>" alt=""></a>
                        <div class="book-caption">
                            <div class="small-book-caption-text">
                                <h3>Trabajadores y trabajadoras<br><small>Procesos y acción sindical en el neoliberalismo chileno (1979-2017)</small></h3>
                                <p>José Ignacio Ponce<br>Camilo Santibáñez<br>Julio Pinto</p>
                            </div>
                        </div>
                    </div>
                    <div class="book-thumbail col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro4.jpg'); ?>" alt=""></a>
                        <div class="book-caption">
                            <div class="small-book-caption-text">
                                <h3>Gobernar es Alimentar<br><small>Discursos, legislación y políticas de alimentación popular, Chile 1900-1950</small></h3>
                                <p>Juan Carlos Yáñez</p>
                            </div>
                        </div>
                    </div>
                    <div class="book-thumbail col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro6.jpg'); ?>" alt=""></a>
                        <div class="book-caption">
                            <div class="small-book-caption-text">
                                <h3>Un fantasma recorre el campo <br><small>Comunismo y politización campesina en Chile (1935-1948)</small></h3>
                                <p>Nicolás Acevedo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="book-thumbail col-sm-12 col-md-6 col-lg-6">
                    <div class="book-thumbail col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro10.jpg'); ?>" alt=""></a>
                        <div class="book-caption">
                            <div class="small-book-caption-text">
                                <h3>Transiciones <br><small>Perspectivas historiográficas sobre la postdictadura chilena</small></h3>
                                <p>José Ignacio Ponce<br>Aníbal Pérez<br>Nicolás Acevedo</p>
                            </div>
                        </div>
                    </div>
                    <div class="book-thumbail col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro7.jpg'); ?>" alt=""></a>
                        <div class="book-caption">
                            <div class="small-book-caption-text">
                                <h3>Religiosidad e indigenismo<br><small>Ensayo desde la Etnoeducación Crítica en nuestro continente (Abya Yala)</small></h3>
                                <p>Cristián Muñoz Vera</p>
                            </div>
                        </div>
                    </div>
                    <div class="book-thumbail col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro3.jpg'); ?>" alt=""></a>
                        <div class="book-caption">
                            <div class="small-book-caption-text">
                                <h3>América Latina<br><small>En la Geopolítica del Imperialismo </small></h3>
                                <p>Atilio Born</p>
                            </div>
                        </div>
                    </div>
                    <div class="book-thumbail col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro9.jpg'); ?>" alt=""></a>
                        <div class="book-caption">
                            <div class="small-book-caption-text">
                                <h3>KPD <br><small>Historia social y memoria de una fábrica soviética en Chile</small></h3>
                                <p>Andrés Brignardello</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="book-thumbail col-sm-12 col-md-6 col-lg-6">
                    <a href="#" class="img-book-thumb"><img class="img-responsive" src="<?php echo get_theme_file_uri('assets/img/libro11.jpg'); ?>" alt=""></a>
                    <div class="book-caption">
                        <div class="big-book-caption-text">
                            <h3>El orden fabril <br><small>Paternalismo industrial en la minera chilena (1900-1950)</small></h3>
                            <p>Enzo Videla Bravo<br> Hernán Venegas Valdebenito<br>Milton Godoy Orellana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="load">
            <a class="btn btn-secondary btn-lg text-uppercase" href="catalogo.html" role="button">Ir al catálogo</a>
        </div>
    </section>
<?php include("includes/librerias.php"); ?>
<?php include("includes/eventos.php"); ?>
<?php include("includes/confiaron.php"); ?>
<?php include("includes/newsletter.php"); ?>

<?php get_footer(); ?>
