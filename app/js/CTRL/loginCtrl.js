//LOGIN
angular.module('app').controller("loginCtrl", function($scope, $auth){
    		
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
    	
});