<!DOCTYPE html>
<html ng-app="app">
<head>
	<title>Login</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="css/libraries/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-2 col-md-3"></div>
			<div class="col-sx-12 col-sm-8 col-md-6" ng-controller="LoginController">
				<form name="login">
					<br><br><br><br><br>
					<div class="form-group">
						<label>Usuario</label>
						<input type="text" name="user" ng-model="users.user" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="user" ng-model="users.password" class="form-control">
					</div>


					<div class="form-group">
						<label>Role</label>
						<select class="form-control" ng-model="users.role">
							<option value=""> --Seleccione-- </option>
							<option value="1">Gestor Proveedor</option>
							<option value="2">Gerente TI</option>
							<option value="3">Acesor Legal</option>
						</select>
					</div>

					<div class="form-group">
						<button class="btn btn-default">Cancelar</button>
						<button class="btn btn-default" ng-click="login(users)">Ingresar</button>
					</div>
				</form>
			</div>
			<div class="col-sm-2 col-md-3"></div>
		</div>
	</div>
	<script src="js/libraries/jQuery-2.1.4.min.js"></script>
    <script src="js/libraries/bootstrap.min.js"></script>

    <script src="js/libraries/angular.min.js"></script>
    <script src="js/libraries/angular-route.min.js"></script>
    <script src="js/app-config.js"></script>
    <script src="js/app-controller.js"></script>
</body>
</html>