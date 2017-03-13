class ExempluController {
	constructor($scope, ExempluService, ExempluFactory) {
		$scope.controllerTest = 'Test';
		let params = {
			col1: 'exemplu',
			col2: 'exemplu',
			col3: 'exemplu'
		};
		$scope.serv = ExempluService.postData(params).then(function(response) {
			$scope.controllerTest2 = response.data;
		}, function () {
			console.log("Eroare in controller1");
		});


		$scope.factor = ExempluFactory.postData(params).then(function(response) {
			$scope.controllerTest3 = response.data;
		}, function () {
			console.log("Eroare in controller1");
		});
	}
}
ExempluController.$inject = ['$scope','ExempluService','ExempluFactory'];
export default ExempluController;

