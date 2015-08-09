<?php
    session_start();
    if(empty($_SESSION['myusername'])){
        header("location:indexa.php");
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bardulfus: Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./../css/bootstrap-theme.css" rel="stylesheet" />
    <link href="./../css/bootstrap.css" rel="stylesheet" />
	<link href="./../css/admin.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.1.js"></script>
    <script src="./../js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="./../js/app.js"></script>
    <script src="./../js/controllers/navigationCtrl.js"></script>
    <script src="./../js/controllers/productCtrl.js"></script>
	<script src="./../js/controllers/bannerCtrl.js"></script>
    <script src="./../js/controllers/uploadCtrl.js"></script>
</head>
<body ng-app="bardulfusApp" ng-controller="navigationCtrl">
    <div class="container container-fluid">

        <div class="row">
            <div class="col-xs-12">
                <h1>Bardulfus Admin</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" ng-click="change('../partials/categories.html')">Categories</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" ng-click="change('../partials/products.html')">Products</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" ng-click="change('../partials/banners.html')">Banner</button>
                    </div>
					<div class="btn-group" role="group">
                        <a href="./php/logout.php"><button type="button" class="btn btn-default">Logout</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div ng-include="url"></div>
            </div>
        </div>

    </div>
    <script src="./../js/vendor/jquery-1.11.2.min.js"></script>
    <script src="./../js/bootstrap.js"></script>
</body>
</html>