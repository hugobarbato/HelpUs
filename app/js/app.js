/*global angular*/
    angular.module("app", ['ui.router', 'ngMaterial', 'satellizer'])
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

	
	    
});

    // Controllers
    angular.module("app")
    	.controller("loginCtrl", function($scope, $auth){
    		
	    	$scope.logar = function(provider){
	    		var user = $scope.user;
	    		$auth.login(user)
				  .then(function(response) {
				    // Redirect user here after a successful log in.
				  })
				  .catch(function(response) {
				    // Handle errors here, such as displaying a notification
				    // for invalid email and/or password.
				  });
	    	};
	    	
	    	$scope.authenticate = function(provider) {
		      $auth.authenticate(provider);
		    };
    	
    	})
    	.controller("cadastroCtrl", function($scope){
    	
    	});