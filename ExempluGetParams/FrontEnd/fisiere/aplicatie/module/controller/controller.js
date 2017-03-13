class ExempluController {
	constructor($scope, ExempluService, ExempluFactory) {
		$scope.controllerTest = 'Test';
		let params = {
			id: 3,
			col1: 'exemplu3'
		};
		$scope.serv = ExempluService.getData(params).then(function(response) {
			$scope.controllerTest2 = response.data;
		}, function () {
			console.log("Eroare in controller1");
		});


		$scope.factor = ExempluFactory.getData(params).then(function(response) {
			$scope.controllerTest3 = response.data;
		}, function () {
			console.log("Eroare in controller1");
		});
	}
}
ExempluController.$inject = ['$scope','ExempluService','ExempluFactory'];
export default ExempluController;

