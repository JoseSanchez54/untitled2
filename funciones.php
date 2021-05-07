<?php
$resultado = add_role(
    'asesor',
    __('Asesor'),
    array(
        'read' => true,  // true allows this capability
        'edit_posts' => true,
        'delete_posts' => true,
    )
);
//Actualizar capacidades Asesor
function capacidades_asesor()
{
    $role = get_role('asesor');
    $role->add_cap('publish_posts', true);
    $role->add_cap('edit_posts', true);
    $role->add_cap('delete_posts', true);
}

add_action('init', 'capacidades_asesor', 11);


function show_extra_profile_fields($user)
{ ?>
    <div id="contenedor_asesor" style=" padding: 20px; background-color: white;">
    <h3 style=" font-size: 44px;line-height: 46px; ">Selecciona un Asesor</h3>
    <?php
    ?><label>Asesor</label><?php
    wp_dropdown_users(array('role' => 'asesor', 'name' => 'asesor_select', 'show_option_all' => 'Asigna asesor')); ?><?php
    $id_asesor = get_user_meta($user->ID, 'asesor_asignado')[0];
    ?>
    <input type="hidden" value="<?php echo $id_asesor ?>" name="asesor_asignado">

    <script>
        input_id_asesor = <?php echo $id_asesor; ?>;
        jQuery('#asesor_select').val(input_id_asesor);
    </script>
    <?php
    ?></div><?php

}

function save_extra_profile_fields($user_id)
{
    if (!current_user_can('edit_user', $user_id))
        return false;
    $usuario_actual = wp_get_current_user();
    $id = $user_id;
    $asesor = get_user_meta($id, 'asesor_asignado')[0];


    //typo fix
    update_user_meta($user_id, 'asesor_asignado', $_POST['asesor_select']);
    $asesor1 = get_user_meta($id, 'asesor_asignado')[0];


}

add_action('personal_options_update', 'save_extra_profile_fields');
add_action('edit_user_profile_update', 'save_extra_profile_fields');
add_action('show_user_profile', 'show_extra_profile_fields');
add_action('edit_user_profile', 'show_extra_profile_fields');

//FOOTER
function ice_footer()
{
    ?>
    <script src="https://cdn.jsdelivr.net/npm/lax.js" ></script>
    <script>
  window.onload = function () {
    lax.init()

    // Add a driver that we use to control our animations
    lax.addDriver('scrollY', function () {
      return window.scrollY
    })

    // Add animation bindings to elements
    lax.addElements('.selector', {
      scrollY: {
        translateX: [
          ["elInY", "elCenterY", "elOutY"],
          [0, 'screenWidth/2', 'screenWidth'],
        ]
      }
    })
  }
</script>
    <div class="ice_footer">
        <div class="contacto ">
            <div class="container">

                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-sm-5 textos my-auto">
<span class="title ">
¿Tienes<br> alguna duda?
</span>
                        <p class="subtitle my-auto">Déjanos tus datos y un asesor personal te contactará para hablar de
                            tu negocio.</p>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-sm-2 form my-auto"></div>
                    <div class="col-xl-6 col-lg-5 col-sm-5 form my-auto">
                        <?php echo do_shortcode('[contact-form-7 id="87" title="Formulario de contacto 1"]'); ?>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="row logo justify-content-center">
                        <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/01/11131727/logo_IceCream-1.svg">

                    </div>
                    <div class="row menus">
                        <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 menu_f">
				<span class="title">
				Servicios
				</span>
                            <?php
                            $args_servicios = array(
                                'menu' => 'servicios'

                            );
                            wp_nav_menu($args_servicios);

                            ?>


                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 menu_f">
			<span class="title">
				Blogs
				</span>
                            <?php
                            $args_blogs = array(
                                'menu' => 'blogs'


                            );

                            wp_nav_menu($args_blogs);

                            ?>

                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 menu_f">
			<span class="title">
				Guías
				</span>
                            <?php
                            $args_guias = array(
                                'menu' => 'guias'

                            );

                            wp_nav_menu($args_guias);

                            ?>

                        </div>
                        <div class="col-md-3 col-xl-3 col-lg-3 col-sm-3 idioma menu_f">
			<span class="title">
				Comunidad
				</span>
                            <div class="row social">
                                <div class="col-sm-2 col-xl-2 col-lg-2 my-auto"><a target="_blank"
                                                                                   href="https://www.facebook.com/IceCreamMKShop"><img
                                                src="https://icecreamassets.s3-eu-west-1.amazonaws.com/wp-content/uploads/2021/facebook.svg"></a>
                                </div>
                                <div class="col-sm-2 col-xl-2 col-lg-2 my-auto"><a target="_blank"
                                                                                   href="https://twitter.com/IceCreamMKShop"><img
                                                src="https://icecreamassets.s3-eu-west-1.amazonaws.com/wp-content/uploads/2021/gorjeo.svg"></a>
                                </div>
                                <div class="col-sm-2 col-xl-2 col-lg-2 my-auto"><a
                                            href="https://www.instagram.com/icecream_mk/" target="_blank"><img
                                                src="https://icecreamassets.s3-eu-west-1.amazonaws.com/wp-content/uploads/2021/instagram.svg"></a>
                                </div>
                                <div class="col-sm-2 col-xl-2 col-lg-2 my-auto"><a target="_blank"
                                                                                   href="https://www.youtube.com/channel/UCaeJSdUh9yPpQOXlHT1AinQ"><img
                                                src="https://icecreamassets.s3-eu-west-1.amazonaws.com/wp-content/uploads/2021/youtube.svg"></a>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-3 col-xl-3 col-lg-3 col-sm-3 newsletter menu_f">
			<span class="title">
			Suscríbete
				</span>
                            <p class="newsletter_text">
                                Suscríbete a la newsletter de IceCream para recibir todas las novedades, recursos, guías
                                y promociones.
                            </p>
                            <?php echo do_shortcode('[contact-form-7 id="91" title="Newsletter"]'); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copy row">

            </div>
        </div>
    </div>
    <div class="footer_copy container">
        <div class="row">
            <div style="text-align: start;" class="col-6 my-auto">
    <span class="copyri_1">© 2020 IceCream Marketing Shop

</span>
            </div>
            <div style="text-align: end;" class="col-6 my-auto">
                <ul class="lista_copy" style="list-style-type: none;">
                    <li><a href="/legal">Legal</a></li>
                    <li><a href="/terminos-y-condiciones/">Términos y condiciones</a></li>
                    <li><a href="/politica-de-cookies/">Politica de cookies</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
}

add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;
    ob_start();
    ?>

    <span class="cart-contents-count"><?php echo $woocommerce->cart->cart_contents_count; ?></span>

    <?php
    $fragments['span.cart-contents-count'] = ob_get_clean();
    return $fragments;
}

//boton AÑADIR AL CARRO

add_action('wp_ajax_anadir_carro', 'anadir_carro');
add_action('wp_ajax_nopriv_anadir_carro', 'anadir_carro');

function anadir_carro()
{
    global $woocommerce;
    ob_start();
    $items = WC()->cart->get_cart();
    $product_id = intval($_POST['product_id']);
    ?>


    <?php
// add code the add the product to your cart
    if (!empty($product_id)) {
        WC()->cart->add_to_cart($product_id);
    }
    die();
}


//MINICART
function remove_item_from_cart()
{
    $i = intval($_POST['product_id']);

    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {

        if ($cart_item['product_id'] == $i) {
            //remove single product
            WC()->cart->remove_cart_item($cart_item_key);
        }
    }
}

add_action('wp_ajax_remove_item_from_cart', 'remove_item_from_cart');
add_action('wp_ajax_nopriv_remove_item_from_cart', 'remove_item_from_cart');


add_filter('woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments)
{
    ob_start();
    ?>
    <a class="contador" id="mini-cart-count">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </a>

    <?php
    $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments', 'final_check');
function final_check($fragments)
{
    ob_start();
    ?>
    <div id="final_check">
        <iframe id="inlineFrameExample"
                title="Inline Frame Example"

                src="https://icecreammarketing.shop/checkout/#payment">
        </iframe>
    </div>

    <?php
    $fragments['#final_check'] = ob_get_clean();
    return $fragments;
}


add_filter('woocommerce_add_to_cart_fragments', 'fresco');
function fresco($fragments)
{
    $carrito = WC()->cart->get_cart();
    $total = WC()->cart->get_cart_total();
if (WC()->cart->get_cart_contents_count() == 0) {

    ?>
    <div id="actualizar" class="row carro_fila_int empty">
    <div class="col-xl-12 col-lg-12 col-sm-12">
    <span class="vacio">No tienes nada en el carrito</span>
    <script>
        jQuery('.carro_fila_int').hide();
    </script>
<?php

} else {

}
?>


    <div id="actualizar" class="row carro_fila_int">
        <div class="col-xl-3 col-lg-3 col-sm-4"><?php
            foreach ($carrito as $item => $values) {
                $_product = wc_get_product($values['data']->get_id());
                $getProductDetail = wc_get_product($values['product_id']);
                $titulo = $_product->get_title();
                $cantidad = $values['quantity'];
                $precio = get_post_meta($values['product_id'], '_price', true);
                $regular = get_post_meta($values['product_id'], '_regular_price', true);
                $rebajado = get_post_meta($values['product_id'], '_sale_price', true);
                $imagen = $getProductDetail->get_image();


                ?>
                <div class="row single_carro">
                    <div rel="<?php echo $_product->get_id(); ?>" class="col-12">
                        <div id="fresco">
                            <div class="imagen_col">
                                <div rel="<?php echo $_product->get_id(); ?>" class="delete">
                                    <i class="borrar fas fa-times-circle"></i>

                                    <?php echo $imagen ?>
                                </div>
                            </div>

                            <span class="titular"><?php echo $titulo ?></span>
                            <span class="price_carro"><?php echo $precio; ?><span class="moneda">€</span></span>
                            <span class="cantidad_carro">Cantidad: <?php echo $cantidad; ?></span>
                        </div>
                    </div>
                </div>


                <?php
            } ?></div>
        <div class="col-xl-9 col-lg-9 col-sm-8">
            <div class="row check_h">
                <div class="total">
                    <span class="total-t">Total: <?php echo $total; ?></span>
                </div>
            </div>
            <!-- 	<div class="formulario">
                    <div class="arriba_f">
                    <input type="email" placeholder="Email" class="email_address">
                    <input type="text" placeholder="Nombre"  class="name_card">
                    <input type="text" placeholder="Numero de tarjeta" class="credito">
                    </div>
                    <div class="seguridad">
                        <input type="text" placeholder="MM/YY"  class="fecha">
                        <input type="text" placeholder="CVC"  class="cvc">
                    </div>
                    </div> -->
            <div id="final_check">
                <iframe id="inlineFrameExample"
                        title="Inline Frame Example"

                        src="https://icecreammarketing.shop/checkout/#payment">
                </iframe>
            </div>
            <div class="boton_sec">
				<span class="cargo">
					Se cargarán <b><?php echo $total; ?><span class="moneda">€</span></b> en tu tarjeta
				</span>
                <div class="derecha_b">
                    <button class="boton_compra">
                        <a>Pagar</a>
                    </button>
                </div>
            </div>

        </div>
    </div><?php

    $fragments['#actualizar'] = ob_get_clean();
    return $fragments;
}


//Portfolio
function crear_portfolio()
{
    ?>
    <link href="https://icecreamassets.s3-eu-west-1.amazonaws.com/wp-content/uploads/lightbox.css" rel="stylesheet"/>
    <script src="https://icecreamassets.s3-eu-west-1.amazonaws.com/wp-content/uploads/lightbox.js"></script>
<?php
$args = array(
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1
);

$loop = new WP_Query($args); ?>
    <div class="container">
        <div class="row fila_port"><?php

            while ($loop->have_posts()) : $loop->the_post();
                $identidad = get_the_ID();
                $nombre = get_post_meta($identidad, 'nombre', true);
                $imagen = get_post_meta($identidad, 'imagen-url', true);
                $categoria = get_post_meta($identidad, 'categoria', true);

                ?>
                <div class="col-xl-3 div col-lg-3 col-sm-3 <?php echo $categoria[0]; ?>"><?php
                ?>
                <div class="imagen_port">
                    <a href="<?php echo $imagen; ?>" data-lightbox="image-1">
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


function pedidos()
{

    $ids_sitio_web = array('548', '546','545', '547');
    $ids_ecommerce = array('550', '552','551','549');
    $ids_social = array('558', '557', '556');
    $ids_seo = array('555', '554', '553');
    $ids_logo = array('561', '560', '559');
    $usuario = wp_get_current_user();
    $usuario_id = get_current_user_id();
    $args = array(
        'customer_id' => $usuario_id
    );
    $orders = wc_get_orders($args);

    $users_subscriptions = wcs_get_users_subscriptions($usuario_id);
    $fin = "-";
    $start = "-";


    foreach ($users_subscriptions as $subscription) {
        $id_sus = $subscription->get_id();
        $fin1 = $subscription->get_date("end");
        $fin = date(" d/m/Y", strtotime($fin1));
        $start1 = $subscription->get_date("start");
        $start = date(" d/m/Y", strtotime($start1));
        $subscription_products = $subscription->get_items();
        $order_products = $subscription->order->get_items();
        $estado = $subscription->post->post_status;

        foreach ($subscription_products as $product) {
            $id1 = $product['product_id'];
            if (in_array($id1, $ids_sitio_web)) {
                ?>
                <div class="col-12 col-xl-3 col-lg-3 col-sm-6 pedido_back pedido_sitioweb pedido">
                    <div class="row">
                        <div class="col-6 my-auto ">
                            <div class="imagen_order">
                                <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/28111127/Group-302.png"
                                     alt="" class="imagen_order_img">

                            </div>
                        </div>
                        <div class="col-6 my-auto"><?php if ($estado == 'wc-active') {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_activo">Activo</span>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_finalizado">Finalizado</span>
                                </div>
                                <?php
                            } ?></div>
                    </div>
                    <div class="row textos_order">
                        <span class="titulo_order">Sitio web</span>
                        <span class="estado_sus_text">Inicio de suscripción</span>
                        <span class="fecha_sus"><?php echo $start; ?></span>
                        <span class="estado_sus_text">Próximo pago</span>
                        <span class="fecha_sus"><?php echo $fin; ?></span>
                        <div rel="<?php echo $id_sus; ?>" class="boton a_pedido">
                            <button rel="<?php echo $id_sus; ?>" class="boton_pedido a_pedido">
                                <a class="a_pedido" rel="<?php echo $id_sus; ?>">Ver detalles</a></button>
                        </div>
                    </div>
                </div>
                <?php
            } else if (in_array($id1, $ids_ecommerce)) {
                ?>
                <div class="col-12 col-xl-3 col-lg-3 col-sm-6 pedido_back pedido_sitioweb pedido">
                    <div class="row">
                        <div class="col-6 my-auto ">
                            <div class="imagen_order">
                                <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/28111130/Group-303.png"
                                     alt="" class="imagen_order_img">

                            </div>
                        </div>
                        <div class="col-6 my-auto"><?php if ($estado == 'wc-active') {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_activo">Activo</span>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_finalizado">Finalizado</span>
                                </div>
                                <?php
                            } ?></div>
                    </div>
                    <div class="row textos_order">
                        <span class="titulo_order">Tienda online</span>
                        <span class="estado_sus_text">Inicio de suscripción</span>
                        <span class="fecha_sus"><?php echo $start; ?></span>
                        <span class="estado_sus_text">Próximo pago</span>
                        <span class="fecha_sus"><?php echo $fin; ?></span>
                        <div rel="<?php echo $id_sus; ?>" class="boton a_pedido">
                            <button rel="<?php echo $id_sus; ?>" class="boton_pedido a_pedido">
                                <a class="a_pedido" rel="<?php echo $id_sus; ?>">Ver detalles</a></button>
                        </div>
                    </div>
                </div>
                <?php

            } else if (in_array($id1, $ids_seo)) {
                ?>
                <div class="col-12 col-xl-3 col-lg-3 col-sm-6 pedido_back pedido_sitioweb pedido">
                    <div class="row">
                        <div class="col-6 my-auto ">
                            <div class="imagen_order">
                                <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/28111124/Group-304.png"
                                     alt="" class="imagen_order_img">

                            </div>
                        </div>
                        <div class="col-6 my-auto"><?php if ($estado == 'wc-active') {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_activo">Activo</span>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_finalizado">Finalizado</span>
                                </div>
                                <?php
                            } ?></div>
                    </div>
                    <div class="row textos_order">
                        <span class="titulo_order">Seo</span>
                        <span class="estado_sus_text">Inicio de suscripción</span>
                        <span class="fecha_sus"><?php echo $start; ?></span>
                        <span class="estado_sus_text">Próximo pago</span>
                        <span class="fecha_sus"><?php echo $fin; ?></span>
                        <div rel="<?php echo $id_sus; ?>" class="boton a_pedido">
                            <button rel="<?php echo $id_sus; ?>" class="boton_pedido a_pedido">
                                <a class="a_pedido " rel="<?php echo $id_sus; ?>">Ver detalles</a></button>
                        </div>
                    </div>
                </div>
                <?php

            } else if (in_array($id1, $ids_social)) {
                ?>
                <div class="col-12 col-xl-3 col-lg-3 col-sm-6 pedido_back pedido_sitioweb pedido">
                    <div class="row">
                        <div class="col-6 my-auto ">
                            <div class="imagen_order">
                                <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/28111119/Group-305.png"
                                     alt="" class="imagen_order_img">

                            </div>
                        </div>
                        <div class="col-6 my-auto"><?php if ($estado == 'wc-active') {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_activo">Activo</span>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_finalizado">Finalizado</span>
                                </div>
                                <?php
                            } ?></div>
                    </div>
                    <div class="row textos_order">
                        <span class="titulo_order">Social Media</span>
                        <span class="estado_sus_text">Inicio de suscripción</span>
                        <span class="fecha_sus"><?php echo $start; ?></span>
                        <span class="estado_sus_text">Próximo pago</span>
                        <span class="fecha_sus"><?php echo $fin; ?></span>
                        <div rel="<?php echo $id_sus; ?>" class="boton a_pedido">
                            <button rel="<?php echo $id_sus; ?>" class="boton_pedido a_pedido">
                                <a class="a_pedido" rel="<?php echo $id_sus; ?>">Ver detalles</a></button>
                        </div>
                    </div>
                </div>
                <?php

            }else if (in_array($id1, $ids_logo)) {
                ?>
                <div class="col-12 col-xl-3 col-lg-3 col-sm-6 pedido_back pedido_sitioweb pedido">
                    <div class="row">
                        <div class="col-6 my-auto ">
                            <div class="imagen_order">
                                <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/28111116/Group-306.png"
                                     alt="" class="imagen_order_img">

                            </div>
                        </div>
                        <div class="col-6 my-auto"><?php if ($estado == 'wc-active') {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_activo">Activo</span>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="estado_sus">
                                    <span class="stado_sus_txt sus_finalizado">Finalizado</span>
                                </div>
                                <?php
                            } ?></div>
                    </div>
                    <div class="row textos_order">
                        <span class="titulo_order">Logo</span>
                        <div rel="<?php echo $id_sus; ?>" class="boton a_pedido">
                            <button rel="<?php echo $id_sus; ?>" class="boton_pedido a_pedido">
                                <a class="a_pedido" rel="<?php echo $id_sus; ?>">Ver detalles</a></button>
                        </div>
                    </div>
                </div>
                <?php

            } else {
            }
        }
    }
}


add_action('wp_ajax_get_pedido', 'get_pedido');
add_action('wp_ajax_nopriv_get_pedido', 'get_pedido');
function get_pedido()
{
    $id11 = $_POST['pedido_id'];
    $susc = wcs_get_subscription($id11);
    $id_sus = $susc->get_id();
   $fin1 = $susc->get_date("end");
   $fin = date(" d/m/Y", strtotime($fin1));
   $start1 = $susc->get_date("start");
   $start = date(" d/m/Y", strtotime($start1));
    $subscription_products = $susc->get_items();
    $order_products = $susc->order->get_items();
    $id_pedido = $susc->order->get_id();
    $order = new WC_Order($id11);
    $metodo = $order->get_payment_method();
    $estado = $susc->post->post_status;
    $total = $order->get_subtotal();
    $subtotal = $order->get_total();
    $empresa = $order->get_billing_first_name();
    $calle = $order->get_address();
    $pais = $order->get_shipping_country();
    $mail = $order->get_billing_email();


    ?>
    <div class="row volver">
        <div class="col-12 para_volver">
            <span class="boton_volver"><i
                        class="fas fa-arrow-left"></i> Volver a todos los pedidos y suscripciones</span>
        </div>
    </div>
    <div class="container sus_single">
        <div class="row">
            <div class="col-12 titulo_sus_i">
                <span class="titulo_suscripcion">Suscripción/Pedido #<?php echo $id11; ?></span>
            </div>
        </div>
        <div class="row la">
            <div class="col-12 col-xl col-lg col-sm-12 suscript">
                <span class="titulo_dentro">Tu suscripción</span>
                <div class="tabla_suscri">
                    <div class="row">
                        <div class="col-6 titulos_sus my-auto"><span class="clave">Estado de la suscripción</span></div>
                        <div class="col-6 valor_sus my-auto"><span
                                    class="valor_sus"><?php if ($estado === "wc-active") {
                                    echo "Activo";
                                } else {
                                    echo 'Finalizado';
                                } ?></span></div>
                    </div>
                    <div class="row">
                        <div class="col-6 titulos_sus my-auto"><span class="clave">Fecha de inicio</span></div>
                        <div class="col-6 valor_sus my-auto"><span class="valor_sus"><?php echo $start; ?></span></div>
                    </div>
                    <div class="row">
                        <div class="col-6 titulos_sus my-auto"><span class="clave">Fecha del ultimo pago</span></div>
                        <div class="col-6 valor_sus my-auto"><span class="valor_sus"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-6 titulos_sus my-auto"><span class="clave">Fecha del proximo pago</span></div>
                        <div class="col-6 valor_sus my-auto"><span class="valor_sus"><?php echo $fin; ?></span></div>
                    </div>
                    <div class="row">
                        <div class="col-6 titulos_sus my-auto"><span class="clave">Forma de pago</span></div>
                        <div class="col-6 valor_sus my-auto"><span class="valor_sus"><?php echo $metodo; ?></span></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl col-lg col-sm-12 suscript">
                <span class="titulo_dentro">Totales de la suscripción</span>
                <div class="tabla_suscri">

                    <div class="row">
                        <div class="col-6 titulos_sus my-auto"><span class="clave">Subtotal</span></div>
                        <div class="col-6 valor_sus my-auto"><span class="valor_sus"><?php echo $subtotal; ?>€</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 titulos_sus my-auto"><span class="clave">Total</span></div>
                        <div class="col-6 valor_sus my-auto"><span class="valor_sus"><?php echo $total; ?>€</span></div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row cancelaciones">
            <div class="col-12 col-xl col-lg col-sm-12 suscript">
                <span class="titulo_dentro">Cancelar la suscripción</span>
                <div class="row">
                    <div class="col-7 "><p class="parrafo_cancelar cambia_sus">Si quieres cancelar la suscripción a este
                            servicio, pincha en el botón Y rellena el formulario. Un asesor procederá a cancelar tu
                            servicio. Recuerda que debes avisar con al menos 14 días de antelación para poder procesar
                            tu baja correctamente.</p></div>
                    <div class="col-5 centrar_text my-auto"><span rel="<?php echo $id11; ?>" class="boton_cancelar">Cancelar suscripción</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl col-lg col-sm-12 suscript">
                <span class="titulo_dentro">Solicitar factura</span>
                <div class="row">
                    <div class="col-7 "><p class="parrafo_cancelar">Las facturas de todos tus pagos te llegarán a tu
                            correo electrónico que nos proporcionaste al dar de alta tu servicio. Si no te ha llegado o
                            has perdido el documento, puedes solicitarla otra vez aquí.</p></div>
                    <div class="col-5 centrar_text my-auto"><span rel="<?php echo $id11; ?>" class="boton_factura">Solicitar factura</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="factura_over">
        <div class="container-fluid facturacion_pop w-100 h-100">
            <div style="height: 100%;" class="row justify-content-center">

                <div class="col-xxl-5 col-xl-7 col-lg-10 col-sm-12 col-md-12 titulo_sus_i my-auto">
                    <div class="inyectable">
                        <span class="cierre_factura">X</span>
                        <div class="form_factura">
                            <form>

                                <input type="hidden" value="<?php echo $id11; ?>">
                                <div class="container formulario_perfil">
                                    <div class="col-12">
                                        <span class="titulo_perfil">Datos de contacto</span>
                                    </div>
                                    <div class="row form_row">
                                        <div style="margin-bottom:0;"
                                             class="col-12 col-xl-6 col-lg-6 col-sm-12 columna_perfil_1">
                                            <label for="nombre" class="nombre_perfil_f l_form">Nombre</label>
                                            <input required value="" type="text" class="nombre_f p_form">
                                            <label for="mail" class="nombre_perfil_f l_form">Correo electrónico</label>
                                            <input required value="" type="email" class="mail_f p_form">
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-6 col-sm-12 columna_perfil_2">
                                            <label for="apellido" class="apellido_perfil l_form">Apellido</label>
                                            <input required value="" type="text" class="apellido_f p_form">
                                            <label for="tel" class="tel_perfil l_form">Teléfono de contacto</label>
                                            <input required type="tel" class="tel_f p_form" value="">
                                        </div>
                                        <div class="col-12">
                                            <label for="direccion" class="tel_perfil l_form">Dirección postal</label>
                                            <input required type="text" class="direccion_1_f p_form">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span class="titulo_perfil">Datos de Empresa</span>
                                    </div>
                                    <div class="row form_row">
                                        <div style="margin-bottom:0;"
                                             class="col-12 col-xl-6 col-lg-6 col-sm-12 columna_perfil_1">
                                            <label for="nombre" class="nombre_perfil l_form">Razón social o
                                                nombre</label>
                                            <input required value="" type="text" class="razon_f p_form">
                                            <label for="mail" class="nombre_perfil l_form">Correo electrónico</label>
                                            <input required value="" type="email" class="mail_empresa_f p_form">
                                        </div>
                                        <div class="col-12 col-xl-6 col-lg-6 col-sm-12 columna_perfil_2">
                                            <label for="apellido" class="apellido_perfil l_form">CIF / NIF</label>
                                            <input required value="" type="text" class="nif_f p_form">
                                            <label for="tel" class="tel_perfil l_form">Teléfono de contacto</label>
                                            <input required type="tel" class="tel_empresa_f p_form" value="">
                                        </div>
                                        <div class="col-12">
                                            <label for="direccion" class="tel_perfil l_form">Dirección postal</label>
                                            <input required type="text" class="direccion_2_f p_form">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 centrar_boton">
                                            <a class="boton_guardar_f enviar_factura">Enviar</a>
                                            <span style="font-family: Gotham;margin-top: 17px; display: block; color: red; font-size: 14px;"
                                                  class="mensajes_form"></span>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    </div>
    </div>
    </div>


    <?php
    die();
}

add_action('wp_ajax_pedidos_volver', 'pedidos_volver');
add_action('wp_ajax_nopriv_pedidos_volver', 'pedidos_volver');
function pedidos_volver()
{
    $vare = pedidos();
    die();
}

function pedir_factura()
{
    $id = $_POST['product_id'];
    $nombre_contacto = $_POST['nombre_contacto'];
    $apellidos_contacto = $_POST['apellidos_contacto'];
    $mail_contacto = $_POST['mail_contacto'];
    $tel_contacto = $_POST['tel_contacto'];
    $direccion_contacto = $_POST['direccion_contacto'];
    $razon_contacto = $_POST['razon_contacto'];
    $nif_contacto = $_POST['nif_contacto'];
    $mail_empresa = $_POST['mail_empresa'];
    $tel_empresa = $_POST['tel_empresa'];
    $direccion_empresa = $_POST['direccion_empresa'];
    $html = 'La suscripción ' . $id . ' ha solicitado una factura
         Nombre: ' . $nombre_contacto . '
         Apellidos: ' . $apellidos_contacto . '
         Email: ' . $mail_contacto . '
         Telefono: ' . $tel_contacto . '
         Direccion: ' . $direccion_contacto . '
         Datos de la empresa:
         Razon social/Nombre: ' . $razon_contacto . '
         CIF / NIF: ' . $nif_contacto . '
         Mail de la empresa: ' . $mail_empresa . '
         Teléfono de Empresa: ' . $tel_empresa . '
         Dirección de la empresa: ' . $direccion_empresa;

    wp_mail('facturas@ice-cream.es', 'Solicitud de factura', $html);
    die();
}

add_action('wp_ajax_pedir_factura', 'pedir_factura');
add_action('wp_ajax_nopriv_pedir_factura', 'pedir_factura');
function cancelar_sus()
{
    global $current_user;
    $email = $current_user->user_email;
    $id = $_POST['product_id'];
    $susc = wcs_get_subscription($id);
    $next = $susc->get_date('schedule_next_payment');
    $pedido = $susc->get_parent_id();
    $id_sus = $susc->get_id();
    $fin = $susc->get_date("end");
    $start = $susc->get_date("start");
    $html = 'La suscripción ' . $id . ' perteneciente al pedido ' . $pedido . ' ha solicitado la cancelación de sus suscripción, la fecha final de esta suscripción es del ' . $next . ' y pertenece al usuario ' . $email;
    wp_mail('bajas@ice-cream.es', 'Solicitud de cancelación', $html);
    die();
}

add_action('wp_ajax_cancelar_sus', 'cancelar_sus');
add_action('wp_ajax_nopriv_cancelar_sus', 'cancelar_sus');
function editar_perfil()
{
    $usuario = wp_get_current_user();
    $usuario_id = get_current_user_id();
    $user_info = get_userdata($usuario_id);
    $nombre = get_user_meta($usuario_id, 'first_name', true);
    $apellido = get_user_meta($usuario_id, 'last_name', true);
    $email = $user_info->user_email;
    $telefono = get_user_meta($usuario_id, 'billing_phone', true);
    $direccion = get_user_meta($usuario_id, 'billing_address_1', true);
// wp_set_password( $password, $user_id );
    if (empty($nombre)) {
        $nombre = "Tu nombre";
    }
    if (empty($apellido)) {
        $apellido = "Tu apellido";
    }
    if (empty($email)) {
        $email = "Tu email";
    }
    if (empty($telefono)) {
        $telefono = "Tu teléfono";
    }
    if (empty($direccion)) {
        $direccion = "Tu dirección";
    } ?>
    <div class="container formulario_perfil">
    <div class="col-12">
        <span class="titulo_perfil">Tus datos de contacto</span>
    </div>
    <div class="row form_row">
        <div class="col-12 col-xl-6 col-lg-6 col-sm-12 columna_perfil_1">
            <form>
                <label for="nombre" class="nombre_perfil l_form">Nombre</label>
                <input value="" type="text" class="nombre p_form" placeholder="<?php echo $nombre; ?>">
                <label for="mail" class="nombre_perfil l_form">Correo electrónico</label>
                <input value="" type="email" class="mail p_form" placeholder="<?php echo $email; ?>">
        </div>
        <div class="col-12 col-xl-6 col-lg-6 col-sm-12 columna_perfil_2">
            <label for="apellido" class="apellido_perfil l_form">Apellido</label>
            <input value="" type="text" class="apellido p_form" placeholder="<?php echo $apellido; ?>">
            <label for="tel" class="tel_perfil l_form">Teléfono de contacto</label>
            <input type="tel" class="tel p_form" value="" placeholder="<?php echo $telefono; ?>">
        </div>
        <div class="col-12">
            <label for="direccion" class="tel_perfil l_form">Dirección postal</label>
            <input type="text" class="direccion_1 p_form" value="" placeholder="<?php echo $direccion; ?>">
        </div>
    </div>
    <div class="col-12">
        <span class="titulo_perfil">Cambia tu contraseña</span>
    </div>
    <div class="row form_row">
        <div class="col-12 col-xl-6 col-lg-6 col-sm-12 columna_perfil_1">
            <label for="pass" class="pass_perfil l_form">Nueva contraseña</label>
            <input type="password" value="" name="contrasena" id="contrasena" class="pass p_form"
                   placeholder="************">
            <span class="contrasema_in en">Tu contraseña debe contener</span>
            <span class="contrasema_in"><i class="fas fa-check"></i> Mínimo 8 caracteres alfanuméricos</span>
            <span class="contrasema_in"><i class="fas fa-check"></i> Al menos 1 letra mayúscula</span>
            <span class="contrasema_in"><i class="fas fa-check"></i> Al menos 1 número</span>
            <span class="contrasema_in"><i class="fas fa-check"></i> Al menos un símbolo</span>
        </div>
        <div class="row">
            <div class="col-12 centrar_boton">
                <a class="boton_guardar">Guardar cambios</a>
            </div>
        </div>
        </form>
    </div>
<?php }

add_action('wp_ajax_guardar_perfil', 'guardar_perfil');
add_action('wp_ajax_nopriv_guardar_perfil', 'guardar_perfil');
function guardar_perfil()
{
    $usuario = wp_get_current_user();
    $user_id = get_current_user_id();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $pass = $_POST['pass'];
    $sucess = array();
    echo $nombre;

    if (($nombre != "") or ($nombre != get_user_meta($user_id, 'first_name', true))) {
        update_user_meta($user_id, 'first_name', $nombre);
        array_push($sucess, 'nombre');

    }
    if (($apellido != "") or ($apellido != get_user_meta($user_id, 'last_name', true))) {
        update_user_meta($user_id, 'last_name', $apellido);
        array_push($sucess, 'apellido');
    }
    if (($email != "") or ($email != get_user_meta($user_id, 'first_name', true))) {
        update_user_meta($user_id, 'user_email', $email);
        array_push($sucess, 'mail');
    }
    if (($telefono != "") or ($telefono != get_user_meta($user_id, 'billing_phone', true))) {
        update_user_meta($user_id, 'billing_phone', $telefono);
        array_push($sucess, 'telefono');
    }
    if (($direccion != "") or ($direccion != get_user_meta($user_id, 'billing_address_1', true))) {
        update_user_meta($user_id, 'billing_address_1', $direccion);
        array_push($sucess, 'direccion');
    }


    if ($pass != "") {
        array_push($sucess, 'pass');
        wp_set_password($pass, $user_id);

    }
    echo json_encode($sucess);
    die();
}

function stripe_check()
{
    ?>
    <input id="acepto_todo" type="checkbox"><label class="acepto_label" for="acepto_todo">Acepto la política de
    privacidad y los términos de compra</label>


    <?php
}

add_action('woocommerce_credit_card_form_end', 'stripe_check');

function registro_ajax()
{
    echo '
<div class="col-xl-7 col-11 my-auto">
<div class="container registro_contendor">
        <div class="row registro_user justify-content-center">
            <div class="col-xxl-10 col-xl-10 col-lg-12 col-sm-12 col-md-12 titulo_sus_i my-auto">
                <div class="inyectable">
                    <div class="form_factura">
                        <div class="container ">
                            <div class="col-12">
                                <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/01/21085156/logo-1.svg"
                                     alt="" class="logo">
                                     <img style="display: none; width: 70px;" src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif"
                             alt="" class="logo_gif">
                                <span class="titulo_perfil">Regístrate</span>
                            </div>
                            <div class="row form_row">
                                <div style="margin-bottom:0;"
                                     class="col-12 col-xl-6 col-lg-6 col-sm-12 columna_perfil_1">
                                    <label for="nombre" class="nombre_perfil_f l_form">Nombre</label>
                                    <input required value="" type="text" class="nombre_f p_form">

                                </div>
                                <div class="col-12 col-xl-6 col-lg-6 col-sm-12 columna_perfil_2">
                                    <label for="apellido" class="apellido_perfil l_form">Apellido</label>
                                    <input required value="" type="text" class="apellido_f p_form">

                                </div>
                                <div class="col-12">
                                    <label for="mail" class="nombre_perfil_f l_form">Correo electrónico</label>
                                    <input required value="" type="email" class="mail_f p_form">
                                    <label for="tel" class="pass_perfil l_form">Contraseña</label>
                                    <input required type="password" class="pass_form_reg p_form" value="">
                                    <label for="tel" class="pass_perfil l_form">Confirmar contraseña</label>
                                    <input required type="password" class="pass_form_reg_confir p_form" value="">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 centrar_boton">
                                    <a class="boton_guardar_f enviar_reg desactivate_reg">Regístrate</a>
                                    <span style="font-family: Gotham;margin-top: 17px; display: block; color: red; font-size: 14px;"
                                          class="mensajes_form"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>';
    die();

}

add_action('wp_ajax_registro_ajax', 'registro_ajax');
add_action('wp_ajax_nopriv_registro_ajax', 'registro_ajax');


function insert_user()
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $userdata = array(
        'user_login' => $email,
        'user_nicename' => $email,
        'user_pass' => $pass,
        'user_email' => $email,
        'first_name' => $nombre,
        'last_name' => $apellido,
        'show_admin_bar_front' => 'false',
    );

    $user_id = wp_insert_user($userdata);
    die();
}

add_action('wp_ajax_insert_user', 'insert_user');
add_action('wp_ajax_nopriv_insert_user', 'insert_user');

function login_ajax_log()
{
    $info = array();
    $info['user_login'] = $_POST['email'];
    $info['user_password'] = $_POST['pass'];

    $user_signon = wp_signon($info, false);
    if (is_wp_error($user_signon)) {
        echo json_encode(array('loggedin' => false, 'message' => __('Email o contraseña incorrectos')));
    } else {
        echo json_encode(array('loggedin' => true, 'message' => __('¡Correcto! Redirigiendo...')));
    }

    die();
}

add_action('wp_ajax_login_ajax_log', 'login_ajax_log');
add_action('wp_ajax_nopriv_login_ajax_log', 'login_ajax_log');
function logout_mwlb()
{
    $user = wp_get_current_user();
    wp_logout($user);
}

add_action('wp_ajax_logout_mwlb', 'logout_mwlb');
add_action('wp_ajax_nopriv_logout_mwlb', 'logout_mwlb');

function crear_ticket(){
    $html = '<div class="row ticket_crear justify-content-center">
    <div class="row fila_tickets" style=" background-color: white;">
                                    <div class="col-12 columna_tickets"><span
                                                class="encabezado_ticket">Nuevo ticket</span>
                                    </div>
    <div style="padding: 53px 49px;" class="inputs_tickets row">
    <div class="col-8 asunto_ticket">
        <span class="label_ticket">Asunto del ticket</span><br>
        <input placeholder="Escribe un título para tu ticket" id="input_asunto" type="text" class="asunto_ticket_input">
    </div>
    <div class="col-4 categoria_ticket">
        <span class="label_ticket">Categoría del ticket</span><br>
        <select id="categoria_ticket" class="input_categoria" name="select">
            <option value="soporte">Soporte técnico</option>
            <option value="incidencia" selected>Incidencia técnica</option>
            <option value="atencion">Atención comercial</option>
        </select>
    </div>
    <div class="col-12 mensaje_ticket">
        <span style="margin-top: 34px;" class="label_ticket">Descripción del ticket</span><br>
        <textarea style="width: 100%;" rows="14" placeholder="Escribe brevemente cómo podemos ayudarte. Incluye todos detalles que creas que podamos necesitar." id="input_mensaje" type="textarea" class="mensaje_ticket_input"></textarea>
    </div>
    <div style="margin-top: 59px;" class="row botones_ticket justify-content-center">
    <div style="text-align: end;" class="col-xl-2 col-6">
    <a href="/tickets" style="cursor: pointer; color: #4C6FF9;" class="boton_cancelar_ticket">Cancelar</a>
</div>
<div  class="col-xl-2 col-6">
 <a style="cursor: pointer;" class="boton_enviar_ticket">Enviar ticket</a>
</div>
</div>
</div>
</div>';
    echo $html;
    die();
}
add_action('wp_ajax_crear_ticket', 'crear_ticket');
add_action('wp_ajax_nopriv_crear_ticket', 'crear_ticket');

function publicar_ticket(){
    $asunto = $_POST['asunto'];
     $fecha = $_POST['fecha'];
    $categoria1 = $_POST['categoria'];
    if ($categoria1 == 'soporte'){
        $categoria = 'Soporte Técnico';
    } else if ($categoria1 =='incidencia'){
        $categoria = 'Indicendia Técnica';
    } else if ($categoria1 == 'atencion'){
        $categoria = 'Atención comercial';
    }
    $mensaje = $_POST['mensaje'];
    $post_id = wp_insert_post(array (
   'post_type' => 'tickets',
   'post_status' => 'publish',
));
    add_post_meta($post_id, 'asunto', $asunto);
    add_post_meta($post_id, 'categoria', $categoria);
    add_post_meta($post_id, 'descripcion', $mensaje);
    add_post_meta($post_id, 'estado', 'abierto');
    add_post_meta($post_id, 'fecha', $fecha);
    die();
}
add_action('wp_ajax_publicar_ticket', 'publicar_ticket');
add_action('wp_ajax_nopriv_publicar_ticket', 'publicar_ticket');

function ver_ticket_single(){
    $id = $_POST['id'];
    $usuario = get_current_user();
    $autor = get_the_author();
    $mensajes = get_post_meta($id, 'mensajes', true);
    foreach ($mensajes as $mensaje) {
                if (empty($mensaje['usuario-leido'])) {
                    if($autor == $usuario){
                    update_post_meta($id,$mensaje['usuario-leido'],'visto');
                    }
                }

            }
                    $html = '<div class="row ticket_crear justify-content-center">
    <div class="col-12 encabezado_crear">
        <span class="crear_ticket_encabezado">Ticket #'.$id.'</span>
    </div>
</div>';
    echo $html;
    die();

}
add_action('wp_ajax_ver_ticket_single', 'ver_ticket_single');
add_action('wp_ajax_nopriv_ver_ticket_single', 'ver_ticket_single');
function crear_slider_nosotros(){
    ?>
        <div class="container container_marcas">

        <div class="row justify-content-center fila_marcas">
            <div class="col-12" style="text-align:center;margin-bottom: 20px;"><span
                        class="texto_marcas">Nos puedes ver</span></div>
            <div class="owl-carousel owl-marcas">
                <div class="item">
                    <div style="text-align: center; display: block; margin: 0 auto;" class="col-xl-5 col-lg-2 col-sm-2 col-6">
                        <a rel="nofollow" target="_blank"
                           href="https://www.marketingdirecto.com/marketing-general/agencias/como-conseguir-que-las-pymes-sobrevivan-a-la-covid">
                            <div class="imagen_recomendar">
                                <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/05083612/marketing_directo.png">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                <div style="text-align: center; display: block; margin: 0 auto;" class="col-xl-5 col-lg-2 col-sm-2 col-6">
                    <a rel="nofollow" target="_blank"
                       href="https://www.mujeremprendedora.net/mahe-homeware-firma-decoracion-marta-fernandez-bellette/">
                        <div class="imagen_recomendar">
                            <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/05084954/mujeres_emprendedoras.png">
                        </div>
                    </a>
                </div>
                </div>
                <div class="item">
                <div style="text-align: center; display: block; margin: 0 auto;" class="col-xl-5 col-lg-2 col-sm-2 col-6">
                    <a rel="nofollow" target="_blank"
                       href="https://business.vogue.es/lideres/galerias/dia-mujer-emprendedora-claves-errores-exito/142">
                        <div class="imagen_recomendar">
                            <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/05085121/vogue_business.png">
                        </div>
                    </a>
                </div>
                </div>
                <div class="item">
                <div style="text-align: center; display: block; margin: 0 auto;" class="col-xl-5 col-lg-2 col-sm-2 col-6">
                    <a rel="nofollow" target="_blank"
                       href="https://www.elconfidencialdigital.com/articulo/comunicados/icecream-marketing-shop-quiere-ayudar-pequenos-negocios-crear-tienda-online/20200520175148145294.html">
                        <div class="imagen_recomendar">
                            <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/05085223/el_confidencial_digital.png">
                        </div>
                    </a>
                </div>
                </div>
                <div class="item">
                <div style="text-align: center; display: block; margin: 0 auto;" class="col-xl-5 col-lg-2 col-sm-2 col-6">
                    <a rel="nofollow" target="_blank"
                       href="https://ecommerce-news.es/icecream-marketing-shop-lanza-una-campana-para-apoyar-al-pequeno-negocio-a-crear-su-ecommerce/">
                        <div class="imagen_recomendar">
                            <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/05085341/ecommerce_news.png">
                        </div>
                    </a>
                </div>
                </div>
                 <div class="item">
                <div style="text-align: center; display: block; margin: 0 auto;" class="col-xl-5 col-lg-2 col-sm-2 col-6 my-auto">
                    <a rel="nofollow" target="_blank"
                       href="https://www.20minutos.es/noticia/4576777/0/7-regalos-tech-para-triunfar-en-san-valentin-este-2021/">
                        <div class="imagen_recomendar">
                            <img style="width: 50%;"
                                 src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/28083844/20minutos.png">
                        </div>
                    </a>
                </div>
                 </div>
                 <div class="item">
                <div style="text-align: center; display: block; margin: 0 auto;" class="col-xl-5 col-lg-2 col-sm-2 col-6">
                    <a rel="nofollow" target="_blank"
                       href="https://www.eleconomista.es/status/noticias/11173654/04/21/Ocho-consejos-para-crear-una-empresa-sostenible.html">
                        <div class="imagen_recomendar">
                            <img style="margin-top: -15px;"
                                 src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/28083847/eleconomista.png">
                        </div>
                    </a>
                </div>
            </div>    <div class="item">
                <div style="text-align: center; display: block; margin: 0 auto;" class="col-xl-5 col-lg-2 col-sm-2 col-6">
                    <a rel="nofollow" target="_blank"
                       href="https://www.abc.es/recreo/abci-cinco-empresas-ayudaran-mejorar-presencia-digital-negocio-202104300135_noticia.html?ref=https%3A%2F%2Fapp.asana.com%2F">
                        <div class="imagen_recomendar">
                            <img style="margin-top: -15px;"
                                 src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/05/07122746/abc1.png">
                        </div>
                    </a>
                </div>
            </div>
            </div>

        </div>
    </div>
    <script>
    jQuery(document).ready(function(){
        jQuery('.owl-carousel.owl-marcas').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 6000,
                smartSpeed: 1000,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }, 1500: {
                        items: 4
                    }
                }

            })
    })
</script>
    <?php
}

