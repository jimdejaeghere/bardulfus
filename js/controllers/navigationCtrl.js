app.controller("navigationCtrl", function ($scope, $http) {

    $scope.url = './partials/categories.html';


    $http.get('./php/navigation/categorieCount.php').success(function (data) {
        $scope.categories = data;
    });

    $scope.delete = function (idx) {
        var id_to_delete = $scope.categories[idx].CategoriesID;

        $http.get('./php/navigation/deleteCategorie.php?id=' + id_to_delete).success(function (data) {
            $scope.categories.splice(idx, 1);
        });
    };

    $scope.insert = function () {

        $http.get('./php/navigation/addCategorie.php?newCategorie=' + $scope.newCategorie).success(function (data) {

            var newId = data;

            $scope.categories.push({ "CategoriesID": newId, "CategorieName": $scope.newCategorie, "Counted": 0 });
            
            $scope.newCategorie = null;
        });
    };
    
    $scope.change = function (newUrl) {
        $scope.url = newUrl;
    }

});