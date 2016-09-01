// app.js
var HeadHunterApp = angular.module('HeadHunterApp', ['ui.router']);
HeadHunterApp.run(['$window', '$rootScope', 
function ($window ,  $rootScope) {
  $rootScope.goBack = function(){
    $window.history.back();
  }
}]);

HeadHunterApp.config(function($stateProvider, $urlRouterProvider) {   
//	var BASE_URL = 'http://127.0.0.1/IBM_CI-server/';
    $urlRouterProvider.otherwise('/');  
//	console.log(
    $stateProvider       
        // home page
        .state('home', {
            url: '/',
            templateUrl: BASE_URL + 'Headhunter/index'
        })

        // search result
        .state('search', {
            url: '/search',
			templateUrl: BASE_URL + 'Headhunter/search',
//			templateUrl: $(location).attr('href') + 'Headhunter/search',
			controller: 'searchController'
			
        });      
});

HeadHunterApp.controller('searchController', ['$scope','$http',
	function($scope, $http) {
    var CIURL="http://" + $(location).attr('host')+ "/IBM_CI-server/index.php/searchAPI/" + $scope.keyword;
	/*
		$http({   
			method: 'GET',   
			url: CIURL,
			async: true,
			dataType: "json",
			timeout: 1000000		
		}).success(function(data, status, headers, config) { 
			$scope.labels2 = data.platform;	
			$scope.data2 = data.use_count;   
			console.log(data.platform);
			console.log(data.use_count);
			setTimeout(
						$scope.poll, 
						1000 
					);
			   
		}).error(function(data, status, headers, config) {   
			console.log('poll...error');					
		}); 
		*/
    $scope.message = CIURL;
   
    $scope.results = [
    ];
}]);
