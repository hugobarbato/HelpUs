//LOGIN
/*global angular localStorage*/
angular.module('app').controller("loginCtrl", function($scope, $location, Authentication, Dialog){
	    	$scope.efetuarLogin = function(){
	    		var user = $scope.user;
	    		if(user.email != undefined || user.senha != undefined){
	    		  Authentication.login($scope.user)
		          	.success(function(response) {
		    			if(response.success){
							localStorage.setItem('user', JSON.stringify(response.data));
		    				console.info('doador'+localStorage.getItem('user'));		    				
		    				if(response.data.nivel){
		    					$location.path('/doador');
		    				}else{
		    					$location.path('/administrador');
		    				}
		    			}else{
	    					Dialog.alert(['Falha no login!',response.data.message, 'Entedi!']);
		    			}
		    		})
		    		.error(function(data, status, headers, config) {
	    				Dialog.alert(['Falha no login!',data.data.message, 'Entedi!']);
		    		});
	    		}else{
	    				Dialog.alert(['Falha no login!', 'Email ou senha inválidos.', 'Entedi!']);
	    		}
	    	};
});