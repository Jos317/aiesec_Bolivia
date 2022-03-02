<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/IconAIESEC.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/styletglo.css') }}">
    <title>AIESEC Bolivia</title>
</head>

<body>
    @extends('plantilla.menu')


    <main>
        <section class="home grid" id="home">
            <div class="home__container">
                <div class="home__content container">

                    <h1 class="home__title">
                        <img src="{{ asset('assets/img/GTa_horizontal_white.png') }}" alt="" class="home__img">
                    </h1>
                    <p class="home__description">
                        Con aiesec puedes realizar tus prácticas, pasantías u obtener
                        una oportunidad de trabajo en el exterior que potencia tu hoja de vida y
                        ayuda al crecimiento de tu carrera, además obtienes nuevas competencias y
                        desarrollas tu liderazgo.<br>
                        <br>
                        ¿Quieres un trayecto profesional internacional?
                    </p>

                    <a href="#contact" class="button">¡Unirme!</a>
                </div>

            </div>

            <div class="home__container2">
                <!-- <div class="home__content container">
                        <div class="home__data">
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
                        </div>
                    </div> -->

            </div>


        </section>

        <div class="specialty section container" id="specialty">
            <div class="specialty__container">
                <div class="specialty__box">
                    <h2 class="section__title">
                        Suena interesante ¿verdad?<br>
                        Espera a conocer los beneficios
                    </h2>

                    <div>
                        <a href="#contact" class="button specialty__button">¡Unirme!</a>
                    </div>
                </div>

                <div class="specialty__category">
                    <div class="specialty__group specialty__line">
                        <img src="{{ asset('assets/img/Icon_GT01.png') }}" alt="" class="specialty__img">

                        <h3 class="specialty__title">EXPERIENCIA PROFESIONAL</h3>
                        <p class="specialty__Description">
                            Inscríbete, un asesor local te contactará y además tendrás acceso a la
                            plataforma de proyectos en todo el mundo.
                        </p>
                    </div>

                    <div class="specialty__group specialty__line">
                        <img src="{{ asset('assets/img/Icon_GT02.png') }}" alt="" class="specialty__img">

                        <h3 class="specialty__title">REMUNERACIÓN</h3>
                        <p class="specialty__Description">
                            Oportunidades profesionales con remuneración o no remuneración;
                            según duración de oportunidad y costo de vida del país destino.
                        </p>
                    </div>

                    <div class="specialty__group specialty__line">
                        <img src="{{ asset('assets/img/Icon_GT03.png') }}" alt="" class="specialty__img">

                        <h3 class="specialty__title">DESARROLLO DE LIDERAZGO</h3>
                        <p class="specialty__Description">
                            Desarrollo de liderazgo en ambientes interculturales,
                            retantes y prácticos, que sacarán la mejor versión como profesional.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="blog section" id="blog">
            <div class="blog__container container">
                <h2 class="section__title">
                    Conoce las historias de liderazgo de jóvenes como tu.
                </h2>

                <div class="blog__content grid">
                    <article class="blog__card">
                        <div class="blog__image">
                            <img src="{{ asset('assets/img/bl2.jpg') }}" alt="" class="blog__img">
                            <a href="#" class="blog__button">
                                <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>

                        <div class="blog__data">
                            <h2 class="blog__title">
                                Valentina | Voluntaria Global
                            </h2>
                            <p class="blog__description">
                                “Creyeron tanto en mí, que logré crear un estudio de fotografía y
                                video en la empresa, nunca se había hecho ese proyecto, y con mi esfuerzo
                                y dedicación lo logré”.
                            </p>

                            <div class="blog__footer">
                                <div class="blog__reaction">
                                    <i class="bx bx-comment"></i>
                                    <span>13</span>
                                </div>
                                <div class="blog__reaction">
                                    <i class="bx bx-show"></i>
                                    <span>76</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="blog__card">
                        <div class="blog__image">
                            <img src="{{ asset('assets/img/bl1.jpg') }}" alt="" class="blog__img">
                            <a href="#" class="blog__button">
                                <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>

                        <div class="blog__data">
                            <h2 class="blog__title">
                                Cristhian | Talento Global
                            </h2>
                            <p class="blog__description">
                                “Ser parte del programa de talento global no es solo ir a otro
                                país y adquirir nueva experiencia laboral o nuevas habilidades,
                                también trae consigo la oportunidad de conocer personas nuevas, entornos
                                y culturas totalmente diferentes”.
                            </p>

                            <div class="blog__footer">
                                <div class="blog__reaction">
                                    <i class="bx bx-comment"></i>
                                    <span>3</span>
                                </div>
                                <div class="blog__reaction">
                                    <i class="bx bx-show"></i>
                                    <span>37</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="quality section" id="premium">
            <div class="quality__container container">
                <h2 class="section__title">
                    A pocos pasos de tener una experiencia profesional
                </h2>

                <div class="quality__content grid">
                    <div class="quality__images">
                        <img src="{{ asset('assets/img/Requisitos_01.png') }}" alt="" class="quality__img-big">
                    </div>

                    <div class="quality__data">
                        <h1 class="quality__title">Requisitos Generales</h1>
                        <table style="width: 100%; border: none;">
                            <tbody>
                                <tr>
                                    <td class="table__img">
                                        <img src="{{ asset('assets/img/Icon_GT040.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        <p>Los programas de intercambios están dirigidos a jóvenes entre los 18 y
                                            30 años de edad.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table__img">
                                        <img src="{{ asset('assets/img/Icon_GT05.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        Para esta experiencia debes tener cursado un 70% de tu carrera.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__img">
                                        <img src="{{ asset('assets/img/Icon_GT060.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        El inglés es un factor importante si tu intercambio lo realiza en un país que no
                                        habla tu idioma.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__img">
                                        <img src="{{ asset('assets/img/Icon_GT07.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        Tener algún tipo de experiencia en el área de estudio, así logra ser un
                                        candidato ideal para cualquier organización.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table__img">
                                        <img src="{{ asset('assets/img/Icon_GT08.png') }}" alt=""
                                            class="quality__img-req">
                                    </td>
                                    <td class="table__desciption">
                                        Pagar la cuota adminsitratica a AIESEC (aplican términos y condiciones), comprar
                                        tiquetes, tramites/pagos de Visa y seguro internacional.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="quality__buttons">
                            <button class="button">
                                Postularte
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="specialty section container" id="specialty">
            <div class="specialty__container">
                <div class="specialty__box">
                    <h2 class="section__title">
                        Es necesario que conozca todo el proceso
                    </h2>
                </div>

                <div class="specialty2__category">
                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT08.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            <strong class="active-link">Inscríbete</strong>, un asesor local te contactará y además
                            tendrás
                            acceso a la plataforma de proyectos en todo el mundo.
                        </p>
                    </div>

                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT11.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            <strong class="active-link">Aplica</strong> a las oportunidades que se adaptan a su
                            perfil y
                            a los requisitos solicitados por la empresa.
                        </p>
                    </div>

                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT12.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            Realiza tu <strong class="active-link">entrevista</strong> con el comité local
                            del país destino y con la empresa a la que aplicaste.
                        </p>
                    </div>

                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT08.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            Una vez aprobado en la oportunidad debes realizar el aporte de <strong
                                class="active-link">cuota administrativa</strong>
                            a AEISEC y alistar los demás documentos necesarios para el viaje.
                        </p>
                    </div>

                    <div class="specialty2__group specialty2__line">
                        <img src="{{ asset('assets/img/Icon_GT14.png') }}" alt="" class="specialty2__img">

                        <p class="specialty2__Description">
                            <strong class="active-link">¡Listo!</strong> tu experiencia de intercambio profesional
                            comienza ahora.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--=============== CONTACT ===============-->
        <section class="contact section" id="contact">
            <div class="container">
                <h2 class="section__title">Pasantías
                    Glogales</h2>
            </div>
            <div class="contact__container container grid">
                <div class="contact__content">
                    <h3 class="contact__title">Tienes dudas?</h3>
                    <div class="contact__info">
                        <div class="contact__card">
                            <i class="bx bx-mail-send contact__card-icon"></i>
                            <h3 class="contact__card-title">Email</h3>
                            <span class="contact__card-data">aiesec@gmail.com</span>

                            <a href="mailto:fernandocayolacar@gmail.com" target="_blank" class="contact__button">
                                Escribenos <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                            </a>
                        </div>

                        <div class="contact__card">
                            <i class="bx bxl-whatsapp contact__card-icon"></i>
                            <h3 class="contact__card-title">WhatsApp</h3>
                            <span class="contact__card-data">+591 73665052</span>

                            <a href="" target="_blank" class="contact__button">
                                Escribenos <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                            </a>
                        </div>

                        <div class="contact__card">
                            <i class="bx bxl-messenger contact__card-icon"></i>
                            <h3 class="contact__card-title">Messenger</h3>
                            <span class="contact__card-data">AIESEC Bolivia</span>

                            <a href="" target="_blank" class="contact__button">
                                Escribenos <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact__content">
                    <h3 class="contact__title">Escribe tus datos!</h3>
                    <form action="{{ url('talento/store') }}" class="contact__form" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Nombres *</label>
                            <input type="text" name="nombres" placeholder="Inserta tus Nombres"
                                class="contact__form-input" maxlength="50" required>

                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Apellidos *</label>
                            <input type="text" name="apellidos" maxlength="50" placeholder="Inserta tus Apellidos"
                                class="contact__form-input" required>
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Edad *</label>
                            <select class="contact__form-input" name="edad">
                                <option value="vacio" disabled selected>Seleccione una opción...</option>
                                <option class="text-dark" value="Menos de 18 años">Menos de 18 años</option>
                                <option class="text-dark" value="18">18</option>
                                <option class="text-dark" value="19">19</option>
                                <option class="text-dark" value="20">20</option>
                                <option class="text-dark" value="21">21</option>
                                <option class="text-dark" value="22">22</option>
                                <option class="text-dark" value="23">23</option>
                                <option class="text-dark" value="24">24</option>
                                <option class="text-dark" value="25">25</option>
                                <option class="text-dark" value="26">26</option>
                                <option class="text-dark" value="27">27</option>
                                <option class="text-dark" value="28">28</option>
                                <option class="text-dark" value="29">29</option>
                                <option class="text-dark" value=30">30</option>
                                <option class="text-dark" value="Más de 30 años">Más de 30 años</option>
                            </select>
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Correo *</label>
                            <input type="email" name="correo" maxlength="50" placeholder="Inserta tu Correo"
                                class="contact__form-input" required>
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Celular *</label>
                            <input type="text" name="celular" maxlength="10" placeholder="Inserta tu Celular"
                                class="contact__form-input" required>
                        </div>



                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">¿En que ciudad resides? *</label>
                            <select class="contact__form-input" name="ciudad_reside">
                                <option value="vacio" disabled selected>Seleccione una opción...</option>
                                <option class="text-dark" value="La Paz">La Paz</option>
                                <option class="text-dark" value="Cochabamba">Cochabamba</option>
                                <option class="text-dark" value="Santa Cruz">Santa Cruz</option>
                                <option class="text-dark" value="Sucre">Sucre</option>
                                <option class="text-dark" value="Tarija">Tarija</option>
                                <option class="text-dark" value="Potosí">Potosí</option>
                                <option class="text-dark" value="Oruro">Oruro</option>
                                <option class="text-dark" value="Pando">Pando</option>
                                <option class="text-dark" value="Beni">Beni</option>
                                <option class="text-dark" value="Villamontes">Villamontes</option>
                                <option class="text-dark" value="Yacuiba">Yacuiba</option>
                                <option class="text-dark" value="Otra">Otra</option>
                            </select>
                        </div>


                        <button class="button">Registrarme</button>
                    </form>
                </div>
            </div>
        </section>

    </main>
    @extends('contactos.index')
    @extends('plantilla.flechaarriba')
    @extends('plantilla.parners')



    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
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
                            <h4 class="text-primary" style="display:table-cell; vertical-align:middle;">Pasantías
                                Glogales</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('talento/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Nombres *: </label>
                                <input name="nombres" class="form-control" maxlength="50" type="text"
                                    placeholder="Nombres..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Apellidos *: </label>
                                <input name="apellidos" class="form-control" maxlength="50" type="text"
                                    placeholder="Apellidos..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Edad *: </label>
                                <select class="form-control" name="edad">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Menos de 18 años">Menos de 18 años</option>
                                    <option class="text-dark" value="18">18</option>
                                    <option class="text-dark" value="19">19</option>
                                    <option class="text-dark" value="20">20</option>
                                    <option class="text-dark" value="21">21</option>
                                    <option class="text-dark" value="22">22</option>
                                    <option class="text-dark" value="23">23</option>
                                    <option class="text-dark" value="24">24</option>
                                    <option class="text-dark" value="25">25</option>
                                    <option class="text-dark" value="26">26</option>
                                    <option class="text-dark" value="27">27</option>
                                    <option class="text-dark" value="28">28</option>
                                    <option class="text-dark" value="29">29</option>
                                    <option class="text-dark" value=30">30</option>
                                    <option class="text-dark" value="Más de 30 años">Más de 30 años</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Correo *: </label>
                                <input name="correo" class="form-control" maxlength="50" type="email"
                                    placeholder="Email...">
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Celular *: </label>
                                <input name="celular" class="form-control" maxlength="10" type="text"
                                    placeholder="Celular..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿En que ciudad resides? *: </label>
                                <select class="form-control" name="ciudad_reside">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="La Paz">La Paz</option>
                                    <option class="text-dark" value="Cochabamba">Cochabamba</option>
                                    <option class="text-dark" value="Santa Cruz">Santa Cruz</option>
                                    <option class="text-dark" value="Sucre">Sucre</option>
                                    <option class="text-dark" value="Tarija">Tarija</option>
                                    <option class="text-dark" value="Potosí">Potosí</option>
                                    <option class="text-dark" value="Oruro">Oruro</option>
                                    <option class="text-dark" value="Pando">Pando</option>
                                    <option class="text-dark" value="Beni">Beni</option>
                                    <option class="text-dark" value="Villamontes">Villamontes</option>
                                    <option class="text-dark" value="Yacuiba">Yacuiba</option>
                                    <option class="text-dark" value="Otra">Otra</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿En que universidad / Instituto estudias o estudiaste? *:
                                </label>
                                <select class="form-control" name="universidad">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Santa Cruz - UAGRM">Santa Cruz - UAGRM
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Grado de Estudio *: </label>
                                <select class="form-control" name="grado_estudio">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Bachiller">Bachiller</option>
                                    <option class="text-dark" value="Universidad 1er. a 3er. semestre">Universidad
                                        1er. a 3er. semestre</option>
                                    <option class="text-dark" value="Universidad 4to. a 6to. semestre">Universidad
                                        4to. a 6to. semestre</option>
                                    <option class="text-dark" value="Universidad 7mo. a 10mo. semestre">
                                        Universidad 7mo. a 10mo. semestre</option>
                                    <option class="text-dark" value="Egresado">Egresado</option>
                                    <option class="text-dark" value="Titulado">Titulado</option>
                                    <option class="text-dark" value="Posgrado Maestría/Doctorado">Posgrado
                                        Maestría/Doctorado</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Qué carrera estudias o estudiaste? *: </label>
                                <select class="form-control" name="carrera">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Administración de Empresas">Administración de
                                        Empresas</option>
                                    <option class="text-dark" value="Ciencias de la Educación">Ciencias de la
                                        Educación</option>
                                    <option class="text-dark" value="Comercio Internacional">Comercio
                                        Internacional</option>
                                    <option class="text-dark" value="Comunicación Social">Comunicación Social
                                    </option>
                                    <option class="text-dark" value="Diseño Gráfico">Diseño Gráfico</option>
                                    <option class="text-dark" value="Turismo y Hotelería">Turismo y Hotelería
                                    </option>
                                    <option class="text-dark" value="Idiomas">Idiomas</option>
                                    <option class="text-dark" value="Ingeniería Comercial">Ingeniería Comercial
                                    </option>
                                    <option class="text-dark" value="Ingeniería Financiera">Ingeniería Financiera
                                    </option>
                                    <option class="text-dark" value="Ingeniería Industrial">Ingeniería Industrial
                                    </option>
                                    <option class="text-dark" value="Ingeniería de Sistemas y Computación">
                                        Ingeniería de Sistemas y Computación</option>
                                    <option class="text-dark" value="Ingeniería Informática">Ingeniería
                                        Informática</option>
                                    <option class="text-dark" value="Marketing">Marketing</option>
                                    <option class="text-dark" value="Negocios Internacionales">Negocios
                                        Internacionales</option>
                                    <option class="text-dark" value="Publicidad">Publicidad</option>
                                    <option class="text-dark" value="Otra">Otra</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Si seleccionaste "Otra" escribe tú carrera: </label>
                                <input name="otra_carrera" class="form-control" maxlength="50" type="text"
                                    placeholder="Nombre...">
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Nivel de Ingles *: </label>
                                <select class="form-control" name="nivel_ingles">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Básico (A1-A2)">Básico (A1-A2)</option>
                                    <option class="text-dark" value="Intermedio (B1-B2)">Intermedio (B1-B2)
                                    </option>
                                    <option class="text-dark" value="Avanzado (C1-C2)">Avanzado (C1-C2)</option>
                                    <option class="text-dark" value="No tengo estudios en Inglés">No tengo
                                        estudios en Inglés</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Experiencia Laboral *: </label>
                                <select class="form-control" name="experiencia">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Aún no tengo experiencia profesional">Aún no
                                        tengo experiencia profesional</option>
                                    <option class="text-dark"
                                        value="Tengo experiencia profesional menor a 6 meses">Tengo experiencia
                                        profesional menor a 6 meses</option>
                                    <option class="text-dark"
                                        value="Tengo experiencia profesional de 6 meses a 1 año">Tengo experiencia
                                        profesional de 6 meses a 1 año</option>
                                    <option class="text-dark"
                                        value="Tengo experiencia profesional de más de 1 año">Tengo experiencia
                                        profesional de más de 1 año</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿En qué área te gustaría desarrollarte? *: </label>
                                <select class="form-control" name="area_desarrollo">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Administración de Empresas">Administración de
                                        Empresas</option>
                                    <option class="text-dark" value="Desarrollo de Negocios">Desarrollo de
                                        Negocios</option>
                                    <option class="text-dark" value="Diseño Gráfico">Diseño Gráfico</option>
                                    <option class="text-dark" value="Idiomas">Idiomas</option>
                                    <option class="text-dark" value="Tecnologías de la Información">Tecnologías de
                                        la Información</option>
                                    <option class="text-dark" value="Programación y Desarrollo de Software">
                                        Programación y Desarrollo de Software</option>
                                    <option class="text-dark" value="Marketing y Publicidad">Marketing y
                                        Publicidad</option>
                                    <option class="text-dark" value="Hotelería y Turismo">Hotelería y Turismo
                                    </option>
                                    <option class="text-dark" value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Porque desea tomar una pasantía internacional? *:
                                </label>
                                <select class="form-control" name="pasantia_internacional">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Internacionalizar mi profesión">
                                        Internacionalizar mi profesión</option>
                                    <option class="text-dark" value="Potenciar mi CV">Potenciar mi CV</option>
                                    <option class="text-dark" value="Trabajar en una empresa multinacional">
                                        Trabajar en una empresa multinacional</option>
                                    <option class="text-dark" value="Aprender para tener mi propio negocio">
                                        Aprender para tener mi propio negocio</option>
                                    <option class="text-dark" value="Viajar y conocer otros países">Viajar y
                                        conocer otros países</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Cual de los programas te interesa? *: </label>
                                <select class="form-control" name="programa">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Talento Global | 6 a 12 semanas">Talento
                                        Global | 6 a 12 semanas</option>
                                    <option class="text-dark" value="Talento Global | 3 a 6 meses">Talento Global
                                        | 3 a 6 meses</option>
                                    <option class="text-dark" value="Talento Global | 6 a 18 meses">Talento Global
                                        | 6 a 18 meses</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Cómo te enteraste de nuestro programa de Pasantías
                                    Globales? *: </label>
                                <select class="form-control" name="descubrimiento_programa">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Amigos/Familiares">Amigos/Familiares</option>
                                    <option class="text-dark" value="Eventos/Webinars">Eventos/Webinars</option>
                                    <option class="text-dark" value="Facebook">Facebook</option>
                                    <option class="text-dark" value="Instagram">Instagram</option>
                                    <option class="text-dark" value="LinkedIn">LinkedIn</option>
                                    <option class="text-dark" value="TikTok">TikTok</option>
                                    <option class="text-dark" value="Sesión Informativa">Sesión Informativa
                                    </option>
                                    <option class="text-dark" value="Correo Informativo">Correo Informativo
                                    </option>
                                    <option class="text-dark" value="Punto Informativo">Punto Informativo</option>
                                    <option class="text-dark" value="Página de la Universidad">Página de la
                                        Universidad</option>
                                    <option class="text-dark" value="Otros">Otros</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">¿Por cual medio deseas ser contactado? *: </label>
                                <select class="form-control" name="medio_contacto">
                                    <option value="vacio" disabled selected>Seleccione una opción...</option>
                                    <option class="text-dark" value="Chat de WhatsApp">Chat de WhatsApp</option>
                                    <option class="text-dark" value="Llamada de WhatsApp">Llamada de WhatsApp
                                    </option>
                                    <option class="text-dark" value="Correo">Correo</option>
                                    <option class="text-dark" value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">Describa los documentos a adjuntar *: </label>
                                <input name="describir_documento" class="form-control" type="text"
                                    placeholder="Describa..." required>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <label class="text-info">En caso de adicionar tu CV y/o otro documento
                                    (Certificados, Recomendaciones, Etc.), por favor un archivo general y en extensión
                                    zip </label>
                                <input name="documentos" class="form-control" type="file" accept=".zip,.rar,.7zip">
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
