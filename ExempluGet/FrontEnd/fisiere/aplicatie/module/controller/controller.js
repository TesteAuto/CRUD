class ExempluController {
	constructor($scope, ExempluService, ExempluFactory) {
		$scope.controllerTest = 'Test';
		$scope.serv = ExempluService.getData().then(function(response) {
			$scope.controllerTest2 = response.data;
		}, function () {
			console.log("Eroare in controller1");
		});


        $scope.factor = ExempluFactory.getData().then(function(response) {
			$scope.controllerTest3 = response.data;
		}, function () {
			console.log("Eroare in controller1");
		});
	}
}
ExempluController.$inject = ['$scope','ExempluService','ExempluFactory'];
export default ExempluController;
