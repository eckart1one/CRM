
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Cita</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<body>
		<div class="container">
			<h1>Crear Cita</h1>
			<hr>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="titulo" class="col-xs-3 control-label">Titulo</label>
					<div class="col-xs-9">
					<input type="email" class="form-control" id="titulo" placeholder="Titulo">
					</div>
				</div>
				<div class="form-group">
					<label for="titulo" class="col-xs-3 control-label">Cuenta/Lead</label>
					<div class="col-xs-9">
						<select class="form-control">
							<option>Cuenta 1</option>
							<option>Cuenta 2</option>
							<option>Lead 1</option>
							<option>Lead 2</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-xs-3">Hora:</label>
					<div class="col-xs-3">
						<select class="form-control">
							<option>Hora</option>
						</select>
					</div>
					<div class="col-xs-3">
						<select class="form-control">
							<option>Minutos</option>
						</select>
					</div>
					<div class="col-xs-3">
						<select class="form-control">
							<option>Segundos</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-xs-3">Fecha:</label>
					<div class="col-xs-3">
						<select class="form-control">
						<option>Dia</option>
						</select>
					</div>
					<div class="col-xs-3">
						<select class="form-control">
						<option>Mes</option>
						</select>
					</div>
					<div class="col-xs-3">
						<select class="form-control">
						<option>Año</option>
						</select>
					</div>
				</div>
		
				<div class="form-group">
					<label class="control-label col-xs-3">Recordar:</label>
					<div class="col-xs-3">
						<select class="form-control">
						<option>Dia</option>
						</select>
					</div>
					<div class="col-xs-3">
						<select class="form-control">
						<option>Mes</option>
						</select>
					</div>
					<div class="col-xs-3">
						<select class="form-control">
						<option>Año</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="lugar" class="col-xs-3 control-label">Lugar</label>
					<div class="col-xs-2">
						<input type="text" class="form-control" id="codigo_postal" placeholder="CP">
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control" id="Colonia" placeholder="Colonia">
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control" id="Calle" placeholder="Calle">
					</div>
					<div class="col-xs-2">
						<input type="text" class="form-control" id="Numero" placeholder="Numero">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-xs-3">Descripcion:</label>
					<div class="col-xs-9">
						<textarea rows="3" class="form-control" placeholder="Descripcion:"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-xs-offset-3 col-xs-9">
						<input type="submit" class="btn btn-primary" value="Guardar">
						<input type="reset" class="btn btn-default" value="Cancelar">
					</div>
				</div>
			</form>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
