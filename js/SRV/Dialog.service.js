(function(){
/*global angular*/
    angular
        .module('app')
        .service('Dialog', function ($mdDialog) {
            this.alert = function(obj) {
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
		            //  alert = undefined;
		            });
		     }
		    this.confirm = function(obj, func1, func2 = function(){}){
                // Appending dialog to document.body to cover sidenav in docs app
                var confirm = $mdDialog.confirm()
                      .title(obj[0])
                      .textContent(obj[1])
                      .ok(obj[2])
                      .cancel(obj[3]);
                $mdDialog.show(confirm).then(function() {
                  func1();
                }, function() {
                  func2();
                });
		    }
    });
    
})();
