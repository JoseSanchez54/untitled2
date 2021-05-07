<?php
/*
Template Name: tickets_User-area_MWLB
*/
genesis();
function montar_tickets()
{

    $usuario = get_current_user_id();
    $args = array(
        'post_type' => 'tickets',
        'order' => 'DESC',
        'orderby ' => 'date',
        'author' => $usuario

    );

    $tickets = new WP_Query($args);
    if ($tickets->have_posts()) :
        while ($tickets->have_posts()) :

            $tickets->the_post();
            $id = get_the_ID();
            $asunto = get_post_meta($id, 'asunto', true);
            $fecha = get_post_meta($id, 'fecha', true);
            $categoria = get_post_meta($id, 'categoria', true);
            $estado = get_post_meta($id, 'estado', true);
            $leido = get_post_meta($id, 'leido', true);
            $mensajes = get_post_meta($id, 'mensajes', true);
            $ultimo_user = get_post_meta($id, 'id-usuario', true);
            $total = count($mensajes);
            $mensajes_no_leidos_array = array();
            foreach ($mensajes as $mensaje) {
                if (empty($mensaje['usuario-leido'])) {
                    array_push($mensajes_no_leidos_array, $mensaje['mensaje']);
                }
            }
            $no_leidos = count($mensajes_no_leidos_array);
            $html = ''
            ?>
        <a class="fila_ticket" style="cursor: pointer;" rel="<?php echo $id ?>">
            <div class="row contenido_tabla">
                <div class="col-1 leido columna_tickets_tabla">
                    <div style="text-align: center;justify-content: center;display: flex;">
                        <div class="redondeo_notifi"><span class="numero_tickets"><?php echo $no_leidos; ?></span></div>
                    </div>
                </div>
                <div class="col-2 fecha_tabla columna_tickets_tabla"><span
                            class="contenido_tabla_text"><?php echo $fecha ?></span>
                </div>
                <div class="col-3 categoria_tabla columna_tickets_tabla"><span
                            class="contenido_tabla_text"><?php echo $categoria ?></span></div>
                <div class="col-3 asunto_tabla columna_tickets_tabla"><span
                            class="contenido_tabla_text"><?php echo $asunto ?></span>
                </div>
                <div style="border-right: 0px !important" class="col asunto_tabla columna_tickets_tabla">
                    <?php if ($estado == 'abierto'){ ?>
                    <span class="contenido_tabla_text abierto_ticket"><?php echo $estado ?></span></div>
                <?php
                }else{
                ?><span class="contenido_tabla_text cerrado_ticket"><?php echo $estado ?></span></div> <?php
            } ?>

            </div></a><?php

        endwhile;
    endif;
}

if (is_user_logged_in()) {


    ?>
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
                            <li class="menu_user_item  "><i class="far fa-address-card "></i> Inicio</li>
                        </a>
                        <a href="/pedidos">
                            <li class="menu_user_item "><i class="far fa-clipboard"></i> Pedidos y suscripciones</li>
                        </a>
                        <a href="/editar-perfil">
                            <li class="menu_user_item "><i class="far fa-calendar"></i> Edita tu perfil</li>
                        </a>
                        <li class="menu_user_item"><i class="far fa-chart-bar"></i> Tus datos de facturación</li>
                        <a href="/tickets"><li class="menu_user_item"><i class="fas fa-life-ring"></i> Tickets de soporte</li></a>
                        <a rel="nofollow" href="https://ayuda.icecreammarketing.shop">
                            <li class="menu_user_item"><i class="far fa-keyboard"></i> Centro de ayuda</li>
                        </a>
                        <a rel="nofollow" target="_blank" href="https://guias.icecreammarketing.shop">
                            <li class="menu_user_item"><i class="far fa-edit"></i> Guías y cursos</li>
                    </div>
                    <hr>
                    <div class="botonera_menu_user">
                        <a href="/servicios" class="contratar"><img
                                    src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/02/09163831/Path-633.png">
                            Contratar servicios</a><br>
                        <a rel="nofollow" target="_blank" href="https://ayuda.icecreammarketing.shop"
                           class="contactar enlace_encubrir"><i class="fas fa-comment"></i></i> Preguntas frecuentes</a><br>
                        <a href="mailto:soporte@ice-cream.es" class="atencion enlace_encubrir"><i
                                    class="far fa-envelope"></i> Atención al cliente</a><br>
                        <a href="mailto:juanma.vales@icecream.mk" class="contactar enlace_encubrir"><i
                                    class="far fa-question-circle"></i> Contactar con tu asesor</a><br>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 content_area">
                    <div class="container-fluid">
                        <div class="row header_user" style="background-color:white;padding: 29px 20px;">
                            <div class="col-6 my-auto encabezado_pedidos">
                                <span class="encabezado_pedidos">Tickets de soporte</span>
                            </div>
                            <div class="col-6">
                                <div class="botonera_user desktop">

                                    <div class="logout">
                                        <i href="/ayuda" class="far fa-question-circle"></i>
                                        <a class="cerrar_sesion">Cerrar sesión</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="max-width: 1404px !important;" class="container tickets_contenedor_encabezado">
                        <div class="inyectable_tickets">
                            <div style="text-align: end;" class="row fila_crear_tickets">
                                <div class="col-6"></div>
                                <div class="col-6"><a class="boton_ticket_crear">Crear Ticket</a></div>
                            </div>

                            <div style="max-width: 1404px !important;" class="container tickets_contenedor">
                                <div class="row fila_tickets">
                                    <div class="col-12 columna_tickets"><span
                                                class="encabezado_ticket">Tus tickets</span>
                                    </div>
                                </div>
                                <div class="row encabezados_tabla">
                                    <div class="col-1 leido columna_tickets_tabla"><span
                                                class="encabezado_tabla_text">NO LEÍDO</span></div>
                                    <div class="col-2 fecha_tabla columna_tickets_tabla"><span
                                                class="encabezado_tabla_text">FECHA</span>
                                    </div>
                                    <div class="col-3 categoria_tabla columna_tickets_tabla"><span
                                                class="encabezado_tabla_text">CATEGORÍA</span></div>
                                    <div class="col-3 asunto_tabla columna_tickets_tabla"><span
                                                class="encabezado_tabla_text">ASUNTO</span>
                                    </div>
                                    <div style="border-right: 0px !important"
                                         class="col asunto_tabla columna_tickets_tabla">
                                        <span class="encabezado_tabla_text">ESTADO</span></div>
                                </div>
                                <?php montar_tickets(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
} else {
    include 'login.php';

}