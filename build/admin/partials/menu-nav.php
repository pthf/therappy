<?php
  session_start();
  include('../php/connect.php');
  $query = "SELECT * FROM adminuser WHERE idAdmin = ".$_SESSION['idAdmin'];
  $result = mysql_query($query,connect::connection()) or die(mysql_error());
  $line = mysql_fetch_array($result);
?>
<div class="logoNav">
	<img src="./../src/images/logo-therappy.png">
</div>
<div class="msgWelcome" style="width: 90%; height: auto; text-align: center; color: #FFF;" >
	<h5 style="display: inline-block; "><span style="color: #2fc1c1 !important;">Welcome <strong><?= $line['adminName'] ?></span></strong>
</div>
<div class="menuNav" ng-controller="menuNavController">
	<div class="row">
		<div class="col-md-12">
      <ul class="nav nav-pills nav-stacked">
  			<li style="background: #2fc1c1; color: #fff;" role="presentation" ng-class="{active:selected===1}" ng-click="changeNav(1)"><a href="#/slider-home" style="color: #fff;"><span class="glyphicon glyphicon-briefcase" ></span>Slider Home</a></li>
        <li style="background: #2fc1c1; color: #fff;" role="presentation" ng-class="{active:selected===2}" ng-click="changeNav(2)"><a href="#/course-gallery" style="color: #fff;"><span class="glyphicon glyphicon-briefcase" ></span>Course Gallery</a></li>
        <li style="background: #2fc1c1; color: #fff;" role="presentation" ng-class="{active:selected===3}" ng-click="changeNav(3)"><a href="#/place-gallery" style="color: #fff;"><span class="glyphicon glyphicon-briefcase" ></span>Place Gallery</a></li>
        <li style="background: #2fc1c1; color: #fff;" role="presentation" ng-class="{active:selected===4}" ng-click="changeNav(4)"><a href="#/interest-blog" style="color: #fff;"><span class="glyphicon glyphicon-briefcase" ></span>Interest Blog</a></li>
        <li style="background: #2fc1c1; color: #fff;" role="presentation" ng-class="{active:selected===5}" ng-click="changeNav(5)"><a href="#/event-blog" style="color: #fff;"><span class="glyphicon glyphicon-briefcase" ></span>Event Blog</a></li>
  		</ul>
		</div>
	</div>
</div>
