//LOGIN
/*global angular localStorage*/
angular.module('app').controller("appCtrl", function($scope, $mdSidenav, $location, Authentication){
  
    $scope.logout = function(){
      Authentication.logout();
    }
    //Nav Builder
    $scope.toggleRight = buildToggler('right');
    function buildToggler(navID) {
      return function() {
        // Component lookup should always be available since we are not using `ng-if`
        $mdSidenav(navID)
          .toggle()
          .then(function () {
          });
      }
    }
    //Nav Open and Close
    $scope.isOpenRight = function(){
      return $mdSidenav('right').isOpen();
    }
    $scope.close = function () {
      // Component lookup should always be available since we are not using `ng-if`
      $mdSidenav('right').close()
        .then(function () {
        });
    };
});