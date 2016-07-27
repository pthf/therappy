<?php
  require_once('./connect.php');
  class Functions extends Connect{
    function __construct($nameObject){
      $this->$nameObject();
    }
    private function getNameImage($dataFiles, $key){
      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 6; $i++)
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      $ext = end((explode(".", $dataFiles["setImage"]["name"][$key])));
      $fileName = date("YmdHis").$randomString.".".$ext;
      return $fileName;
    }
    private function setBannerImage(){
      parse_str($_POST['data'], $data);
      $urlBanner =  $data['imageURL'];
      foreach ($_FILES['setImage']["name"] as $key => $value) {
        $fileName = $this->getNameImage($_FILES, $key);
        $fileType = $_FILES["setImage"]["type"][$key];
        $fileTemp = $_FILES["setImage"]["tmp_name"][$key];
        move_uploaded_file($fileTemp, "../src/images/bannersHome/".$fileName);
  			$query = "INSERT INTO  bannersliderhome (idBannerSliderHome, ulrBanner, imageBanner) VALUES (NULL,'".$urlBanner."','".$fileName."')";
  			$result = mysql_query($query, $this->connection()) or die(mysql_error());
  		}
    }
    private function removeImageSlideHome(){
      $idBannerSliderHome = $_POST['idBannerSliderHome'];
      $query = "SELECT imageBanner FROM bannersliderhome WHERE idBannerSliderHome =".$idBannerSliderHome;
      $result = mysql_query($query, $this->connection());
      $line = mysql_fetch_array($result);
      $imageBanner = $line['imageBanner'];
      unlink("../src/images/bannersHome/".$imageBanner);
      $query = "DELETE FROM bannersliderhome WHERE idBannerSliderHome = ".$idBannerSliderHome;
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
    }
    private function setCourseGalleryImage(){
      foreach ($_FILES['setImage']["name"] as $key => $value) {
        $fileName = $this->getNameImage($_FILES, $key);
        $fileType = $_FILES["setImage"]["type"][$key];
        $fileTemp = $_FILES["setImage"]["tmp_name"][$key];
        move_uploaded_file($fileTemp, "../src/images/courseGallery/".$fileName);
  			$query = "INSERT INTO  coursegallery (idCourseGallery, imageCourseGallery) VALUES (NULL,'".$fileName."')";
  			$result = mysql_query($query, $this->connection()) or die(mysql_error());
  		}
    }
    private function removeCourseGallery(){
      $idCourseGallery = $_POST['idCourseGallery'];
      $query = "SELECT imageCourseGallery FROM coursegallery WHERE idCourseGallery =".$idCourseGallery;
      $result = mysql_query($query, $this->connection());
      $line = mysql_fetch_array($result);
      $imageCourseGallery = $line['imageCourseGallery'];
      unlink("../src/images/courseGallery/".$imageCourseGallery);
      $query = "DELETE FROM coursegallery WHERE idCourseGallery = ".$idCourseGallery;
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
    }
    private function setPlaceGalleryImage(){
      foreach ($_FILES['setImage']["name"] as $key => $value) {
        $fileName = $this->getNameImage($_FILES, $key);
        $fileType = $_FILES["setImage"]["type"][$key];
        $fileTemp = $_FILES["setImage"]["tmp_name"][$key];
        move_uploaded_file($fileTemp, "../src/images/placeGallery/".$fileName);
        $query = "INSERT INTO  placegallery (idPlaceGallery, imagePlaceGallery) VALUES (NULL,'".$fileName."')";
        $result = mysql_query($query, $this->connection()) or die(mysql_error());
      }
    }
    private function removePlaceGallery(){
      $idPlaceGallery = $_POST['idPlaceGallery'];
      $query = "SELECT imagePlaceGallery FROM placegallery WHERE idPlaceGallery =".$idPlaceGallery;
      $result = mysql_query($query, $this->connection());
      $line = mysql_fetch_array($result);
      $imagePlaceGallery = $line['imagePlaceGallery'];
      unlink("../src/images/placeGallery/".$imagePlaceGallery);
      $query = "DELETE FROM placegallery WHERE idPlaceGallery = ".$idPlaceGallery;
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
    }
    private function setImagesLibrary(){
      foreach ($_FILES['setImage']["name"] as $key => $value) {
        $fileName = $this->getNameImage($_FILES, $key);
        $fileType = $_FILES["setImage"]["type"][$key];
        $fileTemp = $_FILES["setImage"]["tmp_name"][$key];
        move_uploaded_file($fileTemp, "../src/images/document/".$fileName);
        $query = "INSERT INTO  imagesLibrary (idImage, nameImage) VALUES (NULL,'".$fileName."')";
        $result = mysql_query($query, $this->connection()) or die(mysql_error());
      }
    }
    private function removeImageGallery(){
      $idImage = $_POST['idImage'];
      $query = "SELECT nameImage FROM imagesLibrary WHERE idImage =".$idImage;
      $result = mysql_query($query, $this->connection());
      $line = mysql_fetch_array($result);
      $nameImage = $line['nameImage'];
      unlink("../src/images/document/".$nameImage);
      $query = "DELETE FROM imagesLibrary WHERE idImage = ".$idImage;
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
    }
    private function addNewInterestBlog(){
      parse_str($_POST['data'], $data);
      $name = $data['name'];
      $description = $data['description'];
      $cover = $data['cover'];
      $post = $data['post'];
      $date = Date('Y-m-d');
      $query = "INSERT INTO interestblog (blogName, blogDate, blogCover, blogShortDescription, blogDocument) VALUES ('$name', '$date', '$cover', '$description', '$post')";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
    }
    private function removeInterestPost(){
      $idInterestBlog = $_POST['idInterestBlog'];
      $query = "DELETE FROM interestblog WHERE idInterestBlog = $idInterestBlog";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
    }
    private function editNewInterestBlog(){
      parse_str($_POST['data'], $data);
      $id = $data['id'];
      $name = $data['name'];
      $description = $data['description'];
      $cover = $data['cover'];
      $post = $data['post'];
      $query = "UPDATE interestblog SET blogName = '$name', blogCover = '$cover', blogShortDescription = '$description', blogDocument = '$post' WHERE  idInterestBlog = $id";
      $result = mysql_query($query, $this->connection());
    }
    private function addNewEventBlog(){
      echo "string";
      parse_str($_POST['data'], $data);
      $name = $data['name'];
      $schedule = $data['schedule'];
      $description = $data['description'];
      $cover = $data['cover'];
      $post = $data['post'];
      $date =  $data['date'];
      $query = "INSERT INTO eventblog (blogName, blogDate, blogHours, blogCover, blogShortDescription, blogDocument) VALUES ('$name', '$date', '$schedule', '$cover', '$description', '$post')";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
    }
    private function removeEventPost(){
      $idEventBlog = $_POST['idEventBlog'];
      $query = "DELETE FROM eventblog WHERE idEventBlog = $idEventBlog";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
    }
    private function editNewEventBlog(){
      parse_str($_POST['data'], $data);
      $id = $data['id'];
      $name = $data['name'];
      $date = $data['date'];
      $schedule = $data['schedule'];
      $description = $data['description'];
      $cover = $data['cover'];
      $post = $data['post'];
      $query = "UPDATE eventblog SET blogName = '$name', blogDate = '$date', blogHours = '$schedule', blogCover = '$cover', blogShortDescription = '$description', blogDocument = '$post' WHERE  idEventBlog = $id";
      $result = mysql_query($query, $this->connection());
    }
  }
  $nameObject = $_POST['namefunction'];
  new Functions($nameObject);
