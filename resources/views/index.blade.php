<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="es">

<head>
    <title>Inicio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-loading">

    <!-- Wrapper -->
    <div id="wrapper" class="fade-in">

        <!-- Intro -->
        <div id="intro">
            <h1>Inicio</h1>
            <p>Fundamentos de la arquitectura Cliente-Servidor</br>by</br>Brayan Yahir Y Alfonso Fabrice</p>
            <ul class="actions">
                <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
            </ul>
        </div>

        <!-- Header -->
        <header id="header">
            <a href="{{route('Inicio')}}" class="logo">Inicio</a>
        </header>

        <!-- Nav -->
        <nav id="nav">
            <ul class="links">
                <li class="active"><a href="#">Temario</a></li>
            </ul>
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main">

            <!-- Featured Post -->
            <article class="post featured">
                <header class="major">
                    <span class="date">Enero 30, 2022</span>
                    <h2><a href="#">Sistemas <br />
                            de Informacion</a></h2>
                </header>
                <a href="{{route('tema1')}}" class="image main"><img src="images/img1.jpg" alt="" /></a>
                <p> Reconocer los conceptos de sistemas de informacion.</p>
                <ul class="actions">
                    <li><a href="{{route('tema1')}}" class="button big">Tema Completo</a></li>
                </ul>
            </article>

            <!-- Posts -->
            <section class="posts">
                <article>
                    <header>
                        <span class="date">Enero 30, 2022</span>
                        <h2><a href="{{route('tema2')}}">Evolucion de los<br />
                                Sistemas de Informacion</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/img2.jpg" alt="" /></a>
                    <p>Reconocer la evolución de los sistemas de información.</p>
                    <ul class="actions">
                        <li><a href="{{route('tema2')}}" class="button">Tema Completo</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <span class="date">Enero 30, 2022</span>
                        <h2><a href="{{route('tema3')}}">Conceptos de<br />
                                Cliente y Servidor</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/img3.jpg" alt="" /></a>
                    <p>Reconocer los conceptos de cliente y servidor.</p>
                    <ul class="actions">
                        <li><a href="{{route('tema3')}}" class="button">Tema Completo</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <span class="date">Enero 30, 2022</span>
                        <h2><a href="{{route('tema4')}}">Sistemas de Computadoras<br />
                                Centrales y Dedicadas</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/img4.jpg" alt="" /></a>
                    <p>Definir los sistemas de computadoras centrales y dedicadas.</p>
                    <ul class="actions">
                        <li><a href="{{route('tema4')}}" class="button">Tema Completo</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <span class="date">Enero 30, 2022</span>
                        <h2><a href="{{route('tema5')}}">Sistema de Conexion<br />
                                Libre y a traves de Redes</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/img5.jpg" alt="" /></a>
                    <p>Definir los sistemas de conexión libre y a través de redes.</p>
                    <ul class="actions">
                        <li><a href="{{route('tema5')}}" class="button">Tema Completo</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <span class="date">Enero 30, 2022</span>
                        <h2><a href="{{route('tema6')}}">Sistemas con Arquitectura<br />
                                Cliente/Servidor</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/img6.jpg" alt="" /></a>
                    <p>Describir los sistemas con arquitectura Cliente/Servidor.</p>
                    <ul class="actions">
                        <li><a href="{{route('tema6')}}" class="button">Tema Completo</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <span class="date">Enero 30, 2022</span>
                        <h2><a href="{{route('tema7')}}">Reconocer Protocolos<br />
                                de Comunicación en Red</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/img7.jpg" alt="" /></a>
                    <p>Reconocer protocolos de comunicación en red</p>
                    <ul class="actions">
                        <li><a href="{{route('tema7')}}" class="button">Tema Completo</a></li>
                    </ul>
                </article>
            </section>

            <!-- Footer -->
            <footer>
                <div class="pagination">
                    <!--<a href="#" class="previous">Prev</a>-->
                    <a href="#" class="page active">1</a>
                    <a href="{{route('pag2')}}" class="page">2</a>
                    <a href="#" class="next">Next</a>
                </div>
            </footer>

        </div>

        <!-- Footer -->
        <footer id="footer">

        </footer>

        <!-- Copyright -->
        <div id="copyright">
            <ul>
                <li>&copy; Untitled</li>
                <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                <li>Distributor: <a href="https://themewagon.com">ThemeWagon</a></li>
            </ul>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>