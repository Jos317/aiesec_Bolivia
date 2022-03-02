<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/IconAIESEC.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/video.css') }}">
    <title>AIESEC Bolivia</title>
</head>

<body>
    @extends('plantilla.menu')
    <section class="home section" id="home">
        <div class="video">
            <div class="overlay">
                <div class="content2">
                    <center>
                        <img src="{{ asset('assets/img/GV_horizontal_white.png') }}" alt="">
                    </center>
                </div>
            </div>
            <video autoplay muted loop id="myVideo">
                <source src="{{ asset('assets/img/video.mp4') }}" type="video/mp4">
                <source src="{{ asset('assets/img/video.ogg') }}" type="video/ogg">
                <source src="{{ asset('assets/img/video.webm') }}" type="video/webm">
            </video>
        </div>
    </section>



    @extends('contactos.index')
    @extends('plantilla.flechaarriba')

    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    {{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}


    @extends('plantilla.parners')
</body>

</html>


<div class="content">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <a href="{{ url('/') }}">
                            <button type="button" class="btn btn-secondary btn-sm btn-outline-dark btn-pill">
                                <i class="fas fa-arrow-left"></i>Atras
                            </button>
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <div style="display:table; text-align: center;">
                            <h4 class="text-primary" style="display:table-cell; vertical-align:middle;">Profesionales
                                Internacionales</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('empresa/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Nombre de la empresa / ONG: *</label>
                                <input name="nombre_empresa" class="form-control" maxlength="50" type="text"
                                    placeholder="Nombre..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Nombre del representante *: </label>
                                <input name="nombre_representante" class="form-control" maxlength="50" type="text"
                                    placeholder="Nombre..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Cargo del representante *: </label>
                                <input name="cargo_representante" class="form-control" maxlength="50" type="text"
                                    placeholder="Cargo..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Página Web / Facebook de la Institución: </label>
                                <label class="text-info">En caso de tener </label>
                                <input name="pagina_web" class="form-control" maxlength="100" type="text"
                                    placeholder="Página Web...">
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Celular de la Institución *: </label>
                                <input name="celular" class="form-control" maxlength="10" type="text"
                                    placeholder="Celular..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Teléfono de la Institución *: </label>
                                <input name="telefono" class="form-control" maxlength="10" type="text"
                                    placeholder="Teléfono..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Correo del representante de la empresa *: </label>
                                <input name="correo_representante" class="form-control" type="email"
                                    placeholder="Email..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Correo de la empresa *: </label>
                                <input name="correo_empresa" class="form-control" type="email" placeholder="Email..."
                                    required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿En qué departamento se encuentra la empresa / ONG? *:
                                </label>
                                <select class="form-control" name="departamento">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="La Paz">La Paz</option>
                                    <option class="text-dark" value="Cochabamba">Cochabamba</option>
                                    <option class="text-dark" value="Santa Cruz">Santa Cruz</option>
                                    <option class="text-dark" value="Chuquisaca">Chuquisaca</option>
                                    <option class="text-dark" value="Tarija">Tarija</option>
                                    <option class="text-dark" value="Potosí">Potosí</option>
                                    <option class="text-dark" value="Oruro">Oruro</option>
                                    <option class="text-dark" value="Pando">Pando</option>
                                    <option class="text-dark" value="Beni">Beni</option>
                                    <option class="text-dark" value="Se encuentra en 2 o más departamentos">Se
                                        encuentra en 2 o más departamentos</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Dirección de la empresa / ONG*: </label>
                                <input name="direccion" class="form-control" maxlength="50" type="text"
                                    placeholder="Dirección..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿A qué se dedica la empresa / ONG? *: </label>
                                <textarea name="dedicacion" cols="50" rows="7"></textarea>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿A través de qué medio se entero de AIESEC? *: </label>
                                <select class="form-control" name="saber_de_AIESEC">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Facebook">Facebook</option>
                                    <option class="text-dark" value="Instragam">Instragam</option>
                                    <option class="text-dark" value="Linkedln">Linkedln</option>
                                    <option class="text-dark" value="Correo Electrónico">Correo Electrónico
                                    </option>
                                    <option class="text-dark" value="Sitio Web">Sitio Web</option>
                                    <option class="text-dark" value="Otras redes sociales">Otras redes sociales
                                    </option>
                                    <option class="text-dark" value="Amigos / Familiares">Amigos / Familiares
                                    </option>
                                    <option class="text-dark" value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Si marcaste Amigos/Familiares, mencione el nombre de
                                    dicha
                                    persona: </label>
                                <label class="text-info">(Opcional) </label>
                                <input name="nombre_amigo" class="form-control" maxlength="50" type="text"
                                    placeholder="Nombre...">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-right: 15px;">
                            <div class="col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>














<section class="form_wrap">

    <section class="cantact_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>Profesionales <br>Internacionales</h2>
        </section>
        <section class="info_items">
            <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
            <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
        </section>
    </section>

    <form action="" class="form_contact">
        <h2>Envia un mensaje</h2>
        <div class="user_info">
            <label for="names">Nombres *</label>
            <input type="text" id="names">

            <label for="phone">Telefono / Celular</label>
            <input type="text" id="phone">

            <label for="email">Correo electronico *</label>
            <input type="text" id="email">

            <label for="mensaje">Mensaje *</label>
            <textarea id="mensaje"></textarea>

            <input type="button" value="Enviar Mensaje" id="btnSend">
        </div>
    </form>

</section>



<style>
    @font-face {
        font-family: 'FontAwesome';
        src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
        src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
        font-weight: normal;
        font-style: normal;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :focus {
        outline: none;
    }

    body {
        background: #DBDBDB;
        font-family: 'Open sans';
    }

    /* FORMULARIO =================================== */

    .form_wrap {
        width: 1050px;
        height: 530px;
        margin: 50px auto;
        display: flex;

        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    }

    /* Informacion de Contacto*/

    .cantact_info::before {
        content: '';
        width: 100%;
        height: 100%;

        position: absolute;
        top: 0;
        left: 0;

        background: #4091EC;
        opacity: 0.9;
    }

    .cantact_info {
        width: 38%;
        position: relative;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        background-image: url('../fondo.jpg');
        background-size: cover;
        background-position: center center;

    }

    .info_title,
    .info_items {
        position: relative;
        z-index: 2;
        color: #fff;
    }

    .info_title {
        margin-bottom: 60px;
    }

    .info_title span {
        font-size: 100px;
        display: block;
        text-align: center;
        margin-bottom: 15px;
    }

    .info_title h2 {
        font-size: 35px;
        text-align: center;
    }

    .info_items p {
        display: flex;
        align-items: center;

        font-size: 16px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .info_items p:nth-child(1) span {
        font-size: 30px;
        margin-right: 10px;
    }

    .info_items p:nth-child(2) span {
        font-size: 50px;
        margin-right: 15px;
        margin-left: 4px;
    }


    /* Formulario de contacto*/
    form.form_contact {
        width: 62%;
        padding: 30px 40px;
    }

    form.form_contact h2 {
        font-size: 25px;
        font-weight: 600;
        color: #303030;
        margin-bottom: 30px;
    }

    form.form_contact .user_info {
        display: flex;
        flex-direction: column;
    }

    form.form_contact label {
        font-weight: 600;
    }

    form.form_contact input,
    form.form_contact textarea {
        width: 100%;
        padding: 8px 0px 5px;
        margin-bottom: 20px;

        border: none;
        border-bottom: 2px solid #D1D1D1;

        font-family: 'Open sans';
        color: #5A5A5A;
        font-size: 14px;
        font-weight: 400;
    }

    form.form_contact textarea {
        max-width: 100%;
        min-width: 100%;
        max-height: 90px;
    }

    form.form_contact input[type="button"] {
        width: 180px;
        background: #4091EC;
        padding: 10px;
        border: none;
        border-radius: 25px;

        align-self: flex-end;

        color: #fff;
        font-family: 'Open sans';
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
    }

    form.form_contact input[type="button"]:hover {
        background: #3371B6;
    }

    /* Ventana de errores*/
    .modal_wrap {
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);

        position: fixed;
        top: 0;
        left: 0;
        z-index: 3;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mensaje_modal {
        background: #fff;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
        width: 400px;
        padding: 30px 20px 15px;
    }

    .mensaje_modal h3 {
        text-align: center;
        font-family: 'Ubuntu';
        font-size: 20px;
        font-weight: 400;
    }

    .mensaje_modal h3:after {
        content: '';
        display: block;
        width: 100%;
        height: 1px;
        background: #C5C5C5;
        margin: 10px 0px 15px;
    }

    .mensaje_modal p {
        font-size: 16px;
        color: #606060;
    }

    .mensaje_modal p:before {
        content: "\f00d";
        font-family: FontAwesome;
        display: inline-block;
        color: #E25151;
        margin-right: 8px;
    }

    #btnClose {
        display: inline-block;
        padding: 3px 10px;
        margin-top: 10px;

        background: #E25151;
        color: #fff;
        border: 2px solid #B14141;
        cursor: pointer;

        float: right;
    }

</style>
