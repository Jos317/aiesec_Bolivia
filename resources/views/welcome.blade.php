 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


     <link rel="shortcut icon" href="{{ asset('img/cropped-AIESEC-Human-Blue-32x32.png') }} />

     <!--=============== BOXICONS ===============-->
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

     <!--=============== SWIPER CSS ===============-->
     <link rel=" stylesheet" href="public/css/swiper-bundle.min.css">

     <!--=============== CSS ===============-->
     <link rel="stylesheet" href="/css/styles.css">
     <link rel="stylesheet" href="/css/css.css">

     <title> AIESEC Bolivia </title>
 </head>

 <body>
     <!--=============== HEADER ===============-->
     <header class="l-header" id="header">
         <nav class="nav container">
             <a href="#" class="nav__logo"> <img src="public/img/cropped-Blue-logo.png" /></a>

             <div class="nav__menu" id="nav-menu">
                 <ul class="nav__list">
                     <li class="nav__item"><a href="#" class="nav__link active-link">Nosotros</a></li>
                     <li class="nav__item"><a href="#" class="nav__link">Jovenes</a></li>
                     <li class="nav__item"><a href="#" class="nav__link">Organizaciones</a></li>
                     <li class="nav__item"><a href="#" class="nav__link">Hospeda un Voluntario</a></li>

                     <li class="nav__item"><a href="#" class="nav__link">Iniciar sessión</a></li>
                     <div
                         class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                         @if (Route::has('login'))
                             <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                 @auth
                                     <a href="{{ url('/home') }}"
                                         class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                 @else
                                     <a href="{{ route('login') }}"
                                         class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                     @if (Route::has('register'))
                                         <a href="{{ route('register') }}"
                                             class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                     @endif
                                 @endauth
                             </div>
                         @endif

                     </div>

                 </ul>
             </div>

             <div class="nav__btns">
                 <i class='bx bx-moon change-theme' id="theme-button"></i>
                 <div class="nav__toggle" id="nav-toggle">
                     <i class='bx bx-menu'></i>
                 </div>
             </div>
         </nav>
     </header>
     <!--=============== MAIN ===============-->
     <main class="main">
         <!--=============== HOME ===============-->
         <section class="home section" id="home">

             <div class="video">
                 <div class="overlay">

                     <div class="content2">
                         <h1>con aiesec.</h1>
                         <p> Viaja al extranjero e impulsa tu carrera profesional trabajando en una empresa
                             multinacional o sé un voluntario y participa en proyectos de impacto social.
                             Internacionaliza tu empresa conectando con jóvenes extranjeros cubriendo
                             las necesidades de tu negocio.
                         </p>
                     </div>
                 </div>

                 <video autoplay muted loop id="myVideo">
                     <source src="public/img/video.mp4" type="video/mp4">
                     <source src="video/concierto.ogg" type="video/ogg">
                     <source src="video/concierto.webm" type="video/webm">
                 </video>
             </div>



         </section>

         <!--=============== CARTAS ===============-->
         <!--
                        <section class="carts section" id="carts">
                <h1>
                    Descúbrete a ti mismo y conoce el mundo
                </h1>
                <p>
                    AIESEC es la organización juvenil más grande del mundo que contribuye con la sociedad a través del desarrollo de los jóvenes y las oportunidades en el entorno internacional. Te conectamos con proyectos en el extranjero, donde puedes aprender más sobre
                    otras culturas y trabajar en tu propio crecimiento. Una de nuestras 34 oficinas locales, ubicadas en 18 estados de la república esperan por ti.
                </p>

                <div class="carts_table">
                    <div class="carts_column1">
                        <img src="public/img/GV_horizontal_white.png">
                        <p>Sé un ciudadano del mundo. Nuestras oportunidades alrededor del mundo han inspirado a miles de jóvenes a participar en causas sociales que solucionan problemáticas globales.</p>
                        <button>Saber mas ...</button>
                    </div>
                    <div class="carts_column2">
                        <img src="public/img/GTa_horizontal_white.png">


                        <p>Experimenta el trabajo multicultural, gestiona proyectos, aprende, desarrolla tus habilidades en Empresas Multinacionales y conviértete en un Intern por el mundo. ..</p>
                        <button>Saber mas ...</button>
                    </div>
                    <div class="carts_column3">

                        <img src="public/img/GTe_Horizontal_white.png">
                        <p>Una oportunidad para jóvenes que buscan desarrollar sus habilidades de liderazgo, competencias profesionales y cualidades mediante una experiencia de enseñanza en Institutos alrededor del mundo.</p>
                        <button>Saber mas ...</button>
                    </div>
                </div>


            </section>
            -->
         <section class="carts section" id="carts">
             <h2 class="section_title">Descúbrete a ti mismo y conoce el mundo</h2>
             <span class="section_subtitle">AIESEC es la organización juvenil más grande del mundo que contribuye con la
                 sociedad a través del desarrollo de los jóvenes y las oportunidades en el entorno internacional.<br>
                 Te conectamos con proyectos en el extranjero, donde puedes aprender más sobre otras culturas y trabajar
                 en tu propio crecimiento.<br>
                 Una de nuestras 34 oficinas locales, ubicadas en 18 estados de la república esperan por ti.</span>

             <div class="carts_container container grid">
                 <!--==================== carts 1 ====================-->
                 <div class="carts_content cart_1">
                     <div>
                         <img src="public/img/GV_horizontal_white.png" class="carts_icon" />
                         <!--                         <h3 class="carts_title">Branding <br> Designer</h3>-->
                         <span class="carts_subtitle">
                             Sé un ciudadano del mundo. Nuestras oportunidades alrededor del mundo han inspirado a miles
                             de jóvenes a participar en causas sociales que solucionan problemáticas globales.
                         </span>
                     </div>
                     <div>
                         <a href="#" class="button button--flex button--white ">
                             Saber más
                             <i class="uil uil-arrow-from-right button_icon"></i>
                         </a>
                     </div>
                 </div>
                 <!--==================== carts 2 ====================-->
                 <div class="carts_content cart_2">
                     <div>
                         <img src="public/img/GTa_horizontal_white.png" class="carts_icon" />
                         <!--                         <h3 class="carts_title">Branding <br> Designer</h3>-->
                         <span class="carts_subtitle">
                             Una oportunidad para jóvenes que buscan desarrollar sus habilidades de liderazgo,
                             competencias profesionales y cualidades mediante una experiencia de enseñanza en Institutos
                             alrededor del mundo.
                         </span>
                     </div>
                     <div>
                         <a href="#" class="button button--flex button--white ">
                             Saber más
                             <i class="uil uil-arrow-from-right button_icon"></i>
                         </a>
                     </div>
                 </div>
                 <!--==================== carts 3 ====================-->
                 <div class="carts_content cart_3">
                     <div>
                         <img src="public/img/GTe_Horizontal_white.png" class="carts_icon" />
                         <!--                         <h3 class="carts_title">Branding <br> Designer</h3>-->
                         <span class="carts_subtitle">
                             Sé un ciudadano del mundo. Nuestras oportunidades alrededor del mundo han inspirado a miles
                             de jóvenes a participar en causas sociales que solucionan problemáticas globales.
                         </span>
                     </div>
                     <div>
                         <a href="#" class="button button--flex button--white ">
                             Saber más
                             <i class="uil uil-arrow-from-right button_icon"></i>
                         </a>
                     </div>

                 </div>
             </div>
         </section>

         <!--=============== FUNCIONES ===============-->
         <!--
            <section class="functions section" id="functions">
                <h1>¿Cómo funciona?</h1>
                <div class="section_table">
                    <center>
                        <div class="section_column">
                            <div class="spam_icon"><i class='bx bxs-file'></i>
                                <h1> REGÍSTRATE
                                </h1>
                            </div>

                            <p>Completa el formulario de solicitud y crea tu perfil.</p>
                        </div>

                        <div class="section_column">
                            <div class="spam_icon"><i class='bx bx-conversation'></i>
                                <h1>CONTACTO CON AIESEC</h1>
                            </div>
                            <p>Un miembro o encargado de AIESEC se pondrá en contacto contigo por teléfono o correo electrónico para brindarte más información acerca de los programas y proyectos disponibles.</p>
                        </div>

                        <div class="section_column">
                            <div class="spam_icon"><i class='bx bx-message-rounded-dots'></i>
                                <h1>PROCESO DE SELECCIÓN</h1>
                            </div>
                            <p>Después de elegir el proyecto que más te interese comienza el proceso de selección con la orientación de tu manager.</p>

                        </div>
                        <div class="section_column">
                            <div class="spam_icon"><i class='bx bx-message-rounded-dots'></i>
                                <h1>ADMISIÓN</h1>
                            </div>
                            <p>Una vez que hayas sido aceptado te ayudaremos en la preparación de tu viaje.</p>
                        </div>


                        <div class="section_column">
                            <div class="spam_icon"><i class='bx bx-message-rounded-dots'></i>
                                <h1>VIVE LA EXPERIENCIA</h1>
                            </div>
                            <p>AIESEC te acompaña antes, durante y después de tu proyecto.</p>

                        </div>
                    </center>

                </div>
            </section>
        -->





         <!--=============== FUNCIONES ===============-->
         <section class="functions section" id="functions">
             <h2 class="section_title">¿Cómo funciona?</h2>
             <div class="functions_container container grid">
                 <!--==================== functions 1 ====================-->
                 <div class="functions_content functions_carts">

                     <i class='functions_icon bx bxs-file'></i>
                     <h3 class="function_title"> REGÍSTRATE</h3>
                     <span class="function_subtitle">
                         Completa el formulario de solicitud<br> y crea tu perfil.
                     </span>


                 </div>
                 <!--==================== functions 2 ====================-->
                 <div class="functions_content functions_carts">

                     <i class='functions_icon bx bx-conversation' class="carts_icon"></i>
                     <h3 class="function_title">CONTACTO CON AIESEC</h3>
                     <span class="function_subtitle">
                         Un miembro o encargado de AIESEC se pondrá en contacto contigo <br>
                         por teléfono o correo electrónico para brindarte más información acerca de los programas y
                         proyectos disponibles.
                     </span>
                 </div>
                 <!--==================== functions 3 ====================-->
                 <div class="functions_content functions_carts">
                     <i class='functions_icon bx bx-conversation' class="carts_icon"></i>
                     <h3 class="function_title">PROCESO DE SELECCIÓN </h3>
                     <span class="function_subtitle">
                         Después de elegir el proyecto que más te interese comienza el proceso de selección con la
                         orientación de tu manager.
                     </span>
                 </div>
                 <!--==================== functions 4 ====================-->
                 <div class="functions_content functions_carts">
                     <i class='functions_icon bx bxs-file' class="carts_icon"></i>
                     <h3 class="function_title"> ADMISIÓN</h3>
                     <span class="function_subtitle">
                         Una vez que hayas sido aceptado te ayudaremos en la preparación de tu viaje.
                     </span>
                 </div>
                 <!--==================== functions 5 ====================-->
                 <div class="functions_content functions_carts">
                     <i class='functions_icon bx bxs-file' class="carts_icon"></i>
                     <h3 class="function_title"> VIVE LA EXPERIENCIA</h3>
                     <span class="function_subtitle">
                         AIESEC te acompaña antes, durante y después de tu proyecto.
                     </span>
                 </div>
             </div>

         </section>




         <!--=============== ALIANZAS ===============-->
         <section class="alliences section" id="alliences">

         </section>
     </main>

     <!--=============== FOOTER ===============-->
     <footer class="footer">

     </footer>

     <!--=============== SCROLLREVEAL ===============-->
     <script src=""></script>

     <!--=============== SWIPER JS ===============-->
     <script src="public/js/swiper-bundle.min.js"></script>

     <script src="public/js/mixitup.min.js"></script>

     <!--=============== MAIN JS ===============-->
     <script src="public/js/main.js"></script>
     <script src="public/js/video.js"></script>
 </body>

 </html>
