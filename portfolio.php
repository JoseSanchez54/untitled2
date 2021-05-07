<?php
/*
Template Name: Portfolio_MWLB
*/
genesis();
function crear_portfolio_mobile(){
    ?>
    <link href="https://icecreamassets.s3-eu-west-1.amazonaws.com/wp-content/uploads/lightbox.css" rel="stylesheet" />
    <script src="https://icecreamassets.s3-eu-west-1.amazonaws.com/wp-content/uploads/lightbox.js"></script>
    <?php
    $args = array(
        'post_type'=> 'portfolio',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    $loop = new WP_Query( $args ); ?>
    <div class="container">
        <div class="row fila_port"><?php

            while ( $loop->have_posts() ) : $loop->the_post();
                $identidad = get_the_ID();
                $nombre =  get_post_meta($identidad,'nombre', true);
                $imagen =  get_post_meta($identidad,'imagen-url', true);
                $categoria =  get_post_meta($identidad,'categoria', true);


                ?><div class="col-xl-3 div col-lg-3 col-sm-3 <?php echo $categoria[0];?>"><?php
                ?>
                <div class="imagen_port">
                    <a href="<?php echo $imagen;?>" data-lightbox="image-1">
                        <img src="<?php echo $imagen; ?>"></a>
                </div>
                <div class="card my-auto">
						<span class="titulo">
						<?php echo $nombre; ?>
						</span>
                    <span class="subtitulo"><?php echo $categoria[0]; ?></span>
                </div>
                </div>

            <?php

            endwhile;
            ?>
        </div>
    </div>
<?php }
function slider_categorias()
{
    ?>
    <ul style="padding:0;" class="lista">
        <div class="owl-carousel slider_port">

            <div class="item">
                <li rel="todos" class="boton_port todos">Todos</li>
            </div>
            <div class="item">
                <li rel="" class="boton_port sitio_web">Sitio web</li>
            </div>
            <div class="item">
                <li class="boton_port packaging">Packaging</li>
            </div>
            <div class="item">
                <li class="boton_port tienda_online">Tienda online</li>
            </div>
            <div class="item">
                <li class="boton_port branding">Branding</li>
            </div>
            <div class="item">
                <li class="boton_port fotografia">Fotografia</li>
            </div>
            <div class="item">
                <li class="boton_port design">Diseño Grafico</li>
            </div>
            <div class="item">
                <li class="boton_port social_media">Social Media</li>
            </div>
            <div class="item">
                <li class="boton_port seo">SEO</li>
            </div>
            <div class="item">
                <li class="boton_port imprenta">Imprenta</li>
            </div>
    </ul>
    </div>
    <script>
        jQuery('div.owl-carousel.slider_port').owlCarousel({
            loop: true,
            margin: 5,
            nav: false,
            dots: false,
            autoplay: false,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 2.35
                },
                600: {
                    items: 2.35
                },
                1000: {
                    items: 2.10
                }, 1300: {
                    items: 4.10
                }, 1500: {
                    items: 4.30
                }
            }

        });
    </script>

    <?php
}

$detect = new Mobile_Detect();

if (($detect->isMobile()) or ($detect->isTablet())) {
    ?>
    <div class="encabezados_port hero_mwlb">
        <div class="container port">
            <div class="row encabezado1">
      <span class="title">
      Si tú también quieres hacerte ver,<br>
¡cuenta con nosotros!
      </span>
                <span class="subtitle">
      Nuestra especialidad es dejar huella con cada uno de nuestros proyectos.
      </span>
            </div>
        </div>
    </div>


    <?php
    slider_categorias();
    crear_portfolio();

    ?>
    <div class="seccion_m">
    <div class="container seccion_info">
        <div class="row fila_form justify-content-center">
            <div class="col-12 col-sm-12 col-lg-7 columna_form">
                <span class="texto_movil">¿Tienes<br>alguna duda?</span>
                <span class="texto_movil_p">Déjanos tus datos y un asesor personal te contactará para hablar de tu negocio.</span>
                <?php echo do_shortcode('[contact-form-7 id="87" title="Formulario de contacto 1"]'); ?>
            </div>
        </div>
    </div>
    </div><?php

} else {
    ?>

    <div class="encabezados_port hero_mwlb">
        <div class="container port">
            <div class="row encabezado1">
      <span class="title">
      Si tú también quieres hacerte ver,<br>
¡cuenta con nosotros!
      </span>
                <span class="subtitle">
      Nuestra especialidad es dejar huella con cada uno de nuestros proyectos.
      </span>
            </div>
        </div>
    </div>


    <div class="botonera_port">
        <div class="container">
            <ul class="lista">
                <li class="boton_port todos">Todos</li>
                <li class="boton_port sitio_web">Sitio web</li>
                <li class="boton_port packaging">Packaging</li>
                <li class="boton_port tienda_online">Tienda online</li>
                <li class="boton_port branding">Branding</li>
                <li class="boton_port fotografia">Fotografia</li>
                <li class="boton_port design">Diseño Grafico</li>
                <li class="boton_port social_media">Social Media</li>
                <li class="boton_port seo">SEO</li>
                <li class="boton_port imprenta">Imprenta</li>
            </ul>
        </div>
    </div>
    <?php
    crear_portfolio();

    ice_footer();
}


