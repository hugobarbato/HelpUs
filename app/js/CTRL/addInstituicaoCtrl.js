(function(){
    
    angular
        .module('app')
        .controller('addInstituicaoCtrl', function ($scope, $location, Authentication, $http, CepFactory) {
            var user = localStorage.getItem('user');
            
                console.info(JSON.stringify(user));
            var auth = Authentication.estaLogado();
            if(!auth){
                $location.path('/');
            }else{
                $scope.user = auth;
            }
            $http.get('https://help-us-developerhbr.c9users.io/api/tbInstituicao/add.json')
            .success(function(response) {
    		    $scope.categorias = response.tbCategoriaInstituicao;
    		})
    		.error(function(data, status, headers, config) {
    	    	console.info('Error ao carregar periodo')
    		});
            $scope.efetuarCad = function(){
                $scope.instituicao['cd_usuario'] = user.id;
                var data = $scope.instituicao;
                console.info(JSON.stringify(data));
                $http.post('https://help-us-developerhbr.c9users.io/api/tbInstituicao/add.json', data)
                .success(function(response) {
        		    console.info(response);
        		})
        		.error(function(data, status, headers, config) {
        	    	console.info('Error ao carregar periodo'+data);
        		});
            }
            $scope.procuraCep = function () {
		        	CepFactory.get({'cep': $scope.instituicao.Endereco.cep}).$promise
    					.then(function success(result){
    					  if(!result.erro){
      						$scope.instituicao.Endereco.endereco = result.logradouro;
      						$scope.instituicao.Endereco.bairro = result.bairro;
      						$scope.instituicao.Endereco.cidade = result.localidade;
      						$scope.instituicao.Endereco.estado = result.uf;
    					  }else{
                  callDialog(['CEP Não Encontrado', 'O cep informado não foi encontrado em nossas fontes!', 'Entendi', 'containerCep']);
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
    
})();
