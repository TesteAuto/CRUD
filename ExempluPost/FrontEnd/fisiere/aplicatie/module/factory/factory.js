export default class ExempluFactory {
    constructor(Restangular) {
    	this.resursa = Restangular.withConfig(function (RestangularConfigurer) {
    		RestangularConfigurer.setFullResponse(true);
    	}).all('/creare');
    }
	
	postData(params) {
		return this.resursa.post(params).then(function (response) {
             return response;
         });
	}
	static fact(Restangular){
		ExempluFactory.obiect = new ExempluFactory(Restangular);
		return ExempluFactory.obiect;
	}
}

ExempluFactory.$inject = ['Restangular'];