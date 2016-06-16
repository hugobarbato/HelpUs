//CADASTRO DOADOR
/*global angular localStorage*/
angular.module('app')
	.controller("cadastroCtrl", function($scope, $mdDialog, CepFactory, $location, $anchorScroll, $http, $state){
      var myDate = new Date();
      var msg = [];
      // Definindo datas minimas e maximas
      $scope.minDate = new Date(
          myDate.getFullYear()-130,
          myDate.getMonth(),
          myDate.getDate());
      $scope.maxDate = new Date(
          myDate.getFullYear()-12,
          myDate.getMonth(),
          myDate.getDate());
          
      $scope.efetuarCad = function(){
        $http.post('https://help-us-developerhbr.c9users.io/api/tbUsuario/add.json', $scope.user)
          	.success(function(response) {
    					  if (response.response.code === 0 ) {
    					    console.info(JSON.stringify(response));
    					     msg = ['ERROR','Desculpe, alguns erros occoram em seu cadastro!', 'Entedi!'];
    					    if(response.response.errors !== undefined){
    					      response.response.errors.forEach(function (element, index, array){
    					        for(var prop in element){
    					           if(!element.hasOwnProperty(prop)) continue;
    					          msg[1] +=  (index+1)+"º Erro = "+element[prop];
    					        }
    					      });
    					    }
    					  }else{
    					    localStorage.setItem('user', JSON.stringify(response.response));
    					     msg = ['Sucesso!!!','Parabens pela iniciativa! Clique em OK comece agora a fazer a diferença!', 'OK'];
    					    $location.path("/doador")
    					  }
    				  callDialog(msg);
    				})
    				.error(function(data, status, headers, config) {
    					  msg = ['ERROR','Falha na conexão com nossas fontes, tente novamente daqui a alguns segundos!', 'Entedi!'];
    				});
      }
      $scope.procuraCep = function () {
		        	CepFactory.get({'cep': $scope.user.Endereco.cep}).$promise
    					.then(function success(result){
    					  if(!result.erro){
      						$scope.user.Endereco.endereco = result.logradouro;
      						$scope.user.Endereco.bairro = result.bairro;
      						$scope.user.Endereco.cidade = result.localidade;
      						$scope.user.Endereco.estado = result.uf;
    					  }else{
                  msg = ['CEP Não Encontrado', 'O cep informado não foi encontrado em nossas fontes!', 'Entendi', 'containerCep'];
                  callDialog(msg);
                  $scope.user.Endereco = [];
    					  }
    					}).catch(function error(msg) {
    						console.error('Error');
    					});
      }
      
      function callDialog(obj) {
          var alert = $mdDialog.alert({
            parent: angular.element(document.getElementById(obj[3])),
            autoWrap : false,
            fullscreen : false,
            hasBackdrop :true,
            disableParentScroll: false,
            focusOnOpen :true,
            title: obj[0],
            textContent: obj[1],
            ok: obj[2]
          });
          $mdDialog
            .show( alert )
            .finally(function() {
              alert = undefined;
            });
        }
});