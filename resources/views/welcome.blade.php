 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="shortcut icon" href="assets/img/IconAIESEC.png" type="image/x-icon">

     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

     <link rel="stylesheet" href="assets/css/styles.css">

     <title>AIESEC Bolivia</title>
 </head>

 <body>
     <div class="load" id="load">
         <img src="assets/img/blueman-blue.gif" alt="" class="load__gif">
     </div>

     <header class="header" id="header">
         <nav class="nav container">
             <a href="#" class="nav__logo">
                 <img src="assets/img/Blue-Logo.png" alt="" class="nav__logo-img">
             </a>

             <div class="nav__menu" id="nav-menu">
                 <ul class="nav__list">
                     <li class="nav__item">
                         <a href="#" class="nav__link active-link">Nosotros</a>
                     </li>

                     <li class="nav__item">
                         <a href="#" class="nav__link">Jóvenes</a>
                     </li>

                     <li class="nav__item">
                         <a href="#" class="nav__link">Organizaciones</a>
                     </li>

                     <li class="nav__item">
                         <a href="#" class="nav__link">Hospeda</a>
                     </li>

                     <li class="nav__item">
                         <a href="#blog" class="nav__link">Blog</a>
                     </li>
                 </ul>

                 <div class="nav__close" id="nav-close">
                     <i class="bx bx-x"></i>
                 </div>
             </div>

             <div class="nav__toggle" id="nav-toggle">
                 <i class="bx bx-grid-alt"></i>
             </div>
         </nav>
     </header>

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

             <img src="assets/img/Homeaiesec.jpg" alt="" class="home__img">
         </section>

         <section class="carts section container" id="carts">
             <h2 class="section__title">Descúbrete a ti mismo y conoce el mundo</h2>

             <div class="carts_container container grid">
                 <div class="carts_content cart_1">
                     <div>
                         <img src="assets/img/GV_horizontal_white.png" class="carts_icon" />
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
                         <img src="assets/img/GTa_horizontal_white.png" class="carts_icon" />
                         <p class="carts_subtitle">
                             Una oportunidad para jóvenes que buscan desarrollar sus habilidades de liderazgo,
                             competencias profesionales y cualidades mediante una experiencia de enseñanza en Institutos
                             alrededor del mundo.
                         </p>
                     </div>
                     <div>
                         <a href="#" class="button2 button--flex button--white ">
                             Ver más
                             <i class="uil uil-arrow-from-right button_icon"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </section>

         <section class="quality section" id="premium">
             <div class="quality__container container">
                 <h2 class="section__title">
                     Tenemos la mejor oferta de pasantias internacionales para ti!
                 </h2>

                 <div class="quality__content grid">
                     <div class="quality__images">
                         <img src="assets/img/aiesecccc.jpg" alt="" class="quality__img-big">
                         <img src="assets/img/ai22.jpg" alt="" class="quality__img-small">
                     </div>

                     <div class="quality__data">
                         <h1 class="quality__title">Talento Global</h1>
                         <h2 class="quality__price">Bs 2999.99</h2>
                         <span class="quality__special">Oferta Especial</span>
                         <p class="quality__description">
                             No se que poner aqui por ahi no quieren esto y envano lo programee
                             aaaaa :) jskdskja Hola Mundo dos tres cuatro cinco seis aaaa
                             en otra mejor me duermo asies no te olvides de subirlo a heroku.
                         </p>

                         <div class="quality__buttons">
                             <button class="button">
                                 Postularte
                             </button>

                             <a href="#" class="quality__button">
                                 Ver más
                                 <i class="bx bx-right-arrow-alt"></i>
                             </a>
                         </div>
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
                             <img src="assets/img/bl2.jpg" alt="" class="blog__img">
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
                             <img src="assets/img/bl1.jpg" alt="" class="blog__img">
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

         <div class="logo section">
             <div class="logo__container container grid">
                 <img src="assets/img/Turisteo (1) (1).png" alt="" class="logo__img">
                 <img src="assets/img/Blue-Logo.png" alt="" class="logo__img">
                 <img src="assets/img/Turisteo (1) (1).png" alt="" class="logo__img">
                 <img src="assets/img/Blue-Logo.png" alt="" class="logo__img">
                 <img src="assets/img/Turisteo (1) (1).png" alt="" class="logo__img">
             </div>
             </section>
     </main>

     <footer class="footer">
         <div class="footer__container container">
             <h1 class="footer__title">AIESEC</h1>

             <div class="footer__content grid">
                 <div class="footer__data">
                     <p class="footer__description">
                         Subscribete para obtener mayor información
                     </p>

                     <div class="footer__newsletter">
                         <input type="email" placeholder="Dirección de email" class="footer__input">
                         <button class="footer__button">
                             <i class="bx bx-right-arrow-alt"></i>
                         </button>
                     </div>
                 </div>

                 <div class="footer__data">
                     <h2 class="footer__subtitle">Dirección</h2>
                     <p class="footer__information">
                         1234 Av. Eduardo Avaroa. <br>
                         La Paz, Bolivia
                     </p>
                 </div>

                 <div class="footer__data">
                     <h2 class="footer__subtitle">Contactanos</h2>
                     <p class="footer__information">
                         +591 73665124 <br>
                         aiesec@gmail.com
                     </p>
                 </div>

                 <div class="footer__data">
                     <h2 class="footer__subtitle">Horario</h2>
                     <p class="footer__information">
                         Lunes - Sabado <br>
                         9AM - 16PM
                     </p>
                 </div>
             </div>

             <div class="footer__group">
                 <ul class="footer__social">
                     <a href="#" target="_blank" class="footer__social-link">
                         <i class="bx bxl-facebook"></i>
                     </a>
                     <a href="#" target="_blank" class="footer__social-link">
                         <i class="bx bxl-instagram"></i>
                     </a>
                     <a href="#" target="_blank" class="footer__social-link">
                         <i class="bx bxl-twitter"></i>
                     </a>
                 </ul>

                 <span class="footer__copy">
                     &#169; AIESEC. 2022 Todos los derechos reservados
                 </span>
             </div>
         </div>
     </footer>


     <a href="#" class="scrollup" id="scroll-up">
         <i class="bx bx-up-arrow-alt"></i>
     </a>

     <script src="assets/js/mixitup.min.js"></script>
     <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
     <script src="assets/js/main.js"></script>
 </body>

 </html>
