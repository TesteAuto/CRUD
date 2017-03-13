export default class exempluDirective {
    constructor() {
        this.template = '<div>{{ctrl.name}}</div>';
        this.restrict = 'E';
        this.scope = {};
        
        this.controller = ExempluDirectiveController;
        this.controllerAs = 'ctrl';
        this.bindToController = true;
    }
    compile() {
		
    }
    link() {
		
    }
    static direc(){
        exempluDirective.obiect = new exempluDirective();
        return exempluDirective.obiect;
    }
}
class ExempluDirectiveController {
    constructor () {
        this.name = 'StelaCeban';
    }
}