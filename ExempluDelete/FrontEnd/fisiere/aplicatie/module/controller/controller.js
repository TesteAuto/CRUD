class ExempluController {
	constructor($scope, ExempluService) {
		$scope.controllerTest = 'Test';
		ExempluService.resursa.id = 14;
		if(confirm('Esti sigur(a) ca vrei sa stergi?')) {
			ExempluService.deleteData().then(
				function(data) {
					if(typeof data !== 'string') {
						console.log("S-a sters!!!");
					}else{
						alert("Nu s-a sters!!!");
						console.log("Returnare date: ", data);
					} 
				},function(){
					console.log("Eroare in controller");
				});
		}
	}
}
ExempluController.$inject = ['$scope','ExempluService'];
export default ExempluController;

