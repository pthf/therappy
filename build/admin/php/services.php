<?php
  require_once('./connect.php');
  class Services extends Connect{
    function __construct($nameObject){
      $this->$nameObject();
    }
    private function getImagesSliderHome(){
      $query = "SELECT * FROM bannersliderhome ORDER BY idBannerSliderHome DESC";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
      $listImages = array();
      while($line = mysql_fetch_array($result)){
        $listImages[] = array(
          'idBannerSliderHome' => $line['idBannerSliderHome'],
          'ulrBanner' => $line['ulrBanner'],
          'imageBanner' => $line['imageBanner']
        );
      }
      print_r(json_encode($listImages));
    }
    private function getImagesCourseGallery(){
      $query = "SELECT * FROM coursegallery ORDER BY idCourseGallery DESC";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
      $listImages = array();
      while($line = mysql_fetch_array($result)){
        $listImages[] = array(
          'idCourseGallery' => $line['idCourseGallery'],
          'imageCourseGallery' => $line['imageCourseGallery'],
        );
      }
      print_r(json_encode($listImages));
    }
    private function getImagesPlaceGallery(){
      $query = "SELECT * FROM placegallery ORDER BY idPlaceGallery DESC";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
      $listImages = array();
      while($line = mysql_fetch_array($result)){
        $listImages[] = array(
          'idPlaceGallery' => $line['idPlaceGallery'],
          'imagePlaceGallery' => $line['imagePlaceGallery'],
        );
      }
      print_r(json_encode($listImages));
    }
    private function getImagesLibrary(){
      $query = "SELECT * FROM imagesLibrary ORDER BY idImage ASC";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
      $listImages = array();
      while($line = mysql_fetch_array($result)){
        $listImages[] = array(
          'idImage' => $line['idImage'],
          'nameImage' => $line['nameImage'],
        );
      }
      print_r(json_encode($listImages));
    }
    private function getListInterestBlog(){
      $query = "SELECT * FROM interestblog ORDER BY idInterestBlog DESC";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
      $listInterestBlog = array();
      while($line = mysql_fetch_array($result)){
        $listInterestBlog[] = array(
          'idInterestBlog' => $line['idInterestBlog'],
          'blogName' => $line['blogName'],
          'blogDate' => $line['blogDate'],
          'blogCover' => $line['blogCover'],
          'blogShortDescription' => $line['blogShortDescription'],
          'blogDocument' => $line['blogDocument']
        );
      }
      print_r(json_encode($listInterestBlog));
    }
    private function getInformationPost(){
      $query = "SELECT * FROM interestblog WHERE idInterestBlog = ".$_GET['id'];
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
      $line = mysql_fetch_array($result);
      $informationPost = array();
      $informationPost[] = array(
        'idInterestBlog' => $line['idInterestBlog'],
        'blogName' => $line['blogName'],
        'blogDate' => $line['blogDate'],
        'blogCover' => $line['blogCover'],
        'blogShortDescription' => $line['blogShortDescription'],
        'blogDocument' => $line['blogDocument']
      );
      print_r(json_encode($informationPost));
    }
    private function getListEventBlog(){
      $query = "SELECT * FROM eventblog ORDER BY idEventBlog DESC";
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
      $listEventBlog = array();
      while($line = mysql_fetch_array($result)){
        $listEventBlog[] = array(
          'idEventBlog' => $line['idEventBlog'],
          'blogName' => $line['blogName'],
          'blogDate' => $line['blogDate'],
          'blogHours' => $line['blogHours'],
          'blogCover' => $line['blogCover'],
          'blogShortDescription' => $line['blogShortDescription'],
          'blogDocument' => $line['blogDocument']
        );
      }
      print_r(json_encode($listEventBlog));
    }
    private function getInformationEventPost(){
      $query = "SELECT * FROM eventblog WHERE idEventBlog = ".$_GET['id'];
      $result = mysql_query($query, $this->connection()) or die(mysql_error());
      $line = mysql_fetch_array($result);
      $informationPost = array();
      $informationPost[] = array(
        'idEventBlog' => $line['idEventBlog'],
        'blogName' => $line['blogName'],
        'blogDate' => $line['blogDate'],
        'blogHours' => $line['blogHours'],
        'blogCover' => $line['blogCover'],
        'blogShortDescription' => $line['blogShortDescription'],
        'blogDocument' => $line['blogDocument']
      );
      print_r(json_encode($informationPost));
    }
  }
  $nameObject = $_GET['namefunction'];
  new Services($nameObject);
