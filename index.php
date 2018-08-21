<?php include 'inc/head.php'; ?>
<body>
	<div>
		<nav class="navbar navbar-expand-lg fixed-top navbar-light " id="nav">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="img/edumpro.png" width="120px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item">
				    <a class="nav-link ini" href="#inicio">Inicio</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link nos" href="#nosotros">Nosotros</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link con" href="#contactenos">Contáctenos</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link ben" href="#beneficios">Beneficios</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link mov" href="#movil">Móvil</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link vid" href="videos.php">Videos</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link ubi" href="#ubicacion">Ubíquenos</a>
				  </li>
				</ul>
				</div>
			</div>
		</nav>
	</div>

	<div id="inicio">
		<?php include 'inc/principal.php'; ?>
	</div>
	<section class="art nosotros" id="nosotros">
		<div class="container contenido">
			<div class="row">
				<div class="col-md-3 upefec" >
					<div class="container pN" >
						<h2 class="text-center">Captación & Atención</h2>
						<p class="text-justify">Inicia campañas y registra nuevos prospectos a tu escuela, da seguimiento y cumple con tus metas de crecimiento. Mide tus indicadores de captación y calidad en el servicio.</p>
					</div>
					<br>
				</div>
				<div class="col-md-3 upefec" >
					<div class="container sN">
						<h2 class="text-center">Administración & Finanzas</h2>
						<p class="text-justify">Lleva de forma eficiente el control de ingresos y egresos de tu escuela. Genera pagos referenciados en línea, emite facturas electrónicas e informes financieros.</p>
					</div>
					<br>
				</div>
				<div class="col-md-3 upefec" >
					<div class="container tN">
						<h2 class="text-center" style="margin-top: 15px;">Control Escolar</h2>
						<p class="text-justify">Realiza procesos ágiles para inscribir, evaluar y generar documentos que harán más productivo y eficiente a tu equipo de servicios escolares, ¡desde cualquier parte del mundo!</p>
					</div>
					<br>
				</div>
				<div class="col-md-3 upefec" >
					<div class="container cN" >
						<h2 class="text-center">Seguimiento Académico</h2>
						<p class="text-justify">¡Mide y mejora el desempeño de tu institución! Permite a los profesores revisar y calificar en línea a sus estudiantes diariamente para obtener mejores resultados educativos.</p>
					</div>
					<br>
				</div>
			</div>
		</div>
		<div class="text-center ">
				<h2>Software de control <br> escolar y administrativo ¡100% Web!</h2>
				<div class="container">
					<p>EDUMPRO es la solución que te simplifica la cobranza, te permite obtener información relevante financiera, generar campañas de captación. Además podrás inscribir, calificar y evalúar en línea el desempeño de tus estudiantes. ¡Mide y mejora el desempeño de tu institución!</p>	
				</div>
		</div>	
	</section>
	<section class="art contactenos" id="contactenos"> 
		<div class="container contenido">	
			<div class="text-center">	
				<h2 style="color: white">Contáctenos</h2>
				<form action="	" class="formualrio">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6 text-center">
							<input type="email" class="formtext" placeholder="correo@correo.com"> <br><br>
							<textarea class="textarea" rows="6" placeholder="Mensaje"></textarea>
							<input type="checkbox" name="" class="check">
							<label style="color:white">He leído el aviso de privacidad</label> <br>
							<button type="button" class="btn btn-outline-success">Enviar</button>
						</div>
						<div class="col-md-3"></div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<section class="art beneficios" id="beneficios"> 
		<div class="container">	
			<br>
			<h2 class="text-center">Beneficios</h2>
			<div class="row">
				<div class="col-md-3 text-center">
					<div class="upefec">
						<i class="far fa-credit-card fa-3x" style="color: #1b76c5;"></i>
					</div>
					<div>
						<h2><b>99%</b></h2>
						<p>REDUCE COSTOS EN EL COBRO DE COLEGIATURAS</p>
					</div>
				</div>
				<div class="col-md-3 text-center">
					<div class="upefec">
						<i class="far fa-clock fa-3x" style="color: #1b76c5;"></i>
					</div>
					<div>
						<h2><b>75%</b></h2>
						<p>REDUCE TIEMPO EN EL PROCESO DE INSCRIPCIONES</p>
					</div>
				</div>
				<div class="col-md-3 text-center">
					<div class="upefec">
						<i class="far fa-comments fa-3x" style="color: #1b76c5;"></i>
					</div>
					<div>
						<h2><b>100%</b></h2>
						<p>INCREMENTA LA COMUNICACIÓN CON PADRES DE FAMILIA</p>
					</div>
				</div>
				<div class="col-md-3 text-center">
					<div class="upefec">
						<i class="far fa-check-circle fa-3x" style="color: #1b76c5;"></i>
					</div>
					<div>
						<h2><b>95%</b></h2>
						<p>OPTIMIZA LA CAPTURA DE CALIFICACIONES</p>
					</div>
				</div>
			</div>
			<div class="text-center">
				<h1>Data Center</h1>
				<div>
					<h6>Academic Manager</h6>
				</div>
				<p>
					Academic Manager® garantiza su confianza y seguridad al estar hospedado en <br>los mejores servidores del mercado, como lo son Amazon y Microsoft Azure.
				</p>
			</div>
		</div>
	</section>
	<section class="art aplicacion" id="movil">
		<div class="text-center" style="color: white">
			<h1>Aplicación Móvil</h1>
			<p>
				Con nuestra app podrás recibir notificaciones al instante. Los alumnos podrán consultar calificaciones y <br>estados de cuenta, los profesores registrar asistencias y capturar calificaciones, los papás estarán enterados <br>de eventos, calificaciones, estados de cuenta y podrán realizar pagos en línea con cualquier banco.
			</p>
		</div>
	</section>
	<section class="art ubicacion" id="ubicacion">
		<h2 class="text-center">Ubíquenos</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9779744380075!2d-77.02967318518682!3d-12.113659491422748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c816abfb12bb%3A0x852ed10fd375b7f3!2sAv.+Angamos+Este+355%2C+Miraflores+15074!5e0!3m2!1ses!2spe!4v1518411894386" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
	<section class="art footer">
		<div class="container">
		<div class="row text-center ">
			<div class="col-md-6">
				<h4>CENTRO DE OPERACIONES</h4>
				<h5>Av. Angamos Este 355</h5>
				<p>
					<a href="mailto:mdiaz@edumpro.con" class="mail">mdiaz@edumpro.con</a> &nbsp; <a style="color: white" class="tel">957-282-186</a> <br>
					<a href="" class="fb"><i class="fab fa-facebook"></i></a> &nbsp;
					<a href="" class="tw"><i class="fab fa-twitter"></i></a> &nbsp;
					<a href="" class="is"><i class="fab fa-instagram"></i></a> &nbsp;
					<a href="" class="ws"><i class="fab fa-whatsapp"></i></a>
				</p>
			</div>
			<div class="col-md-6">
				<h4>© 2018 EDUMPRO</h4>
				<h5>Una marca más registrada</h5>
				<img src="img/edumpro.png" alt="" width="50%">
			</div>
		</div>
		</div>
	</section>

	

</body>
<?php include 'inc/foot.php'; ?>