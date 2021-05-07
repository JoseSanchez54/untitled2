<?php
/*
Template Name: editar-perfil_User-area_MWLB
*/
if ( is_user_logged_in()){
$usuario = wp_get_current_user();
$usuario_id = get_current_user_id();
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
<script>jQuery('.header_mwlb').hide();jQuery('.header_icecream_movil ').hide();jQuery('.menu_movil ').hide();</script>

<div class="body_contenedor_mwlb">
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-2 col-lg-2 menu_column">
			<div class="logo_user">
				<a href="/">
				<img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/01/11131727/logo_IceCream-1.svg"></a>
			</div>
			<div class="menu_user">


			<a href="/area-usuario"><li class="menu_user_item "><i class="far fa-address-card"></i> Inicio</li></a>
					<a href="/pedidos"><li class="menu_user_item "><i class="far fa-clipboard"></i> Pedidos y suscripciones</li></a>
					<a href="/editar-perfil"><li class="menu_user_item active"><i class="far fa-calendar"></i> Edita tu perfil</li></a>
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
				 <a href="/servicios" class="contratar"><img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/02/09163831/Path-633.png"> Contratar servicios</a><br>
				 <a rel="nofollow" target="_blank" href="https://ayuda.icecreammarketing.shop" class="contactar enlace_encubrir"><i class="fas fa-comment"></i></i> Preguntas frecuentes</a><br>
					 <a href="mailto:soporte@ice-cream.es" class="atencion enlace_encubrir"><i class="far fa-envelope"></i> Atención al cliente</a><br>
					 <a href="mailto:juanma.vales@icecream.mk" class="contactar enlace_encubrir"><i class="far fa-question-circle"></i> Contactar con tu asesor</a><br>
				 </div>
		</div>
		<div class="col-xl-10 col-lg-10 content_area">
			<div class="container-fluid">
			<div class="row header_user" style="background-color:white;padding: 29px 20px;">
				<div class="col-6 my-auto encabezado_pedidos">
					<span class="encabezado_pedidos">Edita tu perfil</span>
				</div>
			<div class="col-6">
			<div class="botonera_user desktop">
			
			<div class="logout">
			<i href="/ayuda" class="far fa-question-circle"></i>
			<a  class="cerrar_sesion">Cerrar sesión</a>
			</div>
			</div>
			</div>
			</div>
			</div>
			
			
			<div id="order_ver" class="container pedidos">
				<div class="row fila_1_user">
					<?php editar_perfil();  ?>
				</div>
				</div>
				</div>
			</div>
			</div>
			
	
</div>
<?php
}else{
	include 'login.php';
}
