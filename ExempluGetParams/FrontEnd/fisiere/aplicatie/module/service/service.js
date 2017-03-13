export default class ExempluService {
    constructor(Restangular) {
    	this.resursa = Restangular.withConfig(function (RestangularConfigurer) {
    		RestangularConfigurer.setFullResponse(true);
    	}).all('/afisare');
    }
	
	getData (params) {
		return this.resursa.getList(params).then(function (response) {
             return response;
         });
	}
}

ExempluService.$inject = ['Restangular'];