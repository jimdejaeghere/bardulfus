var app = angular.module("bardulfusApp", ['ngRoute', 'ui.bootstrap']);

app.config(function ($routeProvider, $locationProvider) {
	$routeProvider
		.when('/', {
		templateUrl: './partials/home.html',
		controller: 'homeCtrl'
	})
		.when('/NewStock', {
		templateUrl: './partials/products.html',
		controller: 'productCtrl'
	})
		.otherwise({
		redirectTo: '/'
	});
    
});
