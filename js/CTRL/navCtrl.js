(function(){
    
    angular
        .module('app')
        .controller('navCtrl', function ($scope, $location, Authentication, $mdSidenav) {
            var auth = Authentication.estaLogado();
            if(!auth){
                $location.path('/');
            }else{
                $scope.user = auth;
            }
            
            // $scope.close = function () {
            //   // Component lookup should always be available since we are not using `ng-if`
            //   $mdSidenav('right').close()
            //     .then(function () {
            //     });
            // };
    });
    
})();
