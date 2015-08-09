app.controller("homeCtrl", function ($scope, $http) {
        $http.get('./php/banners/getAllActiveBanners.php').success(function (data) {
        $scope.slides = data;
    });
});