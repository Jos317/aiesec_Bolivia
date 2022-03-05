<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/IconAIESEC.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>AIESEC Bolivia</title>
</head>

<body>
    @extends('plantilla.logo')
    @extends('plantilla.menu')

    <main>
        <section class="home grid" id="home">
            <div class="home__container">
                <div class="home__content container">
                    <div id="typewriter"></div>
                    <h1 class="home__title">
                        con AIESEC<span>.</span>
                    </h1>
                    <p class="home__description">
                        Viaja al extranjero e impulsa tu carrera profesional trabajando en una empresa multinacional o
                        sé un voluntario y participa en proyectos de impacto social. Internacionaliza tu empresa
                        conectando con jóvenes extranjeros cubriendo las necesidades de tu negocio.
                    </p>

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

                </div>
            </div>

            <img src="{{ asset('assets/img/Homeaiesec.jpg') }}" alt="" class="home__img">
        </section>

        <section class="carts section container" id="carts">
            <h2 class="section__title">Descúbrete a ti mismo y conoce el mundo</h2>

            <div class="carts_container container grid">
                <div class="carts_content cart_1">
                    <div>
                        <img src="{{ asset('assets/img/GV_horizontal_white.png') }}" class="carts_icon" />
                        <p class="carts_subtitle">
                            Sé un ciudadano del mundo. Nuestras oportunidades alrededor del mundo han inspirado a miles
                            de jóvenes a participar en causas sociales que solucionan problemáticas globales.
                        </p>
                    </div>
                    <div>
                        <a href="#" class="button2 button--flex button--white ">
                            Ver más
                            <i class="uil uil-arrow-from-right button_icon"></i>
                        </a>
                    </div>
                </div>
                <div class="carts_content cart_2">
                    <div>
                        <img src="{{ asset('assets/img/GTa_horizontal_white.png') }}" class="carts_icon" />
                        <p class="carts_subtitle">
                            Una oportunidad para jóvenes que buscan desarrollar sus habilidades de liderazgo,
                            competencias profesionales y cualidades mediante una experiencia de enseñanza en Institutos
                            alrededor del mundo.
                        </p>
                    </div>
                    <div>
                        <a href="{{ asset('form_talentos') }}" class="button2 button--flex button--white ">
                            Ver más
                            <i class="uil uil-arrow-from-right button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog section" id="blog">
            <div class="blog__container container">
                <h2 class="section__title">
                    Conoce las historias de liderazgo de jóvenes como tu.
                </h2>

                <div class="blog__content grid">
                    <article class="blog__card">
                        <div class="blog__image">
                            <img src="{{ asset('assets/img/bl1.jpg') }}" alt="" class="blog__img">
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
                            <iframe
                                src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FAIESECenBolivia%2Fposts%2F4995195870493663&show_text=true&width=500"
                                width="450" height="300" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
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



    </main>

    @extends('contactos.index')
    @extends('plantilla.flechaarriba')
    @extends('plantilla.parners')




    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!--<script src="{{ asset('assets/js/main.js') }}"></script>-->
</body>

</html>
