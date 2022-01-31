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

            <!-- Posts -->
            <section class="posts">
                <article>
                    <header>
                        <span class="date">Enero 30, 2022</span>
                        <h2><a href="{{route('tema8')}}">Sistemas de Información <br />
                                de Acuerdo a su Arquitectura</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/img8.jpg" alt="" /></a>
                    <p>Sistemas de Información de Acuerdo a su Arquitectura.</p>
                    <ul class="actions">
                        <li><a href="{{route('tema8')}}" class="button">Tema Completo</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <span class="date">Enero 30, 2022</span>
                        <h2><a href="{{route('tema9')}}">Concepto de Cómputo<br />
                                en la Nube</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/img9.jpg" alt="" /></a>
                    <p>Definir el concepto de cómputo en la nube.</p>
                    <ul class="actions">
                        <li><a href="{{route('tema9')}}" class="button">Tema Completo</a></li>
                    </ul>
                </article>
            </section>

            <!-- Footer -->
            <footer>
                <div class="pagination">
                    <!--<a href="#" class="previous">Prev</a>-->
                    <a href="{{route('Inicio')}}" class="page">1</a>
                    <a href="#" class="page active">2</a>
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