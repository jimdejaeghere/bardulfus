app.controller("bannerCtrl", function ($scope, $http) {
    
    $http.get('./php/banners/getAllBanners.php').success(function (data) {
        $scope.banners = data;
    });

    $scope.change = function (idx) {
        var id_to_update = $scope.banners[idx].BannerID;
        var id_active = parseInt($scope.banners[idx].BannerActive);

        $http.get('./php/banners/updateBanner.php?id=' + id_to_update + '&active=' + id_active).success(function (data) {

        });
    };    
});