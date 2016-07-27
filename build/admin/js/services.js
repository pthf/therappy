(function(){
  angular.module('therappyPanel.services', [])
  .factory('therappyService', ['$http', '$q', function($http, $q){
    function getImagesSliderHome(){
      var deferred = $q.defer();
      $http.get('./../php/services.php?namefunction=getImagesSliderHome')
        .success(function (data) {
            deferred.resolve(data);
        });
        return deferred.promise;
    }
    function getImagesCourseGallery(){
      var deferred = $q.defer();
      $http.get('./../php/services.php?namefunction=getImagesCourseGallery')
        .success(function(data){
            deferred.resolve(data);
        });
        return deferred.promise;
    }
    function getImagesPlaceGallery(){
      var deferred = $q.defer();
      $http.get('./../php/services.php?namefunction=getImagesPlaceGallery')
        .success(function(data){
            deferred.resolve(data);
        });
        return deferred.promise;
    }
    function getImagesLibrary(){
      var deferred = $q.defer();
      $http.get('./../php/services.php?namefunction=getImagesLibrary')
        .success(function(data){
            deferred.resolve(data);
        });
        return deferred.promise;
    }
    function getListInterestBlog(){
      var deferred = $q.defer();
      $http.get('./../php/services.php?namefunction=getListInterestBlog')
        .success(function(data){
            deferred.resolve(data);
        });
        return deferred.promise;
    }
    function getInformationPost(id){
      var deferred = $q.defer();
      $http.get('./../php/services.php?namefunction=getInformationPost&id='+id)
        .success(function(data){
            deferred.resolve(data);
        });
        return deferred.promise;
    }
    function getListEventBlog(){
      var deferred = $q.defer();
      $http.get('./../php/services.php?namefunction=getListEventBlog')
        .success(function(data){
            deferred.resolve(data);
        });
        return deferred.promise;
    }
    function getInformationEventPost(id){
      var deferred = $q.defer();
      $http.get('./../php/services.php?namefunction=getInformationEventPost&id='+id)
        .success(function(data){
            deferred.resolve(data);
        });
        return deferred.promise;
    }
    return {
      getImagesSliderHome: getImagesSliderHome,
      getImagesCourseGallery: getImagesCourseGallery,
      getImagesPlaceGallery: getImagesPlaceGallery,
      getImagesLibrary: getImagesLibrary,
      getListInterestBlog: getListInterestBlog,
      getInformationPost: getInformationPost,
      getListEventBlog: getListEventBlog,
      getInformationEventPost: getInformationEventPost
    }
  }]);
})();
