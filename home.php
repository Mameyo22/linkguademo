<html>
	<head>
        <tittle>Alta de Usuarios </tittle>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
		<link rel="stylesheet" href="style.css">
		<script src="ajax.js"></script>
    </head>
	<body>
		<div id="area-alta" >
			<ul>
				<li>
					<input type="text" name="nombre" id="nombre" required placeholder="Nombre Completo">
					<input type="hidden" name="userid" id="userid" value="0">
				</li>	
				<li>
					<input type="email" name="email" id="email" required placeholder="Email">
                </li>
                <li>
                    <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Mensaje"></textarea>
                </li>
				<li>
					<button id="grabar">Grabar</button> <input type="reset" id="limpiar" value="Limpiar">
				</li>
			</ul>
		</div>
		<div id="area-datos">
			<table>
				<thead>
					<th>Nombre <span id="NomAsc" <i class="fa fa-sort-alpha-asc" ></i></span><span id="NomDes">  <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i></span></th>
					<th>Email  <span id="EmailAsc" <i class="fa fa-sort-alpha-asc" ></i></span><span id="EmailDes">  <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i></span></th>
					<th>Mensaje</th>
					<th>Acciones</th>
				</thead>
				<tbody id="datos">

				</tbody>
			</table>
		</div>
	</body>
</html>
