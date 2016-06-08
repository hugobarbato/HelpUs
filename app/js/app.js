/*global angular*/
    angular.module("app", ['ui.router', 'ngMaterial', 'satellizer', 'ui.utils.masks'])
    //Config
		.config(function($stateProvider, $urlRouterProvider, $authProvider) {
	  //
	  // For any unmatched url, redirect to /home
	  $urlRouterProvider.otherwise("/");
	  //
	  // Now set up the states
	  $stateProvider
	    .state('main', {
	      url: "/",
	      templateUrl: "Views/home.html"
	    })
	    .state('login', {
	      url: "/login",
	      templateUrl: "Views/login.html",
	      controller: "loginCtrl",
	      controllerAs: 'login'
	    })
	    .state('cadastro', {
	      url: "/cadastro",
	      templateUrl: "Views/cadastro.html",
	      controller: "cadastroCtrl"
	    });
	    
	    
	    	$authProvider.httpInterceptor = function() { return true; }
			$authProvider.withCredentials = true;
			$authProvider.tokenRoot = null;
			$authProvider.baseUrl = '/';
			$authProvider.loginUrl = 'api/tbUsuarios/login';
			$authProvider.signupUrl = '/cadastro';
			$authProvider.unlinkUrl = '/auth/unlink/';
			$authProvider.tokenName = 'token';
			$authProvider.tokenPrefix = 'satellizer';
			$authProvider.authHeader = 'Authorization';
			$authProvider.authToken = 'Bearer';
			$authProvider.storageType = 'localStorage';

	
	    
})

    // Controllers
    	
    	//CADASTRO DOADOR
    	.controller("cadastroCtrl", function($scope){
    		$scope.showHints = true;
			 $scope.user = {
    			nome: "",
    			email: ""
			 	
			 };
			 $scope.myDate = new Date();
    	
    	});