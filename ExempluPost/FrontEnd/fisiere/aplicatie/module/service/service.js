export default class ExempluService {
    constructor(Restangular) {
    	this.resursa = Restangular.withConfig(function (RestangularConfigurer) {
    		RestangularConfigurer.setFullResponse(true);
    	}).all('/creare');
    }
	
	postData (params) {
		return this.resursa.post(params).then(function (response) {
             return response;
         });
	}
}

ExempluService.$inject = ['Restangular'];