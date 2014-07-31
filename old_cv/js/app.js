var takius = angular.module('takius', [
	'ngRoute', 'angular-loading-bar', 'ngAnimate'
]);

takius.config(function($routeProvider){
	$routeProvider
		.when('/', {
			templateUrl: 'takius.html'
		})
		.otherwise({redirectTo: '/'});
});

