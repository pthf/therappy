(function(){
  angular.module('therappyPanel.controllers', [])
  .controller('menuNavController', ['$scope', '$routeParams', '$location', function($scope, $routeParams, $location){
		$scope.routeParams = $location.path();
    $scope.selected = 0;
		switch ($scope.routeParams) {
			case '/slider-home': $scope.selected = 1;  break;
      case '/course-gallery': $scope.selected = 2;  break;
      case '/place-gallery': $scope.selected = 3;  break;
      case '/interest-blog': $scope.selected = 4;  break;
      case '/event-blog': $scope.selected = 5;  break;
		}
		$scope.changeNav = function(item){
			$scope.selected = item;
		};
  }])
  .controller('tinyController', ['$scope', function($scope){
    $scope.tinymceOptions = {
      onChange: function(e) {
        // put logic here for keypress and cut/paste changes
      },
      inline: false,
      plugins : 'advlist autolink link image lists charmap print preview table',
      skin: 'lightgray',
      theme : 'modern',
      height : 600
    };
  }])
  .controller('viewNavController', ['$scope', function($scope){
		$scope.item = 1;
		$scope.selectItem = function(item){
			$scope.item = item;
		};
  }])
  .controller('getImagesSliderHomeController', ['$scope', 'therappyService', function($scope, therappyService){
    $scope.listImages = [];
    therappyService.getImagesSliderHome().then(function(data){
      $scope.listImages = data;
    });
  }])
  .controller('getImagesCourseGalleryController', ['$scope', 'therappyService', function($scope, therappyService){
    $scope.listImages = [];
    therappyService.getImagesCourseGallery().then(function(data){
      $scope.listImages = data;
    });
  }])
  .controller('getImagesPlaceGalleryController', ['$scope', 'therappyService', function($scope, therappyService){
    $scope.listImages = [];
    therappyService.getImagesPlaceGallery().then(function(data){
      $scope.listImages = data;
    });
  }])
  .controller('getImagesLibraryController', ['$scope', 'therappyService', function($scope, therappyService){
    $scope.listImages = [];
    $scope.loadList = function(){
      therappyService.getImagesLibrary().then(function(data){
        $scope.listImages = data;
      });
    }
    $scope.loadList();
  }])
  .controller('getListInterestBlogController', ['$scope', 'therappyService', function($scope, therappyService){
    $scope.listInterestBlog = [];
    $scope.loadList = function(){
      therappyService.getListInterestBlog().then(function(data){
        $scope.listInterestBlog = data;
      });
    }
    $scope.loadList();
  }])
  .controller('getInterestPostByIdController', ['$scope', '$routeParams', 'therappyService', '$sce', function($scope, $routeParams, therappyService, $sce){
    $scope.id = parseInt($routeParams.id);
    $scope.informationPost = [];
    $scope.loadInformation = function(){
      therappyService.getInformationPost($scope.id).then(function(data){
        $scope.informationPost = data;
      });
    }
    $scope.loadInformation();
    $scope.trustAsHtml = function(html) {
      return $sce.trustAsHtml(html);
    };
  }])
  .controller('getListEventBlogController', ['$scope', 'therappyService', function($scope, therappyService){
    $scope.listEventBlog = [];
    $scope.loadList = function(){
      therappyService.getListEventBlog().then(function(data){
        $scope.listEventBlog = data;
      });
    }
    $scope.loadList();
  }])
  .controller('getEventPostByIdController', ['$scope', '$routeParams', 'therappyService', '$sce', function($scope, $routeParams, therappyService, $sce){
    $scope.id = parseInt($routeParams.id);
    $scope.informationPost = [];
    $scope.loadInformation = function(){
      therappyService.getInformationEventPost($scope.id).then(function(data){
        $scope.informationPost = data;
      });
    }
    $scope.loadInformation();
    $scope.trustAsHtml = function(html) {
      return $sce.trustAsHtml(html);
    };
  }])
})();
