export default class ExempluFactory {
	constructor(Restangular) {
	}
	
	putData(params) {
		this.resursa = Restangular.one("/modificare", params.id);
		return this.resursa.customPUT(params).then(function(data){
			return data;
		});
	}
	static fact(Restangular){
		ExempluFactory.obiect = new ExempluFactory(Restangular);
		return ExempluFactory.obiect;
	}
}

ExempluFactory.$inject = ['Restangular'];