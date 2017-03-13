class ExempluController {
	constructor($scope, ExempluService, ExempluFactory) {
		$scope.controllerTest = 'Test';
		let param = {
			id: 1
		};
		$scope.serv = ExempluService.getData(param).then(function(response) {
			$scope.controllerTest2 = response.data;
		}, function () {
			console.log("Eroare in controller1");
		});


		$scope.factor = ExempluFactory.getData(param).then(function(response) {
			$scope.controllerTest3 = response.data;
		}, function () {
			console.log("Eroare in controller1");
		});
	}
}
ExempluController.$inject = ['$scope','ExempluService','ExempluFactory'];
export default ExempluController;

