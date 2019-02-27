<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <?php wp_head() ?>
  </head>
<body>
  <!--NAVBAR-->
    <nav id="nav" class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img id="big-logo" class="nav-logo visible-md visible-lg" alt="Logo América en Movimiento" src="<?php echo get_theme_file_uri('assets/img/logo.png'); ?>"><img class="nav-logo visible-xs visible-sm" alt="Logo América en Movimiento"
                      src="<?php echo get_theme_file_uri('assets/img/logo-sm.png'); ?>"></a>
            </div>
            <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
        	<?php wp_nav_menu( array(
        		'theme_location' 	=> 'header-menu',
        		'container_id'		=> 'bs-example-navbar-collapse-1',
        		'container_class' 	=> 'collapse navbar-collapse',
        		'menu_class'     	=> 'nav navbar-nav navbar-right'
        		)
        	); ?>
        <?php } ?>
        </div><!-- /.container-fluid -->
    </nav>
<?php include("includes/rrss.php"); ?>
