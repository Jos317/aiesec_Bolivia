<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/IconAIESEC.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/stylevolglo.css') }}">
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
                        Voluntarios internacionales para ONGs
                    </h1>
                    <p class="home__description">
                        Conoce cómo tu organización puede atraer a jóvenes de todo el mundo para participar en proyectos
                        de impacto social. </p>
                </div>
            </div>
            <div class="home__container2">
                <div class="home__content container">
                    <div class="home__data">
                        <!-- <div class="home__data-group">
                                <h2 class="home__data-number">+1200</h2>
                                <h3 class="home__data-title">Miembros</h3>
                                <p class="home__data-description">De jóvenes, para jóvenes.</p>
                            </div>
        
                            <div class="home__data-group">
                                <h2 class="home__data-number">200</h2>
                                <h3 class="home__data-title">Aliados</h3>
                                <p class="home__data-description">Ambiente multicultural en tu organización.</p>
                            </div> -->
                    </div>
                </div>

            </div>


        </section>

        <div class="specialty section container" id="specialty">
            <div class="specialty__container">
                <div class="specialty__box">
                    <h2 class="section__title">
                        ¿Por qué buscar voluntarios con AIESEC?
                    </h2>

                    <div>
                        <a href="#contact" class="button specialty__button">¡Unirme!</a>
                    </div>
                </div>

                <div class="specialty__category">
                    <div class="specialty__group specialty__line">
                        <i class='bx bx-heart specialty__img'></i>

                        <h3 class="specialty__title">Perspectiva Global</h3>
                        <p class="specialty__Description">
                            Añade una perspectiva multicultural a tu organización involucrando voluntarios
                            internacionales a tus proyectos
                        </p>
                    </div>

                    <div class="specialty__group specialty__line">
                        <i class='bx bx-world  specialty__img'></i>

                        <h3 class="specialty__title">Búsqueda simple</h3>
                        <p class="specialty__Description">
                            Encuentra fácilmente voluntarios internacionales de diferentes perfiles para tu proyecto
                            social gracias a la red global de AIESEC.
                        </p>
                    </div>

                    <div class="specialty__group specialty__line">
                        <i class='bx bx-bulb specialty__img'></i>

                        <h3 class="specialty__title">Proyectos diseñados para impactar</h3>
                        <p class="specialty__Description">
                            Desarrolla un proyecto con AIESEC enfocado en los Objetivos de Desarrollo Sostenible para
                            2030.
                        </p>
                    </div>
                </div>
            </div>
        </div>

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
