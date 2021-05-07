<?php
/*
Template Name: dashboard_User-area_MWLB
*/
if (is_user_logged_in()) {
    $ids_sitio_web = array('270', '274', '273', '275', '272', '271');
    $ids_ecommerce = array('276', '277', '278', '279', '288', '289');
    $ids_social = array('308', '309', '310', '282', '281', '280');
    $ids_seo = array('283', '284', '285', '307', '306', '305');
    $usuario = wp_get_current_user();
    $usuario_id = get_current_user_id();
    $user_mail = $usuario->user_email;
    $fecha_registro = date(" d M Y", strtotime($usuario->user_registered));
    $nombre = $usuario->user_firstname . " " . $usuario->user_lastname;
    $cupon = get_user_meta($usuario_id, 'cupon', true);
    $asesor_a = get_user_meta($usuario_id, 'asesor_asignado', true);
    $asesor = get_user_meta($asesor_a, 'nickname', true);
    $asesor_mail = get_user_meta($asesor_a, 'email', true);
    $asesor_movil = get_user_meta($asesor_a, 'billing_phone', true);
    $avatar = get_avatar($usuario->ID);
    $args = array(
        'customer_id' => $usuario_id
    );
    $orders = wc_get_orders($args);


    function cupones()
    {
        $usuario = wp_get_current_user();
        $user_mail = $usuario->user_email;
        $args = array(
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'asc',
            'post_type' => 'shop_coupon',
            'post_status' => 'publish',

        );
        $coupons = get_posts($args);
        foreach ($coupons as $cupon) {
            $mail = $cupon->customer_email;
            $name = $cupon->post_title;
            if (in_array($user_mail, $mail)) {
                echo $name;
            }
        }


    }

    function cupones_price()
    {
        $usuario = wp_get_current_user();
        $user_mail = $usuario->user_email;
        $args = array(
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'asc',
            'post_type' => 'shop_coupon',
            'post_status' => 'publish',

        );
        $coupons = get_posts($args);
        foreach ($coupons as $cupon1) {
            $mail = $cupon1->customer_email;
            $name = $cupon1->post_title;
            if (in_array($user_mail, $mail)) {
                echo $cupon1->coupon_amount;
            }
        }


    }


    /* $digits = $order->get_meta('_wc_first_data_payeezy_gateway_credit_card_account_four');
    $card_type = $order->get_meta('_wc_first_data_payeezy_gateway_credit_card_card_type'); */

    genesis();

    ?>
    <style>@font-face {
            font-family: 'Gotham';
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Gotham-Medium.eot');
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Gotham-Medium.eot?#iefix') format('embedded-opentype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Gotham-Medium.woff2') format('woff2'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Gotham-Medium.woff') format('woff'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Gotham-Medium.ttf') format('truetype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Gotham-Medium.svg#Gotham-Medium') format('svg');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Gotham Rounded Book';
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Book.eot');
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Book.eot?#iefix') format('embedded-opentype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Book.woff2') format('woff2'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Book.woff') format('woff'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Book.ttf') format('truetype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Book.svg#GothamRounded-Book') format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Gotham Rounded';
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Bold.eot');
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Bold.eot?#iefix') format('embedded-opentype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Bold.woff2') format('woff2'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Bold.woff') format('woff'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Bold.ttf') format('truetype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/GothamRounded-Bold.svg#GothamRounded-Bold') format('svg');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Avenir';
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Heavy.eot');
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Heavy.eot?#iefix') format('embedded-opentype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Heavy.woff2') format('woff2'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Heavy.woff') format('woff'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Heavy.ttf') format('truetype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Heavy.svg#Avenir-Heavy') format('svg');
            font-weight: 900;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Avenir';
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Medium.eot');
            src: url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Medium.eot?#iefix') format('embedded-opentype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Medium.woff2') format('woff2'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Medium.woff') format('woff'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Medium.ttf') format('truetype'), url('https://icecreamassets.s3-eu-west-1.amazonaws.com/themes/genesis-child/fonts/Avenir-Medium.svg#Avenir-Medium') format('svg');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }</style>
    <script>jQuery('.header_mwlb').hide();
        jQuery('.header_icecream_movil ').hide();
        jQuery('.menu_movil ').hide();</script>

    <div class="body_contenedor_mwlb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-2 menu_column">
                    <div class="logo_user">
                        <a href="/">
                            <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/01/11131727/logo_IceCream-1.svg"></a>
                    </div>
                    <div class="menu_user">


                        <a href="/area-usuario">
                            <li class="menu_user_item active"><i class="far fa-address-card"></i> Inicio</li>
                        </a>
                        <a href="/pedidos">
                            <li class="menu_user_item "><i class="far fa-clipboard"></i> Pedidos y suscripciones</li>
                        </a>
                        <li class="menu_user_item"><i class="far fa-bookmark"></i> Tus pagos</li>
                        <li class="menu_user_item"><i class="far fa-calendar"></i> Edita tu perfil</li>
                        <li class="menu_user_item"><i class="far fa-chart-bar"></i> Tus datos de facturación</li>
                        <li class="menu_user_item"><i class="fas fa-life-ring"></i> Tickets de soporte</li>
                        <a href="https://ayuda.icecreammarketing.shop">
                            <li class="menu_user_item"><i class="far fa-keyboard"></i> Centro de ayuda</li>
                        </a>
                        <a href="https://guias.icecreammarketing.shop">
                            <li class="menu_user_item"><i class="far fa-edit"></i> Guías y cursos</li>
                        </a>
                    </div>
                    <hr>
                    <div class="botonera_menu_user">
                        <a href="/servicios" class="contratar"><img
                                    src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/02/09163831/Path-633.png">Contratar
                            servicios</a>
                        <a href="tel:913688604" class="atencion enlace_encubrir"><i class="far fa-envelope"></i>
                            Atención al cliente</a><br>
                        <a href="mailto:juanma.vales@icecream.mk" class="contactar enlace_encubrir"><i
                                    class="far fa-question-circle"></i> Contactar con tu asesor</a><br>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 content_area">
                    <div class="container">
                        <div class="row header_user">
                            <div class="col-12">
                                <div class="botonera_user">

                                    <div class="logout">
                                        <i href="/ayuda" class="far fa-question-circle"></i>
                                        <a href="/wp-login.php?action=logout" class="cerrar_sesion">Cerrar sesión</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row fila_1_user">
                            <div class="col-xl-8 col-lg-8">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-sm-4 col-12 cliente_column">

                                        <div class="cliente_nonbre">
                                            <img src="" alt="" class="imagen_cliente"><?php echo $avatar; ?>
                                            <span class="saludo_clien">Hola,</span><br>
                                            <span class="nombre_cliente"><?php echo $nombre; ?></span>
                                            <a href="/editar-perfil" class="edita_perfil">Edita tu perfil </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-sm-4 col-12 asesor_column">
                                        <div class="row ">
                                            <div class="col-xl-5 col-12 col-lg-5 col-sm-5 dess"
                                                 style="background-image: url('https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/02/09094412/Avatarz_white_019.png')">
                                                <div class="spaciador"></div>
                                            </div>
                                            <div class="col-12 col-xl-6 col-sm-12 col-lg-12 my-auto textos_asesor">
                                                <span class="parrafo_user">Hola, soy tu asesor personal de IceCream Marketing Shop</span>
                                                <span class="presentacion_asesor">Mi nombre es</span>
                                                <span class="nombre_asesor"> <?php echo $asesor; ?></span>
                                                <div class="botonera_asesor">
                                                    <span class="ayudar">¿Cómo te puedo ayudar hoy?</span>
                                                    <a class="asesor_email">Enviar email</a>
                                                    <a class="asesor_telefono">Llamar</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row segunda_user">
                                    <div class="col-xl-5 col-lg-5 col-sm-4 col-12 column_cumple">
                                        <div class="row tarjeta_cumple">
                                            <div class="col-3"><img
                                                        src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/02/09105725/Fondo.png"
                                                        class="imagen_cumple"></div>
                                            <div class="col-9"><span class="texto_cumple">Eres cliente de IceCream Marketing Shop desde</span>
                                                <span class="fecha_cumple"><?php echo $fecha_registro; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-sm-4 col-12">
                                        <div class="row tarjeta_cumple">
                                            <div class="col-3"><img
                                                        src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/02/09111142/Rectangle-212.png"
                                                        class="imagen_cumple"></div>
                                            <div class="col-9"><span class="texto_cumple">¡Enhorabuena! Por ser cliente, tienes un <?php cupones_price(); ?>% de descuento en tu próxima compra</span>
                                                <span class="fecha_cumple mail"><?php cupones(); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 pagos"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><?php } else {
    include 'login.php';

}