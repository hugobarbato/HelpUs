(function(){
/*global angular localStorage */
    angular
        .module('app')
        .service('Authentication', function ($http, $location, Dialog) {
            this.load = false;
            this.estaLogado= function() {
              var data = JSON.parse(localStorage.getItem('user'));
              if(!data){
                  out(['Acesso negado!!!', 'Aparentemente você não está logado para ter acesso a esta area.','OK']);
              }
              return data;
            }
            this.login = function(postData) {
               return $http.post('https://help-us-developerhbr.c9users.io/api/tbUsuario/login.json', postData);
            }
            this.logout = function() {
                localStorage.clear();
                Dialog.confirm(
                    ['Saindo','Você deseja realmente sair do sistema?', 'Sim','Não'],
                    function(){out(['Volte sempre!', 'Obrigado por sua iniciativa.','Tchau'])}
                );
            }
            function out(msg){
                Dialog.alert(msg);
                $location.path('/');
            }
            
    });
    
})();
