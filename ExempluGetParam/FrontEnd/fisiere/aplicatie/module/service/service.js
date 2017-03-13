export default class ExempluService {
    constructor(Restangular) {
    	this.resursa = Restangular.withConfig(function (RestangularConfigurer) {
    		RestangularConfigurer.setFullResponse(true);
    	}).all('/afisare');
    }
	
	getData (param) {
		return this.resursa.getList(param).then(function (response) {
             return response;
         });
	}
}

ExempluService.$inject = ['Restangular'];