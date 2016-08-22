var app = angular.module("app",["ngRoute"]);
app.config(['$routeProvider',function($routeProvider) {
	console.log($routeProvider);
	$routeProvider.
		when("/",{
			templateUrl:"pages/inicio.html",
			controller: '',
		}).when("/service",{
			templateUrl:"pages/solic_service.php",
			controller: '',
		}).when("/unico",{
			templateUrl:"pages/prov_unico.php",
			controller: '',
		}).when("/presupuestal",{
			templateUrl:"pages/revis_ppto.php",
			controller: '',
		}).when("/eva_service",{
			templateUrl:"pages/eva_servicio.php",
			controller: '',
		}).when("/observadas",{
			templateUrl:"pages/solic_observadas.php",
			controller: '',
		}).when("/busquedas",{
			templateUrl:"pages/bus_solicitud.php",
			controller: '',
		}).when("/service_form",{
			templateUrl:"pages/eva_servicio_form.php",
			controller: '',
		}).otherwise({
			val:$routeProvider
		});
}]);