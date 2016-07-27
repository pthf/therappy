(function(){
	angular.module('therappyPanel.directives', [])
	.directive('topNav', function(){
		return{
			restrict: 'E',
			templateUrl: './../partials/top-nav.php',
			controller: function($document){
				var open = true;
				$(window).resize(function(){
					open = true;
					if($(window).width()>1366){
						$('.menu-nav').css({'margin-left' : '0%'});
						$('.panel-cont').css({'width' : '85%', 'left' : '15%'});
					}else{
						if($(window).width()>768){
							$('.menu-nav').css({'margin-left' : '0%'});
							$('.panel-cont').css({'width' : '80%','left' : '20%'});
						}else{
							if($(window).width()>640){
								$('.menu-nav').css({ 'margin-left' : '0%'});
								$('.panel-cont').css({ 'width' : '75%', 'left' : '25%'});
							}
						}
					}
				});
				$('#menuha').click(function(){
					if(open){
						if($(window).width()>1366){
							$('.menu-nav').css({'margin-left' : '-15%'});
							$('.panel-cont').css({'width' : '100%', 'left' : '0'});
						}else{
							if($(window).width()>768){
								$('.menu-nav').css({'margin-left' : '-20%'});
								$('.panel-cont').css({'width' : '100%','left' : '0'});
							}else{
								if($(window).width()>640){
									$('.menu-nav').css({ 'margin-left' : '-25%'});
									$('.panel-cont').css({ 'width' : '100%', 'left' : '0'});
								}
							}
						}
					}else{
						if($(window).width()>1366){
							$('.menu-nav').css({'margin-left' : '0%'});
							$('.panel-cont').css({'width' : '85%', 'left' : '15%'});
						}else{
							if($(window).width()>768){
								$('.menu-nav').css({'margin-left' : '0%'});
								$('.panel-cont').css({'width' : '80%','left' : '20%'});
							}else{
								if($(window).width()>640){
									$('.menu-nav').css({ 'margin-left' : '0%'});
									$('.panel-cont').css({ 'width' : '75%', 'left' : '25%'});
								}
							}
						}
					}
					open = !open;
				});
				$('.logout').click(function(){
					var namefunction = 'logOut';
					$.ajax({
						beforeSend: function(){
						},
						url: "../php/functions.php",
						type: "POST",
						data: {
							namefunction : namefunction
						},
						success: function(result){
							location.reload();
						},
						error: function(error){
						},
						complete: function(){
						},
						timeout: 10000
					});
				});
			}
		};
	})
	.directive('menuNav', function(){
		return{
			restrict: 'E',
			templateUrl: './../partials/menu-nav.php',
			controller: function($document){
				$(window).resize(function(){
					if($(window).width()>1366){
						$('.menu-nav').css({'margin-left' : '0%'});
						$('.panel-cont').css({'width' : '85%', 'left' : '15%'});
					}else{
						if($(window).width()>768){
							$('.menu-nav').css({'margin-left' : '0%'});
							$('.panel-cont').css({'width' : '80%','left' : '20%'});
						}else{
							if($(window).width()>640){
								$('.menu-nav').css({ 'margin-left' : '0%'});
								$('.panel-cont').css({ 'width' : '75%', 'left' : '25%'});
							}
						}
					}
				});
			}
		};
	})
	.directive('listSliderHome', function(){
    return {
      restrict: 'E',
      templateUrl: './../partials/list-slider-home.html',
      controller: function($document){
        $(document).on('click', '.deleteImageSlider', function(){
          var idBannerSliderHome = $(this).attr('data-id');
          var namefunction = 'removeImageSlideHome';
          $.ajax({
						url: "../php/functions.php",
					  type: "POST",
					  data: {
              namefunction: namefunction,
              idBannerSliderHome: idBannerSliderHome
            },
						success: function(result){
							location.reload();
						},
						error: function(error){
							alert(error);
						}
					});
        });
        $('#setImageForm').submit(function(){
          var ajaxData = new FormData();
    			ajaxData.append("namefunction","setBannerImage");
					ajaxData.append("data", $(this).serialize());
    			$.each($("#setImageForm input[type=file]"), function(i,obj){
    				$.each(obj.files, function(j, file){
    					ajaxData.append('setImage['+j+']', file);
    				})
    			});
          $.ajax({
            url: "../php/functions.php",
            type: "POST",
            data: ajaxData,
            processData: false,  // tell jQuery not to process the data
            contentType: false,   // tell jQuery not to set contentType
            success: function(result){
              location.reload();
            },
            error: function(error){
              alert(error);
            }
          });
        });
      }
    }
  })
	.directive('listCourseGallery', function(){
		return {
			restrict: 'E',
			templateUrl: './../partials/list-course-gallery.html',
			controller: function($document){
				$(document).on('click', '.deleteImageCourse', function(){
					var idCourseGallery = $(this).attr('data-id');
					var namefunction = 'removeCourseGallery';
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: {
							namefunction: namefunction,
							idCourseGallery: idCourseGallery
						},
						success: function(result){
							location.reload();
						},
						error: function(error){
							alert(error);
						}
					});
				});
				$('#setImageForm').submit(function(){
					var ajaxData = new FormData();
					ajaxData.append("namefunction","setCourseGalleryImage");
					$.each($("#setImageForm input[type=file]"), function(i,obj){
						$.each(obj.files, function(j, file){
							ajaxData.append('setImage['+j+']', file);
						})
					});
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: ajaxData,
						processData: false,  // tell jQuery not to process the data
						contentType: false,   // tell jQuery not to set contentType
						success: function(result){
							location.reload();
						},
						error: function(error){
							alert(error);
						}
					});
				});
			}
		}
	})
	.directive('listPlaceGallery', function(){
		return {
			restrict: 'E',
			templateUrl: './../partials/list-place-gallery.html',
			controller: function($document){
				$(document).on('click', '.deleteImagePlace', function(){
					var idPlaceGallery = $(this).attr('data-id');
					var namefunction = 'removePlaceGallery';
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: {
							namefunction: namefunction,
							idPlaceGallery: idPlaceGallery
						},
						success: function(result){
							location.reload();
						},
						error: function(error){
							alert(error);
						}
					});
				});
				$('#setImageForm').submit(function(){
					var ajaxData = new FormData();
					ajaxData.append("namefunction","setPlaceGalleryImage");
					$.each($("#setImageForm input[type=file]"), function(i,obj){
						$.each(obj.files, function(j, file){
							ajaxData.append('setImage['+j+']', file);
						})
					});
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: ajaxData,
						processData: false,  // tell jQuery not to process the data
						contentType: false,   // tell jQuery not to set contentType
						success: function(result){
							location.reload();
						},
						error: function(error){
							alert(error);
						}
					});
				});
			}
		}
	})
	.directive('contendLoadImages', function(){
		return {
			restrict: 'E',
			templateUrl: './../partials/contend-load-images.html',
			controller: function($document){
				$('#libraryImages').submit(function(){
					var ajaxData = new FormData();
					ajaxData.append("namefunction","setImagesLibrary");
					$.each($("#libraryImages input[type=file]"), function(i,obj){
						$.each(obj.files, function(j, file){
							ajaxData.append('setImage['+j+']', file);
						})
					});
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: ajaxData,
						processData: false,  // tell jQuery not to process the data
						contentType: false,   // tell jQuery not to set contentType
						success: function(result){
							$('.ocultLoadInfoImages').trigger('click');
						},
						error: function(error){
							alert(error);
						}
					});
				});
				$('.closePanel').click(function(){
					$('#blockPop').css({ 'opacity': '0', 'z-index': '-1' });
					$('#contendLoadImages').css({ 'opacity': '0', 'z-index': '-1' });
				});
				$(document).on('click', '.deleteImageLibrary', function(){
					var idImage = $(this).attr('data-id');
					var namefunction = 'removeImageGallery';
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: {
							namefunction: namefunction,
							idImage: idImage
						},
						success: function(result){
							$('.ocultLoadInfoImages').trigger('click');
						},
						error: function(error){
							alert(error);
						}
					});
				});
			}
		}
	})
	.directive('insertInterestNote', function(){
		return {
			restrict: 'E',
			templateUrl: './../partials/insert-interest-note.html',
			controller: function($document){
				$('.iconFloatClick').click(function(){
					$('#blockPop').css({ 'opacity': '1', 'z-index': '5' });
					$('#contendLoadImages').css({ 'opacity': '1', 'z-index': '10' });
				});
				$('#buttonSave').click(function(){
					$('#formAdd .formsubmit').trigger('click');
				});
				$('#formAdd').submit(function(e){
					e.preventDefault();
					var namefunction = "addNewInterestBlog";
					var data = $(this).serialize();
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: {
							namefunction: namefunction,
							data: data
						},
						success: function(result){
							location.reload();
						},
						error: function(error){
							alert(error);
						}
					});
				});
			}
		}
	})
	.directive('listInterestBlog', function(){
		return {
			restrict: 'E',
			templateUrl: './../partials/list-interest-blog.html',
			controller: function($document){
				$(document).on('click', '.deleteElement', function(){
					var idInterestBlog = $(this).attr('data-id');
					var namefunction = 'removeInterestPost';
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: {
							idInterestBlog: idInterestBlog,
							namefunction: namefunction
						},
						success: function(result){
							$('.clickoculted').trigger('click');
						},
						error: function(error){
							alert(error);
						}
					});
				});
			}
		}
	})
	.directive('editInterestNote', function(){
		return {
			restrict: 'E',
			templateUrl: './../partials/edit-interest-note.html',
			controller: function($document){
				$('.iconFloatClick').click(function(){
					$('#blockPop').css({ 'opacity': '1', 'z-index': '5' });
					$('#contendLoadImages').css({ 'opacity': '1', 'z-index': '10' });
				});
				$('#buttonSave').click(function(){
					$('#formAdd .formsubmit').trigger('click');
				});
				$('#formAdd').submit(function(e){
					e.preventDefault();
					var namefunction = "editNewInterestBlog";
					var data = $(this).serialize();
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: {
							namefunction: namefunction,
							data: data
						},
						success: function(result){
							location.reload();
						},
						error: function(error){
							alert(error);
						}
					});
				});
			}
		}
	})
	.directive('insertEventNote', function(){
		return {
			restrict: 'E',
			templateUrl: './../partials/insert-event-note.html',
			controller: function($document){
				$( "#datepicker" ).datepicker();
				$('.iconFloatClick').click(function(){
					$('#blockPop').css({ 'opacity': '1', 'z-index': '5' });
					$('#contendLoadImages').css({ 'opacity': '1', 'z-index': '10' });
				});
				$('#buttonSave').click(function(){
					$('#formAdd .formsubmit').trigger('click');
				});
				$('#formAdd').submit(function(e){
					e.preventDefault();
					var namefunction = "addNewEventBlog";
					var data = $(this).serialize();
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: {
							namefunction: namefunction,
							data: data
						},
						success: function(result){
							location.reload();
						},
						error: function(error){
							alert(error);
						}
					});
				});
				$('#datepicker').change(function(){
					var date = $(this).val();
					var dateArray = date.split("/");
					date = dateArray[2]+"-"+dateArray[0]+"-"+dateArray[1];
					$(this).val(date);
				});
			}
		}
	})
	.directive('listEventBlog', function(){
		return {
			restrict: 'E',
			templateUrl: './../partials/list-event-blog.html',
			controller: function($document){
				$(document).on('click', '.deleteElement', function(){
					var idEventBlog = $(this).attr('data-id');
					var namefunction = 'removeEventPost';
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: {
							idEventBlog: idEventBlog,
							namefunction: namefunction
						},
						success: function(result){
							$('.clickoculted').trigger('click');
						},
						error: function(error){
							alert(error);
						}
					});
				});
			}
		}
	})
	.directive('editEventNote', function(){
		return {
			restrict: 'E',
			templateUrl: './../partials/edit-event-note.html',
			controller: function($document){
				$( "#datepicker" ).datepicker();
				$('.iconFloatClick').click(function(){
					$('#blockPop').css({ 'opacity': '1', 'z-index': '5' });
					$('#contendLoadImages').css({ 'opacity': '1', 'z-index': '10' });
				});
				$('#buttonSave').click(function(){
					$('#formAdd .formsubmit').trigger('click');
				});
				$('#formAdd').submit(function(e){
					e.preventDefault();
					var namefunction = "editNewEventBlog";
					var data = $(this).serialize();
					$.ajax({
						url: "../php/functions.php",
						type: "POST",
						data: {
							namefunction: namefunction,
							data: data
						},
						success: function(result){
							location.reload();
						},
						error: function(error){
							alert(error);
						}
					});
				});
				$('#datepicker').change(function(){
					var date = $(this).val();
					var dateArray = date.split("/");
					date = dateArray[2]+"-"+dateArray[0]+"-"+dateArray[1];
					$(this).val(date);
				});
			}
		}
	})
})();
