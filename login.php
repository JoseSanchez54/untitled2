<?php
/*
Template Name: Login_MWLB
*/
genesis();


function login_ajax()
{
    ?>
    <div class="col-xl-4 col-11 my-auto">
    <div class="container login">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-sm-12 col-12 my-auto">
                <div id="login-code-container">
                    <div class="logotipo">
                        <img src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/01/21085156/logo-1.svg"
                             alt="" class="logo">
                        <img style="display: none; width: 70px;" src="https://icecreamassets.s3.eu-west-1.amazonaws.com/wp-content/uploads/2021/04/23113545/Gif_Web_Ice_Cream_SIN_FONDO.gif"
                             alt="" class="logo_gif">
                    </div>

                    <?php
                    if (is_user_logged_in()) {
                        ?>
                        <p style="text-align:center;margin-top:27px;"> Ya estas conectado</p>
                        <a style="text-align:center;  display: block;"
                           href="/wp-login.php?action=logout&amp;redirect_to=%2F">Desconectar</a>
                        <?php
                    } else {
                        ?>
                        <form name="loginform1" id="loginform1" >

                            <p class="login-username">
                                <input class="input_login" type="text" name="log" id="user_login" class="input" value=""
                                       placeholder="Dirección de correo" size="20">
                            </p>
                            <p class="login-password">
                                <input class="input_login" type="password" name="pwd" id="user_pass" class="input"
                                       value=""
                                       placeholder="Contraseña" size="20">
                            </p>
                            <p class="login-submit">
                                <a style="display: inline-block;" type="submit" name="wp-submit1" id="wp-submit1"
                                       class="button button-primary boton_acceder"
                                   >Acceder</a>

                            </p>
                            <span class="frase_reg">¿Todavia no tienes cuenta? <a
                                        class="enlace_registro"> ¡Regístrate ya!</a></span>


                        </form>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    </div><?php
}


?>

    <div style="justify-content: center;min-height: 100vh; align-items: center;display: flex;width: 100%;"
         class="container">
        <div style="height:100%; width: 100%" class="row justify-content-center">

            <div class="xx_inyectable">
                <?php
                login_ajax();
                ?>

            </div>
        </div>


    </div>
<?php
