app.controller('MainController', ['$scope','$http', function($scope, $http) { 
	$scope.title = 'Product page'; 
  	$scope.promo = 'Books';

  	$http.get("http://localhost/books.php").success(function(data){

  		$scope.products = data;

  	});	

		$scope.plusOne = function(index) { 
										  	var likesbefore = parseInt($scope.products[index].likes);
										  	var likes = likesbefore + 1;
										  	var id = $scope.products[index].id;

										  	console.log(likes);

											$scope.products[index].likes = likes;									  	
										  	$.ajax({
										  		url: "uploadlikes.php",
										  		type: "POST",
										  		data: {id: id, likes: likes},
										  		dataType: "json"
										  	});
										};

		$scope.minusOne = function(index) { 
										  	var dislikesbefore = parseInt($scope.products[index].dislikes);
										  	var dislikes = dislikesbefore + 1;
										  	var id = $scope.products[index].id;

										  	console.log(dislikes);

											$scope.products[index].dislikes = dislikes;									  	
										  	$.ajax({
										  		url: "uploaddislikes.php",
										  		type: "POST",
										  		data: {id: id, dislikes: dislikes},
										  		dataType: "json"
										  	});
										};
}]);