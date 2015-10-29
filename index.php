<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">	
		<link rel="stylesheet" href="css/style.css">
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="container">
				<h1>Book End</h1>
			</div>
		</div>

		<div class="main" ng-controller="MainController">
			<div class="container">
				
				<h1> {{ title }} </h1>
				<h2> {{ promo }} </h2>

				<div ng-repeat="product in products" class="col-md-6"> 
				  <div class="thumbnail"> 
				    <img ng-src="{{ product.cover }}"> 
				    <p class="title">{{ product.name }}</p> 
				    <p class="price">{{ product.price | currency }}</p> 
				    <p class="date">{{ product.date | date }}</p>
				    <div class="rating"> 
						  <p class="likes" ng-click="plusOne($index)">
						  		+ {{ product.likes }}
						  </p>
						  <p class="dislikes" ng-click="minusOne($index)">
						  		- {{ product.dislikes }}
						  </p>
						</div>
				  </div> 
				</div>				

			</div>
		</div>
		<!--SCRIPTS-->
		<script src="js/app.js"></script>
		<script src="js/controllers/MainController.js"></script>		
	</body>
</html>