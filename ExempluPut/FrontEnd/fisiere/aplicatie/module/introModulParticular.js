import angular from 'angular';
import uiRouter from 'angular-ui-router';
import restangular from 'restangular';

import ExempluController from './controller/controller.js';
import ExempluService from './service/service.js';
// import ExempluFactory from './factory/factory.js';
import exempluDirective from './directive/directive.js';

export default angular.module('modulParticular', ['ui.router','restangular'])
.controller('ExempluController', ExempluController)
.service('ExempluService', ExempluService)
// .factory('ExempluFactory',ExempluFactory.fact)
.directive('exempluDirective',exempluDirective.direc)
.config(['$urlRouterProvider','$stateProvider','RestangularProvider',function($urlRouterProvider,$stateProvider,RestangularProvider) {
	RestangularProvider.setBaseUrl('http://localhost/ExempluPut/BackEnd');
	$urlRouterProvider.otherwise('/');
	$stateProvider
	.state('pagina1', {
		url: '/pagina1',
		templateUrl: '../fisiere/aplicatie/module/pagini/pagina1.htm',
		controller:''
	})
	.state('pagina2', {
		url: '/pagina2',
		templateUrl: '../fisiere/aplicatie/module/pagini/pagina2.htm',
		controller:''
	});
}]);