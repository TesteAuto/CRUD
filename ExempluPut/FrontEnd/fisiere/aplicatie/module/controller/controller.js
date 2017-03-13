class ExempluController {
	constructor($scope, ExempluService) {
		$scope.controllerTest = 'Test';
		let params = {
			col1: 'exempluUpdate',
			col2: 'exempluUpdate',
			col3: 'exempluUpdate'
		};
	    ExempluService.resursa.id = 5;
		$scope.serv = ExempluService.putData(params).then(function(response) {
			$scope.controllerTest2 = response.data;
		}, function () {
			console.log("Eroare in controller1");
		});
	}
}
ExempluController.$inject = ['$scope','ExempluService'];
export default ExempluController;

