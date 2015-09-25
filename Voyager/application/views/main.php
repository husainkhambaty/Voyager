<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--  
 Name : Voyager
 Author: Husain Khambaty
 Author URL: http://www.husainkhambaty.com
 Description: This app will help to map all the places you've visited to visualize a global presence. 
 You can add geo-locations and share with friends. 
 -->
<html lang="en">
	<head>
		<!-- Bootstrap core CSS -->
	    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!--  jQuery Framework and Bootstrap JS -->
	    <script src="assets/js/jquery-1.11.2.min.js"></script>
	    <script src="assets/js/bootstrap.min.js"></script>
	    
	    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD6o9JseUyu_k89VNYBNlc2Zd4ssbMW1nc"></script>
	    
	    <script src="assets/js/voyager.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    <script type="text/javascript">
	    	
	    </script>
		
	</head>
	<body>
		
		
		<div classs="row">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Voyager</a>
				    </div>
				
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      
				      <form class="navbar-form navbar-right" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search Trip">
				        </div>
				        <button type="submit" class="btn btn-default">Search</button>
				      </form>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">Your Trips</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#" id="btnAddTrip">Add Trip</a></li>
				            <li><a href="#" id="btnAddPerson">Add Person</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#" id="btnViewSettings">Settings</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="googleMap" style=""></div>
			</div>
		</div>
		
		
		<script type="text/javascript">
			//initMap();
			
			$(document).ready(function() {
				google.maps.event.addDomListener(window, 'load', initialize);

				$("#mark").click(function() {
					testMarker();
				});

				
					
			}); 
		</script>
		
	</body>
</html>