(function() {
	'use strict';

	angular
		.module('app')
		.service('API', apiService);

	apiService.$inject = ['$location'];

  /** @ngInject */
	function apiService($location) {
		return {
			url: $location.protocol() + '://' + $location.host() + '/api/'
			// url: $location.protocol() + '://' + $location.host() + '/rastreador/api/'
		};
	}
})();