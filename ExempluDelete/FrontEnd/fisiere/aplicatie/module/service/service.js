export default class ExempluService {
    constructor(Restangular) {
         this.resursa = Restangular.one("/stergere");
    }
   
	deleteData() {
        return this.resursa.remove().then(function (data) {
           return data;
       });
    }
}

ExempluService.$inject = ['Restangular'];