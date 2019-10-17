var app = angular.module("myapp", []);
app.controller("usercontroller", function ($scope,$http) {
	$http.get('http://200.148.91.59/testeprodutos').then(
		function (response) {
			$scope.countryList = response.data;
		})
	$scope.complete = function (string) {
		var output = [];
		angular.forEach($scope.countryList, function (country, code) {
			output.push(code + "-" + country.DESCRICAO);
		});
		$scope.filterCountry = output;
	}
		$scope.fillTextbox = function (string) {
		$scope.country = string;
		$scope.hidethis = true;
	}
});

$scope.add = function(){
  $http.get($scope.url).then(function(response) {
            $scope.newMessage = response.data.queries.request.totalResults;
            $scope.messages.push($scope.newMessage);
  });
};