# Editorial América en Movimiento
### Sitio web autoadministrable montado en wordpress
### Entrega proyecto final Desafío Latam

## [Sitio web](http://186.64.118.50/~fev1klopez/)
## [Repositorio](https://github.com/kimlouu/Proyecto_Final_DL/)
## [Video Explicativo](https://youtu.be/Bp2TD8uipGU)
## [Presentación](assets/docs/presentacion.pdf)

## Accesos para el despliegue
### LOCALHOST
- BBDD: base_de_datos_eam

### WORDPRESS LOCALHOST CONFIG
- Título del sitio: Editorial América en Movimiento
- User: klopezp
- Pass: zYwU^L)9iTt$Qs!I)d

### HOST
- BBDD: fev1klop_base_de_datos_eam
- User cpanel bbdd: fev1klop_klopezp
- Pass: 1lThZj0w5?Hsimo?;-

### HOST WORDPRESS ADMIN
- User: KimLopez
- Pass: &03li*TEk3KIl)wki9}
***

## Descripción general
Sitio web autoadministrable para la Editorial América en Movimiento, realizado en html5, css3, basandonos en el framework de bootstrap 3.3, con herramientas y plugins javascript y jQuery, montado en wordpress.

## Requerimientos generales
La Editorial América en Movimiento fundada en noviembre del 2014, busca difundir el pensamiento crítico y el debate en torno a la historiografía, la política y las ciencias sociales. Cuenta hasta la fecha con 23 titulos publicados, esperando poder llegar a los 30 titulos durante el presente año. 

En cuanto a los canales de venta cuenta con el servicio de "Alphilia distribuciones" quienes se encargan de instalar los titulos en distintas librerías físicas del país. A su vez, realizan ventas en ferias del libro que se llevan a cabo en distintos puntos de la regiones de Santiago y Valparaíso. Un tercer canal de venta es el que se realiza directamente en el marco del lanzamiento de sus nuevos libros y, finalmente, Un cuarto canal, aunque muy poco utilizado, es el canal de ventas online mediante su Fanpage en Facebook. 

Actualmente no cuentan con un sitio web. Su requerimiento es en primer lugar poder contar con una vitrina web, un sitio a través del cual, puedan mostrar el trabajo que realizan y los titulos que han editado hasta el momento. Su segundo objetivo es dar a conocer el equipo profesional a cargo y el comité evaluador que posee con distintos historiadores e intelectuales tanto de Chile como del extranjero, para poder incentivar el envío de manuscritos con potencial de publicación para engrosar su catálogo, mostrando también las formas y los procesos de aceptación de nuevos manuscritos. Finalmente desean también mostrar la posibilidad que brindan de prestar servicios a terceros en torno al trabajo de pre-prensa, prensa y post-prensa, destacando las alianzas que se han realizado hasta el momento con distintas Universidades, instituciones y organizaciones.

En cuanto a la posibilidad de implementar el sitio como ecommerce, se esperará para un segundo momento en donde se pueda escalar el sitio para dicha implementación, a la par que se realizan los tramites bancarios respectivos.

## Solución
La solución pasa en primer lugar por ordenar y establecer las jerarquías de los contenidos. Junto con ello, potenciar visualmente el trabajo realizado en las portadas de los libros con la utlización de imagenes que resalten el contenido, potenciando también la imagen gráfica y estética de la editorial. Juntar ambos factores anteriormente explicados para mostrar a los distintos usuarios (comprador, autor, institución) todo el trabajo que realiza la editorial y todos sus ámbitos de acción para potenciar la acción de cada uno de ellos, (conocer, comprar, publicar y contratar servicios). Se propone un trabajo modular de horizontes de secciones para que las secciones clave puedan replicarse en todo el sitio como includes en php. El resultado es un sitio responsive, con sistema de grillas bootstrap y autoadministrable en wordpress.

### Arquitectura de la información
- Potencial ecommerce web page Responsive
- Secciones:
	- Nosotros: Historia, Equipo, Libros en movimiento (Libros que han ganado fondos concursables), Eventos, Newsletter
	- Catálogo: Muestra de todos los libros publicados. Librerías en las que los pueden encontrar.
	- Publiquemos: Proceso, Descargas, Comité Editorial, Comité Evaluador
	- Servicios: Subservicios, Alianzas, Contacto.
	- Hablemos: Formulario de Contacto
- Énfasis en el contacto (Call to Action)
- Navbar de 5 elementos más inicio
- Home con 6 secciones:
	- Header (Slider con novedades)
	- Catálogo con últimos libros destacados
	- Librerías en las que los pueden encontrar.
	- Eventos
	- Alianzas
	- Newsletter
	- Footer, con links a rrss

### Requerimientos técnicos:
- Html5
- CSS3
- Bootstrap 3.3
	- Grid system
	- Formulario con estilos bootstrap
- Media querys
- Plugins jquery
	- Sticky navbar
	- Swiper
	- Lightbox
- Solución jquery
	- Advertencia error en formulario
- Uso de API's
	- GoogleFonts API
	- Whatsapp API
- Correcta visualización en todos los dispositivos
- Wordpress
	- Custom post type
		- Eventos
		- Librerías
	- Blog (Catálogo)
	- Galería de imagen (Eventos)
	- Template part
		- Newsletter
		- Confiaron en nosotros
		- Publiquemos
		- Contrata nuestros servicios
		- Librerías
		- Eventos
		- Fondo de adquisición
	- Plugins wordpress
		- Yoast Seo
		- Wordfence

### Requerimientos visuales:

- Layout:
    - Bootstrap: Minimal-flat
- Tipografía:
    - H1: Inknut Antiqua
    - H2: Inknut Antiqua
      H3: Inknut Antiqua
    - P: Lato
- Colores:
    - Imágenes fuertemente coloridas, textos en negro y grises, hover color corporativo.
      h1-h2-h3: color corporativo.
      Secundario: gray.
      Destacado: #009999
- Imágenes:
    - Disponibles
- Icons:
    - Font-awesome
    - Future Line family

