app.controller('AppController', function($scope){
	$scope.menu = [{text:"Solicitud de servicio",href:"#/service",role:"2"},
					{text:"Proveedor Unico",href:"#/unico",role:"1"},
					{text:"Revision Presupuestal",href:"#/presupuestal",role:"1"},
					{text:"Evaluacion de servicios",href:"#/",role:"1"}];
});

app.controller('LoginController', function($scope){
	$scope.users = {};
	$scope.login = function(users){
		console.log(users);
	}
});