export default class ExempluService {
    constructor(Restangular) {
    	this.resursa = Restangular.withConfig(function (RestangularConfigurer) {
    		RestangularConfigurer.setFullResponse(true);
    	}).all('/afisare');
    }
	
	getData () {
		return this.resursa.getList().then(function (response) {
             return response;
         });
	}
}

ExempluService.$inject = ['Restangular'];