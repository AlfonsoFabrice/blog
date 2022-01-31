<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="es">

<head>
	<title>Protocolos de Comunicación en Red</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-loading">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<a href="{{route('Inicio')}}" class="logo">Inicio</a>
		</header>

		<!-- Nav -->
		<nav id="nav">
			<ul class="links">
				<li><a href="{{route('Inicio')}}">Inicio</a></li>
				<li class="active"><a href="">Protocolos de Comunicación en Red</a></li>
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

			<!-- Post -->
			<section class="post">
				<header class="major">
					<span class="date">Enero 30, 2022</span>
					<h1>Protocolos de Comunicación<br />
						en Red</h1>
				</header>
				<div class="image main"><img src="images/pic01.jpg" alt="" /></div>
				<h4>Tipos de protocolos de red</h4>
				<p>Los protocolos para la transmisión de datos en internet más importantes son TCP (Protocolo de Control de Transmisión) e IP (Protocolo de Internet). De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP</p>
				<p>Estos los utilizamos prácticamente todos los días, aunque la mayoría de los usuarios no lo sepan ni conozcan su funcionamiento. Estos protocolos permiten la transmisión de datos desde nuestros dispositivos para navegar a través de los sitios, enviar correos electrónicos, escuchar música online, etc.</p>
				<p>Existen varios tipos de protocolos de red</p>
				<p>Protocolos de comunicación de red: protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</p>
				<p>Protocolos de seguridad de red: implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.</p>
				<p>Protocolos de gestión de red: proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.</p>
				<p>Un grupo de protocolos de red que trabajan juntos en los niveles superior e inferior comúnmente se les denomina familia de protocolos.</p>
				<p>El modelo OSI (Open System Interconnection) organiza conceptualmente a las familias de protocolos de red en capas de red específicas. Este Sistema de Interconexión Abierto tiene por objetivo establecer un contexto en el cual basar las arquitecturas de comunicación entre diferentes sistemas.</p>
				<p>A continuación listamos algunos de los protocolos de red más conocidos, según las capas del modelo OS</p>
				<ul>
					<p><b>Protocolos de la capa 1 - Capa física</b></p>
					<li>USB: Universal Serial Bus.</li>
					<li>Ethernet: Ethernet physical layer.</li>
					<li>DSL: Digital subscriber line.</li>
					<li>Etherloop: Combinación de Ethernet and DSL.</li>
					<li>Infrared: Infrared radiation.</li>
					<li>Frame Relay.</li>
					<li>SDH: Jerarquía digital síncrona.</li>
					<li>SONET: Red óptica sincronizada.</li>
					<br>
					<p><b>Protocolos de la capa 2 - Enlace de datos</b></p>
					<li>DCAP: Protocolo de acceso del cliente de la conmutación de la transmisión de datos.</li>
					<li>FDDI: Interfaz de distribución de datos en fibra.</li>
					<li>HDLC: Control de enlace de datos de alto nivel.</li>
					<li>LAPD: Protocolo de acceso de enlace para los canales.</li>
					<li>PPP: Protocolo punto a punto.</li>
					<li>STP (Spanning Tree Protocol): protocolo del árbol esparcido.</li>
					<li>VTP VLAN: trunking virtual protocol para LAN virtual.</li>
					<li>MPLS: Conmutación multiprotocolo de la etiqueta.</li>
					<br>
					<p><b>Protocolos de la capa 3 - Red</b></p>
					<li>ARP: Protocolo de resolución de direcciones.</li>
					<li>BGP: Protocolo de frontera de entrada.</li>
					<li>ICMP: Protocolo de mensaje de control de Internet.</li>
					<li>IPv4: Protocolo de internet versión 4.</li>
					<li>IPv6: Protocolo de internet versión 6.</li>
					<li>IPX: Red interna del intercambio del paquete.</li>
					<li>OSPF: Abrir la trayectoria más corta primero.</li>
					<li>RARP: Protocolo de resolución de direcciones inverso.</li>
					<br>
					<p><b>Protocolos de la capa 4 - Transporte</b></p>
					<li>IL: Convertido originalmente como capa de transporte para 9P.</li>
					<li>SPX: Intercambio ordenado del paquete.</li>
					<li>SCTP: Protocolo de la transmisión del control de la corriente.</li>
					<li>TCP: Protocolo del control de la transmisión.</li>
					<li>UDP: Protocolo de datagramas de usuario.</li>
					<li>iSCSI: Interfaz de sistema de computadora pequeña de Internet iSCSI.</li>
					<li>DCCP: Protocolo de control de congestión de datagramas.</li>
					<br>
					<p><b>PProtocolos de la capa 5 - Sesión</b></p>
					<li>NFS: Red de sistema de archivos.</li>
					<li>SMB: Bloque del mensaje del servidor.</li>
					<li>RPC: Llamada a procedimiento remoto.</li>
					<li>SDP: Protocolo directo de sockets.</li>
					<li>SMPP: Mensaje corto punto a punto.</li>
					<br>
					<p><b>Protocolos de la capa 6- Presentación</b></p>
					<li>TLS: Seguridad de la capa de transporte.</li>
					<li>SSL: Capa de conexión segura.</li>
					<li>XDR: Extenal data representation.</li>
					<li>MIME: Multipurpose Internet Mail Extensions.</li>
					<br>
					<p><b>Protocolos de la capa 7 - Aplicación</b></p>
					<li>DHCP: Protocolo de configuración dinámica de host.</li>
					<li>DNS: Domain Name System.</li>
					<li>HTTP: Protocolo de transferencia de hipertexto.</li>
					<li>HTTPS: Protocolo de transferencia de hipertexto seguro.</li>
					<li>POP3: Protocolo de oficina de correo.</li>
					<li>SMTP: protocolo de transferencia simple de correo.</li>
					<li>Telnet: Protocolo de telecomunicaciones de red.</li>
				</ul>
			</section>
		</div>

		<!-- Footer -->
		<footer id="footer">
		</footer>

		<!-- Copyright -->
		<div id="copyright">
			<ul>
				<li>&copy; Untitled</li>
				<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
				<li>Distributor: <a href="https://themewagon.com/">ThemeWagon</a></li>
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