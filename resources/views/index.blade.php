<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Medilab Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!--JSQUERY-->
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a
                            href="mailto:contact@example.com">contact@ejemplo.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">Ciudad de Dios</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Inicio<br></a></li>
                        <li><a href="#about">Nosotros</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#departments">Departamentos</a></li>
                        <li><a href="#doctors">Doctores</a></li>

                        <li><a href="#contact">Contáctanos</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn d-none d-sm-block" href="{{ route('login') }}">Citas en linea</a>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container position-relative">

                <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                    <h2>Bienvenido a Ciudad de Dios</h2>
                    <p>Por una mejor atención para el beneficio de ustedes</p>
                </div><!-- End Welcome -->

                <div class="content row gy-4">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                            <h3>¿Por qué elegir Medilab?</h3>
                            <p>
                                "Lorem ipsum" es un texto de relleno en latín utilizado comúnmente en diseño gráfico y
                                tipografía. Si deseas una traducción más precisa, por favor proporciona un texto real.
                            </p>
                            <div class="text-center">
                                <a href="#about" class="more-btn"><span>Aprender más</span> <i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="row gy-4">

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                        <i class="bi bi-clipboard-data"></i>
                                        <h4>Cuerpos de placeres oficiales</h4>
                                        <p>Se consiguen casi como si fueran algunos que no hacen trabajo para evitar
                                            cualquier falta</p>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                        <i class="bi bi-gem"></i>
                                        <h4>Trabajo de Ullamco ladore pan</h4>
                                        <p>Excepto los que son responsables, están en culpa quienes descuidan sus
                                            obligaciones</p>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                        <i class="bi bi-inboxes"></i>
                                        <h4>Trabajo que produce dolor incidental</h4>
                                        <p>O soportas o compartes con nadie, o todo. Dolores para hacer más grande todo.
                                        </p>
                                    </div>
                                </div><!-- End Icon Box -->

                            </div>
                        </div>
                    </div>
                </div><!-- End  Content-->

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">
                <div class="container mt-5">
                    <div class="col-md-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <h3 class="card-title mb-0">Calendario de atención</h3>
                                </div>
                                <div class="col-md-6 d-flex align-items-center justify-content-end">
                                    <div class="d-flex align-items-center">
                                        <label for="consultorio_select"
                                            class="font-weight-bold mr-2 mb-0">Consultorios:</label>
                                        <select name="consultorio_id" id="consultorio_select" class="form-control">
                                            <option>
                                                Seleccione un consultorio....
                                            </option>
                                            @foreach ($consultorios as $consultorio)
                                                <option value="{{ $consultorio->id }}">
                                                    {{ $consultorio->nombre . '-' . $consultorio->ubicacion }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body text-center">
                                <script>
                                    $('#consultorio_select').on('change', function() {
                                        var consultorio_id = $('#consultorio_select').val();
                                        var url = "{{ route('cargarIndex', ':id') }}"
                                        url = url.replace(':id', consultorio_id);

                                        alert(url);
                                        if (consultorio_id) {
                                            $.ajax({
                                                url: "{{ url('/consultorios') }}" + '/' + consultorio_id,
                                                type: 'GET',
                                                success: function(data) {
                                                    $('#consultorio_info').html(data);
                                                },
                                                error: function() {
                                                    alert('Error al obtener los datos del consultorio');
                                                }
                                            });
                                        } else {
                                            $('#consultorio_info').html('');
                                        }
                                    });
                                </script>

                                <div id="consultorio_info"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 gx-5">

                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox pulsating-play-btn"></a>
                    </div>

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>About Us</h3>
                        <p>
                            Dolor legal expedito por fuga, asperiores que son los menores logros. De hecho, comparte el
                            placer. Se sienta porque las molestias y las cosas que son grandes, así como las verdades
                            dolorosas. Corrupción total en su incidente de rechazar las verdades de las asperezas del
                            lugar.
                        </p>
                        <ul>
                            <li>
                                <i class="fa-solid fa-vial-circle-check"></i>
                                <div>
                                    <h5>Trabajo de Ullamco a menos que se tomen medidas para obtener el beneficio</h5>
                                    <p>Gran facilidad para repeler con excepciones el comercio libre en cuestión</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-pump-medical"></i>
                                <div>
                                    <h5>Gran odio resuelto en ejercicio reprendido</h5>
                                    <p>Donde todo el dolor conlleva un perjuicio o una distinción de dolores, con
                                        elogios a eso, bajo esa misma dirección.</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa-solid fa-heart-circle-xmark"></i>
                                <div>
                                    <h5>Placer y quien ejerce</h5>
                                    <p>Y quiere y ellos mayores son temporales y aquellos dolores, sin embargo, los
                                        tiempos ocurren al máximo con permiso</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-user-doctor"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Doctores</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-regular fa-hospital"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Departamentos</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-flask"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Laboratorios</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-award"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Premios</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Servicios</h2>
                <p>Necesidades suyas se derivan de algo, huye de él, aunque en verdad con sentido y con el deseo.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>No conocen a Mete</h3>
                            </a>
                            <p>Provee nada menos que lo que se consigue, no todo lo más grande. Ellos, acusando menos
                                dolores, soportan la ley con el tiempo y lo que se consigue.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Ellos cómodos</h3>
                            </a>
                            <p>Pero sin embargo no desde. Es fácil decir justo lo que es. Libre de corrupción ni él está
                                aquí, sin saber del dolor.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-hospital-user"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Mercado Ledo</h3>
                            </a>
                            <p>Excepto cuando se rechaza la responsabilidad por lo que no se puede evitar.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-dna"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Comodidad de las asperezas</h3>
                            </a>
                            <p>No, y en tiempos menos todo, pero el dolor existe para obtenerlo. El deseo, pero el error
                                huye de la situación, proporciona la adquisición necesaria.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-wheelchair"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Deseo de Dolor</h3>
                            </a>
                            <p>Y también soportar a menudo. Es más grande, pero es fácil hacer que el cuerpo sea. Pero
                                el espíritu en otro lugar trabaja.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-notes-medical"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Dolor del Arquitecto</h3>
                            </a>
                            <p>Aquí molestias a algunos de ellos. Huye del dolor o no y de las deudas legales.
                                Corrupción rechazada por nosotros.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Appointment Section -->
        <section id="appointment" class="appointment section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Cita</h2>
                <p>Sus necesidades resultan de algo, huye él mismo, aunque con sentido y deseo.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nombre" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Correo" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="phone" id="phone"
                                placeholder="Celular" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="datetime-local" name="date" class="form-control datepicker"
                                id="date" placeholder="Fecha de la Cita" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="department" id="department" class="form-select" required="">
                                <option value="">Select Departamento</option>
                                <option value="Department 1">Departamento 1</option>
                                <option value="Department 2">Departamento 2</option>
                                <option value="Department 3">Departamento 3</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="doctor" id="doctor" class="form-select" required="">
                                <option value="">Doctores</option>
                                <option value="Doctor 1">Doctor 1</option>
                                <option value="Doctor 2">Doctor 2</option>
                                <option value="Doctor 3">Doctor 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Mensage (Optional)"></textarea>
                    </div>
                    <div class="mt-3">
                        <div class="loading">Cargando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tu solicitud de cita ha sido enviada con éxito. ¡Gracias!</div>
                        <div class="text-center"><button type="submit">Programar una Cita</button></div>
                    </div>
                </form>

            </div>

        </section><!-- /Appointment Section -->

        <!-- Departments Section -->
        <section id="departments" class="departments section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Departamentos</h2>
                <p>Sus necesidades resultan de algo, huye de él, aunque con sentido y deseo.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab"
                                    href="#departments-tab-1">Cardiología</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Neurología</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Hepatología</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Pediatría</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Cuidado Ocular</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="departments-tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Cardiologia</h3>
                                        <p class="fst-italic">Quien con elogios obtiene el reconocimiento en el campo,
                                            se encuentra con la sabiduría en el tratamiento y sigue el protocolo en el
                                            caso de Paulona Marca.</p>
                                        <p>Y para nosotros, los mayores. Placeres como las blandicias y aquello que es
                                            fuerte. Trabajo de ellos mismos, el gran dolor. Sucede aquí como una
                                            molestia para quien es. Es lo mínimo para repeler y quien busca lo grande.
                                            Conseguir dolor para aquellos que acusan a los nuestros realmente.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Y con blandicias nadie excepto la verdad</h3>
                                        <p class="fst-italic">Quien recibe elogios por su trabajo está en camino hacia
                                            la sabiduría, siguiendo el protocolo establecido en el caso de Paulona
                                            Marka.</p>
                                        <p>Ese mismo placer se obtiene al lograrlo. Hay un error en el sistema, ya que
                                            no se puede rechazar lo que está presente. No hay nada que repeler, pues
                                            acusamos y deseamos esos placeres. Opciones desconocidas y bendiciones con
                                            acusaciones de las intervenciones necesarias en el protocolo establecido.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Impide la facilidad del dolor que no se puede abrir.</h3>
                                        <p class="fst-italic">Ellos tienen placeres en ello. El odio similar a eso
                                            realmente no es una fuga. Quien nace no sigue los dictados del dolor. En las
                                            dificultades, busca soportar o mejorar.</p>
                                        <p>Odio el derecho y las responsabilidades. De aquellos que siguen, él es
                                            corrupto por culpa de la verdad. No hay necesidad de esas cosas en él. El
                                            bienestar se minimiza por las molestias y el trabajo arduo de aquel que
                                            odia. Ellos odian, no saben, y huyen de lo que está libre. Y el placer de
                                            esos es una opción que sigue.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Huida de dolores del inventor, laborioso como es, acusamos el dolor
                                            laborioso.</h3>
                                        <p class="fst-italic">Acusamos todo abiertamente. Rechaza las consecuencias
                                            legales, placer y derecho, además de la selección que alguien elige.</p>
                                        <p>Ellos siguen las consecuencias libremente, sin demora, en el placer. Nuestro
                                            propio deber necesita algo, huye de las deudas y busca el deseo. Él está
                                            sujeto al mayor error en la gestión del cuerpo. Elegir dificultades, pero
                                            quien busca la verdad debe hacerlo abiertamente debido a la naturaleza del
                                            inventor.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="departments-tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Es un acontecimiento en sí mismo para el patrón y la red.</h3>
                                        <p class="fst-italic">Todos los placeres a menudo pertenecen a ellos, pero
                                            quienes tienen las deudas adelante debido a ello.</p>
                                        <p>Nuestra práctica es universal. Rechaza la represión y la disminución. Todos
                                            rechazan lo que no es adecuado y lo que es suyo. Él mismo odia la verdad y a
                                            quienes se dedican a ello. Las dificultades surgen y son necesarias en la
                                            vida y el placer.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Departments Section -->

        <!-- Doctors Section -->
        <section id="doctors" class="doctors section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Médicos</h2>
                <p>Sus necesidades resultan de algo, y aunque él mismo huye, sigue siendo esencial y deseado.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Director Médico</span>
                                <p>Explicaré el placer y la suavidad, y rechazaré a quienes casi causan dolor.</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Anestesiólogo</span>
                                <p>los mayores placeres, y lo que se desea, están presentes en quienes siguen el
                                    camino.</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Cardiologia</span>
                                <p>Nadie encuentra fácil el deseo de un trabajo corrupto, huye de las cosas debido a
                                    ello.</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Neurocirujano</span>
                                <p>El dolor y el tiempo odian los trabajos y las funciones, y acusan de ello.</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Doctors Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Preguntas Frecuentes</h2>
                <p>Las necesidades resultan de algo, y aunque él huye, sigue siendo esencial y deseado.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>¿No es esencial que era así en el nivel de la urna y en los asuntos?</h3>
                                <div class="faq-content">
                                    <p>El precio de la satisfacción es el resultado. El tiempo de la cáscara de la urna
                                        es el lugar de la parte final y no el cuidado del crecimiento. La vena magna de
                                        la cáscara está en la parte delantera, y el dolor puro no está presente.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>¿Es necesario variar el escote de acuerdo con el contenido actual?</h3>
                                <div class="faq-content">
                                    <p>El dolor se refiere a la vida cotidiana de los expertos en salud. La cáscara está
                                        de acuerdo con las adiciones necesarias. La cáscara está en el proceso, el
                                        diseño y el precio. Es el bien de los expertos, dignos de respeto. El curso está
                                        en la cantidad de trabajo necesario.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>El dolor se refiere a la vida cotidiana de los expertos en salud.</h3>
                                <div class="faq-content">
                                    <p>Elección mía en ninguna parte, disposición de solicitudes y adiciones de
                                        elementos y direcciones. Elemento de soporte en la parte interior. Ninguna parte
                                        de la medida se ajusta a la red. El curso del trabajo es el enfoque. Urna de
                                        problemas en la solución y el apoyo.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Con odio al tiempo y la dirección del trabajo. ¿Es la elección mía en ninguna parte?
                                </h3>
                                <div class="faq-content">
                                    <p>El dolor se refiere a la vida cotidiana en el contexto de la salud y el
                                        bienestar. La cáscara está de acuerdo con los ajustes necesarios. La cáscara
                                        está en el proceso, el diseño y el valor. Es el bien de los expertos, dignos de
                                        respeto. El curso está en la cantidad de trabajo necesario.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>¿El tiempo es la parte que no se ajusta a las necesidades y es la elección final y
                                    el camino?</h3>
                                <div class="faq-content">
                                    <p>Molestias en el trabajo y la elección de la satisfacción final. Dignidad
                                        suspendida antes de lo necesario. Ahora, el estilo y la satisfacción son la
                                        clave del desarrollo. El enfoque en la medida y la educación es la base.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>¿Qué se percibe en lo que se hace, en qué no se encuentra luz ni inclusión?</h3>
                                <div class="faq-content">
                                    <p>De hecho, es fácil buscar placer y dolor. Se busca la satisfacción, pero no
                                        siempre se logra. Hay una distinción en el dolor en sí mismo.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section><!-- /Faq Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                        <h3>Testimonios</h3>
                        <p>
                            El trabajo no se realiza a menos que se obtenga una ventaja de ello. Se produce dolor por
                            falta de comprensión o por un error. El dolor no se produce en la satisfacción. No hay
                            efectos negativos de los errores cometidos.
                        </p>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-1.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Saul Goodman</h3>
                                                <h4>Ceo &amp; Founder</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>El enfoque del trabajo y la satisfacción están garantizados en el
                                                proceso final. La satisfacción se logra mediante el desarrollo y la
                                                elección adecuada. Se logra un enfoque efectivo y continuo en el
                                                trabajo.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-2.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Sara Wilsson</h3>
                                                <h4>Diseñador</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Exporta temporalmente, sin embargo, el mal sigue presente. Era un
                                                error que resultó en trabajo. Era el mal que se evitaba, y ahora se
                                                busca la solución. El mal sigue presente en la calidad del
                                                trabajo.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-3.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Jena Karlis</h3>
                                                <h4>Propietario de la tienda</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>En realidad, nadie exporta sin realizar un trabajo significativo que
                                                sea esencial para el éxito. Todos buscan calidad y eficiencia en el
                                                proceso, y se esfuerzan por cumplir con los requisitos y estándares
                                                establecidos.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-4.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>Matt Brandon</h3>
                                                <h4>Freelancer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>El dolor se experimenta cuando el trabajo no cumple con las
                                                expectativas. Es esencial minimizar los errores y evitar la culpa para
                                                mantener la calidad y la satisfacción. Es importante buscar la
                                                excelencia y mantener los estándares en el proceso.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="d-flex">
                                            <img src="assets/img/testimonials/testimonials-5.jpg"
                                                class="testimonial-img flex-shrink-0" alt="">
                                            <div>
                                                <h3>John Larson</h3>
                                                <h4>Empresario</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                        class="bi bi-star-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            <span>Algunos buscan soluciones efectivas y cumplen con las expectativas. Es
                                                crucial evitar errores y mantener estándares elevados. La calidad y el
                                                cumplimiento son esenciales para asegurar la satisfacción y el éxito en
                                                cualquier proyecto.</span>
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Galería</h2>
                <p>Sus necesidades se satisfacen a partir de algo, escapando a lo que es realmente esencial y sintiendo
                    la necesidad de algo que es realmente importante.</p>
            </div><!-- End Section Title -->

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.jpg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.jpg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.jpg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.jpg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-5.jpg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-6.jpg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-7.jpg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-8.jpg" class="glightbox"
                                data-gallery="images-gallery">
                                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Gallery Item -->

                </div>

            </div>

        </section><!-- /Gallery Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contacto</h2>
                <p>Sus necesidades se satisfacen a partir de algo, escapando de lo esencial, y sienten que lo importante
                    es verdaderamente esencial.</p>
            </div><!-- End Section Title -->

            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Direccion</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Llamanos</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Correo</h3>
                                <p>info@ejemplo.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Cargando</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>

                                    <button type="submit">Enviar mensaje</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                        <span class="sitename">Ciudad de Dios</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@ejemplo.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Links de Importancia</h4>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Terminos y Condiciones</a></li>
                        <li><a href="#">Privacidad</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nuestros Servicios</h4>
                    <ul>
                        <li><a href="#">Diseño Web</a></li>
                        <li><a href="#">Desarrollo Web</a></li>
                        <li><a href="#">Gestión de Productos</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Diseño Gráfico</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>
                        Aquí están las soluciones</h4>
                    <ul>
                        <li><a href="#">Molestias y acusaciones justas</a></li>
                        <li><a href="#">Excepciones dignas</a></li>
                        <li><a href="#">Distinción y responsabilidad</a></li>
                        <li><a href="#">Elección</a></li>
                        <li><a href="#">Conformidad y aceptación</a></li>

                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nosotros la luz</h4>
                    <ul>
                        <li><a href="#">Ipsam</a></li>
                        <li><a href="#">Elogio de los dolores</a></li>
                        <li><a href="#">Dinera</a></li>
                        <li><a href="#">Trodelas</a></li>
                        <li><a href="#">Flexo</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Medilab</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
