export default class ExempluFactory {
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
	static fact(Restangular){
		ExempluFactory.obiect = new ExempluFactory(Restangular);
		return ExempluFactory.obiect;
	}
}

ExempluFactory.$inject = ['Restangular'];