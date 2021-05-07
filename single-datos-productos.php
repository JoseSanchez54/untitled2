<?php
/* single datos products (ficha de producto icecream) */
global $post;
genesis();
?>
<?php
//Caracteristicas
function caracteristicas(){
    global $post;
    $caracteristicas_subtitulo = get_post_meta($post->ID, 'caracteristicas-subtitulo', true);
    $caracteristicas_subparrafo = get_post_meta($post->ID, 'caracteristicas-subparrafo', true);
    $caracteristicas_caracteristicas = get_post_meta($post->ID, 'caracteristicas-caracteristicas', true);
    $contador = 0;
    $contador_total = count($caracteristicas_caracteristicas);

    ?>
    <div class="seccion_caracteristicas">
        <div class="row titular">
            <div class="col-12">
            <span class="title">
                <?php
                echo $caracteristicas_subtitulo;
                ?>
            </span>
            </div>
        </div>
        <div class="subtitulo_linea row justify-content-center">
            <div class="col-12">
            <span class="subtitulo">
            <?php
            echo $caracteristicas_subparrafo;
            ?>
            </span>
            </div>
        </div>
        <div class="container info">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                    <?php
                    foreach ($caracteristicas_caracteristicas  as $caracteristica){
                    $titular = $caracteristica['titular'];
                    $parrafo = $caracteristica['parrafo'];
                    if (($contador < $contador_total / 2) or ($contador > $contador_total / 2)){
                        ?>
                        <div class="textos_caracte">
                            <span class="titulo_caracte">
                                <?php echo $titular; ?>
                            </span>
                            <p class="parrafo_caracte">
                                <?php
                                echo $parrafo;
                                ?>
                            </p>
                        </div>
                        <?php
                    }else if ($contador = $contador_total / 2){
                    ?>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                    <div class="textos_caracte">
                        <span class="titulo_caracte">
                            <?php echo $titular; ?>
                        </span>
                        <p class="parrafo_caracte">
                            <?php
                            echo $parrafo;
                            ?>
                        </p>
                    </div>
                    <?php
                    }
                    $contador = $contador + 1;
                    } ?>
                </div>

            </div>
        </div>
    </div>
    <?php
}
//Funciones Repeaters PLANES
function starter_custom_design()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'starter-custom-design', true);
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <i class="fas fa-question-circle icono_tooltip"></i>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    }
}
function pro_custom_design(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'pro-custom-design', true);
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
        if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <i class="fas fa-question-circle icono_tooltip"></i>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    }
}
function master_custom_design(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'master-custom-design', true);
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
            if ($tooltip != '') {
                ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
                    <i class="fas fa-question-circle icono_tooltip"></i>
                </span>
                <?php
            }
            ?></span>
        </div>
        <?php
    }
}
function starter_funciones_avanzadas(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'starter-funciones-avanzadas', true);
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
            if ($tooltip != '') {
                 ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
                <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path                             d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
                </span>
               <?php
            }
            ?></span>
        </div>
        <?php
    }
}
function pro_funciones_avanzadas(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'pro-funciones-avanzadas', true);
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
            if ($tooltip != '') {
                ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
                    <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                                    d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                                    d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
                </span>
                <?php
            }
            ?></span>
        </div>
        <?php
    }
}
function master_funciones_avanzadas(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'master-funciones-avanzadas', true);
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
            if ($tooltip != '') {
                ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
                <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                                d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                                d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
                </span>
            <?php
            }
        ?></span>
        </div>
        <?php
    }
}
function pro_buscadores(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'pro-buscadores', true); ?>
    <button class="accordion">Optimizada para Buscadores <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function starter_buscadores(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'starter-buscadores', true); ?>
    <button class="accordion">Optimizada para Buscadores <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
            if ($tooltip != '') {
                ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
                    <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
                </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function master_buscadores(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'master-buscadores', true); ?>
    <button class="accordion">Optimizada para Buscadores <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function starter_legal()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'starter-legal', true); ?>
    <button class="accordion">Legal <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>

        </div>
        <?php
    } ?></div><?php
}
function pro_legal()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'pro-legal', true); ?>
    <button class="accordion">Legal <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function master_legal()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'master-legal', true); ?>
    <button class="accordion">Legal <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
       <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function starter_hosting(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'starter-hosting', true); ?>
    <button class="accordion">Hosting incluido <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
       foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
            <span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function pro_hosting(){
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'pro-hosting', true); ?>
    <button class="accordion">Hosting incluido <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function master_hosting()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'master-hosting', true); ?>
    <button class="accordion">Hosting incluido <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function starter_atencion()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'starter-atencion-personalizada', true); ?>
    <button class="accordion">Atención personalizada <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function pro_atencion()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'pro-atencion-personalizada', true); ?>
    <button class="accordion">Atención personalizada <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function master_atencion()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'master-atencion-personalizada', true); ?>
    <button class="accordion">Atención personalizada <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function starter_extras()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'starter-extras-incluidos', true); ?>
    <button class="accordion">Extras incluidos <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function pro_extras()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'pro-extras-incluidos', true); ?>
    <button class="accordion">Legal <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
function master_extras()
{
    global $post;
    $starter_custom_design = get_post_meta($post->ID, 'master-extras-incluidos', true); ?>
    <button class="accordion">Legal <i class="fa fa-angle-down"></i></button>
    <div class="panel">
    <?php
    foreach ($starter_custom_design as $design) {
        $texto = $design['texto'];
        $tooltip = $design['tooltip']; ?>
        <div class="row texto_servicios">
<span><?php echo $texto;
    if ($tooltip != '') {
        ?><span class="tooltip-toggle" aria-label="<?php echo $tooltip; ?>" tabindex="0">
            <svg viewBox="0 0 27 27" xmlns="http://www.w3.org/2000/svg"><g fill="#ED3E44" fill-rule="evenodd"><path
                            d="M13.5 27C20.956 27 27 20.956 27 13.5S20.956 0 13.5 0 0 6.044 0 13.5 6.044 27 13.5 27zm0-2C7.15 25 2 19.85 2 13.5S7.15 2 13.5 2 25 7.15 25 13.5 19.85 25 13.5 25z"/><path
                            d="M12.05 7.64c0-.228.04-.423.12-.585.077-.163.185-.295.32-.397.138-.102.298-.177.48-.227.184-.048.383-.073.598-.073.203 0 .398.025.584.074.186.05.35.126.488.228.14.102.252.234.336.397.084.162.127.357.127.584 0 .22-.043.412-.127.574-.084.163-.196.297-.336.4-.14.106-.302.185-.488.237-.186.053-.38.08-.584.08-.215 0-.414-.027-.597-.08-.182-.05-.342-.13-.48-.235-.135-.104-.243-.238-.32-.4-.08-.163-.12-.355-.12-.576zm-1.02 11.517c.134 0 .275-.013.424-.04.148-.025.284-.08.41-.16.124-.082.23-.198.313-.35.085-.15.127-.354.127-.61v-5.423c0-.238-.042-.43-.127-.57-.084-.144-.19-.254-.318-.332-.13-.08-.267-.13-.415-.153-.148-.024-.286-.036-.414-.036h-.21v-.95h4.195v7.463c0 .256.043.46.127.61.084.152.19.268.314.35.125.08.263.135.414.16.15.027.29.04.418.04h.21v.95H10.82v-.95h.21z"/></g></svg>
        </span>
        <?php
    }
    ?></span>
        </div>
        <?php
    } ?></div><?php
}
////////////////////////////////////SLIDERS

function crear_slider()
{
    global $post;
    $slider = get_post_meta($post->ID, 'hero-imagen-slider', true);
    ?>
       <div class="casos-de-estudio col-xl-2 col-sm-12 col-lg-12 col-12">
        <span class="case_titulo">Casos de estudio</span>
        <div class="owl-carousel slider_c"><?php
            foreach ($slider as $foto) {
                $imagen = $foto['imagen'];
                $URL = $foto['url']; ?>
                <a href="<?php echo $URL; ?>">
                    <div class="item">
                        <img  src="<?php echo $imagen; ?>">
                    </div>
                </a>
                <?php
            } ?></div>
    </div>
    <script>
        jQuery('div.owl-carousel.slider_c').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1.10
                },
                600: {
                    items: 1.10
                },
                1000: {
                    items: 1.10
                }, 1500: {
                    items: 1.20
                }
            }
        });</script><?php
}
function crear_templates()
{
    global $post;
    $titular = get_post_meta($post->ID, 'templates_titular', true);
    $slider = get_post_meta($post->ID, 'templates-slider', true);
    $subtitulo = get_post_meta($post->ID, 'templates_subtitulo', true);
    ?>
    <div class="container templates_container">
        <div class="row">
            <div class="col-12">
                <span class="title"><?php echo $titular; ?></span>
                <span class="subtitle"><?php echo $subtitulo; ?></span>
            </div>
        </div>
    </div>
    <div class="row plantillas_seccion">
        <div class="flecha col-xl-3 col-sm-3 col-lg-3 my-auto">
            <a class="flecha_pulsa">
                <div class="flecha_i">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-left"
                         class="svg-inline--fa fa-angle-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 256 512">
                        <path fill="currentColor"
                              d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path>
                    </svg>
                </div>
            </a>
        </div>
        <div class="templates col-xl-9 col-sm-9 col-lg-9">
            <div class="owl-carousel slider_templates"><?php
                foreach ($slider as $foto) {
                    $imagen = $foto['imagen'];
                    ?>
                    <div class="item">
                        <img src="<?php echo $imagen; ?>">
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </div>
    <script>
        jQuery('div.owl-carousel.slider_templates').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            autoplay: false,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 2.10
                },
                600: {
                    items: 2.10
                },
                1000: {
                    items: 2.10
                }, 1300: {
                    items: 2.10
                }, 1500: {
                    items: 3.30
                }
            }
        });
    </script><?php
}
function crear_templates_movil()
{
    global $post;
    $titular = get_post_meta($post->ID, 'templates_titular', true);
    $slider = get_post_meta($post->ID, 'templates-slider', true);
    $subtitulo = get_post_meta($post->ID, 'templates_subtitulo', true);
    ?>
    <div class="container templates_container">
        <div class="row">
            <div class="col-12">
                <span class="title"><?php echo $titular; ?></span>
                <span class="subtitle"><?php echo $subtitulo; ?></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="templates col-12 col-xl-9 col-sm-9 col-lg-9">
            <div class="owl-carousel slider_templates"><?php
                foreach ($slider as $foto) {
                    $imagen = $foto['imagen'];
                    ?>
                    <div class="item">
                        <img src="<?php echo $imagen; ?>">
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </div>
    <script>
        jQuery('div.owl-carousel.slider_templates').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            autoplay: false,
            autoplayTimeout: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1.35
                },
                600: {
                    items: 1.35
                },
                1000: {
                    items: 2.10
                }, 1300: {
                    items: 2.10
                }, 1500: {
                    items: 3.30
                }
            }
       });
    </script><?php
}
function crear_cuadro()
{
    global $post;
    $titulo = get_post_meta($post->ID, 'titular-cuadro-de-informacion', true);
    $repeater = get_post_meta($post->ID, 'lista-cuadro-de-informacion', true);
    ?>
    <div class="seccion_lista row justify-content-center">
    <div class="container cuadro_lista">
        <div class="row fila_lista justify-content-center">
            <div class="col-12 col_lista">
          <span class="title">
            <?php echo $titulo; ?>
          </span>
                <ul class="listado">
                    <?php
                    foreach ($repeater as $lista) {
                        $info = $lista['texto'];
                        ?>
                        <li class="lista_texto">
                        <?php echo $info; ?>
                        </li><?php
                    } ?></ul> <?php
                ?>        </div>
        </div>
    </div>
    </div><?php
}
//CREAR TOGGLE
function toggle()
{
    ?>
    <div class="seccion_planes"></div>
    <div class="contenedor_sw">
        <span class="mensual_text">Mensual </span>
        <div class="toggleWrapper">
            <input type="checkbox" name="toggle1" class="mobileToggle" id="toggle1">
            <label></label>
        </div>
        <span class="mensual_text"> Anual <span class="descuento">(20% de Descuento)</span></span>
    </div>
    <?php
}

//CREAR PLANES
function crear_planes_pro()
{
    global $post;
    $mensual_pro = get_post_meta($post->ID, 'precio-mensual_pro', true);
    $anual_pro = get_post_meta($post->ID, 'precio-anual_pro', true);
    $mensual_starter = get_post_meta($post->ID, 'precio-mensual_starter', true);
    $anual_starter = get_post_meta($post->ID, 'precio-anual_starter', true);
    $mensual_master = get_post_meta($post->ID, 'precio-mensual_master', true);
    $anual_master = get_post_meta($post->ID, 'precio-anual_master', true);
    $color = get_post_meta($post->ID, 'color-principal', true);
    $encabezado_pro = get_post_meta($post->ID, 'encabezado-pro', true);
    $encabezado_starter = get_post_meta($post->ID, 'encabezado-starter', true);
    $encabezado_master = get_post_meta($post->ID, 'encabezado-master', true);
    $identidad_pro = get_post_meta($post->ID, 'id-producto-pro', true);
    $identidad_starter = get_post_meta($post->ID, 'id-producto-starter', true);
    $identidad_master = get_post_meta($post->ID, 'id-producto-master', true);
    $identidad_anual_pro = get_post_meta($post->ID, 'id-producto-pro_anual', true);
    $identidad_anual_starter = get_post_meta($post->ID, 'id-producto-starter_anual', true);
    $identidad_anual_master = get_post_meta($post->ID, 'id-producto-master_anual', true);
    ?>
    <div id="planes-id" class="seccion_planes row">
        <div class="container-fluid planes_contenedor">
            <div class="row fila_planes justify-content-center">
                <div class="col-11 col-xl-4 col-xxl-3 col-sm-9 col-lg-9 columna_planes_1">
                    <div class="row precios">
                        <div class="col-12 align-self-start">
                            <div class="row">
                                <div class="col-4 col_rango">
          <span style="color:<?php echo $color; ?>" class="rango_texto">
            Starter
          </span>
                                </div>
                                <div class="col-8 col_precio my-auto">
          <span class="engloba">
            <span style="color:<?php echo $color; ?>" class="precio-big anual"><?php echo $anual_starter; ?></span>
            <span style="color:<?php echo $color; ?>" class="precio-big mensual"><?php echo $mensual_starter; ?></span>
            <span style="font-size: 28px; color:<?php echo $color; ?>" class="mes">€/mes</span>
          </span>
                                    <p class="anual parrafo">Facturado a <?php echo $anual_starter * 12; ?><span
                                                class="moneda">€</span>/año
                                    </p>
                                </div>
                                <?php toggle() ?>
                                <span class="encabezado_planes">
        <?php echo $encabezado_starter; ?>
      </span>
                                <div class=" boton_planes justify-content-center">
                                    <a onMouseOver="this.style.color='black';"
                                       onMouseOut="this.style.color='white'"
                                       style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                                       rel="<?php echo $identidad_starter; ?>" class="anadir-carro starter mensual">Lo
                                        quiero</a>
                                    <a onMouseOver="this.style.color='black';"
                                       onMouseOut="this.style.color='white'"
                                       style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                                       rel="<?php echo $identidad_anual_starter; ?>" class="anadir-carro starter anual">Lo
                                        quiero</a>
                                </div>
                            </div>
                            <span class="encabezado">Qué incluye</span><?php
                            starter_custom_design();
                            ?>
                       </div>
                    </div>
                    <div class=" boton_planes segundo justify-content-center">
                        <a onMouseOver="this.style.color='black';"
                          onMouseOut="this.style.color='white'"
                           style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                           rel="<?php echo $identidad_starter; ?>" class="anadir-carro starter anual">Lo quiero</a>
                        <a onMouseOver="this.style.color='black';"
                           onMouseOut="this.style.color='white'"
                           style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                           rel="<?php echo $identidad_anual_starter; ?>" class="anadir-carro starter mensual">Lo
                            quiero</a>
                    </div>
                </div>
                <div class="col-11 col-xl-4 col-xxl-3  col-sm-9 col-lg-9 columna_planes_2">
                    <div class="row precios">
                        <div class="col-12 align-self-start">
                            <div class="row">
                                <div class="col-4 col_rango">
          <span style="color:<?php echo $color; ?>" class="rango_texto">
            Pro
          </span>
                                </div>
                                <div class="col-8 col_precio my-auto">
          <span class="engloba">
            <span style="color:<?php echo $color; ?>" class="precio-big anual"><?php echo $anual_pro; ?></span>
            <span style="color:<?php echo $color; ?>" class="precio-big mensual"><?php echo $mensual_pro; ?></span>
            <span style="font-size: 28px; color:<?php echo $color; ?>" class="mes">€/mes</span>
          </span>
                                    <p class="anual parrafo">Facturado a <?php echo $anual_pro * 12; ?><span
                                                class="moneda">€</span>/año
                                    </p>
                                </div>
                                <?php toggle() ?>
                                <span class="encabezado_planes">
        <?php echo $encabezado_pro; ?>
      </span>
                                <div class=" boton_planes justify-content-center">
                                    <a onMouseOver="this.style.color='black';"
                                       onMouseOut="this.style.color='white'"
                                       style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                                       rel="<?php echo $identidad_anual_pro; ?>" class="anadir-carro pro anual">Lo quiero</a>
                                    <a onMouseOver="this.style.color='black';"
                                       onMouseOut="this.style.color='white'"
                                       style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                                       rel="<?php echo $identidad_pro; ?>" class="anadir-carro pro mensual">Lo
                                        quiero</a>
                                </div>
                            </div>
                            <span class="encabezado">Qué incluye</span><?php
                            pro_custom_design();
                            ?>
                        </div>
                    </div>
                    <div class=" boton_planes segundo justify-content-center">
                        <a onMouseOver="this.style.color='black';"
                           onMouseOut="this.style.color='white'"
                           style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                           rel="<?php echo $identidad_pro; ?>" class="anadir-carro pro mensual">Lo quiero</a>
                        <a onMouseOver="this.style.color='black';"
                           onMouseOut="this.style.color='white'"
                           style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                           rel="<?php echo $identidad_anual_pro; ?>" class="anadir-carro pro anual">Lo quiero</a>
                    </div>
                </div>
                <div class="col-11 col-xl-4 col-xxl-3  col-sm-9 col-lg-9 columna_planes_3">
                    <div class="row precios">
                        <div class="col-12 align-self-start">
                            <div class="row">
                                <div class="col-4 col_rango">
          <span style="color:<?php echo $color; ?>" class="rango_texto">
            Master
          </span>
                                </div>
                                <div class="col-8 col_precio my-auto">
          <span class="engloba">
            <span style="color:<?php echo $color; ?>" class="precio-big anual"><?php echo $anual_master; ?></span>
            <span style="color:<?php echo $color; ?>" class="precio-big mensual"><?php echo $mensual_master; ?></span>
            <span style="font-size: 28px; color:<?php echo $color; ?>" class="mes">€/mes</span>
          </span>
                                    <p class="anual parrafo">Facturado a <?php echo $anual_master * 12; ?><span  class="moneda">€</span>/año
                                    </p>
                                </div>
                                <?php toggle() ?>
                                <span class="encabezado_planes">
        <?php echo $encabezado_master; ?>
      </span>
                               <div class=" boton_planes justify-content-center">
                                    <a onMouseOver="this.style.color='black';"
                                       onMouseOut="this.style.color='white'"
                                       style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                                       rel="<?php echo $identidad_master; ?>" class="anadir-carro master mensual">Lo
                                        quiero</a>
                                    <a onMouseOver="this.style.color='black';"
                                       onMouseOut="this.style.color='white'"
                                       style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                                       rel="<?php echo $identidad_anual_master; ?>" class="anadir-carro master anual">Lo
                                        quiero</a>
                                </div>
                            </div>
                            <span class="encabezado">Qué incluye</span><?php
                            master_custom_design();
                            ?>
                        </div>
                    </div>
                    <div class=" boton_planes segundo justify-content-center">
                        <a onMouseOver="this.style.color='black';"
                           onMouseOut="this.style.color='white'"
                           style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                           rel="<?php echo $identidad_master; ?>" class="anadir-carro master anual">Lo quiero</a>
                        <a onMouseOver="this.style.color='black';"
                           onMouseOut="this.style.color='white'"
                           style="background-color:<?php echo $color; ?>; border-color:<?php echo $color; ?>; color:white;"
                           rel="<?php echo $identidad_anual_master; ?>" class="anadir-carro master mensual">Lo
                            quiero</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
function acordeones()
{
    global $post;
    $contador = 0;
    $acordeon = get_post_meta($post->ID, 'secciones', true);
    ?>
    <div class="seccion-acordeon">
    <div class="container acordeones-cont">
        <div class="row acordeon-fila justify-content-center">
            <div class="col-12 col-xl-9 col-sm-12 col-lg-9 acordeones-col">
                <?php
                foreach ($acordeon as $single) {
                    $contador = $contador + 1;
                    $encabezado = $single['titulo'];
                    $contenido = $single['contenido'];
                    ?>
                    <button class="accordion">
                        <div class="row">
                            <div class="col-10 my-auto"><span class="acordeon"><?php echo $encabezado; ?></span></div>
                            <div class="col-2 my-auto"><i id="close_<?php echo $contador; ?>"
                                                          class="fas fa-plus cierre_acor<?php echo $contador; ?>"></i>
                            </div>
                        </div>
                    </button>
                    <div class="panel">
                        <p class="parrafo_acor">
                            <?php echo $contenido; ?></p>
                    </div>
                    <?php
                } ?>
            </div>
        </div>
    </div>
    </div><?php
}
//MOntaje
//Hero
$titulo = get_the_title($post);
$pre_parrafo = get_post_meta($post->ID, 'pre-parrafo', true);
$imagen_principal = get_post_meta($post->ID, 'hero-imagen-principal', true);
$caracteristicas_titular = get_post_meta($post->ID, 'caracteristicas-titular', true);
$caracteristicas_parrafo = get_post_meta($post->ID, 'caracteristicas-parrafo', true);
$color_principal = get_post_meta($post->ID, 'color-principal', true);
$detect = new Mobile_Detect();
if (($detect->isMobile()) or ($detect->isTablet())) {
    ?>
    <div class="container seccion_1_m_servicios col-12">
        <div class="row">
            <div class="col-12">
                <span class="titular_service"><?php echo $titulo; ?></span>
            </div>
        </div>
        <div class="row botone_js">
            <div class="botoner_movil col-12">
                <ul class="lista_botones">
                    <li style="border: 1px solid <?php echo $color_principal; ?>"
                        class="boton_movil_servicios caracteristicas"><a href="#caracteristicas">Características</a>
                    </li>
                    <li style="border: 1px solid <?php echo $color_principal; ?>" class="boton_movil_servicios precios">
                        <a href="#precios">Precios
                        </a></li>
                    <li style="border: 1px solid <?php echo $color_principal; ?>" class="boton_movil_servicios faqs">
                        <a href="#faqs"> FAQ's
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container no-padd">
        <div class="col-12 columna_imagen">
            <img src="<?php echo $imagen_principal; ?>" alt="" class="imagen_producto">
        </div>
    </div>
    <?php
    crear_slider(); ?>
    <div class="container-caracte">
        <div class="seccion_2_productos container">
            <div class="row">
                <div class="col-12">
                    <span class="title preparrafo"><?php echo $pre_parrafo; ?></span>
                    <div class="textos_producto">
                        <span class="title"><?php echo $caracteristicas_titular; ?></span>
                    </div>
                    <span class="subtitle"><?php echo $caracteristicas_parrafo; ?></span>
                </div>
            </div>
        </div>
        <a id="caracteristicas"></a>
        <div class="caracteristicas">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php caracteristicas(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cuadro">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <?php crear_cuadro(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    crear_templates_movil(); ?>
    <div class="precios_c">
        <a id="precios"></a>
        <div class="container">
            <div class="row">
            <span class="encabezado text-center" style="font-size:30px;">Nuestros planes</span>
            <span style="text-align:center; color: #70707f;
    font-family: avenir, Sans-serif;
    font-size: 18px;
    font-weight: 500;
    margin-top: 15px;
    margin-bottom: 70px;
    line-height: 1.3em;" class="">Nuestros planes de <?php echo $titulo; ?> están divididos según las necesidades que hemos identificado en nuestros clientes. Revisa las características de cada uno de nuestros planes y si tienes alguna duda, contacta con nosotros.



</span>
                <?php crear_planes_pro(); ?>
            </div>
        </div>
    </div>
    <div class="faqs_c">
        <a id="faqs"></a>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <span class="encabezado text-center" style="font-size:30px;">Preguntas frecuentes</span>
                    <?php acordeones(); ?>
                </div>
            </div>
        </div>
    </div>
    </body><?php
} else {
    ?>
    <div class="seccion_hero hero_mwlb">
        <div class="container">
            <div class="row">
                <h1 class="title"><?php echo $titulo ?></h1>
            </div>
            <div class="row justify-content-center">
                <img style="width:68%;" src="<?php echo $imagen_principal; ?>">
            </div>
        </div>
    </div>
    <div class="seccion_boton">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <button class="boton_service">
                        <a href="#planes" class="empezar">Empezamos</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="seccion_2_productos container">
        <span class="title preparrafo"><?php echo $pre_parrafo; ?></span>
        <div class="textos_producto">
            <span class="title"><?php echo $caracteristicas_titular; ?></span>
        </div>
        <span class="subtitle"><?php echo $caracteristicas_parrafo; ?></span>
    </div>



    <div class="container listado">



        <?php caracteristicas(); ?>







    </div>



    <?php crear_templates();



    crear_cuadro();



    ?>



    <div class="container">



        <div class="row justify-content-center">



            <div class="col-11">



  <span style="text-align:center;" class="titulo_que_faltan">Nuestros planes



</span>



                <span style="text-align:center;" class="titulo_que_faltan_sub">Nuestros planes de <?php echo $titulo; ?> están divididos según las necesidades que hemos identificado en nuestros clientes. Revisa las características de cada uno de nuestros planes y si tienes alguna duda, contacta con nosotros.



</span>



            </div>



        </div>



    </div>







    <?php



    ?>



    <div id="planes"><?php



        crear_planes_pro();



        ?></div>



    <div class="container">



        <div class="row justify-content-center">



            <div class="col">



  <span style="text-align:center;" class="titulo_que_faltan ultimo">Preguntas frecuentes







</span>



            </div>



        </div>



    </div>



    <?php



    acordeones();



    ice_footer();







    ?>











    <?php







}



