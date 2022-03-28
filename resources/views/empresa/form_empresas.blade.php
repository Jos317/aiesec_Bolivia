<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/IconAIESEC.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/stylestge.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
    <title>AIESEC Bolivia</title>
</head>


<body>


    @extends('plantilla.menu')

    <main>
        <section class="home grid" id="home">
            <div class="home__container">
                <div class="home__content container">

                    <h1 class="home__title">
                        Talento de todo el mundo,
                        en su organización.
                    </h1>
                    <p class="home__description">
                        Hagamos su empresa sea más competitiva mientras aprovecha el alcance
                        global de AIESEC con jóvenes especialistas en las necesidades de cada negocio.
                    </p>

                </div>

            </div>

            <div class="home__container2">
                <div class="home__content container">
                    <!-- <div class="home__data">
                            <div class="home__data-group">
                                <h2 class="home__data-number">+1200</h2>
                                <h3 class="home__data-title">Miembros</h3>
                                <p class="home__data-description">De jóvenes, para jóvenes.</p>
                            </div>
        
                            <div class="home__data-group">
                                <h2 class="home__data-number">200</h2>
                                <h3 class="home__data-title">Aliados</h3>
                                <p class="home__data-description">Ambiente multicultural en tu organización.</p>
                            </div>
                        </div> -->
                </div>

            </div>


        </section>

        <div class="specialty section container" id="specialty">
            <div class="specialty__container">
                <div class="specialty__box">
                    <h2 class="section__title">
                        ¿Cómo hacer su empresa más competitiva?
                    </h2>

                    <div>
                        <a href="#contact" class="button specialty__button">¡Quiero Talento!</a>
                    </div>
                </div>

                <div class="specialty__category">
                    <div class="specialty__group specialty__line">
                        <i class='bx bx-heart specialty__img'></i>

                        <h3 class="specialty__title">Adquiera talento de forma fácil</h3>
                        <p class="specialty__Description">
                            Detrás de cada organización exitosa hay una fuerza de trabajo
                            innovadora, global y diversa. Con AIESEC, adquirir talento internacional
                            es tan fácil como reclutar en el mercado local. Consiga una perspectiva fresca
                            de jóvenes de todo el mundo.
                        </p>
                    </div>

                    <div class="specialty__group specialty__line">
                        <i class='bx bx-world  specialty__img'></i>

                        <h3 class="specialty__title">Gane competitividad y perspectiva global</h3>
                        <p class="specialty__Description">
                            Cambie las cartas del juego introduciendo experiencias multiculturales y
                            habilidades únicas; incluyendo a su equipo talento joven de diferentes
                            culturas del mundo, puede ampliar el entendimiento del mercado y las prácticas
                            de su negocio.
                        </p>
                    </div>

                    <div class="specialty__group specialty__line">
                        <i class='bx bx-bulb specialty__img'></i>

                        <h3 class="specialty__title">Impulse su cultura organizacional</h3>
                        <p class="specialty__Description">
                            ¡Los Millenials y la Generación Z ya están dominando y liderando la fuerza
                            laboral a nivel global! La generación Alpha ya casi. Obtenga un entorno creativo y
                            fomente la innovación en su empresa con talento joven competitivo.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="quality section" id="premium">
            <div class="quality__container container">
                <div class="quality__content grid">
                    <div class="quality__images">
                        <img src="{{ asset('assets/img/globalreport.png') }}" alt="" class="quality__img-big">
                    </div>

                    <div class="quality__data">
                        <span class="quality__special">PARA DESCARGAR</span>
                        <h1 class="quality__title">Informe de Empleabilidad Global de los jóvenes</h1>
                        <p class="quality__description">
                            Los Millenials & Centennials ya están dominando el mercado laboral.
                            Comprenda cómo funciona el mercado laboral global para estudiantes y graduados,
                            especialmente en lo que respecta a la movilidad global de los jóvenes talentos.
                            Participaron en esta encuesta realizada por AIESEC más de 400 empresas de 65 países.
                            El informe contiene los resultados en términos de las habilidades esperadas que esperan
                            los empleadores al contratar a jóvenes talentos.
                        </p>

                        <div class="quality__buttons">
                            <a download href="../assets/download/#" class="button">
                                Descargar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section container" id="services">

            <div class="specialty__box">
                <h2 class="section__title">Estas son algunas de las areas lideradas por AIESEC</h2>
                <div>
                    <a href="#contact" class="button specialty__button">¡Quiero Talento!</a>
                </div>
            </div>

            <div class="services_container container grid">
                <!--==================== SERVICES 1 ====================-->
                <div class="services_content services__content1">
                    <div>
                        <h3 class="services_title">Ingenieria <br> de Sistemas</h3>
                    </div>

                    <span class="services_button">
                        Talento Global
                    </span>

                </div>
                <!--==================== SERVICES 2 ====================-->
                <div class="services_content services__content2">
                    <div>
                        <h3 class="services_title">Marketing</h3>
                    </div>

                    <span class="services_button">
                        Talento Global
                    </span>
                </div>
                <!--==================== SERVICES 3 ====================-->
                <div class="services_content services__content3">
                    <div>
                        <i class="uil uil-arrow services_icon"></i>
                        <h3 class="services_title">Finanzas</h3>
                    </div>

                    <span class="services_button">
                        Talento Global
                    </span>
                </div>

                <div class="services_content services__content4">
                    <div>
                        <i class="uil uil-arrow services_icon"></i>
                        <h3 class="services_title">Tecnología de <br> la información</h3>
                    </div>

                    <span class="services_button">
                        Talento Global
                    </span>
                </div>

                <div class="services_content services__content5">
                    <div>
                        <i class="uil uil-arrow services_icon"></i>
                        <h3 class="services_title">Diseño grafico <br> y fotografia</h3>
                    </div>

                    <span class="services_button">
                        Talento Global
                    </span>
                </div>

                <div class="services_content services__content6">
                    <div>
                        <i class="uil uil-arrow services_icon"></i>
                        <h3 class="services_title">Ventas</h3>
                    </div>

                    <span class="services_button">
                        Talento Global
                    </span>
                </div>

                <div class="services_content services__content7">
                    <div>
                        <i class="uil uil-arrow services_icon"></i>
                        <h3 class="services_title">Admin. de <br> Negocios</h3>
                    </div>

                    <span class="services_button">
                        Talento Global
                    </span>
                </div>

                <div class="services_content services__content8">
                    <div>
                        <i class="uil uil-arrow services_icon"></i>
                        <h3 class="services_title">Desarrollo de <br> Negocios</h3>
                    </div>

                    <span class="services_button">
                        Talento Global
                    </span>
                </div>
            </div>
        </section>

        <!--=============== CONTACT ===============-->
        <section class="contact section" id="contact">
            <div class="container">
                <h2 class="section__title">Contactanos</h2>
                <h3 class="contact__title">Escribe tus datos!</h3>
            </div>

            <form action="{{ url('empresa/store') }}" class="contact__form" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="contact__container container grid">
                    <div class="contact__content">
                        <div class="contacts2">
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Nombre de la empresa / ONG: *</label>
                                <input type="text" name="nombre_empresa" maxlength="50"
                                    placeholder="Inserta Nombres Completo" class="contact__form-input" required>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Nombre del Representante *</label>
                                <input type="text" name="nombre_representante" maxlength="50"
                                    placeholder="Inserta Representante" class="contact__form-input" required>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Cargo del representante *</label>
                                <input type="text" name="cargo_representante" maxlength="50"
                                    placeholder="Cargo Representante" class="contact__form-input" required>
                            </div>
                            <p>Página Web / Facebook de la Institución </p>
                            <br>
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">En caso de tener </label>
                                <input name="pagina_web" class="contact__form-input" maxlength="100" type="text"
                                    placeholder="Página Web...">
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Celular de la Institución *</label>
                                <input name="celular" class="contact__form-input" maxlength="10" type="text"
                                    placeholder="Celular..." required>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Teléfono de la Institución </label>
                                <input name="telefono" class="contact__form-input" maxlength="10" type="text"
                                    placeholder="Teléfono...">
                            </div>


                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Correo del representante de la empresa
                                    *</label>
                                <input name="correo_representante" class="contact__form-input" type="email"
                                    placeholder="Correo..." required>
                            </div>
                        </div>
                    </div>

                    <div class="contact__content">
                        <div class="contacts2">
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Correo de la empresa *</label>
                                <input name="correo_empresa" class="contact__form-input" type="email"
                                    placeholder="Correo empresa..." required>
                            </div>


                            <p>¿En qué departamento se encuentra la </p>
                            <br>
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">empresa / ONG? *</label>
                                <select class="contact__form-input" name="departamento">
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

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Dirección de la empresa / ONG *</label>
                                <input name="direccion" class="contact__form-input" maxlength="50" type="text"
                                    placeholder="Dirección..." required>
                            </div>

                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿A qué se dedica la empresa / ONG? *</label>
                                <textarea class="contact__form-input" name="dedicacion" cols="30" rows="5" required></textarea>
                            </div>


                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">¿A través de qué medio se entero de AIESEC?
                                    *</label>
                                <select class="contact__form-input" name="saber_de_AIESEC">
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

                            <p>Si marcaste Amigos/Familiares, mencione el <br>nombre de dicha persona:</p>
                            <br>
                            <div class="contact__form-div">
                                <label for="" class="contact__form-tag">Nombre (Opcional)</label>
                                <input name="nombre_amigo" class="contact__form-input" maxlength="50" type="text"
                                    placeholder="Nombre...">
                            </div>

                            <button type="submit" class="button">Registrarme</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>


    </main>




    @extends('contactos.index')
    @extends('plantilla.flechaarriba')
    @extends('plantilla.parners')




    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!--<script src="{{ asset('assets/js/main.js') }}"></script>-->
</body>

</html>>
