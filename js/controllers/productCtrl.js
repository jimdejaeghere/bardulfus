app.controller("productCtrl", function ($scope, $http) {    
    $http.get('php/products/getAllProducts.php').success(function (data) {
        $scope.products = data;
    });   
});