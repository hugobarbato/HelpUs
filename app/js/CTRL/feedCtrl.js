(function(){
    
    angular
        .module('app')
        .controller('feedCtrl', function ($scope, $location, Authentication) {
            var auth = Authentication.estaLogado();
            if(!auth){
                $location.path('/');
            }else{
                $scope.user = auth;
            }
    });
    
})();
