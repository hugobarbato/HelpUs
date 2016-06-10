//CADASTRO DOADOR
/*global angular*/
angular.module('app').controller("cadastroCtrl", function($scope, $mdDialog){
    $scope.user = [];
    $scope.user.sexo= "H";
    
    $scope.efetuarCad = function(){
         $mdDialog.show(
          $mdDialog.alert()
            .parent(angular.element(document.querySelector('#popupContainer')))
            .clickOutsideToClose(true)
            .title('This is an alert title')
            .textContent('You can specify some description text in here.')
            .ariaLabel('Alert Dialog Demo')
            .ok('Got it!')
        );
    }
    
});