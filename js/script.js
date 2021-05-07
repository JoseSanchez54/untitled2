jQuery(document).ready(function () {
    jQuery('#contacto_serv').click(function () {
        jQuery('.movil-mv.contenedor_cierre').css('z-index', '999');
        jQuery('.overlay').addClass('overlay_add');
        jQuery('.pop').addClass('pop_add');
        jQuery('.popup').css('z-index', '9999999');
        jQuery('.popup').css('top', '0');
        jQuery('.contenedor_cierre').addClass('contenedor_cierre_add');
    })
    jQuery('.redondear').hover(function () {
        jQuery('.normal').hide();
        jQuery('.encima').show();

    }, function () {
        jQuery('.normal').show();
        jQuery('.encima').hide();
    })

    jQuery('#menu-item-13').hover(function () {
        jQuery('.dropdown').addClass('dropdown_add');
        jQuery('.oculto').css('visibility', 'hidden');
        jQuery('.submenu_mwlb').css('z-index', '999999')
        if (jQuery('.dropdown').hasClass('dropdown_add')) {
            jQuery('.submenu_mwlb').hover(function () {
                jQuery('.submenu_mwlb').css('z-index', '999999')
                jQuery('.dropdown').addClass('dropdown_add');
            }, function () {
                jQuery('.dropdown').removeClass('dropdown_add');
                jQuery('.submenu_mwlb').css('z-index', '-1')
            })
        }
    }, function () {
        jQuery('.dropdown').removeClass('dropdown_add');
        jQuery('.submenu_mwlb').css('z-index', '-1')
    })


    jQuery('#a_mwlb li').hover(function () {
        jQuery(this).children('ul').addClass('dropdown_add');
        jQuery('.oculto').css('visibility', 'hidden');
    })
})
jQuery('#menu-item-15').click(function () {
    jQuery('.movil-mv.contenedor_cierre').css('z-index', '999');
    jQuery('.overlay').addClass('overlay_add');
    jQuery('.pop').addClass('pop_add');
    jQuery('.popup').css('z-index', '9999999');
    jQuery('.popup').css('top', '0');
    jQuery('.contenedor_cierre').addClass('contenedor_cierre_add');
})

jQuery('.contenedor_cierre').click(function () {
    jQuery('.movil-mv.contenedor_cierre').css('z-index', '1');
    jQuery('.overlay').removeClass('overlay_add');
    jQuery('.pop').removeClass('pop_add');
    jQuery('.popup').css('z-index', '-1');
    jQuery('.contenedor_cierre').removeClass('contenedor_cierre_add');
})
jQuery(document).ready(function () {
    jQuery('.flecha_pulsa').click(function () {
        jQuery('.slider_templates .owl-next').click()
    })

    var acc = document.getElementsByClassName("accordion");
    var icon = document.getElementsByClassName("cierre_acor");
    var i;
    for (i = 0; i < acc.length; i++) {
        cont = i;
        acc[i].addEventListener("click", function () {
            cerrar_all_accordion();
                /* Toggle between adding and removing the "active" class,
                to highlight the button that controls the panel */
                this.classList.toggle("active");
                jQuery('.accordion.active i').css('transform', 'rotate(45deg)');
                e = this.getElementsByClassName('cierre_acor');
                /* Toggle between hiding and showing the active panel */
                var panel = this.nextElementSibling;
                if ((panel.style.display === "block")) {
                    panel.style.display = "none";
                    jQuery('.accordion.active').removeClass('active');
                    jQuery('.accordion i').css('transform', 'rotate(0deg)');
                    jQuery('.panel').hide();
                } else {
                    panel.style.display = "block";
                    jQuery('.accordion.active i').css('transform', 'rotate(45deg)');
                   // jQuery('.accordion.active').addClass('open');
                }
            }
        );
    }

    function cerrar_all_accordion(){
        jQuery('.accordion.active').removeClass('active');
        jQuery('.accordion i').css('transform', 'rotate(0deg)');
        jQuery('.panel').hide();
    }

    jQuery('.accordion.open.active').click(function () {

       // cerrar_all_accordion();
       console.log('debo cerrar solo este');
    })
})



jQuery('.flecha_pulsa').click(function () {

    jQuery('.slider_templates .owl-prev').click()

})





jQuery(document).ready(function () {





    jQuery('.mensual').hide();

    jQuery(".mobileToggle").prop("checked", true);

    jQuery('.product-name>a').attr('href', '#');

    jQuery('.product-thumbnail>a').attr('href', '#');

    jQuery(".toggleWrapper").on("click", function () {

        if (jQuery(".mobileToggle:checked").length >= 1) {

            jQuery(".mobileToggle").prop("checked", false);

            jQuery('span.anual').hide();

            jQuery('a.anual').hide();

            jQuery('span.mensual').show();

            jQuery('a.mensual').show();

            jQuery('p.anual').css('visibility', 'hidden');





        } else {

            jQuery(".mobileToggle").prop("checked", true);

            jQuery('span.anual').show();

            jQuery('a.anual').show();

            jQuery('span.mensual').hide();

            jQuery('a.mensual').hide();

            jQuery('p.anual').css('visibility', 'visible');

        }

    });





});



//AJAX BOTON DE CARRO

jQuery(document).ready(function () {

    /* 

      var  elementos =  document.querySelectorAll('.woocommerce-placeholder');

       var cont = 0

      for(i=0; i<elementos.length;i++){

          cont = cont+1



        elementos[i].addEventListener("mouseover", function() {

           

           previo =  this.previousElementSibling

           

           previo.style.visibility = "visible"



          



      })

      elementos[i].addEventListener("mouseout", function() {

          

        previo =  this.previousElementSibling

        

        previo.style.visibility = "hidden"



       



    })



    } */





    jQuery('.anadir-carro.pro').on('click', function () {

        boton = jQuery(this);

        product_id = jQuery(this).attr('rel');

        jQuery('.anadir-carro.pro').text('Añadido');

        jQuery('#actualizar').html('<div style="height:200px;width:700px; top: 0; text-align: center; justify-content: center;display: flex; align-items: center; position: absolute; z-index: 999999; " class="loader_load"><img style="position: absolute; width: 100px; " src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif"></div>');



        //La llamada AJAX

        $.ajax({

            type: "post",

            url: ajax_call.ajaxurl, // Pon aquí tu URL

            data: {

                action: "anadir_carro",

                product_id: product_id,





            },

            error: function (response) {

                jQuery('.anadir-carro.pro').text('Error');

            },

            success: function (response) {

                // Actualiza el mensaje con la respuesta

                jQuery(document.body).trigger('wc_fragment_refresh');

                jQuery('.redondear > a').trigger('click');



                setTimeout(

                    function () {

                        jQuery('.anadir-carro.pro').text('Lo quiero')

                    }, 2000);

            }

        })



    });

    jQuery('.anadir-carro.starter').on('click', function () {

        boton = jQuery(this);

        product_id = jQuery(this).attr('rel');

        jQuery('.anadir-carro.starter').text('Añadido');

        jQuery('#actualizar').html('<div style="height:200px;width:700px; top: 0; text-align: center; justify-content: center;display: flex; align-items: center; position: absolute; z-index: 999999; " class="loader_load"><img style="position: absolute; width: 100px; " src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif"></div>');



        //La llamada AJAX

        $.ajax({

            type: "post",

            url: ajax_call.ajaxurl, // Pon aquí tu URL

            data: {

                action: "anadir_carro",

                product_id: product_id,





            },

            error: function (response) {

                jQuery('.anadir-carro.starter').text('Error');

            },

            success: function (response) {

                // Actualiza el mensaje con la respuesta

                jQuery(document.body).trigger('wc_fragment_refresh');

                jQuery('.redondear > a').trigger('click');



                setTimeout(

                    function () {

                        jQuery('.anadir-carro.starter').text('Lo quiero')

                    }, 2000);

            }

        })



    });

    jQuery('.anadir-carro.master').on('click', function () {

        boton = jQuery(this);

        product_id = jQuery(this).attr('rel');

        jQuery('.anadir-carro.master').text('Añadido');

        jQuery('#actualizar').html('<div style="height:200px;width:700px; top: 0; text-align: center; justify-content: center;display: flex; align-items: center; position: absolute; z-index: 999999; " class="loader_load"><img style="position: absolute; width: 100px; " src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif"></div>');



        //La llamada AJAX

        $.ajax({

            type: "post",

            url: ajax_call.ajaxurl, // Pon aquí tu URL

            data: {

                action: "anadir_carro",

                product_id: product_id,





            },

            error: function (response) {

                jQuery('.anadir-carro.master').text('Error');

            },

            success: function (response) {



                jQuery(document.body).trigger('wc_fragment_refresh');

                jQuery('.redondear > a').trigger('click');



                setTimeout(

                    function () {

                        jQuery('.anadir-carro.master').text('Lo quiero')

                    }, 2000);

            }

        })



    });

    jQuery(document).on('click', '.delete', function () {

        boton = jQuery(this);

        product_id = jQuery(this).attr('rel');

        jQuery('#actualizar').html('<div style="height:200px;width:700px; top: 0; text-align: center; justify-content: center;display: flex; align-items: center; position: absolute; z-index: 999999; " class="loader_load"><img style="position: absolute; width: 100px; " src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif"></div>');





        //La llamada AJAX

        $.ajax({

            type: "post",

            url: ajax_call.ajaxurl, // Pon aquí tu URL

            data: {

                action: "remove_item_from_cart",

                product_id: product_id,





            },

            error: function (response) {

                console.log('error');

            },

            success: function (response) {

                console.log('true');

                jQuery(document.body).trigger('wc_fragment_refresh');





            }

        })



    });





});

jQuery(document).ready(function () {

    jQuery(document).on('click', '.carro_movil', function () {

        jQuery('html body div.overlay.carro').show();

        jQuery('.redondear').trigger('click');

    })

    jQuery(document).on('click', '.redondear > a', function () {

        jQuery('html body div.overlay.carro').show();



    })

    jQuery('.cierre').click(function () {

        jQuery('html body div.overlay.carro').hide();

    })

    jQuery('.imagen_port').hover(function () {

        jQuery(this).next('div.card').css('visibility', 'visible');



    }, function () {

        jQuery(this).next('div.card').css('visibility', 'hidden');

    })

    jQuery('.boton_port.sitio_web').click(function () {

        jQuery('.Todos').hide();

        jQuery('.Packaging').hide();

        jQuery('.eCommerce').hide();

        jQuery('.Branding').hide();

        jQuery('.photography').hide();

        jQuery('.Graphic.design').hide();

        jQuery('.Social.Media').hide();

        jQuery('.SEO').hide();

        jQuery('.Print').hide();

        jQuery('.Website').show();

    })

    jQuery('.boton_port.todos').click(function () {

        jQuery('.Todos').show();

        jQuery('.Packaging').show();

        jQuery('.eCommerce').show();

        jQuery('.Branding').show();

        jQuery('.photography').show();

        jQuery('.Graphic.design').show();

        jQuery('.Social.Media').show();

        jQuery('.SEO').show();

        jQuery('.Print').show();

        jQuery('.Website').show();

    })

    jQuery('.boton_port.branding').click(function () {

        jQuery('.Todos').hide();

        jQuery('.Packaging').hide();

        jQuery('.eCommerce').hide();

        jQuery('.Website').hide();

        jQuery('.photography').hide();

        jQuery('.Graphic.design').hide();

        jQuery('.Social.Media').hide();

        jQuery('.SEO').hide();

        jQuery('.Print').hide();

        jQuery('.Branding').show();

    })

    jQuery('.boton_port.tienda_online').click(function () {

        jQuery('.Todos').hide();

        jQuery('.Packaging').hide();

        jQuery('.eCommerce').show();

        jQuery('.Website').hide();

        jQuery('.photography').hide();

        jQuery('.Graphic.design').hide();

        jQuery('.Social.Media').hide();

        jQuery('.SEO').hide();

        jQuery('.Print').hide();

        jQuery('.Branding').hide();

    })

    jQuery('.boton_port.fotografia').click(function () {

        jQuery('.Todos').hide();

        jQuery('.Packaging').hide();

        jQuery('.eCommerce').hide();

        jQuery('.Website').hide();

        jQuery('.photography').show();

        jQuery('.Graphic.design').hide();

        jQuery('.Social.Media').hide();

        jQuery('.SEO').hide();

        jQuery('.Print').hide();

        jQuery('.Branding').hide();

    })

    jQuery('.boton_port.design').click(function () {

        jQuery('.Todos').hide();

        jQuery('.Packaging').hide();

        jQuery('.eCommerce').hide();

        jQuery('.Website').hide();

        jQuery('.photography').hide();

        jQuery('.Graphic.design').show();

        jQuery('.Social.Media').hide();

        jQuery('.SEO').hide();

        jQuery('.Print').hide();

        jQuery('.Branding').hide();

    })

    jQuery('.boton_port.social_media').click(function () {

        jQuery('.Todos').hide();

        jQuery('.Packaging').hide();

        jQuery('.eCommerce').hide();

        jQuery('.Website').hide();

        jQuery('.photography').hide();

        jQuery('.Graphic.design').hide();

        jQuery('.Social.Media').show();

        jQuery('.SEO').hide();

        jQuery('.Print').hide();

        jQuery('.Branding').hide();

    })

    jQuery('.boton_port.seo').click(function () {

        jQuery('.Todos').hide();

        jQuery('.Packaging').hide();

        jQuery('.eCommerce').hide();

        jQuery('.Website').hide();

        jQuery('.photography').hide();

        jQuery('.Graphic.design').hide();

        jQuery('.Social.Media').hide();

        jQuery('.SEO').show();

        jQuery('.Print').hide();

        jQuery('.Branding').hide();

    })

    jQuery('.boton_port.imprenta').click(function () {

        jQuery('.Todos').hide();

        jQuery('.Packaging').hide();

        jQuery('.eCommerce').hide();

        jQuery('.Website').hide();

        jQuery('.Photography').hide();

        jQuery('.Graphic.design').hide();

        jQuery('.Social.Media').hide();

        jQuery('.SEO').hide();

        jQuery('.Print').show();

        jQuery('.Branding').hide();

    })





})





window.onscroll = function () {

    scrollFunction()

};





function scrollFunction() {

    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

        jQuery('.header_icecream_movil').css('top', '-300px');

    } else {

        jQuery('.header_icecream_movil').css('top', '0px');





    }

}





jQuery('.open-servicios').click(function () {

    jQuery('#serviciosm').toggleClass('positive');

    jQuery('.servicios').toggleClass('positive');

    jQuery('.header_icecream_movil').toggleClass('positive');

    jQuery('body').toggleClass('positive');

    jQuery('div.botones_menu_movil').toggleClass('positive')

    jQuery('#serviciosm img').toggleClass('positive')



})





$(document).ready(function () {

    var width = $(window).width();

    /*$('li.caracteristicas').click(function () {

        $('div.caracteristicas').toggleClass('izquierda');

        $('.botone_js').toggleClass('caracteristicas_on');

        $(this).toggleClass('amarillo');



        if ($('div.caracteristicas').hasClass('caracteristicas_on')) {

            jQuery('.header_icecream_movil').hide();





        } else {

            jQuery('.header_icecream_movil').show();





        }

    });

    $('li.precios').click(function () {

        $('div.precios_c').toggleClass('izquierda');

        $('.botone_js').toggleClass('caracteristicas_on');

        $(this).toggleClass('amarillo');



        if ($('div.precios_c').hasClass('precios_on')) {

            jQuery('.header_icecream_movil').hide();





        } else {

            jQuery('.header_icecream_movil').show();





        }

    });*/

    /*   $('li.faqs').click(function () {

           $('div.faqs_c').toggleClass('izquierda');

           $('.botone_js').toggleClass('faqs_on');

           $(this).toggleClass('amarillo');



           if ($('div.faqs_c').hasClass('faqs_on')) {

               jQuery('.header_icecream_movil').hide();





           } else {

               jQuery('.header_icecream_movil').show();





           }

       });*/

})

/*$(window).on("scroll", function () {

    var scrollHeight = $(document).height();

    var scrollPosition = $(window).height() + $(window).scrollTop();

    if ((scrollHeight - scrollPosition) / scrollHeight === 0) {

        $('.menu_movil ').css('bottom', '-3000px');

    } else {

        $('.menu_movil ').css('bottom', '0px');

    }

});

 $(document).ready(function(){

    $('.name_card').change(function(){

  valor=$(this).val();

    $('#billing_first_name').val(valor);

  })

}) */

$(document).ready(function () {

    jQuery(document).on('click', '.boton_compra', function () {

        jQuery(document).on('click', '#place_order');

    })

    /*$(window).scroll(function () {

        if ($(document).scrollTop() > 0) {

            jQuery('.area').addClass('bubble');



        } else {

            jQuery('.area').removeClass('bubble');

        }

    })*/

    jQuery(document).on('click', '.a_pedido', function () {

        boton = jQuery(this);

        pedido_id = jQuery(this).attr('rel');

        $('#order_ver').html('<img style="width: 141px;" src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif">');





        //La llamada AJAX

        $.ajax({

            type: "post",

            url: ajax_call.ajaxurl, // Pon aquí tu URL

            data: {

                action: "get_pedido",

                pedido_id: pedido_id,





            },

            error: function (response) {

                console.log('error');

                $('#order_ver').html(response);

            },

            success: function (response) {

                console.log('true');

                $('#order_ver').html(response);





            }

        })



    });

    jQuery(document).on('click', '.boton_volver', function () {

        $('#order_ver').html('<img style="width: 141px;" src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif">');

        //La llamada AJAX

        $.ajax({

            type: "post",

            url: ajax_call.ajaxurl, // Pon aquí tu URL

            data: {

                action: "pedidos_volver",

            },

            error: function (response) {

                console.log('error');

                $('#order_ver').html(response.data);

            },

            success: function (response) {

                console.log(response);





                $('#order_ver').html(response);





            }

        })



    });

    jQuery(document).on('click', '.boton_guardar', function () {

        //La llamada AJAX

        var nombre = $('input.nombre').val();

        var apellido = $('input.apellido').val();

        var email = $('input.mail').val();

        var direccion = $('input.direccion_1').val()

        var telefono = $('input.tel').val();

        var pass = $('#contrasena').val();



        $.ajax({

            type: "post",

            url: ajax_call.ajaxurl, // Pon aquí tu URL

            data: {

                action: "guardar_perfil",

                nombre: nombre,

                email: email,

                apellido: apellido,

                direccion: direccion,

                telefono: telefono,

                pass: pass,



            },

            error: function (response) {

                console.log('error');



            },

            success: function (response) {

                jQuery('.centrar_boton').append('Guardado correctamente');

                jQuery('input.pass').css('border', '1px lime solid');

                jQuery('input.direccion').css('border', '1px lime solid');

                jQuery('input.nombre').css('border', '1px lime solid');

                jQuery('input.apellido').css('border', '1px lime solid');

                jQuery('input.mail').css('border', '1px lime solid');

                jQuery('input.tel').css('border', '1px lime solid');







                console.log(obj);

                if (obj.includes('pass')) {

                    jQuery('input.pass').css('border', '1px lime solid');

                }

                if (obj.includes('direccion')) {

                    jQuery('input.direccion').css('border', '1px lime solid');

                }

                if (obj.includes('nombre')) {

                    jQuery('input.nombre').css('border', '1px lime solid');

                }

                if (obj.includes('apellido')) {

                    jQuery('input.apellido').css('border', '1px lime solid');

                }

                if (obj.includes('mail')) {

                    jQuery('input.mail').css('border', '1px lime solid');

                }

                if (obj.includes('telefono')) {

                    jQuery('input.tel').css('border', '1px lime solid');

                }





            }

        })



    });





})

jQuery(document).ready(function () {



    jQuery(document).on('click', '.cierre_factura', function () {

        jQuery('.factura_over').fadeOut(200);

    })



    jQuery(document).on('click', '.boton_factura', function () {

        jQuery('.factura_over').fadeIn(200);

        product_id = jQuery(this).attr('rel');

    });



    jQuery('.menu_movil_abrir').click(function () {

        jQuery('.menu_column').toggleClass('open')

    })



    jQuery(document).on('click', '.enviar_factura', function () {



        product_id = jQuery('span.boton_factura').attr('rel');

        nombre_contacto = jQuery('.form_factura .nombre_f').val();

        apellidos_contacto = jQuery('.form_factura .apellido_f').val();

        mail_contacto = jQuery('.form_factura .mail_f').val();

        tel_contacto = jQuery('.form_factura .tel_f').val();

        direccion_contacto = jQuery('.form_factura .direccion_1_f').val();

        razon_contacto = jQuery('.form_factura .razon_f').val();

        nif_contacto = jQuery('.form_factura .nif_f').val();

        mail_empresa = jQuery('.form_factura .mail_empresa_f').val();

        tel_empresa = jQuery('.form_factura .tel_empresa_f').val();

        direccion_empresa = jQuery('.form_factura .direccion_2_f').val();

        if ((nombre_contacto == "") || (apellidos_contacto == "") || (mail_contacto == "") || (tel_contacto == "") || (direccion_contacto == "") || (razon_contacto == "") || (nif_contacto == "") || (mail_empresa == "") || (tel_empresa == "") || (direccion_empresa == "")) {

            jQuery('.mensajes_form').text('Error, rellena todos los campos');

        } else {

            //La llamada AJAX

            jQuery.ajax({

                type: "post",

                url: ajax_call.ajaxurl,

                data: {

                    action: "pedir_factura",

                    product_id: product_id,

                    nombre_contacto: nombre_contacto,

                    apellidos_contacto: apellidos_contacto,

                    mail_contacto: mail_contacto,

                    tel_contacto: tel_contacto,

                    direccion_contacto: direccion_contacto,

                    razon_contacto: razon_contacto,

                    nif_contacto: nif_contacto,

                    mail_empresa: mail_empresa,

                    tel_empresa: tel_empresa,

                    direccion_empresa: direccion_empresa,

                },

                error: function (response) {

                    jQuery('.mensajes_form').text('Ha ocurrido un error, ponte en contacto con la administración');

                },

                success: function (response) {

                    jQuery('.mensajes_form').text('Tu factura se ha solicitado correctamente');

                    jQuery('.mensajes_form').css('color', 'green');

                    setTimeout(function () {

                        jQuery('.factura_over').fadeOut(200)

                    }, 3000);

                }

            })

        }

    });

    jQuery(document).on('click', '.boton_cancelar', function () {

        product_id = jQuery(this).attr('rel');

        jQuery.ajax({

            type: "post",

            url: ajax_call.ajaxurl,

            data: {

                action: "cancelar_sus",

                product_id: product_id,

            },

            error: function (response) {

                jQuery('.mensajes_form').text('Ha ocurrido un error, ponte en contacto con la administración');

            },

            success: function (response) {

                jQuery('.cambia_sus').text('La cancelación de tu suscripción se ha procesado correctamente');



            }

        })

    })

    jQuery(document).on('click', '.enlace_registro', function () {

        jQuery('.xx_inyectable').html('<img style="width: 141px;" src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif">');



        jQuery.ajax({

            type: "post",

            url: ajax_call.ajaxurl,

            data: {

                action: "registro_ajax",



            },

            error: function (response) {



            },

            success: function (response) {

                jQuery('.xx_inyectable').html(response);





            }

        })

    })





    function validateEmail($email) {

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})/;

        return emailReg.test($email);



    }





    jQuery(document).on('keyup', '.p_form', function () {

        var nombre = jQuery('.nombre_f').val();

        var apellido = jQuery('.apellido_f').val();

        var email = jQuery('.mail_f').val();

        var pass = jQuery('.pass_form_reg').val();

        var confirm = jQuery('.pass_form_reg_confir').val()



        if ((nombre == '') || (apellido == '') || (email == '') || (pass == '') || (confirm == '')) {

            jQuery('.enviar_reg').removeClass('activate_reg');

            jQuery('.enviar_reg').addClass('desactivate_reg');

        } else {

            jQuery('.enviar_reg').addClass('activate_reg');

            jQuery('.enviar_reg').removeClass('desactivate_reg');

        }

        if (!validateEmail(email)) {

            jQuery('.mensajes_form').text('Introduce un email válido');

            jQuery('.mail_f').css('border', 'solid 1px red');

            jQuery('.enviar_reg').removeClass('activate_reg');

            jQuery('.enviar_reg').addClass('desactivate_reg');



        } else {

            jQuery('.mensajes_form').text('');

            jQuery('.mail_f').css('border', 'solid 1px green');



        }

        if (jQuery('.pass_form_reg').val() == jQuery('.pass_form_reg_confir').val()) {



            jQuery('.pass_form_reg ,.pass_form_reg_confir ').css('border', 'solid 1px green');

            jQuery('.mensajes_form').text('');



        } else if (jQuery('.pass_form_reg').val() != jQuery('.pass_form_reg_confir').val()) {

            jQuery('.pass_form_reg ,.pass_form_reg_confir ').css('border', 'solid 1px red');



            jQuery('.mensajes_form').text('Las contraseñas no coinciden');

            jQuery('.enviar_reg').removeClass('activate_reg');

            jQuery('.enviar_reg').addClass('desactivate_reg');





        }

    })

    jQuery(document).on('click', '.activate_reg', function () {

        var nombre = jQuery('.nombre_f').val();

        var apellido = jQuery('.apellido_f').val();

        var email = jQuery('.mail_f').val();

        var pass = jQuery('.pass_form_reg').val();

        jQuery('.col-12 img.logo').hide(100);

        jQuery('.col-12 img.logo_gif').show(100);



        jQuery.ajax({

            type: "post",

            url: ajax_call.ajaxurl,

            data: {

                action: "insert_user",

                nombre: nombre,

                apellido: apellido,

                email: email,

                pass: pass,

            },

            error: function (response) {

                jQuery('.xx_inyectable').html('<span>Este usuario ya existe</span>');

                console.log(response);

            },

            success: function (response) {

                html = ''

                jQuery('.xx_inyectable').html('<div class="col-4 my-auto">\n' +

                    '    <div class="container login">\n' +

                    '        <div class="row justify-content-center">\n' +

                    '            <div class="col-xl-12 col-lg-12 col-sm-12 col-12 my-auto">\n' +

                    '                <div id="login-code-container">\n' +

                    '                    <div class="logotipo">\n' +

                    '                        <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/01/21085156/logo-1.svg"\n' +

                    '                             alt="" class="logo">\n' +

                    '                    </div>\n' +

                    '                    <span style="margin-top: 20px; display: block;" class="mensajes_form">\n' +

                    '                        Usuario registrado correctamente\n' +

                    '                    </span>\n' +

                    '\n' +

                    '                </div>\n' +

                    '            </div>\n' +

                    '        </div>\n' +

                    '    </div>\n' +

                    '</div>');

                setTimeout(

                    function () {

                        jQuery(location).attr('href', '/login');

                    }, 2000);



            }





        })





    })

    jQuery(document).on('click', '#wp-submit1', function () {

        var email = jQuery('#user_login').val();

        var pass = jQuery('#user_pass').val();

        jQuery('img.logo').hide(100);

        jQuery('img.logo_gif').show(100);

        jQuery.ajax({

            type: "post",

            url: ajax_call.ajaxurl,

            data: {

                action: "login_ajax_log",

                email: email,

                pass: pass,



            },

            error: function (response) {

                jQuery('.logotipo').append(response);

            },

            success: function (response) {

                jQuery(location).attr('href', '/area-usuario/');





            }

        })

    })

    $('.cerrar_sesion').click(function () {

        jQuery('body').html('<div style="height:100vh;width:100vw; top: 0; text-align: center; justify-content: center;display: flex; align-items: center; position: absolute; z-index: 999999; " class="loader_load"><img style="position: absolute; width: 200px; " src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif"></div>')



        jQuery.ajax({

            type: "post",

            url: ajax_call.ajaxurl,

            data: {

                action: "logout_mwlb",

            },

            error: function (response) {

                jQuery('.logotipo').append(response);

            },

            success: function (response) {

                jQuery(location).attr('href', '/login');



            }

        })



    })





    /*------ANIMACIONES HOME-------*/

    /*jQuery(document).ready(function () {

        var windowHeight = window.innerHeight - window.innerHeight/1.5 ;

        var windowWidth = window.innerWidth;

        var scrollArea = 1000 - windowHeight;

        var telefono1 = jQuery('.imagen_1>img');

        var telefono2 = jQuery('.imagen_2>img');

        window.addEventListener('scroll', function () {



            var scrollTop = window.pageYOffset || window.scrollTop;

            var scrollPercent = scrollTop / scrollArea || 0;

            telefono1.css('top',  );

            telefono2.css('top',800 - scrollPercent*window.innerHeight*0.6 + 'px' );

        })

    })*/



    $('.boton_ticket_crear').click(function () {

        jQuery.ajax({

            type: "post",

            url: ajax_call.ajaxurl,

            data: {

                action: "crear_ticket",

            },

            error: function (response) {



            },

            success: function (response) {

                $('.inyectable_tickets').html(response);



            }

        })



    })

    $(document).on('click','.boton_enviar_ticket', function () {

        var asunto = jQuery('#input_asunto').val();

        var categoria = jQuery('#categoria_ticket').val();

        var mensaje = jQuery('#input_mensaje').val();

        var fecha = $.datepicker.formatDate('yy/mm/dd', new Date());

        jQuery.ajax({

            type: "post",

            url: ajax_call.ajaxurl,

            data: {

                action: "publicar_ticket",

                asunto: asunto,

                categoria: categoria,

                mensaje: mensaje,

                fecha: fecha,

            },

            error: function (response) {

                console.log(response.error);

            },

            success: function (response) {

                console.log('ticket registrado');

                location.reload();



            }

        })



    })

    $(document).on('click','.fila_ticket', function () {

        var id = jQuery(this).attr('rel');

        jQuery.ajax({

            type: "post",

            url: ajax_call.ajaxurl,

            data: {

                action: "ver_ticket_single",

                id: id,

            },

            error: function (response) {



            },

            success: function (response) {

                $('.inyectable_tickets').html(response);



            }

        })



    })

})



