<html>
	<head>
        <tittle>Alta de Usuarios </tittle>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
		<link rel="stylesheet" href="style.css">
		<script src="ajax.js"></script>
    </head>
	<body>
		<form id="area-alta" method="POST">
			<ul>
				<li>
					<input type="text" name="nombre" id="nombre" required placeholder="Nombre Completo">
				</li>	
				<li>
					<input type="email" name="email" id="email" required placeholder="Email">
                </li>
                <li>
                    <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Mensaje"></textarea>
                </li>
				<li>
					<input type="submit" id="grabar" value="grabar" ><input type="reset" value="Limpiar">
				</li>
			</ul>
		</form>
		<div id="cabecera">
			<ul>
				<li><i class="fa fa-sort" aria-hidden="true"></i> Nombre</li>
				<li><i class="fa fa-sort" aria-hidden="true"></i> Email</li>
			</ul>
		</div>
		<div id="area-datos">
			<table>
				<thead>
					<th>Nombre <i class="fa fa-sort-alpha-asc" ></i>  <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i></th>
					<th>Email <i class="fa fa-sort-alpha-asc" ></i>  <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i></th>
					<th>Mensaje</th>
					<th>Acciones</th>
				</thead>
			<?php
				include("getlist.php");
			?>
			</table>
		</div>
	</body>
</html>
