/*global angular $*/
    angular.module("app", [
    	'ui.router',
    	'ngMaterial',
    	'ngMessages', 
    	'satellizer', 
    	'ui.utils.masks',
    	'ngResource',
    	'angular-loading-bar'
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
				    },
				    "rodape": {
				      templateUrl: "Views/rodape/rodape.html"
				    }
				  }    
			})
			.state('sobre', {
		      url: "/sobre",
		      templateUrl: "Views/sobre.html"
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
		    })
		    .state('doador', {
		      url: "/doador",
		      views: {
				    "navbar": {
				        templateUrl: "Views/navbar/nav-inside.html"
				    },
				    "rodape": {
				        templateUrl: "Views/rodape/rodape.html"
				    },
				    "side-menu": {
				    	templateUrl: "Views/navbar/menu-doador.html"
				    }
			  },  
		      
		    })
		    .state('doador.main',{
		    	 url: "",
				 templateUrl: "Views/feed/index.html",
				 controller: "feedCtrl",
				 controllerAs: 'feed'
		    })
		    .state('doador.addInstituicao', {
		      url: "/add_instituicao",
			  templateUrl: "Views/doador/criarInstituicao.html",
			  controller: "addInstituicaoCtrl",
			  controllerAs: 'addInstituicao'
			
		    })
		    .state('admin', {
		      url: "/administrador",
		      templateUrl: "Views/ADM/index.html",
		      controller: "admCtrl",
		      controllerAs: 'adm'
		    });
		})
		.run(function($rootScope, cfpLoadingBar){
		  	$rootScope.$on('$locationChangeSuccess',function(){
		  		cfpLoadingBar.start();
			    $("html, body").animate({ scrollTop: 0 }, 200);
			    cfpLoadingBar.complete();
			})
		});
