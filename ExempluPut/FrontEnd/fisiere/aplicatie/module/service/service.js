export default class ExempluService {
    constructor(Restangular) {
         this.resursa = Restangular.one("/modificare");
    }
   
	putData(params) {
        return this.resursa.customPUT(params).then(function(data){
            return data;
        });
    }
}

ExempluService.$inject = ['Restangular'];