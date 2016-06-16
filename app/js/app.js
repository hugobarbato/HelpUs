/*global angular $*/
    angular.module("app", [
    	'ui.router',
    	'ngMaterial',
    	'ngMessages', 
    	'satellizer', 
    	'ui.utils.masks',
    	'ngResource'
    ])
    //Config
	  .config(function($mdThemingProvider, $stateProvider, $urlRouterProvider, $authProvider) {
	  	
	  	$mdThemingProvider.theme('default')
	  		.primaryPalette('blue')
    		.accentPalette('pink');;
	  //
	  // For any unmatched url, redirect to /home
	  $urlRouterProvider.otherwise("/");
	  //
	  // Now set up the states
	  $stateProvider
	    .state('main', {
	    	  url: "/",
			  views: {
			    "": {
			      templateUrl: "Views/home.html"
			    },
			    "navbar": {
			      templateUrl: "Views/navbar/nav-home.html"
			    }
			  }    
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
	      controller: "cadastroCtrl",
	      controllerAs: 'cad'
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
	  .run(function($rootScope){
	  	$rootScope.$on('$stateChangeSuccess',function(){
		    $("html, body").animate({ scrollTop: 0 }, 200);
		})
	  });
