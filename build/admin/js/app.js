(function(){
  var app = angular.module('therappyPanel', [
		'ngRoute',
    'ngclipboard',
    'ngSanitize',
    'ui.tinymce',
		'therappyPanel.controllers',
		'therappyPanel.services',
		'therappyPanel.directives'
	]);
  app.config(['$routeProvider', function($routeProvider){
    $routeProvider
      .when('/slider-home', {
        templateUrl: './../views/slider-home.html',
        controller: 'menuNavController'
      })
      .when('/course-gallery', {
        templateUrl: './../views/course-gallery.html',
        controller: 'menuNavController'
      })
      .when('/place-gallery', {
        templateUrl: './../views/place-gallery.html',
        controller: 'menuNavController'
      })
      .when('/interest-blog', {
        templateUrl: './../views/interest-blog.html',
        controller: 'menuNavController'
      })
      .when('/event-blog', {
        templateUrl: './../views/event-blog.html',
        controller: 'menuNavController'
      })
      .when('/post-interest-blog/:id', {
        templateUrl: './../views/post-interest-blog.html',
        controller: 'getInterestPostByIdController'
      })
      .when('/post-event-blog/:id', {
        templateUrl: './../views/post-event-blog.html',
        controller: 'getEventPostByIdController'
      })
      .otherwise({
				redirectTo: '/redirect'
			});
  }]);
})();
